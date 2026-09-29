<?php
/**
 * API publik katalog lahan.
 * Read-only. Data utama berasal dari lahan + location + lahan_poi.
 */

require __DIR__ . '/../config.php';
require __DIR__ . '/../includes/upload.php';

header('Content-Type: application/json; charset=utf-8');

const FOTO_COLS = [
    'foto',
    'foto_batas',
    'foto_akses',
    'foto_sekitar'
];

try {
    $rows = db()->query(
        'SELECT
            l.id,
            l.pulau,
            l.lokasi,
            l.luas_m2,
            l.ha,
            l.znt,
            l.nilai,
            l.konteks,
            l.produk,
            l.alt,
            l.alasan,
            l.kapasitas,
            l.prov,

            loc.provinsi,
            loc.kota,
            loc.alamat,
            loc.maps_link,
            loc.kota_populasi_juta,
            loc.kota_umk,
            loc.kota_vp,
            loc.kota_vu,
            loc.kota_catatan,
            loc.prov_populasi_juta,
            loc.prov_v,
            loc.prov_tier,
            loc.prov_development,
            loc.prov_development_level,

            ' . implode(',', array_map(fn($c) => 'l.' . $c, FOTO_COLS)) . '
        FROM lahan l
        LEFT JOIN location loc ON loc.lahan_id = l.id
        ORDER BY l.id ASC'
    )->fetchAll();

    $stmtPoi = db()->prepare(
        'SELECT
            id,
            lahan_id,
            nama,
            kategori,
            deskripsi,
            cakupan,
            jarak_km,
            waktu_menit
        FROM lahan_poi
        WHERE lahan_id = ?
        ORDER BY id ASC'
    );

    foreach ($rows as &$r) {
        $r['id'] = (int)$r['id'];
        $r['luas_m2'] = (float)$r['luas_m2'];
        $r['ha'] = (float)$r['ha'];
        $r['znt'] = (int)$r['znt'];
        $r['nilai'] = (float)$r['nilai'];

        $r['kota_populasi_juta'] = $r['kota_populasi_juta'] !== null
            ? (float)$r['kota_populasi_juta'] : null;
        $r['kota_umk'] = $r['kota_umk'] !== null
            ? (int)$r['kota_umk'] : null;
        $r['kota_vp'] = (int)$r['kota_vp'];
        $r['kota_vu'] = (int)$r['kota_vu'];
        $r['prov_populasi_juta'] = $r['prov_populasi_juta'] !== null
            ? (float)$r['prov_populasi_juta'] : null;
        $r['prov_v'] = (int)$r['prov_v'];
        $r['prov_tier'] = (int)$r['prov_tier'];
        $r['prov_development_level'] = (int)$r['prov_development_level'];

        foreach (FOTO_COLS as $col) {
            $r[$col] = foto_url($r[$col]);
        }

        $stmtPoi->execute([(int)$r['id']]);
        $r['poi'] = [];

        foreach ($stmtPoi->fetchAll() as $poi) {
            $r['poi'][] = [
                'id' => (int)$poi['id'],
                'nama' => $poi['nama'],
                'kategori' => $poi['kategori'],
                'deskripsi' => $poi['deskripsi'],
                'cakupan' => $poi['cakupan'],
                'jarak_km' => $poi['jarak_km'] !== null ? (float)$poi['jarak_km'] : null,
                'waktu_menit' => $poi['waktu_menit'] !== null ? (int)$poi['waktu_menit'] : null,
            ];
        }
    }
    unset($r);

    echo json_encode(
        $rows,
        JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
    );
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode([
        'error' => 'Gagal memuat data lahan',
        'detail' => $e->getMessage(),
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}
