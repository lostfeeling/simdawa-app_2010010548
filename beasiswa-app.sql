CREATE TABLE jenis_beasiswa(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_jenis VARCHAR(50),
    keterangan VARCHAR(100)
);
 
CREATE TABLE beasiswa(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_beasiswa VARCHAR(50),
    tanggal_mulai DATE,
    tanggal_selesai DATE,
    jenis_id INT
);
 
CREATE TABLE persyaratan(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_persyaratan VARCHAR(100),
    keterangan VARCHAR(100)
);
 
CREATE TABLE persyaratan_beasiswa(
    id INT PRIMARY KEY AUTO_INCREMENT,
    beasiswa_id INT,
    persyaratan_id INT
);
 
CREATE TABLE prodi(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_prodi VARCHAR(100)
);
 
CREATE TABLE pendaftaran_pengguna(
    id INT PRIMARY KEY AUTO_INCREMENT,
    no_pendaftaran VARCHAR(20),
    nama_lengkap VARCHAR(75),
    no_handphone VARCHAR(15),
    bukti_daftar VARCHAR(255),
    prodi_id INT,
    keterangan ENUM('Belum Diverifikasi', 'Sudah Diverifikasi')
);
 
CREATE TABLE pengguna(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50),
    password VARCHAR(255),
    peran ENUM('ADMIN', 'USER', 'OPERATOR'),
    login_terakhir TIMESTAMP,
    pendaftaran_id INT
);
 
CREATE TABLE pengajuan_beasiswa(
    id VARCHAR(64) PRIMARY KEY,
    tanggal_pengajuan DATE,
    pengguna_id INT,
    beasiswa_id INT,
    keterangan ENUM('Diajukan', 'Ditolak', 'Diusulkan', 'Ditetapkan') DEFAULT 'Diajukan'
);
 
CREATE TABLE persyaratan_pengajuan(
    id INT PRIMARY KEY AUTO_INCREMENT,
    pengajuan_id INT,
    persyaratan_id INT,
    tanggal_upload TIMESTAMP,
    nama_file VARCHAR(255),
    keterangan VARCHAR(100)
);