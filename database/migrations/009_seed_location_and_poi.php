<?php
/**
 * Mengisi location + POI dari data katalog yang sama dengan index.php.
 * Tidak membuat data baru yang berbeda dari katalog.
 */
return [
    'up' => function (PDO $pdo): void {
        // Database lama mungkin sudah menandai migration 008 sebagai selesai. Pastikan kolom baru POI tetap tersedia sebelum seed.
        foreach ([
            'jarak_km' => "ALTER TABLE lahan_poi ADD COLUMN jarak_km DECIMAL(8,2) NULL AFTER cakupan",
            'waktu_menit' => "ALTER TABLE lahan_poi ADD COLUMN waktu_menit SMALLINT UNSIGNED NULL AFTER jarak_km",
        ] as $name => $sql) {
            $exists = $pdo->query("SHOW COLUMNS FROM lahan_poi LIKE '{$name}'")->fetch();
            if (!$exists) {
                $pdo->exec($sql);
            }
        }

        $seed = require __DIR__ . '/../data/location_seed.php';

        $findLahan = $pdo->prepare('SELECT id FROM lahan WHERE lokasi = ? LIMIT 1');
        $upsertLocation = $pdo->prepare("
            INSERT INTO location (
                lahan_id, provinsi, kota, alamat, maps_link,
                kota_populasi_juta, kota_umk, kota_vp, kota_vu, kota_catatan,
                prov_populasi_juta, prov_v, prov_tier, prov_development, prov_development_level
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ON DUPLICATE KEY UPDATE
                provinsi = VALUES(provinsi),
                kota = VALUES(kota),
                alamat = VALUES(alamat),
                maps_link = VALUES(maps_link),
                kota_populasi_juta = VALUES(kota_populasi_juta),
                kota_umk = VALUES(kota_umk),
                kota_vp = VALUES(kota_vp),
                kota_vu = VALUES(kota_vu),
                kota_catatan = VALUES(kota_catatan),
                prov_populasi_juta = VALUES(prov_populasi_juta),
                prov_v = VALUES(prov_v),
                prov_tier = VALUES(prov_tier),
                prov_development = VALUES(prov_development),
                prov_development_level = VALUES(prov_development_level)
        ");

        foreach ($seed['locations'] as $lokasi => $item) {
            $findLahan->execute([$lokasi]);
            $lahanId = $findLahan->fetchColumn();
            if ($lahanId === false) {
                continue;
            }

            $upsertLocation->execute([
                (int)$lahanId,
                $item['provinsi'] ?? '',
                $item['kota'] ?? ($item['provinsi'] ?? ''),
                $item['alamat'] ?? null,
                $item['maps_link'] ?? null,
                $item['kota_populasi_juta'] ?? null,
                $item['kota_umk'] ?? null,
                (int)($item['kota_vp'] ?? 0),
                (int)($item['kota_vu'] ?? 0),
                $item['kota_catatan'] ?? null,
                $item['prov_populasi_juta'] ?? null,
                (int)($item['prov_v'] ?? 0),
                (int)($item['prov_tier'] ?? 0),
                $item['prov_development'] ?? null,
                (int)($item['prov_development_level'] ?? 0),
            ]);
        }

        // Seed POI hanya jika kombinasi yang sama belum ada.
        $checkPoi = $pdo->prepare("
            SELECT id FROM lahan_poi
            WHERE lahan_id = ? AND nama = ? AND kategori = ?
            LIMIT 1
        ");
        $insertPoi = $pdo->prepare("
            INSERT INTO lahan_poi
                (lahan_id, nama, kategori, deskripsi, cakupan, jarak_km, waktu_menit)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ");

        foreach ($seed['poi'] as $lokasi => $items) {
            $findLahan->execute([$lokasi]);
            $lahanId = $findLahan->fetchColumn();
            if ($lahanId === false) {
                continue;
            }

            foreach ($items as $item) {
                $nama = trim($item['n'] ?? '');
                $kategori = trim($item['c'] ?? '');
                if ($nama === '' || $kategori === '') {
                    continue;
                }

                $checkPoi->execute([(int)$lahanId, $nama, $kategori]);
                if ($checkPoi->fetchColumn() !== false) {
                    continue;
                }

                $insertPoi->execute([
                    (int)$lahanId,
                    $nama,
                    $kategori,
                    $item['m'] ?? null,
                    $item['p'] ?? null,
                    null,
                    null,
                ]);
            }
        }
    },
];
