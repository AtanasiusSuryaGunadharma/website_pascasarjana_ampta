CREATE DATABASE IF NOT EXISTS pascasarjana_ampta
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE pascasarjana_ampta;

DROP TABLE IF EXISTS test;

CREATE TABLE IF NOT EXISTS site_settings (
    id TINYINT UNSIGNED NOT NULL,
    site_name VARCHAR(150) NOT NULL,
    tagline VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;

INSERT INTO site_settings (id, site_name, tagline)
VALUES (
    1,
    'Pascasarjana STP AMPTA Yogyakarta',
    'Program Pascasarjana Pariwisata dan Perhotelan'
)
ON DUPLICATE KEY UPDATE
    site_name = VALUES(site_name),
    tagline = VALUES(tagline);
