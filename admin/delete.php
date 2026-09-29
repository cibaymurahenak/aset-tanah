<?php
require __DIR__ . '/../config.php';
require __DIR__ . '/../includes/auth.php';
require __DIR__ . '/../includes/upload.php';
require_login();

const DELETE_FOTO_COLS = ['foto', 'foto_batas', 'foto_akses', 'foto_sekitar'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)($_POST['id'] ?? 0);
    if ($id > 0) {
        $stmt = db()->prepare('SELECT ' . implode(',', DELETE_FOTO_COLS) . ' FROM lahan WHERE id = ?');
        $stmt->execute([$id]);
        $fotos = $stmt->fetch() ?: [];

        $stmt = db()->prepare('DELETE FROM lahan WHERE id = ?');
        $stmt->execute([$id]);

        foreach (DELETE_FOTO_COLS as $col) {
            if (!empty($fotos[$col])) {
                delete_foto_file($fotos[$col]);
            }
        }
        $_SESSION['flash'] = ['type' => 'ok', 'msg' => 'Data lahan berhasil dihapus.'];
    }
}
header('Location: index.php');
exit;
