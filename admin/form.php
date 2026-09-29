<?php
require __DIR__ . '/../config.php';
require __DIR__ . '/../includes/auth.php';
require __DIR__ . '/../includes/upload.php';
require_login();

const FOTO_SLOTS = [
    'foto'         => 'Tampak Udara',
    'foto_batas'   => 'Batas Lahan',
    'foto_akses'   => 'Akses Jalan',
    'foto_sekitar' => 'Sekitar Lokasi',
];

const PULAU_OPTIONS = [
    'Jawa', 'Sumatera', 'Kalimantan', 'Sulawesi',
    'Bali-Nusra', 'Maluku', 'Papua', 'Nusa Tenggara'
];

const PRODUK_OPTIONS = [
    'Rumah Subsidi FLPP',
    'Perumahan Komersial Tapak',
    'Ruko / Komersial Strip',
    'Mixed-Use Komersial',
    'Apartemen / Rusun TOD',
    'Gudang & Logistik Modern',
    'Kawasan Industri / Pabrik',
    'Kos-Kosan / Hunian Sewa',
    'Kavling Matang / Tanah Investasi',
    'Gerai Ritel Tunggal (Minimarket/Klinik/SPBU)',
    'Agribisnis / Perkebunan',
];

const POI_CATEGORY_OPTIONS = [
    'Transportasi',
    'Industri & Logistik',
    'Komersial',
    'Pendidikan',
    'Permukiman',
    'Pemerintahan',
    'Wisata',
    'Kesehatan',
];

const POI_CAKUPAN_OPTIONS = [
    'kawasan sama',
    'koridor sama',
    'kota sama',
    'kabupaten sama',
    'provinsi sama',
    'sekitar',
];

$id = isset($_GET['id']) ? (int)$_GET['id'] : (int)($_POST['id'] ?? 0);

$data = [
    'pulau'     => '',
    'lokasi'    => '',
    'kota'      => '',
    'luas_m2'   => '',
    'ha'        => '',
    'znt'       => '',
    'nilai'     => '',
    'konteks'   => '',
    'produk'    => '',
    'alt'       => '',
    'alasan'    => '',
    'kapasitas' => '',
    'prov'      => '',
    'alamat'    => '',
    'maps_link' => '',
];

$existingFotos = array_fill_keys(array_keys(FOTO_SLOTS), null);
$existingPoi = [];
$errors = [];

// ------------------------------------------------------------
// MASTER DROPDOWN DARI DATABASE LOCATION
// ------------------------------------------------------------
$locationRows = db()->query(
    'SELECT provinsi, kota FROM location ORDER BY provinsi ASC, kota ASC'
)->fetchAll();

$provinceOptions = [];
$citiesByProvince = [];
foreach ($locationRows as $r) {
    $prov = trim((string)$r['provinsi']);
    $kota = trim((string)$r['kota']);
    if ($prov === '') continue;
    $provinceOptions[$prov] = true;
    if ($kota !== '') {
        $citiesByProvince[$prov][$kota] = true;
    }
}
$provinceOptions = array_keys($provinceOptions);
sort($provinceOptions, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($citiesByProvince as $prov => $cities) {
    $citiesByProvince[$prov] = array_keys($cities);
    sort($citiesByProvince[$prov], SORT_NATURAL | SORT_FLAG_CASE);
}

// ------------------------------------------------------------
// EDIT: AMBIL LAHAN + LOCATION + POI
// ------------------------------------------------------------
if ($id > 0 && $_SERVER['REQUEST_METHOD'] !== 'POST') {
    $stmt = db()->prepare('SELECT * FROM lahan WHERE id = ? LIMIT 1');
    $stmt->execute([$id]);
    $row = $stmt->fetch();

    if (!$row) {
        $_SESSION['flash'] = ['type' => 'err', 'msg' => 'Data lahan tidak ditemukan.'];
        header('Location: index.php');
        exit;
    }

    foreach (FOTO_SLOTS as $col => $label) {
        $existingFotos[$col] = $row[$col] ?? null;
        unset($row[$col]);
    }

    $stmtLoc = db()->prepare('SELECT * FROM location WHERE lahan_id = ? LIMIT 1');
    $stmtLoc->execute([$id]);
    $location = $stmtLoc->fetch();

    if ($location) {
        $row['prov'] = $location['provinsi'];
        $row['kota'] = $location['kota'];
        $row['alamat'] = $location['alamat'];
        $row['maps_link'] = $location['maps_link'];
    }

    $data = array_merge($data, $row);

    $stmtPoi = db()->prepare(
        'SELECT id, nama, kategori, deskripsi, cakupan, jarak_km, waktu_menit
         FROM lahan_poi WHERE lahan_id = ? ORDER BY id ASC'
    );
    $stmtPoi->execute([$id]);
    $existingPoi = $stmtPoi->fetchAll();
}

// ------------------------------------------------------------
// POST
// ------------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($data as $k => $v) {
        $data[$k] = trim((string)($_POST[$k] ?? ''));
    }

    if ($id > 0) {
        $stmt = db()->prepare('SELECT foto, foto_batas, foto_akses, foto_sekitar FROM lahan WHERE id = ?');
        $stmt->execute([$id]);
        $row = $stmt->fetch() ?: [];
        foreach (FOTO_SLOTS as $col => $label) {
            $existingFotos[$col] = $row[$col] ?? null;
        }
    }

    if ($data['lokasi'] === '') $errors[] = 'Lokasi wajib diisi.';
    if ($data['prov'] === '') $errors[] = 'Provinsi wajib dipilih.';
    if ($data['kota'] === '') $errors[] = 'Kota/Kabupaten wajib dipilih.';
    if ($data['pulau'] === '') $errors[] = 'Pulau wajib dipilih.';
    if ($data['produk'] === '') $errors[] = 'Produk wajib dipilih.';

    if ($data['produk'] !== '' && !in_array($data['produk'], PRODUK_OPTIONS, true)) {
        $errors[] = 'Produk tidak tersedia di daftar produk.';
    }
    if ($data['prov'] !== '' && !in_array($data['prov'], $provinceOptions, true)) {
        $errors[] = 'Provinsi harus dipilih dari data master location.';
    }
    if ($data['kota'] !== '' && !in_array($data['kota'], $citiesByProvince[$data['prov']] ?? [], true)) {
        $errors[] = 'Kota/Kabupaten tidak sesuai dengan provinsi yang dipilih.';
    }

    foreach ([
        'luas_m2' => 'Luas (m²)',
        'ha' => 'Luas (Ha)',
        'znt' => 'ZNT',
        'nilai' => 'Nilai aset',
    ] as $field => $label) {
        if ($data[$field] !== '' && !is_numeric($data[$field])) {
            $errors[] = $label . ' harus berupa angka.';
        }
    }

    // --------------------------------------------------------
    // POI
    // --------------------------------------------------------
    $poiNama = $_POST['poi_nama'] ?? [];
    $poiKategori = $_POST['poi_kategori'] ?? [];
    $poiDeskripsi = $_POST['poi_deskripsi'] ?? [];
    $poiCakupan = $_POST['poi_cakupan'] ?? [];
    $poiJarak = $_POST['poi_jarak_km'] ?? [];
    $poiWaktu = $_POST['poi_waktu_menit'] ?? [];
    $poiData = [];

    foreach ($poiNama as $i => $nama) {
        $nama = trim((string)$nama);
        $kategori = trim((string)($poiKategori[$i] ?? ''));
        if ($nama === '') continue;

        if (!in_array($kategori, POI_CATEGORY_OPTIONS, true)) {
            $errors[] = 'Kategori POI untuk "' . $nama . '" tidak valid.';
            continue;
        }

        $cakupan = trim((string)($poiCakupan[$i] ?? 'sekitar'));
        if ($cakupan !== '' && !in_array($cakupan, POI_CAKUPAN_OPTIONS, true)) {
            $errors[] = 'Cakupan POI untuk "' . $nama . '" tidak valid.';
            continue;
        }

        $jarak = trim((string)($poiJarak[$i] ?? ''));
        $waktu = trim((string)($poiWaktu[$i] ?? ''));

        if ($jarak !== '' && (!is_numeric($jarak) || (float)$jarak < 0)) {
            $errors[] = 'Jarak POI untuk "' . $nama . '" harus berupa angka positif.';
        }
        if ($waktu !== '' && (!ctype_digit($waktu) || (int)$waktu < 0)) {
            $errors[] = 'Waktu tempuh POI untuk "' . $nama . '" harus berupa menit.';
        }

        $poiData[] = [
            'nama' => $nama,
            'kategori' => $kategori,
            'deskripsi' => trim((string)($poiDeskripsi[$i] ?? '')),
            'cakupan' => $cakupan,
            'jarak_km' => $jarak === '' ? null : (float)$jarak,
            'waktu_menit' => $waktu === '' ? null : (int)$waktu,
        ];
    }

    // --------------------------------------------------------
    // FOTO
    // --------------------------------------------------------
    $newFotos = [];
    foreach (FOTO_SLOTS as $col => $label) {
        if ($errors) break;
        try {
            $newFotos[$col] = handle_foto_upload($_FILES[$col] ?? []);
        } catch (RuntimeException $e) {
            $errors[] = $label . ': ' . $e->getMessage();
        }
    }

    if (!$errors) {
        $finalFotos = $existingFotos;
        foreach (FOTO_SLOTS as $col => $label) {
            if (!empty($newFotos[$col])) {
                delete_foto_file($existingFotos[$col]);
                $finalFotos[$col] = $newFotos[$col];
            } elseif (isset($_POST['remove_' . $col])) {
                delete_foto_file($existingFotos[$col]);
                $finalFotos[$col] = null;
            }
        }

        try {
            db()->beginTransaction();

            $fotoCols = array_keys(FOTO_SLOTS);
            $params = [
                $data['pulau'],
                $data['lokasi'],
                (float)($data['luas_m2'] ?: 0),
                (float)($data['ha'] ?: 0),
                (int)($data['znt'] ?: 0),
                (float)($data['nilai'] ?: 0),
                $data['konteks'],
                $data['produk'],
                $data['alt'],
                $data['alasan'],
                $data['kapasitas'],
                $data['prov'],
                ...array_values($finalFotos),
            ];

            if ($id > 0) {
                $set = 'pulau=?, lokasi=?, luas_m2=?, ha=?, znt=?, nilai=?, konteks=?, produk=?, alt=?, alasan=?, kapasitas=?, prov=?, '
                    . implode(',', array_map(fn($c) => "$c=?", $fotoCols));
                $stmt = db()->prepare("UPDATE lahan SET $set WHERE id=?");
                $stmt->execute([...$params, $id]);
            } else {
                $cols = 'pulau, lokasi, luas_m2, ha, znt, nilai, konteks, produk, alt, alasan, kapasitas, prov, '
                    . implode(',', $fotoCols);
                $placeholders = implode(',', array_fill(0, count($params), '?'));
                $stmt = db()->prepare("INSERT INTO lahan ($cols) VALUES ($placeholders)");
                $stmt->execute($params);
                $id = (int)db()->lastInsertId();
            }

            // ------------------------------------------------
            // LOCATION: satu-satunya sumber alamat/kota/provinsi
            // ------------------------------------------------
            $currentLocation = null;
            if ($id > 0) {
                $stmt = db()->prepare('SELECT * FROM location WHERE lahan_id = ? LIMIT 1');
                $stmt->execute([$id]);
                $currentLocation = $stmt->fetch() ?: null;
            }

            // Jika provinsi/kota baru dipilih, ambil metadata analisis
            // dari location lain yang memiliki kombinasi sama.
            $analysisSource = null;
            if (!$currentLocation || $currentLocation['provinsi'] !== $data['prov'] || $currentLocation['kota'] !== $data['kota']) {
                $stmt = db()->prepare(
                    'SELECT * FROM location
                     WHERE provinsi = ? AND kota = ? AND lahan_id <> ?
                     ORDER BY id ASC LIMIT 1'
                );
                $stmt->execute([$data['prov'], $data['kota'], $id]);
                $analysisSource = $stmt->fetch() ?: null;
            }

            $base = $analysisSource ?: $currentLocation ?: [];

            $upsertLocation = db()->prepare("
                INSERT INTO location (
                    lahan_id, provinsi, kota, alamat, maps_link,
                    kota_populasi_juta, kota_umk, kota_vp, kota_vu, kota_catatan,
                    prov_populasi_juta, prov_v, prov_tier, prov_development, prov_development_level
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
                ON DUPLICATE KEY UPDATE
                    provinsi=VALUES(provinsi),
                    kota=VALUES(kota),
                    alamat=VALUES(alamat),
                    maps_link=VALUES(maps_link),
                    kota_populasi_juta=VALUES(kota_populasi_juta),
                    kota_umk=VALUES(kota_umk),
                    kota_vp=VALUES(kota_vp),
                    kota_vu=VALUES(kota_vu),
                    kota_catatan=VALUES(kota_catatan),
                    prov_populasi_juta=VALUES(prov_populasi_juta),
                    prov_v=VALUES(prov_v),
                    prov_tier=VALUES(prov_tier),
                    prov_development=VALUES(prov_development),
                    prov_development_level=VALUES(prov_development_level)
            ");

            $upsertLocation->execute([
                $id,
                $data['prov'],
                $data['kota'],
                $data['alamat'] !== '' ? $data['alamat'] : null,
                $data['maps_link'] !== '' ? $data['maps_link'] : null,
                $base['kota_populasi_juta'] ?? null,
                $base['kota_umk'] ?? null,
                (int)($base['kota_vp'] ?? 0),
                (int)($base['kota_vu'] ?? 0),
                $base['kota_catatan'] ?? null,
                $base['prov_populasi_juta'] ?? null,
                (int)($base['prov_v'] ?? 0),
                (int)($base['prov_tier'] ?? 0),
                $base['prov_development'] ?? null,
                (int)($base['prov_development_level'] ?? 0),
            ]);

            // ------------------------------------------------
            // POI
            // ------------------------------------------------
            $stmt = db()->prepare('DELETE FROM lahan_poi WHERE lahan_id = ?');
            $stmt->execute([$id]);

            $insertPoi = db()->prepare(
                'INSERT INTO lahan_poi
                    (lahan_id, nama, kategori, deskripsi, cakupan, jarak_km, waktu_menit)
                 VALUES (?, ?, ?, ?, ?, ?, ?)'
            );

            foreach ($poiData as $poi) {
                $insertPoi->execute([
                    $id,
                    $poi['nama'],
                    $poi['kategori'],
                    $poi['deskripsi'] !== '' ? $poi['deskripsi'] : null,
                    $poi['cakupan'] !== '' ? $poi['cakupan'] : null,
                    $poi['jarak_km'],
                    $poi['waktu_menit'],
                ]);
            }

            db()->commit();

            $_SESSION['flash'] = [
                'type' => 'ok',
                'msg' => $id > 0 && (int)($_POST['id'] ?? 0) > 0
                    ? 'Data lahan berhasil diperbarui.'
                    : 'Lahan baru berhasil ditambahkan.',
            ];

            header('Location: index.php');
            exit;
        } catch (Throwable $e) {
            if (db()->inTransaction()) db()->rollBack();
            $errors[] = 'Gagal menyimpan data: ' . $e->getMessage();
        }
    }
}

$title = $id > 0 ? 'Edit Lahan' : 'Tambah Lahan';
$citiesJson = json_encode($citiesByProvince, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($title) ?> — Backend Perumnas Business Solution</title>
<?php include __DIR__ . '/_style.php'; ?>
<style>
.form-section{grid-column:1/-1;border-top:1px solid var(--line);padding-top:18px;margin-top:4px}
.form-section h2{font-size:14px;margin-bottom:4px}
.form-section p{font-size:11.5px;color:var(--muted);margin-bottom:14px}
.foto-slots{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:12px}
.foto-slot,.poi-item{border:1px solid var(--line);border-radius:10px;padding:14px;background:var(--bg)}
.foto-slot h5{font-size:12.5px;margin-bottom:9px}
.poi-item{background:#fff;margin-bottom:10px}
.poi-grid{display:grid;grid-template-columns:1.2fr 1fr 1.5fr .9fr .75fr .85fr;gap:10px;align-items:end}
.poi-grid input,.poi-grid select{margin-bottom:0}
.btn-remove-poi{margin-top:10px;border:0;background:#FBEAEA;color:#8A2424;padding:7px 10px;border-radius:7px;cursor:pointer;font-size:11.5px;font-weight:650}
.help{font-size:11px;color:var(--muted);margin-top:5px}
@media(max-width:1000px){.poi-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:600px){.poi-grid{grid-template-columns:1fr}}
</style>
</head>
<body>
<div class="topbar">
  <div class="logo"><div class="logo-m">PBS</div>Perumnas Business Solution</div>
  <nav><a class="on" href="index.php">Data Lahan</a><a href="../database/migrate.php">Migrasi Database</a></nav>
  <div class="r">Halo, <?= e($_SESSION['user_nama'] ?? '') ?> &middot; <a href="../index.php" style="color:#fff">Lihat Katalog</a> &middot; <a href="logout.php" style="color:#fff">Logout</a></div>
</div>
<div class="wrap">
  <h1><?= e($title) ?></h1>
  <p class="sub">Data yang disimpan di sini langsung menjadi sumber data katalog publik.</p>

  <?php if ($errors): ?>
    <div class="flash err"><?= implode('<br>', array_map('e', $errors)) ?></div>
  <?php endif; ?>

  <div class="card" style="padding:22px">
    <form class="grid" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= (int)$id ?>">

      <div class="form-section">
        <h2>Informasi Lahan</h2>
        <p>Lokasi, provinsi, kota, dan produk menggunakan data master database.</p>
      </div>

      <div>
        <label>Lokasi</label>
        <input name="lokasi" value="<?= e($data['lokasi']) ?>" required>
      </div>

      <div>
        <label>Pulau</label>
        <select name="pulau" required>
          <option value="">-- Pilih Pulau --</option>
          <?php foreach (PULAU_OPTIONS as $p): ?>
            <option value="<?= e($p) ?>" <?= $data['pulau'] === $p ? 'selected' : '' ?>><?= e($p) ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div>
        <label>Provinsi</label>
        <select name="prov" id="prov" required>
          <option value="">-- Pilih Provinsi --</option>
          <?php foreach ($provinceOptions as $prov): ?>
            <option value="<?= e($prov) ?>" <?= $data['prov'] === $prov ? 'selected' : '' ?>><?= e($prov) ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div>
        <label>Kota / Kabupaten</label>
        <select name="kota" id="kota" required></select>
        <div class="help">Daftar kota mengikuti provinsi yang tersedia di tabel <code>location</code>.</div>
      </div>

      <div>
        <label>Produk</label>
        <select name="produk" required>
          <option value="">-- Pilih Produk --</option>
          <?php foreach (PRODUK_OPTIONS as $produk): ?>
            <option value="<?= e($produk) ?>" <?= $data['produk'] === $produk ? 'selected' : '' ?>><?= e($produk) ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div>
        <label>Luas (m²)</label>
        <input name="luas_m2" type="number" step="0.01" value="<?= e((string)$data['luas_m2']) ?>">
      </div>
      <div>
        <label>Luas (Ha)</label>
        <input name="ha" type="number" step="0.0001" value="<?= e((string)$data['ha']) ?>">
      </div>
      <div>
        <label>ZNT (Rp / m²)</label>
        <input name="znt" type="number" step="1" value="<?= e((string)$data['znt']) ?>">
      </div>
      <div>
        <label>Nilai Aset (Rp)</label>
        <input name="nilai" type="number" step="1" value="<?= e((string)$data['nilai']) ?>">
      </div>
      <div>
        <label>Alternatif Peruntukan</label>
        <input name="alt" value="<?= e($data['alt']) ?>">
      </div>
      <div>
        <label>Kapasitas / Estimasi</label>
        <input name="kapasitas" value="<?= e($data['kapasitas']) ?>">
      </div>

      <div class="full">
        <label>Alamat</label>
        <textarea name="alamat" rows="3"><?= e($data['alamat']) ?></textarea>
      </div>
      <div class="full">
        <label>Link Google Maps</label>
        <input name="maps_link" type="url" value="<?= e($data['maps_link']) ?>" placeholder="https://maps.app.goo.gl/...">
      </div>
      <div class="full">
        <label>Konteks Lokasi</label>
        <textarea name="konteks"><?= e($data['konteks']) ?></textarea>
      </div>
      <div class="full">
        <label>Alasan / Rasionalisasi</label>
        <textarea name="alasan"><?= e($data['alasan']) ?></textarea>
      </div>

      <div class="form-section">
        <h2>Foto Lahan</h2>
        <p>Format JPG/PNG/WEBP, maksimal 5MB per foto.</p>
      </div>
      <div class="full">
        <div class="foto-slots">
          <?php foreach (FOTO_SLOTS as $col => $label): ?>
            <div class="foto-slot">
              <h5><?= e($label) ?></h5>
              <?php if ($existingFotos[$col]): ?>
                <div style="display:flex;align-items:center;gap:10px;margin-bottom:9px">
                  <img src="<?= e(foto_url($existingFotos[$col])) ?>" alt="" style="width:100px;height:64px;object-fit:cover;border-radius:8px;border:1px solid var(--line)">
                  <label style="display:flex;align-items:center;gap:6px;font-size:11.5px;color:var(--red)">
                    <input type="checkbox" name="remove_<?= e($col) ?>" value="1" style="width:auto;margin:0"> Hapus
                  </label>
                </div>
              <?php endif; ?>
              <input type="file" name="<?= e($col) ?>" accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="form-section">
        <h2>Lokasi &amp; POI di Sekitar Lahan</h2>
        <p>Data ini langsung dipakai oleh analisis potensi pasar di halaman katalog. Jarak dan waktu dapat diisi manual berdasarkan data lapangan.</p>
      </div>

      <div class="full">
        <div id="poi-container">
          <?php if ($existingPoi): ?>
            <?php foreach ($existingPoi as $poi): ?>
              <div class="poi-item">
                <div class="poi-grid">
                  <div><label>Nama Lokasi</label><input name="poi_nama[]" value="<?= e($poi['nama']) ?>" placeholder="Contoh: Pelabuhan Kumai"></div>
                  <div><label>Kategori</label><select name="poi_kategori[]">
                    <option value="">-- Pilih --</option>
                    <?php foreach (POI_CATEGORY_OPTIONS as $cat): ?><option value="<?= e($cat) ?>" <?= $poi['kategori'] === $cat ? 'selected' : '' ?>><?= e($cat) ?></option><?php endforeach; ?>
                  </select></div>
                  <div><label>Deskripsi</label><input name="poi_deskripsi[]" value="<?= e($poi['deskripsi']) ?>" placeholder="Keterangan lokasi"></div>
                  <div><label>Cakupan</label><select name="poi_cakupan[]">
                    <?php foreach (POI_CAKUPAN_OPTIONS as $c): ?><option value="<?= e($c) ?>" <?= $poi['cakupan'] === $c ? 'selected' : '' ?>><?= e($c) ?></option><?php endforeach; ?>
                  </select></div>
                  <div><label>Jarak (km)</label><input name="poi_jarak_km[]" type="number" min="0" step="0.01" value="<?= e((string)$poi['jarak_km']) ?>" placeholder="4.2"></div>
                  <div><label>Waktu (menit)</label><input name="poi_waktu_menit[]" type="number" min="0" step="1" value="<?= e((string)$poi['waktu_menit']) ?>" placeholder="12"></div>
                </div>
                <button type="button" class="btn-remove-poi" onclick="this.closest('.poi-item').remove()">Hapus POI</button>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="poi-item">
              <div class="poi-grid">
                <div><label>Nama Lokasi</label><input name="poi_nama[]" placeholder="Contoh: Pelabuhan Kumai"></div>
                <div><label>Kategori</label><select name="poi_kategori[]"><option value="">-- Pilih --</option><?php foreach (POI_CATEGORY_OPTIONS as $cat): ?><option value="<?= e($cat) ?>"><?= e($cat) ?></option><?php endforeach; ?></select></div>
                <div><label>Deskripsi</label><input name="poi_deskripsi[]" placeholder="Keterangan lokasi"></div>
                <div><label>Cakupan</label><select name="poi_cakupan[]"><?php foreach (POI_CAKUPAN_OPTIONS as $c): ?><option value="<?= e($c) ?>"><?= e($c) ?></option><?php endforeach; ?></select></div>
                <div><label>Jarak (km)</label><input name="poi_jarak_km[]" type="number" min="0" step="0.01" placeholder="4.2"></div>
                <div><label>Waktu (menit)</label><input name="poi_waktu_menit[]" type="number" min="0" step="1" placeholder="12"></div>
              </div>
              <button type="button" class="btn-remove-poi" onclick="this.closest('.poi-item').remove()">Hapus POI</button>
            </div>
          <?php endif; ?>
        </div>
        <button type="button" class="btn" onclick="tambahPoi()" style="margin-top:4px">+ Tambah Lokasi Sekitar</button>
      </div>

      <div class="form-actions">
        <button class="btn btn-t" type="submit">Simpan</button>
        <a class="btn" href="index.php">Batal</a>
      </div>
    </form>
  </div>
</div>

<script>
const CITIES = <?= $citiesJson ?: '{}' ?>;
const initialProvince = <?= json_encode($data['prov'], JSON_UNESCAPED_UNICODE) ?>;
const initialCity = <?= json_encode($data['kota'], JSON_UNESCAPED_UNICODE) ?>;

function fillCities(selected='') {
    const prov = document.getElementById('prov').value;
    const kota = document.getElementById('kota');
    const list = CITIES[prov] || [];
    kota.innerHTML = '<option value="">-- Pilih Kota/Kabupaten --</option>' +
        list.map(x => '<option value="'+escapeHtml(x)+'">'+escapeHtml(x)+'</option>').join('');
    if (selected && list.includes(selected)) kota.value = selected;
}

function escapeHtml(value) {
    return String(value ?? '').replace(/[&<>"']/g, c => ({
        '&':'&amp;', '<':'&lt;', '>':'&gt;', '"':'&quot;', "'":'&#039;'
    }[c]));
}

document.getElementById('prov').addEventListener('change', () => fillCities(''));
fillCities(initialCity);

function tambahPoi() {
    const container = document.getElementById('poi-container');
    const item = document.createElement('div');
    item.className = 'poi-item';
    item.innerHTML = `
        <div class="poi-grid">
            <div><label>Nama Lokasi</label><input name="poi_nama[]" placeholder="Contoh: Pelabuhan Kumai"></div>
            <div><label>Kategori</label><select name="poi_kategori[]"><option value="">-- Pilih --</option><?php foreach (POI_CATEGORY_OPTIONS as $cat): ?><option value="<?= e($cat) ?>"><?= e($cat) ?></option><?php endforeach; ?></select></div>
            <div><label>Deskripsi</label><input name="poi_deskripsi[]" placeholder="Keterangan lokasi"></div>
            <div><label>Cakupan</label><select name="poi_cakupan[]"><?php foreach (POI_CAKUPAN_OPTIONS as $c): ?><option value="<?= e($c) ?>"><?= e($c) ?></option><?php endforeach; ?></select></div>
            <div><label>Jarak (km)</label><input name="poi_jarak_km[]" type="number" min="0" step="0.01" placeholder="4.2"></div>
            <div><label>Waktu (menit)</label><input name="poi_waktu_menit[]" type="number" min="0" step="1" placeholder="12"></div>
        </div>
        <button type="button" class="btn-remove-poi" onclick="this.closest('.poi-item').remove()">Hapus POI</button>
    `;
    container.appendChild(item);
}
</script>
</body>
</html>
