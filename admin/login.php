<?php
require __DIR__ . '/../config.php';
require __DIR__ . '/../includes/auth.php';

if (is_logged_in()) {
    header('Location: index.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    $stmt = db()->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        session_regenerate_id(true);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_nama'] = $user['nama'];
        header('Location: index.php');
        exit;
    }
    $error = 'Username atau password salah.';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Admin — Perumnas Business Solution</title>
<style>
:root{--navy:#0B2540;--teal:#0E9F8E;--ink:#0F172A;--muted:#5B6B7F;--line:#E3E9F0;--bg:#F6F8FB;
--f:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif;}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:var(--f);background:linear-gradient(160deg,var(--navy) 0%,#0E3252 55%,#0B4A54 100%);min-height:100vh;display:flex;align-items:center;justify-content:center;padding:20px}
.card{background:#fff;border-radius:14px;padding:34px 32px;width:100%;max-width:380px;box-shadow:0 24px 60px rgba(11,37,64,.3)}
.logo{display:flex;align-items:center;gap:10px;font-weight:750;font-size:16.5px;margin-bottom:22px;color:var(--ink)}
.logo-m{width:34px;height:34px;border-radius:9px;background:linear-gradient(135deg,var(--navy),var(--teal));display:grid;place-items:center;color:#fff;font-size:11px;font-weight:800}
h1{font-size:20px;font-weight:750;margin-bottom:4px;color:var(--ink)}
p.sub{font-size:13px;color:var(--muted);margin-bottom:22px}
label{display:block;font-size:12.5px;font-weight:650;color:var(--ink);margin-bottom:6px}
input{width:100%;padding:11px 13px;border:1px solid var(--line);border-radius:9px;background:var(--bg);font-size:14px;margin-bottom:16px;outline:none}
input:focus{border-color:var(--teal);background:#fff}
button{width:100%;padding:12px;border-radius:9px;background:var(--navy);color:#fff;font-weight:650;font-size:14px;border:none;cursor:pointer}
button:hover{background:#123A5E}
.err{background:#FBEAEA;color:#8A2424;padding:10px 13px;border-radius:8px;font-size:12.5px;font-weight:600;margin-bottom:16px}
.back{display:block;text-align:center;margin-top:18px;font-size:12.5px;color:var(--muted);text-decoration:none}
</style>
</head>
<body>
<div class="card">
  <div class="logo"><div class="logo-m">PBS</div>Perumnas Business Solution</div>
  <h1>Masuk ke Backend</h1>
  <p class="sub">Login diperlukan untuk mengelola data lahan.</p>
  <?php if ($error): ?><div class="err"><?= e($error) ?></div><?php endif; ?>
  <form method="post">
    <label for="username">Username</label>
    <input id="username" name="username" required autofocus>
    <label for="password">Password</label>
    <input id="password" name="password" type="password" required>
    <button type="submit">Login</button>
  </form>
  <a class="back" href="../index.php">&larr; Kembali ke katalog</a>
</div>
</body>
</html>
