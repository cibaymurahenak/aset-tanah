<?php
/**
 * Satu lahan dapat memiliki banyak POI/lokasi di sekitarnya.
 * Jarak dan waktu dapat diisi manual oleh admin.
 */
return [
    'up' => function (PDO $pdo): void {
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS lahan_poi (
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                lahan_id INT UNSIGNED NOT NULL,
                nama VARCHAR(200) NOT NULL,
                kategori VARCHAR(100) NOT NULL,
                deskripsi TEXT NULL,
                cakupan VARCHAR(100) NULL,
                jarak_km DECIMAL(8,2) NULL,
                waktu_menit SMALLINT UNSIGNED NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    ON UPDATE CURRENT_TIMESTAMP,

                CONSTRAINT fk_lahan_poi_lahan
                    FOREIGN KEY (lahan_id)
                    REFERENCES lahan(id)
                    ON DELETE CASCADE,

                INDEX idx_lahan_poi_lahan (lahan_id),
                INDEX idx_lahan_poi_kategori (kategori)
            ) ENGINE=InnoDB
            DEFAULT CHARSET=utf8mb4
            COLLATE=utf8mb4_unicode_ci
        ");

        foreach ([
            'jarak_km' => "ALTER TABLE lahan_poi ADD COLUMN jarak_km DECIMAL(8,2) NULL AFTER cakupan",
            'waktu_menit' => "ALTER TABLE lahan_poi ADD COLUMN waktu_menit SMALLINT UNSIGNED NULL AFTER jarak_km",
        ] as $name => $sql) {
            $exists = $pdo->query("SHOW COLUMNS FROM lahan_poi LIKE '{$name}'")->fetch();
            if (!$exists) {
                $pdo->exec($sql);
            }
        }
    },
];
