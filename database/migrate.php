<?php
/**
 * Runner migrasi database. Bisa dijalankan lewat dua cara:
 *
 *   1. CLI:      php database/migrate.php
 *   2. Browser:  buka /aset-tanah/database/migrate.php, masukkan token
 *                dari MIGRATE_TOKEN di file .env, lalu klik "Jalankan
 *                Migrasi".
 *
 * Proteksi browser memakai token (bukan sesi login admin) karena migrasi
 * ini juga dipakai untuk instalasi awal — sebelum tabel `users` dibuat,
 * belum ada akun admin untuk login.
 *
 * Membaca koneksi dari .env (lihat config.php), membuat database jika
 * belum ada, lalu menjalankan setiap file di database/migrations/*.php
 * yang belum tercatat pada tabel `migrations`. Aman dijalankan berkali-
 * kali (idempotent) — migrasi yang sudah jalan tidak diulang.
 */

require __DIR__ . '/../config.php';
require __DIR__ . '/MigrationRunner.php';

if (PHP_SAPI === 'cli') {
    // ---------- Mode CLI ----------
    $log = function (string $level, string $message): void {
        $prefix = ['info' => '→', 'ok' => '✓', 'error' => '✗'][$level] ?? '-';
        $stream = $level === 'error' ? STDERR : STDOUT;
        fwrite($stream, "{$prefix} {$message}" . PHP_EOL);
    };

    try {
        $result = MigrationRunner::run($log);
    } catch (Throwable $e) {
        exit(1);
    }

    echo $result['skippedAll']
        ? 'Semua migrasi sudah diterapkan sebelumnya. Tidak ada yang dijalankan.' . PHP_EOL
        : 'Migrasi database selesai.' . PHP_EOL;
    exit(0);
}

// ---------- Mode Browser ----------
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function e_html(?string $s): string {
    return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8');
}

$tokenConfigured = MIGRATE_TOKEN !== '';
$submittedToken = $_POST['token'] ?? $_GET['token'] ?? ($_SESSION['migrate_token_ok'] ?? '');
$tokenValid = $tokenConfigured && hash_equals(MIGRATE_TOKEN, (string)$submittedToken);

if ($tokenValid) {
    // Simpan sementara di sesi supaya tombol "Jalankan Migrasi" berikutnya
    // (POST tanpa field token) tidak perlu token diketik ulang di request yang sama.
    $_SESSION['migrate_token_ok'] = MIGRATE_TOKEN;
}

$logs = null;
$error = null;
$result = null;

if ($tokenValid && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['run_migration'])) {
    $logs = [];
    $log = function (string $level, string $message) use (&$logs): void {
        $logs[] = ['level' => $level, 'message' => $message];
    };
    try {
        $result = MigrationRunner::run($log);
    } catch (Throwable $e) {
        $error = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Migrasi Database — Perumnas Business Solution</title>
<style>
:root{--navy:#0B2540;--navy-2:#123A5E;--teal:#0E9F8E;--teal-dk:#0A7A6D;--ink:#0F172A;--muted:#5B6B7F;
--line:#E3E9F0;--bg:#F6F8FB;--red:#D14343;
--f:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:var(--f);background:var(--bg);color:var(--ink);line-height:1.5}
.topbar{background:var(--navy);color:#fff;padding:0 24px;height:60px;display:flex;align-items:center;gap:16px}
.topbar .logo{display:flex;align-items:center;gap:9px;font-weight:750;font-size:15px}
.logo-m{width:30px;height:30px;border-radius:8px;background:linear-gradient(135deg,var(--navy),var(--teal));display:grid;place-items:center;font-size:10px;font-weight:800}
.topbar .r{margin-left:auto;font-size:12.5px}
.topbar .r a{color:#fff}
.wrap{max-width:720px;margin:0 auto;padding:32px 24px}
h1{font-size:22px;font-weight:750;letter-spacing:-.4px;margin-bottom:6px}
.sub{color:var(--muted);font-size:13.5px;margin-bottom:22px;line-height:1.6}
.sub code{background:#EDF1F6;padding:1px 6px;border-radius:5px;font-size:12px}
.card{background:#fff;border:1px solid var(--line);border-radius:14px;box-shadow:0 1px 2px rgba(11,37,64,.06),0 8px 24px rgba(11,37,64,.06);padding:22px}
label{display:block;font-size:12.5px;font-weight:650;margin-bottom:6px}
input{width:100%;padding:10px 12px;border:1px solid var(--line);border-radius:9px;background:var(--bg);font-size:13.5px;margin-bottom:14px;outline:none}
input:focus{border-color:var(--teal);background:#fff}
button{padding:10px 18px;border-radius:9px;font-size:13.5px;font-weight:650;border:1px solid transparent;cursor:pointer}
.btn-t{background:var(--teal);color:#fff}
.btn-t:hover{background:var(--teal-dk)}
.err{background:#FBEAEA;color:#8A2424;padding:10px 13px;border-radius:8px;font-size:12.5px;font-weight:600;margin-bottom:16px}
.summary{padding:13px 15px;border-radius:9px;font-size:13.5px;font-weight:600;margin-top:16px}
.summary.ok{background:#E4F5EB;color:#0E5D34}
.summary.err{background:#FBEAEA;color:#8A2424}
.log{background:#0F172A;color:#D6E4F0;border-radius:10px;padding:16px 18px;font-family:ui-monospace,SFMono-Regular,Menlo,Consolas,monospace;font-size:12.5px;line-height:1.8;max-height:420px;overflow-y:auto;margin-top:16px}
.log .l-info{color:#8AB4E8}
.log .l-ok{color:#4FD8A8}
.log .l-error{color:#FF8A8A}
.back{display:inline-block;margin-top:18px;font-size:12.5px;color:var(--muted)}
</style>
</head>
<body>
<div class="topbar">
  <div class="logo"><div class="logo-m">PBS</div>Perumnas Business Solution</div>
  <div class="r"><a href="../index.php">Lihat Katalog</a></div>
</div>
<div class="wrap">
  <h1>Migrasi Database</h1>

  <?php if (!$tokenConfigured): ?>
    <p class="sub">Akses browser untuk migrasi belum diaktifkan.</p>
    <div class="card">
      <div class="err">
        <code>MIGRATE_TOKEN</code> belum diatur di file <code>.env</code>.
        Set nilainya (mis. string acak yang rahasia) lalu muat ulang halaman ini,
        atau jalankan migrasi lewat CLI: <code>php database/migrate.php</code>.
      </div>
    </div>

  <?php elseif (!$tokenValid): ?>
    <p class="sub">
      Masukkan token migrasi (nilai <code>MIGRATE_TOKEN</code> pada file <code>.env</code>)
      untuk melanjutkan.
    </p>
    <div class="card">
      <?php if ($submittedToken !== ''): ?>
        <div class="err">Token salah.</div>
      <?php endif; ?>
      <form method="post">
        <label for="token">Token Migrasi</label>
        <input id="token" name="token" type="password" autofocus required>
        <button class="btn-t" type="submit">Lanjutkan</button>
      </form>
    </div>

  <?php else: ?>
    <p class="sub">
      Membuat/memperbarui struktur tabel <code>users</code> &amp; <code>lahan</code> dan mengisi
      data awal jika belum ada. Aman diklik berkali-kali — migrasi yang sudah diterapkan otomatis dilewati.
    </p>
    <div class="card">
      <form method="post">
        <button class="btn-t" type="submit" name="run_migration" value="1">▶ Jalankan Migrasi</button>
      </form>

      <?php if ($error): ?>
        <div class="summary err">Migrasi terhenti karena error: <?= e_html($error) ?></div>
      <?php elseif ($result): ?>
        <div class="summary ok">
          <?= $result['skippedAll']
                ? 'Semua migrasi sudah diterapkan sebelumnya. Tidak ada yang dijalankan.'
                : 'Migrasi database selesai. Migrasi baru dijalankan: ' . e_html(implode(', ', $result['ran'])) ?>
        </div>
      <?php endif; ?>

      <?php if ($logs): ?>
        <div class="log">
          <?php foreach ($logs as $row): ?>
            <div class="l-<?= e_html($row['level']) ?>"><?= e_html($row['message']) ?></div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
    <a class="back" href="../admin/login.php">&rarr; Lanjut ke login backend</a>
  <?php endif; ?>
</div>
</body>
</html>
