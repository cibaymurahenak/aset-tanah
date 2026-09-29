<?php
/**
 * Satu tabel untuk seluruh data lokasi yang sebelumnya tersebar di:
 * - lahan.alamat / lahan.maps_link
 * - kota
 * - kota_data
 * - provinsi_data
 *
 * Satu lahan memiliki satu baris location.
 */
return [
    'up' => function (PDO $pdo): void {
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS location (
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                lahan_id INT UNSIGNED NOT NULL,
                provinsi VARCHAR(100) NOT NULL,
                kota VARCHAR(150) NOT NULL,
                alamat TEXT NULL,
                maps_link VARCHAR(500) NULL,

                kota_populasi_juta DECIMAL(10,3) NULL,
                kota_umk BIGINT UNSIGNED NULL,
                kota_vp TINYINT(1) NOT NULL DEFAULT 0,
                kota_vu TINYINT(1) NOT NULL DEFAULT 0,
                kota_catatan TEXT NULL,

                prov_populasi_juta DECIMAL(10,3) NULL,
                prov_v TINYINT(1) NOT NULL DEFAULT 0,
                prov_tier TINYINT UNSIGNED NOT NULL DEFAULT 0,
                prov_development TEXT NULL,
                prov_development_level TINYINT UNSIGNED NOT NULL DEFAULT 0,

                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    ON UPDATE CURRENT_TIMESTAMP,

                CONSTRAINT uq_location_lahan UNIQUE (lahan_id),
                CONSTRAINT fk_location_lahan
                    FOREIGN KEY (lahan_id)
                    REFERENCES lahan(id)
                    ON DELETE CASCADE,

                INDEX idx_location_provinsi (provinsi),
                INDEX idx_location_kota (kota)
            ) ENGINE=InnoDB
            DEFAULT CHARSET=utf8mb4
            COLLATE=utf8mb4_unicode_ci
        ");
    },
];
