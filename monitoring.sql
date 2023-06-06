-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2023 pada 10.45
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '13c2c07aec4c6ae6e42d98013668d70c', '2023-03-05 11:22:40'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '856c35795b6bb49bad04fab0938fcf33', '2023-03-05 11:49:41'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '829e880c681e5cd75db51020741f364b', '2023-03-06 23:47:37'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'a37e3db19bc072dc7a0c20fb9b66b650', '2023-03-09 01:30:29'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '94763730cb748b41fad28456ff607398', '2023-04-10 10:03:46'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'a3c489a68da44828b1399d75c22fd8ea', '2023-05-09 01:40:02'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'ed111ab676be850b6b6443aac7aa9f00', '2023-05-17 18:39:17'),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', '912c1a2a3de3bf22ee0899e14c8989a6', '2023-05-26 15:09:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'caturmaldini@gmail.com', 19, '2023-03-05 11:36:51', 1),
(2, '::1', 'caturmaldini@gmail.com', 19, '2023-03-05 11:38:41', 1),
(3, '::1', 'caturmaldini@gmail.com', 19, '2023-03-05 11:42:24', 1),
(4, '::1', 'caturmaldini@gmail.com', 19, '2023-03-05 11:43:14', 1),
(5, '::1', 'caturmaldini@gmail.com', 19, '2023-03-05 11:43:36', 1),
(6, '::1', 'caturmaldini@gmail.com', 19, '2023-03-05 11:45:49', 1),
(7, '::1', 'caturmaldini@gmail.com', 19, '2023-03-05 11:45:57', 1),
(8, '::1', 'caturmaldini@gmail.com', 19, '2023-03-05 11:46:35', 1),
(9, '::1', 'caturmaldini@gmail.com', 19, '2023-03-05 11:47:24', 1),
(10, '::1', 'Coach kepala', 20, '2023-03-05 11:49:26', 0),
(11, '::1', 'caturmaldini@gmail.com', 20, '2023-03-05 11:49:44', 1),
(12, '::1', 'caturmaldini@gmail.com', 20, '2023-03-05 20:26:56', 1),
(13, '::1', 'caturmaldini@gmail.com', 20, '2023-03-05 20:30:02', 1),
(14, '::1', 'caturmaldini@gmail.com', 20, '2023-03-06 04:40:38', 1),
(15, '::1', 'caturmaldini@gmail.com', 20, '2023-03-06 04:49:18', 1),
(16, '::1', 'caturmaldini@gmail.com', 20, '2023-03-06 05:23:44', 1),
(17, '::1', 'Coach kepala', NULL, '2023-03-06 23:45:43', 0),
(18, '::1', 'caturmaldini@gmail.com', 21, '2023-03-06 23:47:53', 1),
(19, '::1', 'caturmaldini@gmail.com', 21, '2023-03-06 23:49:23', 1),
(20, '::1', 'caturmaldini@gmail.com', 21, '2023-03-07 23:58:22', 1),
(21, '::1', 'caturmaldini@gmail.com', 21, '2023-03-08 11:45:07', 1),
(22, '::1', 'caturmaldini@gmail.com', 21, '2023-03-09 01:27:13', 1),
(23, '::1', 'caturmaldini@gmail.com', 22, '2023-03-09 01:30:59', 1),
(24, '::1', 'caturmaldini@gmail.com', 22, '2023-03-09 06:50:58', 1),
(25, '::1', 'CoachMilan', NULL, '2023-03-09 07:42:04', 0),
(26, '::1', 'CoachMilan', NULL, '2023-03-09 07:42:13', 0),
(27, '::1', 'CoachMilan', NULL, '2023-03-09 07:42:33', 0),
(28, '::1', 'caturmaldini@gmail.com', 22, '2023-03-09 07:42:47', 1),
(29, '::1', 'caturmaldini@gmail.com', 22, '2023-03-09 07:45:01', 1),
(30, '::1', 'caturmaldini@gmail.com', 22, '2023-03-09 08:08:42', 1),
(31, '::1', 'caturmaldini@gmail.com', 22, '2023-03-09 08:30:42', 1),
(32, '::1', 'clarissa', 23, '2023-04-10 08:03:22', 0),
(33, '::1', 'cputriaurellia@gmail.com', 26, '2023-04-10 10:03:52', 1),
(34, '::1', 'cputriaurellia@gmail.com', 26, '2023-04-12 18:54:17', 1),
(35, '::1', 'cputriaurellia@gmail.com', 26, '2023-04-13 07:49:27', 1),
(36, '::1', 'cputriaurellia@gmail.com', 26, '2023-04-13 07:53:39', 1),
(37, '::1', 'cputriaurellia@gmail.com', 26, '2023-04-27 04:00:16', 1),
(38, '::1', 'cputriaurellia@gmail.com', 26, '2023-04-27 04:13:41', 1),
(39, '::1', 'cputriaurellia@gmail.com', 26, '2023-04-28 02:18:09', 1),
(40, '::1', 'cputriaurellia@gmail.com', 26, '2023-05-05 02:47:05', 1),
(41, '::1', 'cputriaurellia@gmail.com', 26, '2023-05-07 00:38:55', 1),
(42, '::1', 'cputriaurellia@gmail.com', 26, '2023-05-07 01:22:07', 1),
(43, '::1', 'cputriaurellia@gmail.com', 26, '2023-05-07 09:18:42', 1),
(44, '::1', 'cputriaurellia@gmail.com', 26, '2023-05-08 21:37:49', 1),
(45, '::1', 'clarissaurellia37@student.uns.ac.id', 28, '2023-05-09 01:40:12', 1),
(46, '::1', 'clarissaurellia37@student.uns.ac.id', 28, '2023-05-10 04:51:42', 1),
(47, '::1', 'clarissaurellia37@student.uns.ac.id', 28, '2023-05-10 20:00:13', 1),
(48, '::1', 'clarissaurellia37@student.uns.ac.id', 28, '2023-05-11 06:19:23', 1),
(49, '::1', 'clarissaurellia37@student.uns.ac.id', 28, '2023-05-11 07:33:47', 1),
(50, '::1', 'clarissaurellia37@student.uns.ac.id', 28, '2023-05-11 08:04:06', 1),
(51, '::1', 'caturmaldini@gmail.com', 30, '2023-05-17 18:39:35', 1),
(52, '::1', 'ayangeclar12', NULL, '2023-05-18 10:17:18', 0),
(53, '::1', 'caturmaldini@gmail.com', 30, '2023-05-18 10:18:59', 1),
(54, '::1', 'caturmaldini@gmail.com', 30, '2023-05-23 13:34:16', 1),
(55, '::1', 'caturmaldini@gmail.com', 30, '2023-05-23 19:31:53', 1),
(56, '::1', 'caturmaldini@gmail.com', 30, '2023-05-26 13:51:57', 1),
(57, '::1', 'caturmaldini@gmail.com', 30, '2023-05-26 13:51:58', 1),
(58, '::1', 'caturcawerz87@gmail.com', 31, '2023-05-26 15:09:19', 1),
(59, '::1', 'caturmaldini@gmail.com', 30, '2023-05-26 15:17:21', 1),
(60, '::1', 'caturcawerz87@gmail.com', 31, '2023-05-26 15:22:04', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, 'caturmaldini@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', '798e2d5098b44c5988a2fef4c6d6e03d', '2023-05-18 10:18:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datauser`
--

CREATE TABLE `datauser` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomor` varchar(25) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datauser`
--

INSERT INTO `datauser` (`id`, `username`, `slug`, `nama`, `password`, `nomor`, `level`) VALUES
(1, 'Clarissa mbul', '', 'Clarissa Putri Aurellia', 'simo12345', '087656432231', 'Superadmin'),
(2, 'Admin25', 'admin-25', 'Admin Karyawan', 'admin9090', '0908987654523', 'karyawan'),
(3, 'Admin', 'admin', 'Adminadmin', 'admin990', '098989765535', 'karyawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `grafikbaterai`
--

CREATE TABLE `grafikbaterai` (
  `id_tb` int(11) NOT NULL,
  `waktu_b` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tegangan_b` int(11) NOT NULL,
  `arus_b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `grafikbaterai`
--

INSERT INTO `grafikbaterai` (`id_tb`, `waktu_b`, `tegangan_b`, `arus_b`) VALUES
(1, '2023-05-13 19:49:53', 5, 4),
(2, '2023-05-13 19:49:53', 7, 3),
(3, '2023-05-13 19:49:53', 10, 12),
(4, '2023-05-13 19:49:53', 9, 15),
(5, '2023-05-13 19:49:53', 20, 16),
(6, '2023-05-13 20:12:37', 5, 15),
(7, '2023-05-03 13:58:46', 13, 60),
(8, '2023-05-04 13:58:46', 3, 17),
(9, '2023-05-06 13:59:08', 90, 90),
(10, '2023-05-26 13:59:21', 80, 80),
(11, '2023-05-07 13:59:25', 68, 68),
(12, '2023-05-08 13:59:25', 87, 87),
(13, '2023-05-26 14:00:21', 13, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `grafikoutput`
--

CREATE TABLE `grafikoutput` (
  `id_output` int(11) NOT NULL,
  `waktu_o` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tegangan_o` int(11) NOT NULL,
  `arus_o` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `grafikoutput`
--

INSERT INTO `grafikoutput` (`id_output`, `waktu_o`, `tegangan_o`, `arus_o`) VALUES
(1, '2023-05-13 19:50:59', 5, 10),
(2, '2023-05-13 19:50:59', 15, 5),
(3, '2023-05-13 19:50:59', 4, 2),
(4, '2023-05-13 19:50:59', 8, 9),
(5, '2023-05-13 19:50:59', 20, 12),
(6, '2023-05-13 19:50:59', 23, 12),
(7, '2023-05-26 14:15:59', 15, 15),
(8, '2023-05-26 14:15:59', 65, 76),
(9, '2023-05-26 14:16:32', 45, 65),
(10, '2023-05-26 14:16:32', 76, 87),
(11, '2023-05-26 14:16:47', 45, 45),
(12, '2023-05-26 14:16:47', 34, 34);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanharian`
--

CREATE TABLE `laporanharian` (
  `id` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `tegangan` int(255) NOT NULL,
  `arus` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporanharian`
--

INSERT INTO `laporanharian` (`id`, `username`, `slug`, `tgl_kegiatan`, `jam_mulai`, `jam_selesai`, `tegangan`, `arus`, `keterangan`) VALUES
(11, 'catur12.prasetyo_edi', 'catur12prasetyo_edi', '1211-12-12', '12:21:00', '12:12:00', 12, 21, '21'),
(12, 'Clarissaurellia37@student.uns.ac.id', 'clarissaurellia37studentunsacid', '1111-12-12', '12:12:00', '12:21:00', 12, 12, '12'),
(13, 'simolodro', 'simolodro', '1900-12-12', '13:13:00', '03:01:00', 13, 13, '50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login_user`
--

INSERT INTO `login_user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, '', 'adac', '', '', 0, 0, 0),
(2, '', 'adac', '', '', 0, 0, 0),
(3, '', 'admin1', '', '', 0, 0, 0),
(4, '', 'admin1', '', '', 0, 0, 0),
(5, '', 'admin1', '', '', 0, 0, 0),
(6, '', 'admin234', '', '', 0, 0, 0),
(7, '', 'admin234', '', '', 0, 0, 0),
(8, '', 'admin12', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `plts`
--

CREATE TABLE `plts` (
  `id` int(11) NOT NULL,
  `data_plts` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `plts`
--

INSERT INTO `plts` (`id`, `data_plts`, `slug`) VALUES
(1, 'PLTS KAMPUS ', 'plts-kampus'),
(2, 'PLTS SIMO', 'plts-simo'),
(4, 'PLTS KACANGAN', 'plts-kacangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tegangan`
--

CREATE TABLE `tegangan` (
  `id` int(10) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tegangan` varchar(255) NOT NULL,
  `arus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tegangan`
--

INSERT INTO `tegangan` (`id`, `waktu`, `tegangan`, `arus`) VALUES
(1, '2023-05-13 15:51:21', '5', '5'),
(2, '2023-05-13 15:51:21', '10', '5'),
(3, '2023-05-13 15:51:21', '15', '15'),
(4, '2023-05-13 15:51:21', '20', '20'),
(6, '2023-05-13 15:51:21', '12', '45'),
(7, '2023-05-13 15:51:21', '6', '7'),
(8, '2023-05-13 15:51:21', '18', '20'),
(9, '2023-05-13 15:51:21', '39', '13'),
(10, '2023-05-13 15:51:21', '12', '12'),
(11, '2023-05-13 15:51:21', '23', '12'),
(12, '2023-05-03 13:53:24', '12', '14'),
(13, '2023-05-26 13:57:49', '200 ', '10 ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(30, 'caturmaldini@gmail.com', 'ayangeclar12', '$2y$10$bMcRxEG90S1VGXynIi77Tu6Qn7x7gqxx0L4fN3Mad.VnBIqiDCUaG', NULL, '2023-05-18 10:18:48', NULL, NULL, NULL, NULL, 1, 0, '2023-05-17 18:38:58', '2023-05-18 10:18:48', NULL),
(31, 'caturcawerz87@gmail.com', 'Assisten', '$2y$10$JLYF1j7lf5ZbckF/SzcRieoQFseMOqIh1gUlw..XDxVIxspARDzfG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-26 15:08:52', '2023-05-26 15:09:11', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `grafikbaterai`
--
ALTER TABLE `grafikbaterai`
  ADD PRIMARY KEY (`id_tb`);

--
-- Indeks untuk tabel `grafikoutput`
--
ALTER TABLE `grafikoutput`
  ADD PRIMARY KEY (`id_output`);

--
-- Indeks untuk tabel `laporanharian`
--
ALTER TABLE `laporanharian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `plts`
--
ALTER TABLE `plts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tegangan`
--
ALTER TABLE `tegangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datauser`
--
ALTER TABLE `datauser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `grafikbaterai`
--
ALTER TABLE `grafikbaterai`
  MODIFY `id_tb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `grafikoutput`
--
ALTER TABLE `grafikoutput`
  MODIFY `id_output` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `laporanharian`
--
ALTER TABLE `laporanharian`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `plts`
--
ALTER TABLE `plts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tegangan`
--
ALTER TABLE `tegangan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
