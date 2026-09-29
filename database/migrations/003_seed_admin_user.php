<?php
/** Membuat akun admin default (username: admin, password: admin123). */
return [
    'up' => function (PDO $pdo): void {
        $stmt = $pdo->prepare('SELECT COUNT(*) FROM users WHERE username = ?');
        $stmt->execute(['admin']);
        if ((int)$stmt->fetchColumn() > 0) {
            return; // sudah ada, jangan timpa
        }

        $hash = password_hash('admin123', PASSWORD_DEFAULT);
        $pdo->prepare('INSERT INTO users (username, password, nama) VALUES (?, ?, ?)')
            ->execute(['admin', $hash, 'Administrator']);
    },
];
