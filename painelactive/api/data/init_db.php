<?php
/**
 * Xplus — Inicialização do banco de dados SQLite
 * Executado automaticamente na primeira requisição à API
 * se o banco ainda não existir.
 */

define('DB_PATH', __DIR__ . '/xplus.db');

function xplus_get_db(): PDO {
    static $pdo = null;
    if ($pdo !== null) return $pdo;

    $isNew = !file_exists(DB_PATH);

    $pdo = new PDO('sqlite:' . DB_PATH, null, null, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    // Habilita WAL para melhor concorrência
    $pdo->exec('PRAGMA journal_mode = WAL;');
    $pdo->exec('PRAGMA foreign_keys = ON;');

    if ($isNew) {
        xplus_create_schema($pdo);
        xplus_seed_admin($pdo);
    }

    return $pdo;
}

function xplus_create_schema(PDO $pdo): void {
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS admins (
            id       INTEGER PRIMARY KEY AUTOINCREMENT,
            username TEXT    NOT NULL UNIQUE,
            password TEXT    NOT NULL,
            created  TEXT    NOT NULL DEFAULT (datetime('now'))
        );

        CREATE TABLE IF NOT EXISTS users (
            id         INTEGER PRIMARY KEY AUTOINCREMENT,
            username   TEXT    NOT NULL UNIQUE,
            password   TEXT    NOT NULL,
            expiration TEXT,
            max_conns  INTEGER NOT NULL DEFAULT 1,
            active     INTEGER NOT NULL DEFAULT 1,
            created    TEXT    NOT NULL DEFAULT (datetime('now'))
        );

        CREATE TABLE IF NOT EXISTS activations (
            id         INTEGER PRIMARY KEY AUTOINCREMENT,
            key_code   TEXT    NOT NULL UNIQUE,
            user_id    INTEGER REFERENCES users(id) ON DELETE SET NULL,
            activated  INTEGER NOT NULL DEFAULT 0,
            expiration TEXT,
            created    TEXT    NOT NULL DEFAULT (datetime('now'))
        );

        CREATE TABLE IF NOT EXISTS dns_servers (
            id      INTEGER PRIMARY KEY AUTOINCREMENT,
            name    TEXT NOT NULL,
            url     TEXT NOT NULL,
            active  INTEGER NOT NULL DEFAULT 1,
            created TEXT    NOT NULL DEFAULT (datetime('now'))
        );

        CREATE TABLE IF NOT EXISTS settings (
            key   TEXT PRIMARY KEY,
            value TEXT NOT NULL
        );
    ");
}

function xplus_seed_admin(PDO $pdo): void {
    // Senha padrão: admin (MD5 — trocar imediatamente após o primeiro acesso)
    $hash = md5('admin');
    $stmt = $pdo->prepare(
        "INSERT OR IGNORE INTO admins (username, password) VALUES (:u, :p)"
    );
    $stmt->execute([':u' => 'admin', ':p' => $hash]);

    // Configurações padrão
    $defaults = [
        'panel_name'  => 'Xplus',
        'panel_url'   => '',
        'max_devices' => '1',
        'trial_days'  => '1',
    ];
    $ins = $pdo->prepare(
        "INSERT OR IGNORE INTO settings (key, value) VALUES (:k, :v)"
    );
    foreach ($defaults as $k => $v) {
        $ins->execute([':k' => $k, ':v' => $v]);
    }
}
