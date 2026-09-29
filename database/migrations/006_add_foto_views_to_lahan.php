<?php
/**
 * Menambahkan kolom foto per sudut pandang ke tabel lahan:
 * `foto` yang sudah ada dipakai sebagai "Tampak Udara", ditambah
 * 3 kolom baru untuk "Batas Lahan", "Akses Jalan", dan "Sekitar Lokasi"
 * — sesuai 4 tab foto yang tampil di halaman detail katalog.
 */
return [
    'up' => function (PDO $pdo): void {
        $cols = [
            'foto_batas'   => "ALTER TABLE lahan ADD COLUMN foto_batas VARCHAR(255) NULL AFTER foto",
            'foto_akses'   => "ALTER TABLE lahan ADD COLUMN foto_akses VARCHAR(255) NULL AFTER foto_batas",
            'foto_sekitar' => "ALTER TABLE lahan ADD COLUMN foto_sekitar VARCHAR(255) NULL AFTER foto_akses",
        ];
        foreach ($cols as $name => $sql) {
            $exists = $pdo->query("SHOW COLUMNS FROM lahan LIKE '{$name}'")->fetch();
            if (!$exists) {
                $pdo->exec($sql);
            }
        }
    },
];
