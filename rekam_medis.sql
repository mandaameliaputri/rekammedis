-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2025 pada 05.42
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `kd_dokter` varchar(20) NOT NULL,
  `kd_poli` varchar(20) DEFAULT NULL,
  `tgl_kunjungan` date DEFAULT NULL,
  `kd_user` varchar(20) DEFAULT NULL,
  `nm_dokter` varchar(100) DEFAULT NULL,
  `SIP` varchar(50) DEFAULT NULL,
  `tmpt_lhr` varchar(100) DEFAULT NULL,
  `no_tlp` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `kd_poli`, `tgl_kunjungan`, `kd_user`, `nm_dokter`, `SIP`, `tmpt_lhr`, `no_tlp`, `alamat`) VALUES
('123', '12', '2025-05-16', '111', 'indyra', 'sss', 'bandung', '08909099', 'jl rckb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan`
--

CREATE TABLE `kunjungan` (
  `tgl_kunjungan` date NOT NULL,
  `no_pasien` varchar(20) NOT NULL,
  `kd_poli` varchar(20) NOT NULL,
  `jam_kunjungan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kunjungan`
--

INSERT INTO `kunjungan` (`tgl_kunjungan`, `no_pasien`, `kd_poli`, `jam_kunjungan`) VALUES
('2025-05-16', '12', '11', 10),
('2025-05-16', '2', '2', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laboratorium`
--

CREATE TABLE `laboratorium` (
  `kd_lab` varchar(20) NOT NULL,
  `no_RM` varchar(20) DEFAULT NULL,
  `hasil_lab` text DEFAULT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laboratorium`
--

INSERT INTO `laboratorium` (`kd_lab`, `no_RM`, `hasil_lab`, `ket`) VALUES
('', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `kd_user` varchar(20) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`) VALUES
('000', 'oi', '$2y$10$k1qBji6WD3z3eF8xPKn//uAnBAmZ0ZrhA1ZFPKEslmJ9MPR0KfkCe'),
('111', 'isn1', '$2y$10$KL1x/2G7Zkfgps6DDW0UvevaAJJ3Hw/phXYNRF4cBfoPeTfBmlqy2'),
('12345', 'admin', '$2y$10$BEeXGwXctqZOD0kWX6o/futgYYbn2R4VSLRRQ0VrfB9nZtmMpNudi'),
('777', 'jlovs', '$2y$10$1Pc4j3SbJmn3Io.gLZ4iROpCoOBJYqi8vz923qxRrFWPO6zHb/jSy'),
('US1', 'usty', '$2y$10$MdtAX0m2NkD9LUDnMgUJUelf1wYW634YhQymkB4cFIfi2HCjzW7oa'),
('USR001', 'admin', '$2y$10$NNb/1jRiQ3OZ084O.QlwC.NtErdBzyAh02cgkbVYJDXG/g0FULPg6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `kd_obat` varchar(20) NOT NULL,
  `nm_obat` varchar(100) DEFAULT NULL,
  `jml_obat` int(11) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`kd_obat`, `nm_obat`, `jml_obat`, `harga`, `ket`) VALUES
('', '', 0, 0.00, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `no_pasien` varchar(20) NOT NULL,
  `nm_pasien` varchar(100) DEFAULT NULL,
  `j_kel` varchar(10) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `no_tlp` varchar(15) DEFAULT NULL,
  `nm_kk` varchar(100) DEFAULT NULL,
  `hub_kel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`no_pasien`, `nm_pasien`, `j_kel`, `agama`, `alamat`, `tgl_lhr`, `usia`, `no_tlp`, `nm_kk`, `hub_kel`) VALUES
('', '', '', 'Islam', '', '0000-00-00', 0, '', '', ''),
('90', 'nkk', 'Perempuan', 'Kristen', 'jl cisaranten', '2006-03-14', 19, '8909099', '88797', 'baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poliklinik`
--

CREATE TABLE `poliklinik` (
  `kd_poli` varchar(20) NOT NULL,
  `nm_poli` varchar(100) DEFAULT NULL,
  `lantai` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `poliklinik`
--

INSERT INTO `poliklinik` (`kd_poli`, `nm_poli`, `lantai`) VALUES
('', '', ''),
('2', 'ind', '2'),
('234', 'medy', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `no_RM` varchar(20) NOT NULL,
  `kd_tindakan` varchar(20) DEFAULT NULL,
  `kd_obat` varchar(20) DEFAULT NULL,
  `kd_user` varchar(20) DEFAULT NULL,
  `no_pasien` varchar(20) DEFAULT NULL,
  `diagnosa` text DEFAULT NULL,
  `resep` text DEFAULT NULL,
  `keluhan` text DEFAULT NULL,
  `tgl_pemeriksaan` date DEFAULT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan`
--

CREATE TABLE `tindakan` (
  `kd_tindakan` varchar(20) NOT NULL,
  `nm_tindakan` varchar(100) DEFAULT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tindakan`
--

INSERT INTO `tindakan` (`kd_tindakan`, `nm_tindakan`, `ket`) VALUES
('', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kd_dokter`),
  ADD KEY `kd_poli` (`kd_poli`),
  ADD KEY `kd_user` (`kd_user`);

--
-- Indeks untuk tabel `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`tgl_kunjungan`,`no_pasien`,`kd_poli`),
  ADD KEY `no_pasien` (`no_pasien`),
  ADD KEY `kd_poli` (`kd_poli`);

--
-- Indeks untuk tabel `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD PRIMARY KEY (`kd_lab`),
  ADD KEY `no_RM` (`no_RM`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_pasien`);

--
-- Indeks untuk tabel `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`kd_poli`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`no_RM`),
  ADD KEY `kd_tindakan` (`kd_tindakan`),
  ADD KEY `kd_obat` (`kd_obat`),
  ADD KEY `kd_user` (`kd_user`),
  ADD KEY `no_pasien` (`no_pasien`);

--
-- Indeks untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`kd_tindakan`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_ibfk_1` FOREIGN KEY (`kd_tindakan`) REFERENCES `tindakan` (`kd_tindakan`),
  ADD CONSTRAINT `rekam_medis_ibfk_2` FOREIGN KEY (`kd_obat`) REFERENCES `obat` (`kd_obat`),
  ADD CONSTRAINT `rekam_medis_ibfk_3` FOREIGN KEY (`kd_user`) REFERENCES `login` (`kd_user`),
  ADD CONSTRAINT `rekam_medis_ibfk_4` FOREIGN KEY (`no_pasien`) REFERENCES `pasien` (`no_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
