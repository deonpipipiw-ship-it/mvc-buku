CREATE DATABASE IF NOT EXISTS perpustakaan
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE perpustakaan;

CREATE TABLE IF NOT EXISTS buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    isbn VARCHAR(20) NOT NULL UNIQUE,
    judul VARCHAR(150) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    penerbit VARCHAR(100) NOT NULL,
    tahun_terbit INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO buku (isbn, judul, penulis, penerbit, tahun_terbit) VALUES
('978-602-033295-7', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005),
('978-979-306279-2', 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Hasta Mitra', 1980),
('978-602-063317-7', 'Filosofi Teras', 'Henry Manampiring', 'Kompas', 2018);