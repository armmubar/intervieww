-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Mei 2020 pada 14.32
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kusuma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `NamaLengkap` varchar(30) NOT NULL,
  `TempatLahir` varchar(30) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `JenisKelamin` varchar(10) NOT NULL,
  `NIP` int(11) NOT NULL,
  `Agama` varchar(11) NOT NULL,
  `Jabatan` text NOT NULL,
  `AlamatTetap` varchar(60) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `AlamatSekarang` varchar(60) NOT NULL,
  `Cuti` varchar(30) NOT NULL,
  `NomorHp` varchar(30) NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_karyawan`
--

INSERT INTO `data_karyawan` (`NamaLengkap`, `TempatLahir`, `TanggalLahir`, `JenisKelamin`, `NIP`, `Agama`, `Jabatan`, `AlamatTetap`, `Email`, `AlamatSekarang`, `Cuti`, `NomorHp`, `Keterangan`) VALUES
('adi agung kususma   ', 'ngawi', '1998-03-29', 'Pria', 1234567, 'Islam', 'Pegawai', 'kasreman', 'agung@gmail.com', 'jl siaga i', '4', '081219244098', 'hasil jinerja prgawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapot`
--

CREATE TABLE `rapot` (
  `nip` varchar(30) NOT NULL,
  `namalengkap` varchar(30) NOT NULL,
  `tepatwaktu` varchar(30) NOT NULL,
  `kedisplinan` varchar(30) NOT NULL,
  `kerapihan` varchar(30) NOT NULL,
  `keramahan` varchar(30) NOT NULL,
  `tanggungjawab` varchar(30) NOT NULL,
  `komunikasi` varchar(30) NOT NULL,
  `rasasimpatiempati` varchar(30) NOT NULL,
  `pelayanankepadakonsumen` varchar(30) NOT NULL,
  `pengetahuankemampuanteknis` varchar(30) NOT NULL,
  `efesiensiefektifkerja` varchar(30) NOT NULL,
  `kerjasamadalambekerja` varchar(30) NOT NULL,
  `kecepatandalambekerja` varchar(30) NOT NULL,
  `kreatifitasdalambekerja` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rapot`
--

INSERT INTO `rapot` (`nip`, `namalengkap`, `tepatwaktu`, `kedisplinan`, `kerapihan`, `keramahan`, `tanggungjawab`, `komunikasi`, `rasasimpatiempati`, `pelayanankepadakonsumen`, `pengetahuankemampuanteknis`, `efesiensiefektifkerja`, `kerjasamadalambekerja`, `kecepatandalambekerja`, `kreatifitasdalambekerja`, `keterangan`) VALUES
('197010192009011020', 'arman', 'baik', 'baik', 'baik', 'baik', 'baik', 'cukup', 'cukup', 'cukup', 'baik', 'cukup', 'cukup', 'buruk', 'buruk', 'test1'),
('1234567', 'adi agung kkusumma', 'baik', 'baik', 'baik', 'baik', 'baik', 'baik', 'baik', 'baik', 'cukup', 'cukup', 'baik', 'cukup', 'cukup', 'semangat terus'),
('2345678', 'kristo', 'baik', 'baik', 'baik', 'cukup', 'baik', 'baik', 'baik', 'cukup', 'baik', 'cukup', 'baik', 'cukup', 'cukup', 'tingkatkan lagi ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin'),
('agung', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
