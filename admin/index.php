<?php
require __DIR__ . '/../config.php';
require __DIR__ . '/../includes/auth.php';
require __DIR__ . '/../includes/upload.php';
require_login();

$q = trim($_GET['q'] ?? '');
if ($q !== '') {
    $stmt = db()->prepare('SELECT l.*, loc.kota, loc.alamat, loc.maps_link FROM lahan l LEFT JOIN location loc ON loc.lahan_id = l.id WHERE l.lokasi LIKE ? OR l.prov LIKE ? OR l.produk LIKE ? OR loc.kota LIKE ? ORDER BY l.id DESC');
    $like = '%' . $q . '%';
    $stmt->execute([$like, $like, $like, $like]);
} else {
    $stmt = db()->query('SELECT l.*, loc.kota, loc.alamat, loc.maps_link FROM lahan l LEFT JOIN location loc ON loc.lahan_id = l.id ORDER BY l.id DESC');
}
$rows = $stmt->fetchAll();

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kelola Lahan — Backend Perumnas Business Solution</title>
<?php include __DIR__ . '/_style.php'; ?>
</head>
<body>
<div class="topbar">
  <div class="logo"><div class="logo-m">PBS</div>Perumnas Business Solution</div>
  <nav><a class="on" href="index.php">Data Lahan</a><a href="../database/migrate.php">Migrasi Database</a></nav>
  <div class="r">
    Halo, <?= e($_SESSION['user_nama'] ?? '') ?>
    &middot; <a href="../index.php" style="color:#fff">Lihat Katalog</a>
    &middot; <a href="logout.php" style="color:#fff">Logout</a>
  </div>
</div>
<div class="wrap">
  <h1>Data Lahan</h1>
  <p class="sub">Kelola data lahan yang tampil pada katalog publik.</p>

  <?php if ($flash): ?><div class="flash <?= e($flash['type']) ?>"><?= e($flash['msg']) ?></div><?php endif; ?>

  <div class="toolbar">
    <form method="get" style="display:flex;gap:8px">
      <input type="text" name="q" value="<?= e($q) ?>" placeholder="Cari lokasi / provinsi / produk..." style="min-width:260px">
      <button class="btn" type="submit">Cari</button>
    </form>
    <a class="btn btn-t" href="form.php">+ Tambah Lahan</a>
  </div>

  <div class="card" style="overflow-x:auto">
    <?php if (!$rows): ?>
      <div class="empty">Belum ada data lahan.</div>
    <?php else: ?>
    <table>
      <thead>
        <tr>
          <th>Foto</th><th>Lokasi</th><th>Kota/Kab.</th><th>Provinsi</th><th>Pulau</th><th>Luas (Ha)</th><th>Produk</th><th>Nilai (Rp)</th><th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rows as $r): ?>
        <tr>
          <td>
            <?php if (!empty($r['foto'])): ?>
              <img src="<?= e(foto_url($r['foto'])) ?>" alt="" style="width:56px;height:40px;object-fit:cover;border-radius:6px;border:1px solid var(--line)">
            <?php else: ?>
              <div style="width:56px;height:40px;border-radius:6px;background:var(--bg);border:1px dashed var(--line);display:flex;align-items:center;justify-content:center;font-size:9.5px;color:var(--muted)">tanpa foto</div>
            <?php endif; ?>
          </td>
          <td><strong><?= e($r['lokasi']) ?></strong></td>
          <td><?= e($r['kota'] ?? '—') ?></td>
          <td><?= e($r['prov']) ?></td>
          <td><?= e($r['pulau']) ?></td>
          <td><?= number_format((float)$r['ha'], 2, ',', '.') ?></td>
          <td><?= e($r['produk']) ?></td>
          <td><?= number_format((float)$r['nilai'], 0, ',', '.') ?></td>
          <td class="actions">
            <a class="btn btn-sm" href="form.php?id=<?= (int)$r['id'] ?>">Edit</a>
            <form method="post" action="delete.php" onsubmit="return confirm('Hapus lahan &quot;<?= e($r['lokasi']) ?>&quot;? Tindakan ini tidak bisa dibatalkan.');" style="display:inline">
              <input type="hidden" name="id" value="<?= (int)$r['id'] ?>">
              <button class="btn btn-sm btn-r" type="submit">Hapus</button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <?php endif; ?>
  </div>
</div>
</body>
</html>
