-- Autentikasi Portal Dalaman Pascasarjana STP AMPTA
-- Aman dijalankan ulang untuk kebutuhan pengembangan lokal.

CREATE DATABASE IF NOT EXISTS pascasarjana_ampta
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE pascasarjana_ampta;

CREATE TABLE IF NOT EXISTS admin_users (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    username VARCHAR(80) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('admin', 'super_admin') NOT NULL DEFAULT 'admin',
    is_active TINYINT(1) NOT NULL DEFAULT 1,
    last_login_at DATETIME NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY admin_users_username_unique (username),
    KEY admin_users_role_index (role),
    KEY admin_users_active_index (is_active)
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;

INSERT INTO admin_users (name, username, password_hash, role, is_active)
VALUES
    (
        'Administrator AMPTA',
        'admin',
        '$2y$10$JoCN87hEkJXxuU7kYqeXoO51urJ/MK7zJCWxxcFS3S8O9syAHVWlG',
        'admin',
        1
    ),
    (
        'Super Administrator AMPTA',
        'superadmin',
        '$2y$10$/Qh75t/VOrrRr2v0djPJ8.qYpCF0ngnvzwyhKrX5EAO0HpdUjeDkC',
        'super_admin',
        1
    )
ON DUPLICATE KEY UPDATE
    name = VALUES(name),
    password_hash = VALUES(password_hash),
    role = VALUES(role),
    is_active = VALUES(is_active);
