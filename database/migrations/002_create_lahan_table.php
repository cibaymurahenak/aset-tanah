<?php
/** Membuat tabel lahan (data katalog & backend CRUD). */
return [
    'up' => function (PDO $pdo): void {
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS lahan (
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                pulau VARCHAR(50) NOT NULL,
                lokasi VARCHAR(150) NOT NULL,
                luas_m2 DECIMAL(14,2) NOT NULL DEFAULT 0,
                ha DECIMAL(12,4) NOT NULL DEFAULT 0,
                znt BIGINT UNSIGNED NOT NULL DEFAULT 0,
                nilai BIGINT UNSIGNED NOT NULL DEFAULT 0,
                konteks TEXT,
                produk VARCHAR(100) NOT NULL,
                alt VARCHAR(100),
                alasan TEXT,
                kapasitas TEXT,
                prov VARCHAR(80) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ");
    },
];
