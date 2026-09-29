<?php
/** Helper upload foto lahan. */

const UPLOAD_DIR_REL = 'uploads/lahan';           // relatif terhadap root aplikasi, dipakai di URL
const UPLOAD_MAX_BYTES = 5 * 1024 * 1024;          // 5MB
const UPLOAD_ALLOWED_EXT = ['jpg', 'jpeg', 'png', 'webp'];
const UPLOAD_ALLOWED_MIME = [
    'image/jpeg' => 'jpg',
    'image/png'  => 'png',
    'image/webp' => 'webp',
];

/**
 * Memproses file upload dari $_FILES['foto']. Mengembalikan nama file baru
 * (untuk disimpan di kolom `foto`) atau null jika tidak ada file dikirim.
 * Melempar RuntimeException jika file tidak valid.
 */
function handle_foto_upload(array $file): ?string {
    if (!isset($file['error']) || $file['error'] === UPLOAD_ERR_NO_FILE) {
        return null; // tidak ada file yang diunggah, biarkan foto lama (jika ada)
    }
    if ($file['error'] !== UPLOAD_ERR_OK) {
        throw new RuntimeException('Upload foto gagal (kode error: ' . $file['error'] . ').');
    }
    if ($file['size'] > UPLOAD_MAX_BYTES) {
        throw new RuntimeException('Ukuran foto maksimal 5MB.');
    }

    $mime = mime_content_type($file['tmp_name']);
    if (!isset(UPLOAD_ALLOWED_MIME[$mime])) {
        throw new RuntimeException('Format foto harus JPG, PNG, atau WEBP.');
    }
    $ext = UPLOAD_ALLOWED_MIME[$mime];

    $dir = __DIR__ . '/../' . UPLOAD_DIR_REL;
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }

    $filename = bin2hex(random_bytes(12)) . '.' . $ext;
    $dest = $dir . '/' . $filename;

    if (!move_uploaded_file($file['tmp_name'], $dest)) {
        throw new RuntimeException('Gagal menyimpan file foto ke server.');
    }

    return $filename;
}

/** Hapus file foto lama dari disk (dipanggil saat ganti/hapus foto). */
function delete_foto_file(?string $filename): void {
    if (!$filename) {
        return;
    }
    $path = __DIR__ . '/../' . UPLOAD_DIR_REL . '/' . basename($filename);
    if (is_file($path)) {
        @unlink($path);
    }
}

/** Path relatif (untuk <img src>) dari nama file di kolom `foto`. */
function foto_url(?string $filename): ?string {
    return $filename ? UPLOAD_DIR_REL . '/' . $filename : null;
}
