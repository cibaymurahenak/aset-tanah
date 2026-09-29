<?php
/** Menambahkan kolom `foto` (path file upload) ke tabel lahan. */
return [
    'up' => function (PDO $pdo): void {
        $col = $pdo->query("SHOW COLUMNS FROM lahan LIKE 'foto'")->fetch();
        if ($col) {
            return; // sudah ada
        }
        $pdo->exec("ALTER TABLE lahan ADD COLUMN foto VARCHAR(255) NULL AFTER prov");
    },
];
