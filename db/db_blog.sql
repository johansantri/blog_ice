-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2021 at 08:59 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id_blog` varchar(64) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug_title` varchar(255) NOT NULL,
  `meta` text NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` enum('draft','post','delete','') NOT NULL,
  `create_ad` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_ad` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id_blog`, `title`, `slug_title`, `meta`, `description`, `tags`, `id_kategori`, `id_sub`, `id_user`, `status`, `create_ad`, `update_ad`, `image`) VALUES
('608ef58acf166', 'cara membuat blog', 'cara-membuat-blog', 'abstrak dari blog', '<div class=\"app-sidebar__user\">\r\n<div>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n\r\n<ul>\r\n	<li><a class=\"app-menu__item active\" href=\"http://localhost/blog_ice/blog/dashboard.html\">Dashboard</a></li>\r\n	<li><a class=\"app-menu__item\" href=\"http://localhost/blog_ice/blog/add#\">Master Data</a>\r\n	<ul>\r\n		<li><a class=\"treeview-item\" href=\"http://localhost/blog_ice/kategori\">Kategori</a></li>\r\n		<li><a class=\"treeview-item\" href=\"http://localhost/blog_ice/sub\" rel=\"noopener\">Sub Kategori</a></li>\r\n		<li><a class=\"treeview-item\" href=\"http://localhost/blog_ice/slide\">Slide</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a class=\"app-menu__item\" href=\"http://localhost/blog_ice/kontent\">POST</a></li>\r\n	<li><a class=\"app-menu__item\" href=\"http://localhost/blog_ice/transaksi\">Transaksi</a></li>\r\n</ul>\r\n\r\n<div class=\"app-title\">\r\n<div>\r\n<h1>Data Table</h1>\r\n\r\n<p>Table to display analytical data effectively</p>\r\n</div>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>Tables</li>\r\n	<li><a href=\"http://localhost/blog_ice/blog\">Data Table</a></li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"tile\">\r\n<div class=\"tile-body\">\r\n<div class=\"table-responsive\">&nbsp;\r\n<div class=\"card mb-3\">\r\n<div class=\"card-header\">&nbsp;</div>\r\n\r\n<div class=\"card-body\">\r\n<form action=\"\" enctype=\"multipart/form-data\" method=\"post\">\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<div class=\"form-group\">title <input name=\"title\" type=\"text\" /></div>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<div class=\"form-group\">meta <input name=\"meta\" type=\"text\" /></div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"form-group\">Deskripsi</div>\r\n</form>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 'tags', 1, 1, 2, 'draft', '2021-05-02 18:56:10', '2021-05-02 01:56:10', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galery`
--

CREATE TABLE `tb_galery` (
  `id_galery` int(11) NOT NULL,
  `nama_galery` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nama_karyawan`, `no_hp`, `alamat`) VALUES
(2, 'suryaaaaaaa', '1234', 'Alamat Karyawan'),
(3, 'jokowi', '086767', 'solo'),
(4, 'prabowo', '3423423', 'karang asem'),
(5, 'mega wati', '305345', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `slug_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `slug_kategori`) VALUES
(1, 'Teknologi', 'teknologi'),
(2, 'Ekonomi', 'ekonomi'),
(3, 'Hukum', 'hukum'),
(4, 'Olahraga', 'olahraga'),
(5, 'Page', 'page');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontent`
--

CREATE TABLE `tb_kontent` (
  `id_kontent` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug_title` varchar(200) NOT NULL,
  `meta` text NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(200) NOT NULL,
  `image` tinytext NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `create_ad` datetime NOT NULL,
  `update_ad` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `status` enum('draft','post','delete','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_hp`, `alamat`) VALUES
(1, 'Jhoni', '0877777777', 'jakarta'),
(2, 'raisa', '08782432', 'depok'),
(3, 'ariel tatum', '09435345', 'jakarta'),
(4, 'dian sastro', '978979879', 'jakarta'),
(5, 'nicolas', '86276826', 'jerman'),
(6, 'ahmad dani', '678637837', 'jakarta'),
(7, 'tukul', '8798797', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `keterangan_produk` text NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `kode_produk`, `nama_produk`, `slug`, `jenis`, `keterangan_produk`, `satuan`, `harga`) VALUES
(1, '1-12-04-2021', 'Perawatan Rambut', 'perawatan-rambut', '', 'Facial Mustika Ratu', 'unit', 100000),
(2, '2-12-04-2021', 'Perawatan Mata', 'perawatan-mata', '', 'wwwwwwwwwww', 'unit', 500000),
(3, '5-13-04-2021', 'Perawatan Kaki', 'perawatan-kaki', '', 'uuuuuuuuuuu', 'kg', 1000000),
(4, '6-15-04-2021', 'Cuci Blow', 'cuci-blow', '', 'cuci blow', 'on', 250000),
(5, '7-15-04-2021', 'Gunting Cuci Blow', 'gunting-cuci-blow', '', 'Gunting Cuci Blow', 'on', 300000),
(6, '8-15-04-2021', 'Catok', 'catok', '', 'catok', 'on', 450000),
(7, '9-15-04-2021', 'Cheyi Treatment Creambath', 'cheyi-treatment-creambath', '', 'Cheyi Treatment Creambath', 'on', 7300000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_slide`
--

CREATE TABLE `tb_slide` (
  `id_slide` varchar(64) NOT NULL,
  `nama_slide` varchar(200) NOT NULL,
  `deskripsi_slide` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'default.jpg',
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_slide`
--

INSERT INTO `tb_slide` (`id_slide`, `nama_slide`, `deskripsi_slide`, `image`, `id_kategori`) VALUES
('608ef0404dc35', 'Nama slide', 'czxczxc', 'default.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sub_kategori`
--

CREATE TABLE `tb_sub_kategori` (
  `id_sub` int(11) NOT NULL,
  `nama_sub` varchar(200) NOT NULL,
  `slug_sub` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sub_kategori`
--

INSERT INTO `tb_sub_kategori` (`id_sub`, `nama_sub`, `slug_sub`, `id_kategori`) VALUES
(1, 'Sistem Pakar', 'sistem-pakar', 1),
(2, 'Bola Voli', 'bola-voli', 4),
(3, 'Devisit', 'devisit', 2),
(4, 'Hukum Internasional', 'hukum-internasional', 3),
(5, 'About', 'about', 5),
(6, 'Visi-misi', 'visi-misi', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_token`
--

CREATE TABLE `tb_token` (
  `id_token` int(11) NOT NULL,
  `token` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_token`
--

INSERT INTO `tb_token` (`id_token`, `token`, `id_user`, `created`) VALUES
(0, '712af5269d92b0788342351779fe46', 2, '2021-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `point_karyawan` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  `total_diskon` int(11) NOT NULL,
  `total_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `kode_transaksi`, `id_pelanggan`, `total_bayar`, `tgl_transaksi`, `point_karyawan`, `bayar`, `kembali`, `total_diskon`, `total_transaksi`) VALUES
(2, 'TRS0000', 1, 0, '2021-04-18 00:00:00', 0, 0, 0, 0, 0),
(14, 'TRS0001', 3, 5575000, '2021-04-26 00:00:00', 0, 5000000, 261250, 15, 4738750);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_detail`
--

CREATE TABLE `tb_transaksi_detail` (
  `id_trans` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_karyawanA` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `point_save` int(11) NOT NULL,
  `bagi_satu` int(11) NOT NULL,
  `bagi_dua` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `bagi_kapster` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi_detail`
--

INSERT INTO `tb_transaksi_detail` (`id_trans`, `id_produk`, `kode_transaksi`, `id_karyawan`, `id_karyawanA`, `diskon`, `total`, `created`, `id_user`, `point_save`, `bagi_satu`, `bagi_dua`, `point`, `bagi_kapster`) VALUES
(176, 1, 'TRS0001', 3, 0, 0, 100000, '2021-04-26', 2, 0, 0, 0, 0, 0),
(177, 7, 'TRS0001', 4, 2, 25, 5475000, '2021-04-26', 2, 1825000, 219000, 219000, 8, 438000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `status` enum('tolak','terima','','') NOT NULL,
  `level` enum('member','admin','super','') NOT NULL,
  `tgl_daftar` date NOT NULL,
  `terakhir_masuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email`, `password`, `status`, `level`, `tgl_daftar`, `terakhir_masuk`) VALUES
(2, 'test', 'test@gmail.com', '$2y$10$6.AnyLrTkALpQxY19TJCTOIhL1hjn9n4l1lHKn18MupUINjMj2w42', 'terima', 'member', '0000-00-00', '2021-04-11 21:16:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kontent`
--
ALTER TABLE `tb_kontent`
  ADD PRIMARY KEY (`id_kontent`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_slide`
--
ALTER TABLE `tb_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `tb_sub_kategori`
--
ALTER TABLE `tb_sub_kategori`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_transaksi_detail`
--
ALTER TABLE `tb_transaksi_detail`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_galery`
--
ALTER TABLE `tb_galery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kontent`
--
ALTER TABLE `tb_kontent`
  MODIFY `id_kontent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_sub_kategori`
--
ALTER TABLE `tb_sub_kategori`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_transaksi_detail`
--
ALTER TABLE `tb_transaksi_detail`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
