<?php
/** Mengisi tabel lahan dengan 88 data awal dari katalog-lahan-website.html. */
return [
    'up' => function (PDO $pdo): void {
        if ((int)$pdo->query('SELECT COUNT(*) FROM lahan')->fetchColumn() > 0) {
            return; // sudah pernah diisi, jangan duplikasi
        }

        $rows = require __DIR__ . '/../data/lahan_seed.php';

        $stmt = $pdo->prepare(
            'INSERT INTO lahan (pulau, lokasi, luas_m2, ha, znt, nilai, konteks, produk, alt, alasan, kapasitas, prov)
             VALUES (:pulau, :lokasi, :luas_m2, :ha, :znt, :nilai, :konteks, :produk, :alt, :alasan, :kapasitas, :prov)'
        );

        foreach ($rows as $row) {
            $stmt->execute($row);
        }
    },
];
