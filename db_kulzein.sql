-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2021 pada 07.07
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kulzein`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(100) NOT NULL,
  `judul_artikel` varchar(250) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `judul_artikel`, `gambar`, `deskripsi`, `tgl_upload`) VALUES
(1, 'Makanan 4 sehat 5 sempurna ala kulzein ala alaaaaa', 'OIP.jpg', 'ini adalah makanan 4 sehat 5 sempurna ala kulzein ala alaa', '2021-02-27'),
(2, 'Makanan Diet Ala Kulzein yailahh ya', 'OIP.jpg', 'Ini adalah makanan makanan diet terbaru kami yang sehat dan tidak menimbulkan efek samping mantap', '2021-02-26'),
(3, 'Ternyata Pisang Berguna Untuk Tubuh Manusia lhoo', 'OIP (1).jpg', 'Ini adalah makanan makanan  terbaru kami yang sehat dan tidak menimbulkan efek samping', '2021-02-11'),
(4, 'Tahu Gak sih tentang Catering Terbaik di Indonesia?', 'cf978278402297.5ca6085aa878c.jpg', 'Kulzein solusi untuk kalian pecinta kuliner indonesia ', '2021-02-10'),
(5, 'Kalian Tahu ini ga? ini adalah makanan sehat loh ala Kulzein', 'OIP (1).jpg', 'Ini adalah makanan sehat unggulan kami yang tidak menimbulkan efek samping yang berlebihan', '2021-02-09'),
(6, 'ini adalah artikel kesehatan', 'OIP.jpg', 'ini adalah artikel paling bagus se nusantara', '2021-02-27'),
(7, 'Artikel Paling Unggulan di Kulzein', 'Foto-Makanan-Bagus.jpg', 'ini adalah artikel tentang kesehatan ala kulzein', '2021-02-12'),
(8, 'apaan si ini ?', 'OIP.jpg', 'apaan si ini yailaaahhh', '2021-02-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `id_checkout` int(100) NOT NULL,
  `no_pembayaran` varchar(200) NOT NULL,
  `id_kostumer` int(100) NOT NULL,
  `id_menu` int(10) NOT NULL,
  `alamat_tujuan` varchar(200) NOT NULL,
  `tanggal_order` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `total` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`id_checkout`, `no_pembayaran`, `id_kostumer`, `id_menu`, `alamat_tujuan`, `tanggal_order`, `batas_bayar`, `total`, `status`) VALUES
(1, 'PRAB011', 1, 3, 'Jalan Taweuran NO.14, Bogor tengah', '2021-02-13 13:35:52', '2021-02-13 14:05:52', 450000, 'Pesanan Diproses'),
(2, 'PEAB01', 2, 2, 'Jalan Taweuran NO.15, Bogor', '2021-04-13 13:19:27', '2021-04-13 13:49:27', 50000, 'Selesai'),
(3, 'PRTC01', 3, 3, 'Jalan Ismaya II', '2021-01-04 12:08:29', '2021-01-04 12:38:29', 20000, 'Pesanan Dikirim'),
(4, 'PRAB02', 1, 1, 'Jalan Padjajaran No.12, Bogor', '2021-03-13 12:08:40', '2021-03-13 12:38:40', 40000, 'Pesanan Diproses'),
(5, 'PEAB02', 2, 2, 'Jalan Melati No.13, Bogor', '2021-03-13 12:08:48', '2021-03-13 12:38:48', 60000, 'Menunggu Pembayaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kostumer`
--

CREATE TABLE `tbl_kostumer` (
  `id_kostumer` int(10) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kata_sandi` varchar(200) NOT NULL,
  `nomor_telepon` varchar(50) NOT NULL,
  `foto_kostumer` varchar(100) NOT NULL,
  `alamat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kostumer`
--

INSERT INTO `tbl_kostumer` (`id_kostumer`, `nama_lengkap`, `jenis_kelamin`, `email`, `kata_sandi`, `nomor_telepon`, `foto_kostumer`, `alamat`) VALUES
(1, 'Santika Wahyu Lestari', 'Perempuan', 'santika1213@gmail.com', '61ddf579c533054cacff7d9c14e44a05', '081818269376', 'FotoSantika.png', 'Jl.Taweuran VI No.17, Tegal Gundil '),
(2, 'Maulana Ichsan', 'Laki-laki', 'maul.ihsan09@gmail.com', '25488f3e8ebc62e1645f5f9f998eb4fa', '085711223344', 'photo_MaulanaIchsan.jpg', 'Jl.Kebon Jeruk , No.99'),
(3, 'Muhammad Ardhan', 'Laki-laki', 'thoeriqulfahmi@gmail.com', '5a57faea8abafa6744eaaf0c6958fe8a', '089612659370', 'FotoArdhan.jpeg', 'Jalan Ismaya II No.8, Bogor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `nama_produk`) VALUES
(1, 'Rumahan'),
(2, 'Event'),
(3, 'Ready to cook');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk_event`
--

CREATE TABLE `tbl_produk_event` (
  `id_p_event` int(10) NOT NULL,
  `nama_p_event` varchar(200) NOT NULL,
  `deskripsi_p_event` text NOT NULL,
  `harga_p_event` varchar(100) NOT NULL,
  `foto_p_event` varchar(200) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk_event`
--

INSERT INTO `tbl_produk_event` (`id_p_event`, `nama_p_event`, `deskripsi_p_event`, `harga_p_event`, `foto_p_event`, `tanggal_upload`) VALUES
(1, 'All Beef In Kulzein Catering', 'kulzein memiliki produk catering bernama all beef yaitu serba daging yang mempunyai harga terjangkau dan tidak membuat kantong kering loh', '200000', 'OIP (1).jpg', '2021-03-10'),
(2, 'All Vegetable in Kulzein Catering', 'kulzein memiliki produk catering bernama all Vegetable yaitu makanan serba sayur yang mempunyai harga terjangkau dan tidak membuat kantong kering loh', '150000', 'OIP.jpg', '2021-03-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk_rumahan`
--

CREATE TABLE `tbl_produk_rumahan` (
  `id_p_rumahan` int(10) NOT NULL,
  `nama_p_rumahan` varchar(100) NOT NULL,
  `deskripsi_p_rumahan` text NOT NULL,
  `harga_p_rumahan` varchar(100) NOT NULL,
  `foto_p_rumahan` varchar(100) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk_rumahan`
--

INSERT INTO `tbl_produk_rumahan` (`id_p_rumahan`, `nama_p_rumahan`, `deskripsi_p_rumahan`, `harga_p_rumahan`, `foto_p_rumahan`, `tanggal_upload`) VALUES
(2, 'Betawi Culiner Indonesia', 'kulzein memiliki produk catering yaitu NUSA by betawi culiner yang mempunyai harga terjangkau dan tidak membuat kantong kering loh', '500000', 'OIP (1).jpg', '2021-03-02'),
(3, 'Twenty Eight All Beef', 'kulzein memiliki produk catering yaitu Twenty Eight All Beef yang mempunyai harga terjangkau dan tidak membuat kantong kering loh', '100000', 'OIP.jpg', '2021-02-10'),
(4, 'The soy story', 'kulzein memiliki produk catering The Story dan sekarang menjadi menu makanan andalan kami  yang mempunyai harga terjangkau dan tidak membuat kantong kering loh', '40000', 'snack (1).jpg', '2021-02-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ready_to_cook`
--

CREATE TABLE `tbl_ready_to_cook` (
  `id_p_ready_to_cook` int(10) NOT NULL,
  `nama_p_ready_to_cook` varchar(200) NOT NULL,
  `deskripsi_p_ready_to_cook` text NOT NULL,
  `harga_p_ready_to_cook` varchar(100) NOT NULL,
  `foto_p_ready_to_cook` varchar(200) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ready_to_cook`
--

INSERT INTO `tbl_ready_to_cook` (`id_p_ready_to_cook`, `nama_p_ready_to_cook`, `deskripsi_p_ready_to_cook`, `harga_p_ready_to_cook`, `foto_p_ready_to_cook`, `tanggal_upload`) VALUES
(1, 'Indomie goreng extra pedas', 'ini merupakan bukan mie biasa, melainkan mie yang mempunyai rasa yang gurih dan nikmat serta pedasnya yang bikin ketagihan', '15000', 'mie_goreng_extrapedas.jpg', '2021-03-04'),
(2, 'Bakso Goreng Tusuk', 'Bakso goreng ini bukan bakso goreng biasa, melainkan memiliki rasa yang sangat unik dan pastinya beda dari bakso bakso goreng lainnya.', '10000', 'bakso_goreng.jpg', '2021-03-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto_admin` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `foto_admin`, `email`, `password`) VALUES
(1, 'Admin', 'avatar5.png', 'dilobogor@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indeks untuk tabel `tbl_kostumer`
--
ALTER TABLE `tbl_kostumer`
  ADD PRIMARY KEY (`id_kostumer`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tbl_produk_event`
--
ALTER TABLE `tbl_produk_event`
  ADD PRIMARY KEY (`id_p_event`);

--
-- Indeks untuk tabel `tbl_produk_rumahan`
--
ALTER TABLE `tbl_produk_rumahan`
  ADD PRIMARY KEY (`id_p_rumahan`);

--
-- Indeks untuk tabel `tbl_ready_to_cook`
--
ALTER TABLE `tbl_ready_to_cook`
  ADD PRIMARY KEY (`id_p_ready_to_cook`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `id_checkout` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kostumer`
--
ALTER TABLE `tbl_kostumer`
  MODIFY `id_kostumer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk_event`
--
ALTER TABLE `tbl_produk_event`
  MODIFY `id_p_event` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk_rumahan`
--
ALTER TABLE `tbl_produk_rumahan`
  MODIFY `id_p_rumahan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_ready_to_cook`
--
ALTER TABLE `tbl_ready_to_cook`
  MODIFY `id_p_ready_to_cook` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
