<?php
/**
 * Upgrade untuk database yang sebelumnya memakai tabel kota/kota_data/provinsi_data
 * dan kolom alamat/maps_link di lahan.
 * Data sudah dipindahkan ke location oleh migrasi 009.
 */
return [
    'up' => function (PDO $pdo): void {
        // Database lama sudah pernah menjalankan migration 008, jadi tambahkan kolom POI di sini juga jika belum ada.
        foreach ([
            'jarak_km' => "ALTER TABLE lahan_poi ADD COLUMN jarak_km DECIMAL(8,2) NULL AFTER cakupan",
            'waktu_menit' => "ALTER TABLE lahan_poi ADD COLUMN waktu_menit SMALLINT UNSIGNED NULL AFTER jarak_km",
        ] as $name => $sql) {
            $exists = $pdo->query("SHOW COLUMNS FROM lahan_poi LIKE '{$name}'")->fetch();
            if (!$exists) {
                $pdo->exec($sql);
            }
        }

        foreach (['kota', 'kota_data', 'provinsi_data'] as $table) {
            $exists = $pdo->query("SHOW TABLES LIKE '{$table}'")->fetchColumn();
            if ($exists) {
                $pdo->exec("DROP TABLE `{$table}`");
            }
        }

        // Setelah dipindahkan ke location, lahan tidak lagi menyimpan alamat/maps_link.
        foreach (['maps_link', 'alamat'] as $column) {
            $exists = $pdo->query("SHOW COLUMNS FROM lahan LIKE '{$column}'")->fetch();
            if ($exists) {
                $pdo->exec("ALTER TABLE lahan DROP COLUMN `{$column}`");
            }
        }
    },
];
