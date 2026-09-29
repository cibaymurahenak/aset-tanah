<?php
/**
 * Logika inti migrasi, dipakai bersama oleh CLI (database/migrate.php)
 * dan versi browser (database/migrate.php diakses lewat HTTP).
 */

final class MigrationRunner {
    /**
     * Menjalankan seluruh migrasi yang belum diterapkan.
     *
     * @param callable $log Dipanggil untuk tiap baris log: fn(string $level, string $message)
     *                      $level salah satu dari: 'info', 'ok', 'error'
     * @return array{ran: string[], skippedAll: bool}
     */
    public static function run(callable $log): array {
        // Koneksi awal tanpa nama database, supaya bisa membuat database jika belum ada.
        $dsnServer = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';charset=utf8mb4';
        try {
            $server = new PDO($dsnServer, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ]);
        } catch (PDOException $e) {
            $log('error', 'Gagal konek ke MySQL (' . DB_HOST . ':' . DB_PORT . '): ' . $e->getMessage());
            throw $e;
        }

        $server->exec(
            'CREATE DATABASE IF NOT EXISTS `' . DB_NAME . '` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci'
        );
        $log('ok', 'Database `' . DB_NAME . '` siap.');

        $pdo = db(); // dari config.php, sudah mengarah ke DB_NAME

        $pdo->exec("
            CREATE TABLE IF NOT EXISTS migrations (
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                migration VARCHAR(191) NOT NULL UNIQUE,
                applied_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
        ");

        $applied = $pdo->query('SELECT migration FROM migrations')->fetchAll(PDO::FETCH_COLUMN);

        $files = glob(__DIR__ . '/migrations/*.php');
        sort($files);

        $ran = [];
        foreach ($files as $file) {
            $name = basename($file, '.php');
            if (in_array($name, $applied, true)) {
                continue;
            }

            $migration = require $file;
            if (!isset($migration['up']) || !is_callable($migration['up'])) {
                $log('error', "Migrasi {$name} tidak valid (tidak ada 'up').");
                throw new RuntimeException("Migrasi {$name} tidak valid.");
            }

            $log('info', "Menjalankan {$name} ...");
            // Catatan: statement DDL (CREATE TABLE, dst) di MySQL melakukan
            // implicit commit, jadi transaksi hanya efektif untuk migrasi DML.
            try {
                $pdo->beginTransaction();
                $migration['up']($pdo);
                $pdo->prepare('INSERT INTO migrations (migration) VALUES (?)')->execute([$name]);
                if ($pdo->inTransaction()) {
                    $pdo->commit();
                }
                $log('ok', "{$name} selesai.");
                $ran[] = $name;
            } catch (Throwable $e) {
                if ($pdo->inTransaction()) {
                    $pdo->rollBack();
                }
                $log('error', "{$name} gagal: " . $e->getMessage());
                throw $e;
            }
        }

        return ['ran' => $ran, 'skippedAll' => empty($ran)];
    }
}
