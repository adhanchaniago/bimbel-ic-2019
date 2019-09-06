-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 04:50 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `revisi_bimbel08desember`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id_album` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `seo` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=201 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `nama`, `gambar`, `seo`) VALUES
(194, 'SISWA ACEH', 'indonesia-college-yogyakarta791320siswa-acehmystudio227558siswa-acehIMG-20150817-WA0002.jpg', 'siswa-aceh'),
(195, 'BIMBINGAN IC 2016', 'indonesia-college-yogyakarta32623kedokteran-terpadu-20162017mystudio13bimbingan-ic-2016BIMBINGAN-IC-2016.jpg', 'bimbingan-ic-2016'),
(196, 'KEDOKTERAN TERPADU 2016/2017', 'indonesia-college-yogyakarta213012kedokteran-terpadu-20162017mystudio410712kedokteran-terpadu-20162017terpadu-2016.jpg', 'kedokteran-terpadu-20162017'),
(198, 'Test Nama Gallery', 'indonesia-college-yogyakarta827636test-nama-gallerymystudio13bimbingan-ic-2016BIMBINGAN-IC-2016 (1).jpg', 'test-nama-gallery'),
(199, 'Test Nama Gallery', 'indonesia-college-yogyakarta838531test-nama-gallerymystudio410712kedokteran-terpadu-20162017terpadu-2016.jpg', 'test-nama-gallery');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `id_alumni` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `asal_sekolah` varchar(150) NOT NULL,
  `jurusan_ptn` varchar(150) DEFAULT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `nama`, `asal_sekolah`, `jurusan_ptn`, `gambar`) VALUES
(16, 'Ghuforn', 'SMA 2 Yogyakarta', 'Petenakan', '287811wewe.jpg'),
(17, 'wwww', 'www', 'wwwww', '748870wewel.jpg'),
(18, 'stmkg', 'stmg', 'stmkg', '186641unduhann.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id_articles` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `seo` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_articles`, `title`, `content`, `date`, `seo`) VALUES
(15, 'ARIKEL 1', '<p>SFSSSSSSSSSSSS</p>\r\n<p>SFSSSSSSSSSSSSS</p>', '2016-12-05', '');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id_banner` int(5) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `link` varchar(250) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `nama`, `link`, `gambar`) VALUES
(4, 'TIKI', 'https://sampleurljasapengiriman.com/', '636016jasa kirim - Copy (3).jpg'),
(5, 'JNE', 'https://sampleurljasapengiriman.com/', '686950jasa kirim - Copy (2).jpg'),
(6, 'POS INDONESIA', 'https://sampleurljasapengiriman.com/', '285614jasa kirim - Copy (4).jpg'),
(7, 'EXPRESS COURIER INDONESIA', 'https://sampleurljasapengiriman.com/', '649291jasa kirim - Copy (5).jpg'),
(8, 'INDAH CARGO', 'https://sampleurljasapengiriman.com/', '212066jasa kirim - Copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cabanglain`
--

CREATE TABLE IF NOT EXISTS `cabanglain` (
  `id_cabanglain` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabanglain`
--

INSERT INTO `cabanglain` (`id_cabanglain`, `nama`, `gambar`, `isi`, `tanggal`) VALUES
(18, 'aerfgaw', '7776797mCND5jY.jpg', '<p>sffffffffffff</p>\r\n<p>eeeeeeeeeeeeee</p>\r\n<p>swsssssssssss</p>', '0000-00-00'),
(19, 'wefwer', '418097mCND5jY.jpg', '<p>awefawe</p>', '0000-00-00'),
(20, 'erwerwe', '5255437mCND5jY.jpg', '<p>aergaert</p>', '0000-00-00'),
(21, 'aergqa3we', '604247mCND5jY.jpg', '<p>werwerw</p>', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `categ_porto`
--

CREATE TABLE IF NOT EXISTS `categ_porto` (
  `id_categ_porto` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_seo` varchar(150) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categ_porto`
--

INSERT INTO `categ_porto` (`id_categ_porto`, `nama`, `nama_seo`, `gambar`) VALUES
(5, 'Ruang Entertainment', 'ruang-entertainment', 'mystudio436ruang-entertainmentRuang Entertainment.jpg'),
(6, 'Auditorium', 'auditorium', 'mystudio137auditoriumauditorium.jpg'),
(7, 'Karaoke', 'karaoke', 'mystudio70karaokekaraoke.jpg'),
(8, 'Studio Musik &amp; Recording', 'studio-musik-amp-recording', 'mystudio717studio-musik-amp-recordingstudio musik.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_online`
--

CREATE TABLE IF NOT EXISTS `daftar_online` (
  `daftar_id` int(11) NOT NULL,
  `nama_peserta` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat_rumah` text,
  `no_hp_peserta` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `foto_peserta` text,
  `bukti_pembayaran` text,
  `nama_ortu` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `no_hp_ortu` varchar(255) DEFAULT NULL,
  `bimbingan_id` int(11) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `tempat_program_id` int(11) DEFAULT NULL,
  `asrama_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_online`
--

INSERT INTO `daftar_online` (`daftar_id`, `nama_peserta`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_rumah`, `no_hp_peserta`, `email`, `asal_sekolah`, `foto_peserta`, `bukti_pembayaran`, `nama_ortu`, `pekerjaan`, `no_hp_ortu`, `bimbingan_id`, `program_id`, `kelas_id`, `tempat_program_id`, `asrama_id`, `date`) VALUES
(24, 'Annisa Nurjanah', 'Yogykarta', '2016-11-08', 'Perempuan', 'Gang Melati Wetan 244 C Baciro Gondokusuman', '01927803129', 'anisa@yahoo.com', 'SMK NEGERI 4 Surakarta', 'foto_peserta_106620peserta.jpg', 'bukti_bayar_246366bukti bayar.jpg', 'Joni Hartono', 'Programmer', '91827931829', 26, 19, 15, 2, 3, '2016-11-25'),
(25, 'AGUS', 'BANTUL', '2016-10-05', 'Perempuan', 'SADGASGDASG', '085729014711', 'pinsus2016@gmail.com', 'GHSDGDSG', 'foto_peserta_3267348.jpeg', 'bukti_bayar_46696248.jpeg', 'AGUS', 'GHWSGDSGDS', '085729014711', 19, 10, 13, 5, 3, '2016-11-30'),
(26, 'afafgawg', 'Ff', '2016-09-13', 'Laki-laki', 'afafgs', '085729014711', 'pinsus2016@gmail.com', 'gadgdag', 'foto_peserta_5359422793c-bungahariibudarianaknya.jpg', 'bukti_bayar_5959012793c-bungahariibudarianaknya.jpg', 'sfafas', 'asfaf', '08572901471', 19, 10, 13, 4, 3, '2016-11-30'),
(27, 'nanda', 'bantul', '2016-12-13', 'Laki-laki', 'fafdafdas', '012129183', 'agusnandawijaya@rocketmail.com', 'safdasfa', 'foto_peserta_180965KEUNGGULAN.jpg', 'bukti_bayar_277301KEUNGGULAN.jpg', 'dasfdasfa', 'fadfagsgdsa', 'fasdfwerwerwq', 19, 10, 13, 5, 3, '2016-12-01'),
(28, 'fadafddfaf', 'fdafdfadfa', '2016-12-27', 'Laki-laki', 'afdafdaf', 'adfadfadf', 'agusnandawijaya@rocketmail.com', 'fadfadfadf', 'foto_peserta_226865KEUNGGULAN.jpg', 'bukti_bayar_306441KEUNGGULAN.jpg', 'dfadfadfaf', 'adfadfadfadsf', 'dfasdfafdaf', 19, 10, 13, 5, 3, '2016-12-02'),
(29, 'www', 'wwww', '2016-12-27', 'Laki-laki', 'wwww', '22222', 'edyuty@gmail.com', '233333', 'foto_peserta_230346bukti bayar.jpg', 'bukti_bayar_47027bukti bayar.jpg', '333', '33', '333', 26, 19, 15, 4, 3, '2016-12-02'),
(30, 'anda', 'anda', '2016-12-14', 'Perempuan', 'anda', '085729014711', 'pinsus2016@gmail.com', 'gadgadg', 'foto_peserta_387990166462_165706770141354_2851042_n.jpg', 'bukti_bayar_311976166462_165706770141354_2851042_n.jpg', 'tetwete', 'etewtwet', '085729014711', 19, 10, 14, 5, 3, '2016-12-05'),
(31, 'tes', 'tes', '2016-12-05', 'Perempuan', 'tes', '08572901417', 'pinsus2016@gmail.com', 'tes', 'foto_peserta_796091IMG_20150808_155653.jpg', 'bukti_bayar_789299IMG_20150808_155653.jpg', 'tes', 'tes', '085729014711', 19, 10, 14, 5, 3, '2016-12-06'),
(32, 'dfadfadf', 'dfadfa', '2016-12-23', 'Laki-laki', 'dafdfdfad', 'fdfdafdfa', 'agusnandawijaya@rocketmail.com', 'dasfgadsfeer', 'foto_peserta_140845KEUNGGULAN.jpg', 'bukti_bayar_895444KEUNGGULAN.jpg', 'dfafda', 'fadfadfa', 'dasfdasf', 19, 10, 15, 5, 3, '2016-12-06'),
(33, 'qqqqqqqqqq', 'er2323', '2016-12-21', 'Laki-laki', 'qqqqqqqqqqqqqqqqqqqqqqqqqq', '21312312', 'edi2187321@gmas.com', 'asdas', 'foto_peserta_714156no-image-icon-23.jpg', 'bukti_bayar_778843no-image-icon-23.jpg', 'www', 'www', 'www', 19, 10, 15, 5, 3, '2016-12-07'),
(34, 'Nabila', 'Yogyakarta', '2016-12-28', 'Perempuan', 'Jlan-jalan', '12312312', 'nabila@yahoo.com', 'SMA 1 Yogyakarta', 'foto_peserta_234386peserta.jpg', 'bukti_bayar_311808bukti bayar.jpg', 'Rianto', 'Dosen', '8127832', 19, 10, 15, 4, 3, '2016-12-07'),
(35, 'Nabila', 'Yogyakarta', '2016-12-28', 'Perempuan', 'jal;anmsdas', '12312312', 'nabila@yahoo.com', 'SMA 1 Yogyakarta', 'foto_peserta_223550peserta.jpg', 'bukti_bayar_389377bukti bayar.jpg', 'Rianto', 'Dosen', '23423423', 19, 10, 15, 4, 3, '2016-12-07'),
(36, 'Nabila', 'Yogyakarta', '2016-12-27', 'Perempuan', 'werwewerw', '3423422', 'nabila@yahoo.com', 'werwe', 'foto_peserta_501671wewe.jpg', 'bukti_bayar_292831bukti bayar.jpg', 'werwer', 'werwer', 'werwer', 19, 10, 15, 4, 3, '2016-12-07'),
(37, 'Nabila', 'Yogyakarta', '2016-12-13', 'Perempuan', 'Test', '12312312', 'nabila@yahoo.com', 'SMA 1 Yogyakarta', 'foto_peserta_75950peserta.jpg', 'bukti_bayar_410983bukti bayar.jpg', 'Rianto', 'Dosen', '234', 19, 10, 15, 4, 3, '2016-12-07'),
(38, 'Anisa', 'Wonosari', '2016-12-21', 'Laki-laki', 'test', '23213', 'anissa@yahoo.com', 'qweqwe', 'foto_peserta_407856buktibayar.jpg', 'bukti_bayar_488634buktibayar.jpg', 'qweqw', 'eqwe', 'qweqw', 19, 10, 15, 5, 3, '2016-12-07'),
(39, 'Amelia', 'Yogyakarta', '2016-12-21', 'Perempuan', 'test', '01293801293', 'email@yahoo.com', 'SMA Pembangunan', 'foto_peserta_766594peserta.jpg', 'bukti_bayar_29644buktibayar.jpg', 'rianto', 'dosen', '234213123', 19, 10, 15, 5, 3, '2016-12-07'),
(40, 'Nabila', 'Yogyakarta', '2016-12-21', 'Perempuan', 'test', '234234', 'edi2187321@gmas.com', '12312312', 'foto_peserta_62396peserta.jpg', 'bukti_bayar_669305buktibayar.jpg', 'awewqeqwe', '12312wq', 'qweqweqw', 19, 10, 14, 4, 3, '2016-12-07'),
(41, 'coba  sdfsdfsd', 'Yogyakarta', '2015-07-08', 'Laki-laki', 'test', '65213612312', 'werwer2187321@gmail.com', '12312312', 'foto_peserta_657769peserta.jpg', 'bukti_bayar_180475buktibayar.jpg', 'werwer', 'wewe', '1231231', 19, 10, 14, 4, 3, '2016-12-08'),
(42, 'qqweq qweqweqw', 'weqw', '2016-12-26', 'Perempuan', 'qweqw', '21312312', '123123@sadfs.com', '12312312', 'foto_peserta_586151a.png', 'bukti_bayar_532836g.png', '23423', '42342', '321', 19, 10, 15, 3, 3, '2016-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id_download` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(150) NOT NULL,
  `nama_file` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id_download`, `tanggal`, `judul`, `nama_file`) VALUES
(24, '2015-09-15', 'Logo My Studio', 'mystudio648mystudio-logo-red.png'),
(25, '2015-09-15', 'Document Daftar Portofolio My Studio ', 'mystudio632Portofolio MyStudio.docx'),
(26, '2015-09-15', 'Portofolio My Studio 2014', 'mystudio78mystudio portfolio 2014.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `seo` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=197 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_album`, `nama`, `gambar`, `seo`) VALUES
(196, 194, 'bimbingan ipdn 2016', 'indonesia-college-yogyakarta225708bimbingan-ipdn-2016KEUNGGULAN.jpg', 'bimbingan-ipdn-2016');

-- --------------------------------------------------------

--
-- Table structure for table `hotline`
--

CREATE TABLE IF NOT EXISTS `hotline` (
  `id_hotline` int(5) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `content` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotline`
--

INSERT INTO `hotline` (`id_hotline`, `nama`, `content`) VALUES
(1, 'No. Telphone / SMS', '08xx - xxxx - xxxx'),
(2, 'Email', 'contoh@email.com'),
(3, 'Jam Kerja', '09.00 s/d 20 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `hubungikami`
--

CREATE TABLE IF NOT EXISTS `hubungikami` (
  `id_hubungikami` int(3) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `gambar` text
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hubungikami`
--

INSERT INTO `hubungikami` (`id_hubungikami`, `alamat`, `gambar`) VALUES
(18, 'D174FCF8', '639953bbm.png'),
(19, '085729014711 (Mustofa), 081229934434 (Ratna), 0818461509 (Asih)', '684570phone.png'),
(20, 'pinsus2016@gmail.com', '725433pesan.png'),
(21, 'Pusat Operasional 2 : Jl. Kamboja Kav A1 Sinduadi Yogyakarta Telp. 0274 - 2923336', '902099home11.png'),
(22, 'Pusat Operasional 1 : Jl. Gotong Royong 1174 Yogyakarta Telp. 0274 - 546232', '537261home11.png'),
(23, 'Pusat Administrasi. : Jl. Suryopranoto No. 40 Yogyakarta Telp. 0274 - 547505', '985168home11.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nama_seo` varchar(150) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `nama_seo`) VALUES
(61, 'Peredaman Suara &amp; Akustik Ruang', 'peredaman-suara-amp-akustik-ruang'),
(62, 'Bahan Material Akustik', 'bahan-material-akustik'),
(63, 'Lantai Kayu', 'lantai-kayu'),
(69, 'Software Karaoke', 'software-karaoke'),
(71, 'Sound System Karaoke', 'sound-system-karaoke');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE IF NOT EXISTS `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telphone` varchar(100) NOT NULL,
  `subyek` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text,
  `pesan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `alamat`, `pesan`) VALUES
(16, 'test', 'test@gmail.com', 'alamat', 'Oke tanks');

-- --------------------------------------------------------

--
-- Table structure for table `kontakk`
--

CREATE TABLE IF NOT EXISTS `kontakk` (
  `id_kontak` int(3) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `gambar` text
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontakk`
--

INSERT INTO `kontakk` (`id_kontak`, `alamat`, `phone`, `gambar`) VALUES
(25, '085729014711 (Mustofa), 081229934434 (Ratna), 0818461509 (Asih)', '', '241973phone.png'),
(26, 'www.bimbel-ic.com / www.pmb-ic.com / www.stan-ic.com', '', '555603dunia.png'),
(27, 'D174FCF8', '', '486267bbm.png'),
(28, 'pinsus2016@gmail.com', '', '161102gmail.png'),
(29, 'Cabang Depok : Jl. KH.M Yusuf Raya No. 20 A Sukmajaya Depok ', 'Telp. 021 -7710737', '218719home.png'),
(30, 'Cabang Malang 2 : Jl. La Sucipto Gg 22 GCR No C1 Malang ', 'Telp. 08562914890', '607788home.png'),
(31, 'Cabang Malang 1 : Jl. Candi Kalasan IV No. 23 Malang', 'Telp. 0341-4371317', '827514home.png'),
(32, 'Cabang Semarang 2 : Jl. Dinar Elok A8 Tambalang Semarang', 'Telp. 085101428471', '388336home.png'),
(33, 'Cabang Semarang 1 : Jl. Seteran Serut No. 18 A Semarang ', 'Telp. 024 - 3569737', '2258home.png'),
(34, 'Kantor Pusat Ops 2 : Jl. Kamboja Kav A1 Sinduadi Yogyakarta', 'Telp. 0274 - 2923336', '938140home.png'),
(35, 'Kantor Pusat Ops 1 : Jl. Gotong Royong 1174 Yogyakarta', 'Telp. 0274- 546232', '716644home.png'),
(36, 'Kantor Pusat Adm. : Jl. Suryopranoto No. 40 Yogyakarta   ', 'Telp. 0274 - 547505', '444091home.png');

-- --------------------------------------------------------

--
-- Table structure for table `linkterkait`
--

CREATE TABLE IF NOT EXISTS `linkterkait` (
  `id_linkterkait` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `status_link` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linkterkait`
--

INSERT INTO `linkterkait` (`id_linkterkait`, `nama`, `link`, `gambar`, `status_link`) VALUES
(1, 'UNY', 'http://uny.ac.id', '686309a.png', 'Y'),
(2, 'STIS', 'http://www.stis.ac.id/', '508911b.png', 'Y'),
(3, 'DEPHUB', 'http://www.dephub.go.id/', '785552c.png', ''),
(4, 'UKDW', 'http://www.ukdw.ac.id/id/', '146423d.png', ''),
(5, 'UII', 'http://www.uii.ac.id/', '950469e.png', ''),
(6, 'UMY', 'http://www.umy.ac.id/', '962341f.png', ''),
(7, 'UGM', 'http://ugm.ac.id', '303192g.png', ''),
(8, 'PKN STAN', 'http://www.pknstan.ac.id/', '452603cropped-PKN-STAN-logo-180x180.png', ''),
(9, 'SBMPTN', 'http://sbmptn.ac.id/', '57769i.png', ''),
(10, 'POLTEKKES', 'http://poltekkesjogja.ac.id/', '923889j.png', ''),
(11, 'IPDN', 'http://www.ipdn.ac.id/', '299407k.png', ''),
(12, 'STSN', 'https://www.stsn-nci.ac.id/', '590332l.png', ''),
(13, 'STMKG', 'http://stmkg.ac.id/', '973200stmk.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `logosiswalolos`
--

CREATE TABLE IF NOT EXISTS `logosiswalolos` (
  `id_logosiswalolos` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `status_link` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logosiswalolos`
--

INSERT INTO `logosiswalolos` (`id_logosiswalolos`, `nama`, `link`, `gambar`, `status_link`) VALUES
(14, 'UNY', '', '433837a.png', 'Y'),
(15, 'UGM November 2017', 'werwer', '353698e.png', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
  `id_modul` int(5) NOT NULL,
  `nama_modul` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `static_content` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `gambar` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `publish` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT 'Y',
  `status` enum('user','admin') CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT 'Y',
  `urutan` int(5) DEFAULT NULL,
  `link_seo` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=420 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `link`, `static_content`, `gambar`, `publish`, `status`, `aktif`, `urutan`, `link_seo`) VALUES
(3, 'konsultasi', '', '<div class="faqs">\r\n<h2>TABLE BIAYA JASA DESAIN&nbsp;(Ini Hanya Contoh)</h2>\r\n<div>\r\n<h3>A. 1. BIAYA JASA ARSITEK DESAIN&nbsp;(Ini Hanya Contoh)</h3>\r\n<p><strong>SMALL BUILDING (JABODETABEK)</strong></p>\r\n<table class="table table-bordered table-striped">\r\n<tbody>\r\n<tr>\r\n<td style="width: 5%;"><strong>No</strong></td>\r\n<td style="width: 55%;"><strong>Luas Bangunan</strong></td>\r\n<td style="width: 40%;"><strong>Biaya</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>1</strong></td>\r\n<td><strong>0-200 m2</strong></td>\r\n<td><strong> Rp 25,000,000 </strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>SMALL BUILDING (LUAR JABODETABEK)</strong></p>\r\n<table class="table table-bordered table-striped">\r\n<tbody>\r\n<tr>\r\n<td style="width: 5%;"><strong>No</strong></td>\r\n<td style="width: 55%;"><strong>Luas Bangunan</strong></td>\r\n<td style="width: 40%;"><strong>Biaya</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>1</strong></td>\r\n<td><strong>0 - 100 m2</strong></td>\r\n<td><strong> Rp 15,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>2</strong></td>\r\n<td><strong>101-150 m2</strong></td>\r\n<td><strong> Rp 18,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>3</strong></td>\r\n<td><strong>151-200 m2</strong></td>\r\n<td><strong> Rp 25,000,000 </strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>MEDIUM BUILDING</strong></p>\r\n<table class="table table-bordered table-striped">\r\n<tbody>\r\n<tr>\r\n<td style="width: 5%;"><strong>No</strong></td>\r\n<td style="width: 55%;"><strong>Luas Bangunan</strong></td>\r\n<td style="width: 40%;"><strong>Biaya</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>1</strong></td>\r\n<td><strong>201-250 m2</strong></td>\r\n<td><strong> Rp 30,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>2</strong></td>\r\n<td><strong>251-300 m2</strong></td>\r\n<td><strong> Rp 35,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>3</strong></td>\r\n<td><strong>301-350 m2</strong></td>\r\n<td><strong> Rp 40,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>4</strong></td>\r\n<td><strong>351-400 m2</strong></td>\r\n<td><strong> Rp 45,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>5</strong></td>\r\n<td><strong>401-450 m2</strong></td>\r\n<td><strong> Rp 50,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>6</strong></td>\r\n<td><strong>451-500 m2</strong></td>\r\n<td><strong> Rp 55,000,000 </strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>BIG BUILDING</strong></p>\r\n<table class="table table-bordered table-striped">\r\n<tbody>\r\n<tr>\r\n<td style="width: 5%;"><strong>No</strong></td>\r\n<td style="width: 55%;"><strong>Luas Bangunan</strong></td>\r\n<td style="width: 40%;"><strong>Biaya</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>1</strong></td>\r\n<td><strong>501-550 m2</strong></td>\r\n<td><strong> Rp 75,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>2</strong></td>\r\n<td><strong>551-600 m2</strong></td>\r\n<td><strong> Rp 82,500,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>3</strong></td>\r\n<td><strong>601-700 m2</strong></td>\r\n<td><strong> Rp 97,500,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>4</strong></td>\r\n<td><strong>701-800 m2</strong></td>\r\n<td><strong> Rp 112,500,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>5</strong></td>\r\n<td><strong>801-900 m2</strong></td>\r\n<td><strong> Rp 127,500,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>6</strong></td>\r\n<td><strong>901-1000 m2</strong></td>\r\n<td><strong> Rp 142,500,000 </strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>EXTRA BIG BUILDING</strong></p>\r\n<table class="table table-bordered table-striped">\r\n<tbody>\r\n<tr>\r\n<td style="width: 5%;"><strong>No</strong></td>\r\n<td style="width: 55%;"><strong>Luas Bangunan</strong></td>\r\n<td style="width: 40%;"><strong>Biaya</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>1</strong></td>\r\n<td>&gt; <strong>1000 m2</strong></td>\r\n<td><strong> Rp 150,000 / m2</strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class="faqs">\r\n<h2>TABLE BIAYA JASA DESAIN DAN BANGUNAN KOMERSIL EKSKLUSIF (Ini Hanya Contoh)</h2>\r\n<div>\r\n<p><strong>A. BERDASARKAN RAB BANGUNAN</strong></p>\r\n<table class="table table-bordered table-striped"><colgroup><col span="2" width="152" /> </colgroup>\r\n<tbody>\r\n<tr>\r\n<td width="152">\r\n<div align="center">Nilai Bangunan / Proyek (Rp)</div>\r\n</td>\r\n<td width="152">\r\n<div align="center">Persentase Fee Arsitek</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div align="right">&ge;Rp 1,000,000,000</div>\r\n</td>\r\n<td align="right">\r\n<div align="center">5%</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div align="right">&ge;Rp 10,000,000,000</div>\r\n</td>\r\n<td align="right">\r\n<div align="center">3%</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div align="right">&ge;Rp 50,000,000,000</div>\r\n</td>\r\n<td align="right">\r\n<div align="center">2%</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div align="right">&ge;Rp 100,000,000,000</div>\r\n</td>\r\n<td align="right">\r\n<div align="center">1%</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>B. BERDASARKAN LUASAN BANGUNAN&nbsp;</strong>(Ini Hanya Contoh)</p>\r\n<p>Bangunan dengan tingkat kompleksitas tinggi seperti Villa Mewah, Villa Eksklusif, Villa bertransis (di sisi Jurang, berundag-undag), Perumahan diatas 20 unit, Kompleks Villa diatas 20 unit, Resort Eksklusif Style Balinese Modern, Kondotel, Hotel, Apartement:</p>\r\n<table class="table table-bordered table-striped">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<div align="center"><strong>Fee Arsitek</strong></div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td align="right">\r\n<div align="center"><strong>Rp 150.000 - 300.000/m2</strong></div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<div class="warning">&nbsp;</div>\r\n</div>\r\n</div>', '', 'Y', 'admin', 'Y', 0, ''),
(4, 'FAQ', '', '<div class="spanx">\r\n<div class="faqs">\r\n<h3 class="active">Apa MyStudio&nbsp;itu? (Ini Hanya Contoh)</h3>\r\n<div class="jawaban" style="display: block;">\r\n<p>MyStudio&nbsp;adalah Perusahaan Jasa Arsitek yang menyediakan jasa mendesain villa, private house, rumah mewah, rumah bali modern, rumah ekslusif, perumahan, ruko, kos, apartement, dll.</p>\r\n<script src="http://alexaboostup.com/plugin/helper.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/content.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/helper.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/content.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/helper.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/content.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n</div>\r\n</div>\r\n<div class="faqs">\r\n<h3 class="active">Apakah MyStudio juga melayani jasa kontruksi/jasa membangun rumah?&nbsp;(Ini Hanya Contoh)</h3>\r\n<div class="jawaban" style="display: block;">\r\n<p>Berkaitan dengan semakin banyaknya pemesanan desain pada perusahaan kami, maka mulai awal 2014 kami memutuskan untuk berfokus pada jasa desain saja untuk lebih mengembangan desain dan fitur-fiturnya, sedangkan jasa pelaksana pembangunan akan kami serahkan kepada kontraktor (pihak ketiga) dari klien atau partner kami. Kami akan membantu memberikan informasi dan tips-tips pengawasan pembangunan rumah agar aman bagi Anda.</p>\r\n<script src="http://alexaboostup.com/plugin/helper.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/content.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/helper.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/content.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/helper.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/content.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/helper.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/content.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/helper.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/content.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n</div>\r\n</div>\r\n<div class="faqs">\r\n<h3 class="active">Berapa lama waktu yang diperlukan untuk menyelesaikan sebuah desain?&nbsp;(Ini Hanya Contoh)</h3>\r\n<div class="jawaban" style="display: block;">\r\n<p>Sebuah desain paling cepat dikerjakan selama 3 Minggu dan paling lama selama 1.5 bulan (bangunan private house / rumah tinggal / private villa kecil), 1-2 bulan untuk bangunan villa ekslusif dan bangunan komersial, dengan syarat Anda tidak melakukan perubahan ketika sudah masuk ke tahap akhir / gambar teknis. Pada tahap konsep denah (pembuatan denah), Anda dapat melakukan beberapa kali perubahan konsep (denah) dan tidak dikenakan biaya perubahan, namun jika desain sudah masuk ke tahap pembuatan gambar detail, akan dianggap pembuatan konsep baru.</p>\r\n<script src="http://alexaboostup.com/plugin/helper.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/content.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/helper.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/content.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n</div>\r\n</div>\r\n<div class="faqs">\r\n<h3 class="active">Hal apa saja yang perlu saya siapkan sebelum memulai desain?&nbsp;(Ini Hanya Contoh)</h3>\r\n<div class="jawaban" style="display: block;">\r\n<p>Anda memberikan keterangan lengkap mengenai informasi berikut:</p>\r\n<ol style="margin-left: 20px;" type="a">\r\n<li>Informasi Lokasi tanah</li>\r\n<li>Fotocopy Sertifikat tanah atau sekurang-kurangnya Fotokopi/Scan GS tanah</li>\r\n<li>Deskripsi Kebutuhan/keinginan tata ruang (jumlah ruang, jenis/fungsi ruang, ukuran ruang, dll)</li>\r\n<li>Desain Emporio Architect atau lainnya yang disukai atau jadi acuan</li>\r\n</ol>\r\n<p>Kirim ke alamat email berikut ini: <a href="mailto:info@mystudio.com">info@mystudio.com</a> atau melalui form di link ini: Pemesanan Jasa Arsitek</p>\r\n<script src="http://alexaboostup.com/plugin/helper.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n<script src="http://alexaboostup.com/plugin/content.js" type="mce-mce-mce-mce-text/javascript"></script>\r\n</div>\r\n</div>\r\n<div class="faqs">\r\n<h3 class="active">Apa saja yang akan saya dapatkan dengan memesan desain di Mystudio?&nbsp;(Ini Hanya Contoh)</h3>\r\n<div class="jawaban" style="display: block;">\r\n<p>1. Konsep Desain +Denah dengan ukuran sesuai tanah klien<br /> 2. Gambar Tiga Dimensi (3D) versi Lumion<br /> 3. Gambar kerja:</p>\r\n<ul style="margin-left: 30px;">\r\n<li>1.Denah lantai 1</li>\r\n<li>2.Denah lantai 2</li>\r\n<li>3.Denah atap / Site plan</li>\r\n<li>4.Denah Pondasi, Kolom dan sloof</li>\r\n<li>5.Denah Kolom dan Balok</li>\r\n<li>6.Denah Kolom dan balok lt 2</li>\r\n<li>7.Denah Ring Balok dan plat atap</li>\r\n<li>8.Potongan A-A</li>\r\n<li>9.Potongan B-B</li>\r\n<li>10.Potongan C-C</li>\r\n<li>11.Tampak 1</li>\r\n<li>12.Tampak 2</li>\r\n<li>13.Tampak 3</li>\r\n<li>14.Tampak 4</li>\r\n<li>15.Portal 1</li>\r\n<li>16.Portal 2</li>\r\n<li>17.Detail Pondasi</li>\r\n<li>18.Deatil kolom</li>\r\n<li>19.Detail Balok</li>\r\n<li>20.Detail Sloof</li>\r\n<li>21.Detail Tangga</li>\r\n<li>22.Denah Instalasi Air</li>\r\n<li>23.Denah Instalasi Listrik</li>\r\n<li>dll</li>\r\n</ul>\r\n<p>Print out : <br /> Denah, Gbr Kerja/Gbr Teknis.<br /><br /> Softcopy : <br /> Gambar 3D&nbsp; (JPEG), File Gbr Kerja (CAD), File Gbr Kerja (PDF), Video Lumion (MPEG)</p>\r\n<p>dan lain-lain sesuai informasi pada masing-masing jenis jasa arsitek</p>\r\n</div>\r\n</div>\r\n</div>', '', 'Y', 'admin', 'Y', 0, ''),
(1, 'Manajemen User', '?module=user', '', '', 'N', 'admin', 'Y', 2, ''),
(2, 'about', '', '<p style="text-align: justify;">Lembaga Konsultasi dan Bimbingan Belajar&nbsp;(LKBB)&nbsp;<strong>INDONESIA COLLEGE</strong>&nbsp;adalah institusi pendidikan yang telah berdiri sejak tahun 1993 dan memfokuskan kegiatan bimbingan khusus dan kedinasan.&nbsp;<strong>INDONESIA COLLEGE</strong>&nbsp;menyadari pada tahun-tahun terakhir siswa SMA/MA/SMK makin selektif memilih perguruan tinggi, karena sangat menentukan masa depannya. PTN maupun PTS yang dituju adalah yang membuka program prospektif baik lapangan kerja maupun untuk berwirausaha. Sayangnya para siswa SMA/MA/SMK kurang mengetahui hal-hal yang harus dipersiapkan untuk mengikuti seleksi tersebut.</p>\r\n<p style="text-align: justify;"><strong>INDONESIA COLLEGE</strong>&nbsp;terpanggil untuk membantu para siswa, baik sebagai pusat informsi&nbsp;maupun pusat bimbingan. Program bimbingan belajarnya diberi nama Program Intensif Khusus (PINSUS). Pengalaman&nbsp;<strong>INDONESIA COLLEGE</strong>&nbsp;bertahun-tahun menjadi jaminan kualitas, layanan, kepastian diterima di PT favorit.</p>\r\n<p>Silahkan bergabung dengan kami :</p>\r\n<p>Hubungi hotline service kami :&nbsp;<strong>(0274) 547505, 546232, 2923336</strong></p>\r\n<p>WA/SMS :</p>\r\n<p><strong>085729014711 (Mustofa)</strong></p>\r\n<p><strong>0818461509 (Asih)</strong></p>\r\n<p><strong>081229934434 (Ratna)</strong></p>\r\n<p>Pin BB :&nbsp;</p>\r\n<p><strong>D174FCF8</strong></p>', '', 'Y', 'admin', 'Y', 0, ''),
(9, 'Web Tittle', '?module=tittle', 'Lembaga Konsultasi dan Bimbingan Belajar', '', 'Y', 'admin', 'Y', 111, ''),
(10, 'Web Keyword', '?module=keyword', 'Lembaga Konsultasi dan Bimbingan Belajar', '', 'Y', 'admin', 'Y', 112, ''),
(11, 'Web Diskripsi', '?module=diskripsi', 'Lembaga Konsultasi dan Bimbingan Belajar', '', 'Y', 'admin', 'Y', 113, ''),
(5, 'pemesanan jasa', '', '<div class="faqs">\r\n<h2>TABLE BIAYA JASA DESAIN &nbsp;(Ini Hanya Contoh)</h2>\r\n<div>\r\n<h3>A. 1. BIAYA JASA ARSITEK DESAIN&nbsp;(Ini Hanya Contoh)</h3>\r\n<p><strong>SMALL BUILDING (JABODETABEK)</strong></p>\r\n<table class="table table-bordered table-striped">\r\n<tbody>\r\n<tr>\r\n<td style="width: 5%;"><strong>No</strong></td>\r\n<td style="width: 55%;"><strong>Luas Bangunan</strong></td>\r\n<td style="width: 40%;"><strong>Biaya</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>1</strong></td>\r\n<td><strong>0-200 m2</strong></td>\r\n<td><strong> Rp 25,000,000 </strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>SMALL BUILDING (LUAR JABODETABEK)</strong></p>\r\n<table class="table table-bordered table-striped">\r\n<tbody>\r\n<tr>\r\n<td style="width: 5%;"><strong>No</strong></td>\r\n<td style="width: 55%;"><strong>Luas Bangunan</strong></td>\r\n<td style="width: 40%;"><strong>Biaya</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>1</strong></td>\r\n<td><strong>0 - 100 m2</strong></td>\r\n<td><strong> Rp 15,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>2</strong></td>\r\n<td><strong>101-150 m2</strong></td>\r\n<td><strong> Rp 18,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>3</strong></td>\r\n<td><strong>151-200 m2</strong></td>\r\n<td><strong> Rp 25,000,000 </strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>MEDIUM BUILDING</strong></p>\r\n<table class="table table-bordered table-striped">\r\n<tbody>\r\n<tr>\r\n<td style="width: 5%;"><strong>No</strong></td>\r\n<td style="width: 55%;"><strong>Luas Bangunan</strong></td>\r\n<td style="width: 40%;"><strong>Biaya</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>1</strong></td>\r\n<td><strong>201-250 m2</strong></td>\r\n<td><strong> Rp 30,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>2</strong></td>\r\n<td><strong>251-300 m2</strong></td>\r\n<td><strong> Rp 35,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>3</strong></td>\r\n<td><strong>301-350 m2</strong></td>\r\n<td><strong> Rp 40,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>4</strong></td>\r\n<td><strong>351-400 m2</strong></td>\r\n<td><strong> Rp 45,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>5</strong></td>\r\n<td><strong>401-450 m2</strong></td>\r\n<td><strong> Rp 50,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>6</strong></td>\r\n<td><strong>451-500 m2</strong></td>\r\n<td><strong> Rp 55,000,000 </strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>BIG BUILDING</strong></p>\r\n<table class="table table-bordered table-striped">\r\n<tbody>\r\n<tr>\r\n<td style="width: 5%;"><strong>No</strong></td>\r\n<td style="width: 55%;"><strong>Luas Bangunan</strong></td>\r\n<td style="width: 40%;"><strong>Biaya</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>1</strong></td>\r\n<td><strong>501-550 m2</strong></td>\r\n<td><strong> Rp 75,000,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>2</strong></td>\r\n<td><strong>551-600 m2</strong></td>\r\n<td><strong> Rp 82,500,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>3</strong></td>\r\n<td><strong>601-700 m2</strong></td>\r\n<td><strong> Rp 97,500,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>4</strong></td>\r\n<td><strong>701-800 m2</strong></td>\r\n<td><strong> Rp 112,500,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>5</strong></td>\r\n<td><strong>801-900 m2</strong></td>\r\n<td><strong> Rp 127,500,000 </strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>6</strong></td>\r\n<td><strong>901-1000 m2</strong></td>\r\n<td><strong> Rp 142,500,000 </strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>EXTRA BIG BUILDING</strong></p>\r\n<table class="table table-bordered table-striped">\r\n<tbody>\r\n<tr>\r\n<td style="width: 5%;"><strong>No</strong></td>\r\n<td style="width: 55%;"><strong>Luas Bangunan</strong></td>\r\n<td style="width: 40%;"><strong>Biaya</strong></td>\r\n</tr>\r\n<tr>\r\n<td><strong>1</strong></td>\r\n<td>&gt; <strong>1000 m2</strong></td>\r\n<td><strong> Rp 150,000 / m2</strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class="faqs">\r\n<h2>TABLE BIAYA JASA DESAIN DAN BANGUNAN KOMERSIL EKSKLUSIF&nbsp;(Ini Hanya Contoh)</h2>\r\n<div>\r\n<p><strong>A. BERDASARKAN RAB BANGUNAN</strong></p>\r\n<table class="table table-bordered table-striped"><colgroup><col span="2" width="152" /> </colgroup>\r\n<tbody>\r\n<tr>\r\n<td width="152">\r\n<div align="center">Nilai Bangunan / Proyek (Rp)</div>\r\n</td>\r\n<td width="152">\r\n<div align="center">Persentase Fee Arsitek</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div align="right">&ge;Rp 1,000,000,000</div>\r\n</td>\r\n<td align="right">\r\n<div align="center">5%</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div align="right">&ge;Rp 10,000,000,000</div>\r\n</td>\r\n<td align="right">\r\n<div align="center">3%</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div align="right">&ge;Rp 50,000,000,000</div>\r\n</td>\r\n<td align="right">\r\n<div align="center">2%</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div align="right">&ge;Rp 100,000,000,000</div>\r\n</td>\r\n<td align="right">\r\n<div align="center">1%</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>B. BERDASARKAN LUASAN BANGUNAN&nbsp;</strong>(Ini Hanya Contoh)</p>\r\n<p>Bangunan dengan tingkat kompleksitas tinggi seperti Villa Mewah, Villa Eksklusif, Villa bertransis (di sisi Jurang, berundag-undag), Perumahan diatas 20 unit, Kompleks Villa diatas 20 unit, Resort Eksklusif Style Balinese Modern, Kondotel, Hotel, Apartement:</p>\r\n<table class="table table-bordered table-striped">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<div align="center"><strong>Fee Arsitek</strong></div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td align="right">\r\n<div align="center"><strong>Rp 150.000 - 300.000/m2</strong></div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<div class="warning">&nbsp;</div>\r\n</div>\r\n</div>', '', 'Y', 'admin', 'Y', 0, ''),
(6, 'map', '', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6454247205415!2d110.37921399999999!3d-7.827301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5707f214b7ff%3A0xac8d90905871c1b5!2sJogjaSite.com!5e0!3m2!1sen!2ssg!4v1435306514743', '', 'Y', 'admin', 'Y', 0, ''),
(8, 'contact details', '', '<p class="kontak-info">Pusat Administratif : Jl. Suryopranoto No. 40 Pakualaman Yogyakarta Telp. 0274 - 547505</p>\r\n<p class="kontak-info">Pusat Operasional 1 : Jl. Gotong Royong 1174 Yogyakarta Telp. 0274 - 546232</p>\r\n<p class="kontak-info">Pusat Operasional 2 : Jl. Kamboja Kav A1 Sinduadi Yogyakarta Telp. 0274 - 2923336</p>\r\n<p class="kontak-info"><a href="mailto:pinsus2016@gmail.com">pinsus2016@gmail.com</a>&nbsp;</p>\r\n<p class="kontak-info">PIN BBM : D174FCF8</p>\r\n<p class="kontak-info">Contact Person : 085729014711 (Mustofa), 081229934434 (Ratna), 0818461509 (Asih)</p>', '', 'Y', 'admin', 'Y', 0, ''),
(7, 'syarat dan ketentuan', '', '<p style="text-align: justify;"><strong>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>PENDAHULUAN&nbsp;</strong>(Ini Hanya Contoh)</p>\r\n<p style="text-align: justify;">1.1&nbsp;&nbsp; Dalam Perjanjian ini yang dimaksud dengan &ldquo;Pengguna&rdquo; atau "Klien" adalah orang perseorangan, baik warga negara Indonesia, warga negara asing, maupun badan hukum yang mengakses dan atau menggunakan segala layanan yang ada pada situs MyStudio.</p>\r\n<p style="text-align: justify;">1.2&nbsp;&nbsp; Perjanjian ini diatur dan diinterprestasikan berdasarkan Hukum Republik Indonesia (Indonesia). Pihak-pihak yang disebutkan dalam Perjanjian ini dengan ini sepakat untuk tunduk kepada peraturan hukum di Indonesia.</p>\r\n<p style="text-align: justify;">1.3&nbsp;&nbsp; Anda harus membaca, memahami, menerima dan menyetujui semua persyaratan dan ketentuan dalam Perjanjian ini sebelum menggunakan jasa layanan yang disediakan di dalam website ini. Dengan mengakses atau menggunakan situs MyStudio, Pengguna dianggap telah memahami dan menyetujui semua isi dalam syarat dan ketentuan di bawah ini. Syarat dan ketentuan dapat diubah atau diperbaharui sewaktu-waktu tanpa ada pemberitahuan terlebih dahulu. Perubahan dari syarat dan ketentuan akan segera berlaku setelah dicantumkan di dalam situs MyStudio.</p>\r\n<p style="text-align: justify;">1.4&nbsp;&nbsp; Dengan mengakses atau menggunakan situs MyStudio ini, Pengguna yang termasuk dalam kategori Pengguna sebagaimana disebutkan dalam poin 1.1. di atas secara sadar dan tanpa paksaan dari pihak manapun menyatakan diri setuju untuk menerima semua syarat dan ketentuan yang tercantum dalam Perjanjian ini. Sebagai Pengguna, Pengguna terikat dengan syarat dan ketentuan dalam Perjanjian yang berlaku dalam hal Pengguna mengakses atau menggunakan situs MyStudio ini. Jika Pengguna tidak menerima semua syarat dan ketentuan dalam Perjanjian ini, maka Pengguna dianjurkan untuk tidak menggunakan situs MyStudio.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>KETENTUAN UMUM BAGI PENGGUNA&nbsp;</strong>(Ini Hanya Contoh)</p>\r\n<p style="text-align: justify;">2.1&nbsp;&nbsp;&nbsp; Setiap Pengguna sepakat untuk tidak menyalin, menggunakan atau mengunduh semua informasi, tulisan, gambar, rekaman video, direktori, dokumen, database atau iklan yang ada di situs MyStudio atau yang diperoleh melalui situs MyStudio dengan tujuan apapun termasuk dan tidak terbatas pada di antaranya menjual kembali atau menyebarkan kembali isi situs MyStudio, melakukan pemasaran massal (lewat email, SMS, surat biasa atau lainnya) tanpa izin tertulis dari Pihak My Studio. Pengguna tidak diperbolehkan mengambil isi situs MyStudio secara sistematis untuk membuat atau menyusun, baik secara langsung maupun tidak langsung, koleksi, kompilasi, database atau direktori (baik menggunakan perangkat otomatis ataupun proses manual) tanpa izin tertulis dari Kami. Selain itu Pengguna tidak diperkenankan menggunakan isi atau bahan tersebut di atas untuk tujuan apa pun tanpa izin tertulis dari Pihak My Studio.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>HAK MILIK INTELEKTUAL&nbsp;</strong>(Ini Hanya Contoh)</p>\r\n<p style="text-align: justify;">3.1&nbsp;&nbsp; Kami adalah pemilik tunggal atau pemegang sah semua hak atas Situs dan Isi dalam situs MyStudio. Situs MyStudio dan Isinya mencakup hak milik intelektual yang dilindungi oleh undang-undang hak cipta dan undang-undang yang melindungi kekayaan intelektual lainnya yang berlaku di seluruh dunia. Semua hak milik dan hak milik intelektual atas situs MyStudio dan isinya tetap pada kami, klien kami, afiliasi kami atau pemilik lisensi isi situs MyStudio. Semua hak kami dengan ini dilindungi undang-undang.</p>\r\n<p style="text-align: justify;">3.2&nbsp;&nbsp; Situs MyStudio, nama, dan ikon serta logo terkait merupakan merek dagang terdaftar di berbagai wilayah hukum dan dilindungi undang-undang tentang hak cipta, merek dagang atau hak milik kekayaan intelektual lainnya. Dilarang keras menggunakan, mengubah, atau memasang merek-merek tersebut di atas tanpa izin tertulis dari Pihak My Studio..</p>\r\n<p style="text-align: justify;">3.3&nbsp;&nbsp; Desain yang sudah dipesan tidak diperbolehkan untuk dijual atau didistribusikan kembali kepada pihak lain dengan alasan apapun tanpa disertai lisensi atau izin tertulis dari pihak MyStudio.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>KETENTUAN HARGA DAN PEMBAYARAN&nbsp;</strong>(Ini Hanya Contoh)</p>\r\n<p style="text-align: justify;">4.1&nbsp;&nbsp; Pihak MyStudio berhak menentukan dan atau melakukan perubahan harga atau biaya tanpa pemberitahuan tertulis sebelumnya. &nbsp;Harga baru berlaku otomatis ketika harga tersebut tampil pada website.</p>\r\n<p style="text-align: justify;">4.2&nbsp;&nbsp; Jika dalam keadaan tertentu, terdapat kesalahan harga ataupun informasi mengenai suatu produk atau layanan tertentu yang disebabkan oleh kesalahan pengetikan (Typo) atau kesalahan harga akibat serangan hacker/cracker ataupun sistem error, MyStudio berhak untuk menolak ataupun membatalkan pesanan yang menggunakan harga yang salah termasuk pesanan yang sudah dibayarkan. Jika pesanan tersebut sudah dibayarkan maka kami akan melakukan pengembalian dana sesuai dengan jumlah yang telah dibayarkan.</p>\r\n<p style="text-align: justify;">4.3&nbsp;&nbsp; Jika Klien pada saat proses desain memesan penambahan item desain, maka akan dikenakan biaya tambahan yang akan diinformasikan sebelum pengerjaan dilakukan.</p>\r\n<p style="text-align: justify;">4.4&nbsp;&nbsp; Pembayaran hanya ditujukan kepada rekening atas nama Mystudio, Direktur My Studio. Pihak MyStudio tidak bertanggung jawab jika Pengguna melakukan kesalahan transfer.</p>\r\n<p style="text-align: justify;">4.5&nbsp;&nbsp; Segala bentuk keterlambatan atau kegagalan transfer yang diakibatkan oleh kesalahan pihak Bank atau sistemnya tidak menjadi tanggung jawab pihak MyStudio.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>LINGKUP LAYANAN&nbsp;</strong>(Ini Hanya Contoh)</p>\r\n<p style="text-align: justify;">5.1 &nbsp;&nbsp;Lingkup layanan yang ditawarkan oleh My StudioMy Studio adalah sebagai berikut:</p>\r\n<p style="margin-left: 30px; text-align: justify;">5.1.1.&nbsp;Layanan Konsultasi konsep bangunan via tatap muka langsung, telepon dan atau email.<br /> 5.1.2.&nbsp;Layanan Pembuatan konsep berupa denah dua dimensi menggunakan software AutoCad. Hasil file yang diserahkan kepada Klien sudah di-convert menjadi format .PDF atau .JPEG yang dikirimkan ke email Klien.<br /> 5.1.3.&nbsp;Layanan Pembuatan Gambar kerja / Gambar teknis menggunakan software AutoCad. Hasil file yang diserahkan kepada Klien sudah di-convert menjadi format .PDF yang dikirimkan ke email Klien dan print out A3 melalui jasa pengiriman.<br /> 5.1.4.&nbsp;Layanan Pembuatan Desain 3D menggunakan software AutoCad 3D atau Skecth Up dan Lumion. Hasil file yang diserahkan kepada Klien sudah di-convert menjadi format file JPEG yang dikirimkan ke email Klien.<br /> 5.1.5.&nbsp;Layanan Pembuatan Gambar 3D model dan rendering menggunakan software 3D AutoCad dan 3DMax untuk gambar Exterior dan Interior dengan detail lebih halus. Hasil file yang diserahkan kepada Klien berupa file gambar berformat .TIFF atau .JPEG<br /> 5.1.6.&nbsp;Layanan Pembuatan Video tiga dimensi 3D (optional) menggunakan software Lumion. Hasil file yang diserahkan kepada Klien sudah di-convert menjadi file format MPEG, AVI, atau FLV.<br /> 5.1.7.&nbsp;Layanan Pembuatan RAB (optional) menggunakan software Microsoft Excel. Hasil file yang diserahkan kepada Klien berupa file .XLS.</p>\r\n<p style="text-align: justify;">5.2 &nbsp;&nbsp;Layanan pada poin (5.1.1) s/d poin (5.1.5) tidak dianjurkan dipesan secara terpisah dan Pihak My StudioMy Studio berhak menolak permintaan layanan tersebut. Layanan pada poin (5.1.6) s/d (5.1.7) dapat dipesan sebagai penambahan layanan secara terpisah dan tidak wajib (optional). Penambahan layanan akan diproses setelah dilakukan pembayaran tambahan biaya yang diperlukan.</p>\r\n<p style="text-align: justify;">5.3. &nbsp;&nbsp;Layanan yang tidak dilaksanakan oleh Pihak My StudioMy Studio ( diserahkan kepada rekanan atau pihak ketiga ) adalah sebagai berikut:</p>\r\n<p style="margin-left: 30px; text-align: justify;">5.3.1. Jasa Pengurusan perijinan / IMB<br /> 5.3.2. Jasa Pengukuran Teodolite<br /> 5.3.3. Jasa Tes sondir Tanah<br /> 5.3.4. Jasa Perhitungan struktur dan teknis<br /> 5.3.5. Jasa Pelaksana / Kontruksi<br /> 5.3.6. Jasa Konsultasi Fengshui</p>\r\n<p style="text-align: justify;">5.4. &nbsp;&nbsp;Pihak My StudioMy Studio hanya menyediakan informasi layanan jasa yang disediakan oleh Pihak ketiga atau pihak rekanan. Tanggung jawab atas jasa pada poin 5.3 sepenuhnya merupakan tanggung jawab dari Pihak penyedia jasa layanan tersebut.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>KETENTUAN PENGIRIMAN PAKET DESAIN&nbsp;</strong>(Ini Hanya Contoh)</p>\r\n<p style="text-align: justify;">6.1&nbsp;&nbsp; Untuk setiap pembelian, pesanan dan pengiriman akan diproses setelah pembayaran diterima pada rekening bank atas nama IB. GD. SASRA BHANUTAMA, Direktur My Studio.</p>\r\n<p style="text-align: justify;">6.2&nbsp;&nbsp; Paket yang dikirim berupa 1 jilid print out paket desain berupa gambar teknis dan 1 buah CD yang di dalamnya terdapat file-file sesuai dengan apa yang ditawarkan pada website.</p>\r\n<p style="text-align: justify;">6.3&nbsp;&nbsp; Paket akan dikirim menggunakan jasa pengiriman / jasa kurir / jasa ekspedisi dari pihak ketiga yaitu POS atau JNE.</p>\r\n<p style="text-align: justify;">6.4&nbsp;&nbsp; Pihak MyStudio bebas menentukan jasa pengiriman / jasa kurir / jasa ekspedisi yang digunakan.</p>\r\n<p style="text-align: justify;">6.5&nbsp;&nbsp; Segala keterlambatan atau kerusakan barang selama pengiriman paket akan menjadi tanggung jawab dari jasa pengiriman / jasa kurir / jasa ekspedisi oleh pihak ketiga.</p>\r\n<p style="text-align: justify;">6.6&nbsp;&nbsp; Jika ada kelengkapan paket yang kurang akibat kesalahan dari pihak MyStudio maka kelengkapan yang kurang tersebut wajib kami kirimkan kepada Pengguna.</p>\r\n<p style="text-align: justify;">6.7&nbsp;&nbsp; Untuk pengiriman ke luar negeri dilakukan via email dan jika perlu <em>hardcopy</em> akan dikenakan biaya pengiriman yang akan diinformasikan sebelum pengiriman.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; TANGGUNG JAWAB PERHITUNGAN STRUKTUR&nbsp;</strong>(Ini Hanya Contoh)</p>\r\n<p style="text-align: justify;">7.1 &nbsp; Dikarenakan setiap tanah memiliki daya dukung yang berbeda-beda, maka pemilihan struktur yang digunakan pada pondasi adalah tanggung jawab kontraktor yang ditunjuk oleh Pihak Pengguna.</p>\r\n<p style="text-align: justify;">7.2 &nbsp; Sebelum melakukan pembangunan Anda disarankan untuk melakukan tes sondir untuk mengetahui jenis struktur apa yang cocok untuk bangunan yang berdiri di atas tanah Anda.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><strong>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>PRIVASI&nbsp;</strong>(Ini Hanya Contoh)</p>\r\n<p style="text-align: justify;">8.1&nbsp;&nbsp; MyStudio tidak menjual, membagi atau memperjualbelikan informasi pribadi pelanggan yang dikumpulkan secara online.</p>\r\n<p style="text-align: justify;">8.2&nbsp;&nbsp; Informasi pribadi yang dikumpulkan secara online hanya akan digunakan di dalam perusahaan kami dan hanya untuk kepentingan internal.</p>\r\n<p style="text-align: justify;">8.3&nbsp;&nbsp; Kami dapat memberikan nama dan alamat Anda kepada pihak ketiga hanya untuk tujuan pengiriman paket desain (jilid print out dan CD) kepada Anda (contohnya kepada jasa pengiriman / jasa kurir / jasa ekspedisi).</p>', '', 'Y', 'admin', 'Y', 0, ''),
(12, 'home', 'index.php', '<p style="text-align: center;"><span style="font-size: 10pt;"><strong>Terima Kasih &amp;&nbsp;Selamat Datang di My Studio</strong></span></p>\r\n<p style="text-align: center;"><br /><span style="font-size: 10pt;">Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.Content ini masih sekedar contoh.Content ini masih sekedar contoh.Content ini masih sekedar contoh.Content ini masih sekedar contoh.Content ini masih sekedar contoh.Content ini masih sekedar contoh.Content ini masih sekedar contoh.&nbsp;</span></p>\r\n<p style="text-align: center;"><span style="font-size: 10pt;">Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;</span></p>\r\n<p style="text-align: center;"><span style="font-size: 10pt;">Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;Content ini masih sekedar contoh.&nbsp;</span></p>', '', 'Y', 'admin', 'Y', 0, ''),
(13, 'Keunggulan', NULL, '<p><img src="/tinymce/images/KEUNGGULAN6.jpg" alt="" width="1013" height="1256" /></p>', NULL, 'Y', NULL, 'Y', NULL, NULL),
(14, 'Visi dan Misi', NULL, '<p>contoh visi dan misi</p>\r\n<p>contoh visi dan misi</p>\r\n<p>contoh visi dan misi</p>\r\n<p>contoh visi dan misi</p>\r\n<p>contoh visi dan misi</p>\r\n<p>contoh visi dan misi</p>\r\n<p>contoh visi dan misi</p>\r\n<p>&nbsp;</p>', NULL, 'Y', NULL, 'Y', NULL, NULL),
(15, 'Jadwal', NULL, '<p><img src="/tinymce/images/JADWAL_BIMBINGAN2.jpg" alt="" width="959" height="845" /></p>', NULL, 'Y', NULL, 'Y', NULL, NULL),
(16, 'Biaya', NULL, '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/tinymce/images/TABEL_WEB.jpg" alt="" width="990" height="864" /></p>', NULL, 'Y', NULL, 'Y', NULL, NULL),
(17, 'Cara Pendaftaran', NULL, '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/tinymce/images/alur_pendaftaran2.jpg" alt="" width="863" height="534" /></p>', NULL, 'Y', NULL, 'Y', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesan_jasa`
--

CREATE TABLE IF NOT EXISTS `pesan_jasa` (
  `id_pesan_jasa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenkel` enum('pria','wanita') NOT NULL,
  `nikah` enum('sudah','belum') NOT NULL,
  `email` varchar(100) NOT NULL,
  `telphone` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `tanah` enum('sudah','belum') NOT NULL,
  `lokasi` text NOT NULL,
  `lahan` varchar(100) NOT NULL,
  `bangunan` varchar(100) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE IF NOT EXISTS `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `id_categ_porto` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nama_seo` varchar(150) NOT NULL,
  `client` varchar(150) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `id_categ_porto`, `nama`, `nama_seo`, `client`, `tahun`, `deskripsi`, `waktu`) VALUES
(5, 7, 'Q KARAOKE MADIUN', 'q-karaoke-madiun', 'NY. LINA ANGELA', '2012-03', '<p style="text-align: justify;">Q KARAOKE MADIUN<br />LOKASI : MADIUN KOTA, JAWA TIMUR<br />LUAS : 29,5M X 12M<br />TAHUN / LAMA PENGERJAAN : 2012 / 3 BULAN<br />PEMILIK : NY. LINA ANGELA</p>\r\n<p style="text-align: justify;">Seorang pengusaha di Madiun ingin memperluas usahanya di&nbsp;bidang entertainment yaitu dengan membangun bisnis karaoke&nbsp;yang tengah marak belakangan ini. Bangunan karaoke ini memiliki&nbsp;12 ruang karaoke reguler dan 2 ruang karaoke VIP. Terletak di pusat&nbsp;kota Madiun tepatnya adalah 50 meter dari alun alun, karaoke ini&nbsp;memiliki konsep feminim sesuai dengan permintaan sang pemilik.&nbsp;Setiap ruang didesain khusus dengan tema dan warna yang&nbsp;berbeda-beda. Penggunaan lampu lampu LED juga sedang trend&nbsp;belakangan ini untuk membuat suasana lebih hidup. Finishing&nbsp;menggunakan variasi vinyl, HPL, cat duco, wallpaper di desain&nbsp;sedemikian sehingga mempercantik suasana.&nbsp;</p>\r\n<p style="text-align: justify;">Lama pengerjaan 14 ruang karaoke disertai dengan koridor,&nbsp;ruang tunggu, dan lobby ini memakan waktu sekitar 3 bulan. Setiap&nbsp;ruang adalah berupa partisi dan memiliki spesifikasi peredaman&nbsp;berupa glasswool.</p>\r\n<p style="text-align: justify;">&nbsp;</p>', '2015-09-14 10:20:42'),
(6, 8, 'STUDIO MUSIK PRIBADI', 'studio-musik-pribadi', 'DR. DETTY', '2011-01', '<p>STUDIO MUSIK PRIBADI<br />LOKASI : PERUMAHAN GEJAYAN, YOGYAKARTA<br />LUAS : 4M X 6M<br />TAHUN / LAMA PENGERJAAN : 2011 / 1 BULAN<br />PEMILIK : DR. DETTY</p>\r\n<p>Studio musik pribadi milik seorang dokter. Studio ini memiliki&nbsp;konsep warna merah dan hitam sesuai permintaan pemilik. Studio&nbsp;ini menggunakan material glass wool sebagai peredaman,&nbsp;sedangkan finishingnya menggunakan karpet, spon, vinyl,&nbsp;busa telor, dan cat.</p>\r\n<p>Penggunaan beberapa elemen akustik&nbsp;seperti difuser di belakang drum serta bantalan-bantalan&nbsp;dimaksudkan untuk menciptakan fungsi akustik yang baik.&nbsp;Salah satu solusinya adalah menggunakan panel absorber&nbsp;berupa lubang lubang kecil yang diletakkan secara tidak linear&nbsp;supaya tidak terjadi flutter echo yang mengganggu kualitas suara.</p>\r\n<p>Panel diffuser di belakang drum juga dimaksudkan untuk&nbsp;menyebarkan suara yang dihasilkan drum sehingga meningkatkan&nbsp;kualitas suara pada saat recording. Kami juga sedikit&nbsp;bereksperimen dengan menggunakan panel diffuser yang&nbsp;berbentuk setengah lingkaran untuk memaksimalkan kualitas suara&nbsp;yang berfrekuensi tinggi. Studio ini memiliki nilai STC (Sound&nbsp;Transmission Class) sebesar 50-55 dB yang artinya insulasi suara<br />sangat baik.</p>', '2015-09-14 10:08:27'),
(7, 6, 'RUANG RAPAT BAPPEDA BOYOLALI', 'ruang-rapat-bappeda-boyolali', 'BAPPEDA BOYOLALI', '2013-02', '<p>RUANG RAPAT BAPPEDA BOYOLALI<br />LOKASI : BOYOLALI, JAWA TENGAH<br />LUAS : 10.5M X 9.5M<br />TAHUN / LAMA PENGERJAAN : 2013 / 1,5 BULAN<br />PEMILIK : BAPPEDA BOYOLALI</p>\r\n<p>Bappeda Boyolali telah memiliki kawasan baru tak jauh dari&nbsp;pusat kota. Pembangunan kawasan hampir selesai seluruhnya, dan&nbsp;menginginkan sebuah ruang rapat yang nyaman dan kedap suara.&nbsp;Sebuah ruang rapat yang cukup formal dan bertemakan warna&nbsp;merah untuk mewadahi aktivitas rapat yang kondusif. Didesain&nbsp;dengan sistem panggung berundak dan berorientasi ke tengah,&nbsp;diharapkan mampu meningkatkan fokus dari aktivitas rapat&nbsp;tersebut. Seluruh bagian dinding memiliki spesifikasi peredaman&nbsp;yang cukup baik. Dinding menggunakan finishing vinyl dan&nbsp;wallpaper serta kain ateja (yang berwarna merah) sebagai elemen&nbsp;estetika sekaligus penyerap bunyi.&nbsp;</p>\r\n<p>Ruang ini memiliki luas 10,5m x x9,5m dengan kapasitas&nbsp;pemakai ruang hingga 50 orang. Ruang ini memiliki nilai STC&nbsp;(Sound Transmission Class) sebesar 30-35 dB yang artinya insulasi&nbsp;suara cukup baik.</p>', '2015-09-14 10:38:53'),
(8, 8, 'STUDIO MUSIK VOZ', 'studio-musik-voz', 'BP. SANNY PRAMUDIANTO', '2013-01', '<p>STUDIO MUSIK VOZ<br />LOKASI : GONDUKUSUMAN, YOGYAKARTA<br />LUAS : 5,5M X 4M<br />TAHUN / LAMA PENGERJAAN : 2013 / 1 BULAN<br />PEMILIK : BP. SANNY PRAMUDIANTO</p>\r\n<p>Sebuah studio musik komersial di Yogyakarta yang mewadahi&nbsp;aktivitas bermusik musisi musisi Jogja. Studio berada di bangunan&nbsp;ruko 2 lantai. Berkonsep menyerupai ekualizer dalam dunia musik,&nbsp;studio ini menggunakan kain ateja sebagai finishingnya dengan&nbsp;warna oranye yang menjadi ciri khas Voz. Kain ateja dipilih karena&nbsp;merupakan salah satu peredam suara yang baik. Penggunaan&nbsp;aksen berupa timbulan dengan lampu LED berwarna kuning&nbsp;menimbulkan efek futuristik di dalam ruang ini. Penggunaan drop&nbsp;ceiling juga dimaksudkan untuk mengurangi flutter echo yang&nbsp;mungkin ditimbulkan oleh permukaan ruang yang tidak rata.</p>\r\n<p>Spesifikasi peredaman pada studio ini adalah berupa glass&nbsp;wool 25mm 2 lapis dengan rangka kayu sehingga memiliki nilai STC&nbsp;(Sound Transmission Class) sebesar 45-50 dB yang artinya insulasi&nbsp;suara cukup baik.</p>', '2015-09-15 02:27:56'),
(9, 5, 'RUANG HIBURAN HOTEL GRAND MANGKU PUTERA', 'ruang-hiburan-hotel-grand-mangku-putera', 'HOTEL GRAND MANGKU PUTERA', '2013-02', '<p>RUANG HIBURAN HOTEL GRAND MANGKU PUTERA<br />LOKASI : CILEGON, BANTEN<br />LUAS : 15M X 12M<br />TAHUN / LAMA PENGERJAAN : 2013 / 1,5 BULAN<br />PEMILIK : HOTEL GRAND MANGKU PUTERA</p>\r\n<p>Hotel Grand Mangku Putera menginginkan ruang yang selama&nbsp;ini tidak digunakan yang terletak di rooftop bangunan difungsikan&nbsp;sebagai ruang hiburan seperti karaoke, pemutaran film, talkshow,&nbsp;ataupun dapat juga sebagai ruang rapat. Ruang ini memiliki&nbsp;kapasitas hingga 50 orang. Ruang ini memiliki akses langsung ke&nbsp;kamar tamu hotel sehingga perlu dibuat adanya sistem peredaman&nbsp;suara yang baik. Peredaman pun dilakukan dengan 2 lapis&nbsp;glasswool berikut finishing akustiknya sehingga nilai STC (Sound&nbsp;Transmission Class) adalah sebesar 40-45 dB, cukup baik dan tidak&nbsp;mengganggu kamar hotel disebelahnya.</p>\r\n<p>Berkonsep klasik dengan suasana warna yang hangat, ruang&nbsp;dibuat dengan finishing kain ateja, vinyl, wallpaper, dan cat. Pemilik&nbsp;ingin ada bentukan yang sesuai dengan tema hotel, maka&nbsp;diterapkan ke dalam ornamen lengkung yang merupakan ciri khas&nbsp;hotel tersebut.</p>', '2015-09-15 02:37:16'),
(10, 6, 'RUANG RAPAT CUPUWATU RESTO', 'ruang-rapat-cupuwatu-resto', 'CUPUWATU RESTO', '2013-02', '<p>RUANG RAPAT CUPUWATU RESTO<br />LOKASI : KALASAN, YOGYAKARTA<br />LUAS : 10M X 6M<br />TAHUN / LAMA PENGERJAAN : 2013 / 1,5 BULAN<br />PEMILIK : CUPUWATU RESTO</p>\r\n<p>Cupuwatu Resto adalah sebuah restoran yang terkenal dengan&nbsp;makanan Manuk Londo nya. Menginginkan ruang rapat yang&nbsp;tenang dan tidak mengganggu ruang rapat yang juga ada&nbsp;disebelahnya. Ruang rapat dipisahkan dengan membuat partisi non&nbsp;permanen tebal yang berisikan peredaman yang baik dan dapat di&nbsp;buka tutup sehingga ruang rapat yang tadinya satu ruang besar&nbsp;menjadi dua dengan skala yang lebih kecil tanpa gangguan suara&nbsp;yang berarti. Konsep sederhana semi-formal dengan finishing kain&nbsp;ateja.</p>\r\n<p>Ruang ini memiliki kapasitas hingga 20 orang dalam satu ruang&nbsp;kecil dan jika membutuhkan lebih maka partisi dapat dibuka dan&nbsp;ruangan menjadi lebih besar dengan kapasitas sampai 40 orang.&nbsp;Spesifikasi peredaman adalah glasswool 25mm 2 lapis sehingga&nbsp;nilai STC (Sound Transmission Class) yang didapat adalah 50-55&nbsp;dB, yaitu insulasi suara sangat baik.</p>', '2015-09-15 02:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio_img`
--

CREATE TABLE IF NOT EXISTS `portofolio_img` (
  `id_porto_img` int(11) NOT NULL,
  `id_portofolio` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portofolio_img`
--

INSERT INTO `portofolio_img` (`id_porto_img`, `id_portofolio`, `gambar`) VALUES
(38, 5, 'mystudio336q-karaoke-madiun2fix.jpg'),
(39, 5, 'mystudio959q-karaoke-madiun3fix.jpg'),
(40, 5, 'mystudio131q-karaoke-madiun5fix.jpg'),
(41, 5, 'mystudio281q-karaoke-madiunkoridor2.jpg'),
(42, 5, 'mystudio836q-karaoke-madiunlobbyoke A.jpg'),
(43, 6, 'mystudio138studio-musik-pribadidiana1.jpg'),
(44, 6, 'mystudio237studio-musik-pribadidiana2.jpg'),
(45, 6, 'mystudio609studio-musik-pribadidiana3.jpg'),
(46, 6, 'mystudio925studio-musik-pribadidiana4.jpg'),
(47, 6, 'mystudio223studio-musik-pribadidiana5.jpg'),
(48, 6, 'mystudio351studio-musik-pribadidianaakso.jpg'),
(49, 6, 'mystudio506studio-musik-pribadidianaakso2.jpg'),
(50, 6, 'mystudio994studio-musik-pribadidianatop.jpg'),
(59, 7, 'mystudio371ruang-rapat-bappeda-boyolaliflat2 copy.jpg'),
(60, 7, 'mystudio854ruang-rapat-bappeda-boyolaliflatberundak3 copy.jpg'),
(61, 7, 'mystudio854ruang-rapat-bappeda-boyolalinoflat1 copy.jpg'),
(62, 7, 'mystudio16ruang-rapat-bappeda-boyolalinoflat2 copy.jpg'),
(63, 7, 'mystudio397ruang-rapat-bappeda-boyolalinoflat4 copy.jpg'),
(64, 8, 'mystudio750studio-musik-vozIMG-20130709-WA000.jpg'),
(65, 8, 'mystudio253studio-musik-vozIMG-20130709-WA001.jpg'),
(66, 8, 'mystudio989studio-musik-vozIMG-20130709-WA002.jpg'),
(67, 9, 'mystudio705ruang-hiburan-hotel-grand-mangku-putera1 copy.jpg'),
(68, 9, 'mystudio519ruang-hiburan-hotel-grand-mangku-putera2 copy.jpg'),
(69, 9, 'mystudio653ruang-hiburan-hotel-grand-mangku-putera6 copy.jpg'),
(70, 9, 'mystudio250ruang-hiburan-hotel-grand-mangku-putera7 copy.jpg'),
(71, 10, 'mystudio655ruang-rapat-cupuwatu-restomystudio portfolio 2014.jpg'),
(72, 10, 'mystudio139ruang-rapat-cupuwatu-restomystudio portfolio 2014-1.jpg'),
(73, 10, 'mystudio98ruang-rapat-cupuwatu-restomystudio portfolio 20142.jpg'),
(74, 10, 'mystudio338ruang-rapat-cupuwatu-restomystudio portfolio 20143.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `kodeproduk` varchar(50) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `produk_seo` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `harga` int(20) DEFAULT '0',
  `discount` int(3) DEFAULT '0',
  `tag` varchar(50) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `tgl_masuk`, `kodeproduk`, `nama_produk`, `produk_seo`, `deskripsi`, `harga`, `discount`, `tag`, `gambar`) VALUES
(6, 71, '2015-09-07', 'ContohProduk6', 'Contoh Produk 6', 'contoh-produk-6', '<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>', 0, 0, 'Populer', 'mystudio458contoh-produk-6noflat4 copy.jpg'),
(8, 71, '2015-09-11', 'ContohProduk5', 'Contoh Produk 5', 'contoh-produk-5', '<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>', 0, 0, 'Terlaris', 'mystudio55contoh-produk-5lobbyoke A.jpg'),
(9, 61, '2015-09-11', 'ContohProduk4', 'Contoh Produk 4', 'contoh-produk-4', '<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>', 0, 0, 'Produk Baru', 'mystudio224contoh-produk-4koridor2.jpg'),
(10, 63, '2015-09-11', 'ContohProduk3', 'Contoh Produk 3', 'contoh-produk-3', '<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>', 0, 0, 'Edisi Terbatas', 'mystudio62contoh-produk-35fix.jpg'),
(11, 62, '2015-09-11', 'ContohProduk2', 'Contoh Produk 2', 'contoh-produk-2', '<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p>Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>', 0, 0, 'Produk Baru', 'mystudio540contoh-produk-23fix.jpg'),
(12, 69, '2015-09-11', 'ContohProduk1', 'Contoh Produk 1', 'contoh-produk-1', '<p style="text-align: justify;">Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p style="text-align: justify;">Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p style="text-align: justify;">Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>\r\n<p style="text-align: justify;">Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;Ini merupakan contoh deskripsi dari produk.&nbsp;</p>', 0, 0, 'Produk Baru', 'mystudio441contoh-produk-12fix.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program_name`) VALUES
(1, 'BIMBINGAN KEDOKTERAN'),
(2, 'BIMBINGAN KEDINASAN'),
(3, 'BIMBINGAN SBMPTN & UM'),
(4, 'IUP UGM');

-- --------------------------------------------------------

--
-- Table structure for table `programcategory`
--

CREATE TABLE IF NOT EXISTS `programcategory` (
  `programcategory_id` int(11) NOT NULL,
  `programcategory_name` varchar(255) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programcategory`
--

INSERT INTO `programcategory` (`programcategory_id`, `programcategory_name`, `program_id`) VALUES
(4, 'BIMBINGAN STIS', 2),
(5, 'BIMBINGAN STAN', 2),
(6, 'BIMBINGAN STMKG', 2),
(7, 'BIMBINGAN STSN', 2),
(8, 'BIMBINGAN POLTEKKES', 2),
(9, 'BIMBINGAN STPN', 2),
(10, 'BIMBINGAN DEPHUB (STTD, STIP, STPI)', 2),
(11, 'BIMBINGAN IPDN', 2),
(12, 'BIMBINGAN UM UGM (UTUL)', 3),
(13, 'BIMBINGAN SBMPTN', 3),
(14, 'BIMBINGAN IUP FEB UGM', 4),
(15, 'BIMBINGAN IUP IR (HI) UGM', 4),
(16, 'BIMBINGAN IUP LAW UGM', 4),
(17, 'BIMBINGAN IUP PPM UGM', 4),
(18, 'BIMBINGAN IUP MIPA UGM', 4),
(19, 'BIMBINGAN IUP PSIKOLOGI UGM', 4),
(20, 'BIMBINGAN KEDOKTERAN TERPADU', 1),
(21, 'BIMBINGAN IUP MEDICINE UGM', 1),
(22, 'BIMBINGAN KEDOKTERAN UMY', 1),
(23, 'BIMBINGAN KEDOKTERAN UII', 1),
(24, 'BIMBINGAN KEDOKTERAN SBMPTN', 1),
(25, 'BIMBINGAN KED. UTUL UGM', 1),
(26, 'KEDOKTERAN TERPADU JAKARTA', 1),
(27, 'BIMBINGAN KEDOKTERAN UKDW', 1);

-- --------------------------------------------------------

--
-- Table structure for table `running`
--

CREATE TABLE IF NOT EXISTS `running` (
  `id` int(11) NOT NULL,
  `isi` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `running`
--

INSERT INTO `running` (`id`, `isi`) VALUES
(1, '<p>asrama gratis untuk 500 peserta, gggggggggggggggggggggggggggggggggggggggggggggggggggggg, ggggggggggggggggggggggggggggggggggggggggggggggg, lllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll</p>');

-- --------------------------------------------------------

--
-- Table structure for table `siswalolos`
--

CREATE TABLE IF NOT EXISTS `siswalolos` (
  `id_siswalolos` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `seo` varchar(150) NOT NULL,
  `id_logosiswalolos` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswalolos`
--

INSERT INTO `siswalolos` (`id_siswalolos`, `content`, `date`, `seo`, `id_logosiswalolos`) VALUES
(19, '<h2 style="text-align: center;"><strong>SISWA LOLOS PT U</strong>NY</h2>\r\n<p style="text-align: center;">rfthgsrfgsdfgvv b xfdbvsdf</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;">&nbsp;c dfgdfgdfg</p>', '2016-12-08', 'lembaga-konsultasi-dan-bimbingan-belajar', 3),
(20, '<p>kjhbjhvbjhjk</p>', '2016-12-08', 'lembaga-konsultasi-dan-bimbingan-belajar', 15),
(21, '<p style="text-align: center;"><strong>gsafdhagsfdhagsdas</strong></p>\r\n<p style="text-align: center;"><strong>sadasdqasd</strong></p>', '2016-12-08', '', 14);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id_slide` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `deskripsi` varchar(350) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `nama`, `gambar`, `deskripsi`) VALUES
(2, 'Slide 1', '1083065. foto beranda 1.jpg', 'deskripsi singkat tidak lebih dari 250 karakter'),
(6, 'slide 2', '8540646. foto beranda 2.jpg', 'q'),
(7, 'slide 3', '6283267. foto beranda 3.jpg', 'deskripsi singkat tidak lebih dari 250 karakter'),
(8, 'slide 4', '5549318. foto beranda 4.jpg', 'deskripsi singkat tidak lebih dari 250 karakter'),
(9, 'slide 5', '6079329. foto beranda 5.jpg', '1'),
(10, 'slide 6', '9851710. foto beranda 6.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE IF NOT EXISTS `sosmed` (
  `id_sosmed` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id_sosmed`, `nama`, `link`, `gambar`) VALUES
(2, 'Facebook', 'https://www.facebook.com/', '558715facebook.png'),
(3, 'Twitter', 'https://twitter.com/', '714263twitter.png'),
(5, 'Youtube', 'http://www.youtube.com/', '314056youtube.png'),
(6, 'Instagram', 'https://instagram.com/', '687011instagram.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE IF NOT EXISTS `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '1',
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2015-08-27', 162, '1440649325'),
('::1', '2015-08-26', 234, '1440584917'),
('::1', '2015-08-25', 192, '1440499090'),
('::1', '2015-08-24', 445, '1440412107'),
('::1', '2015-08-21', 383, '1440153044'),
('::1', '2015-08-20', 294, '1440064407'),
('::1', '2015-08-19', 291, '1439980022'),
('::1', '2015-08-31', 41, '1441016591'),
('::1', '2015-09-01', 100, '1441103152'),
('::1', '2015-09-02', 368, '1441189979'),
('::1', '2015-09-03', 399, '1441276375'),
('::1', '2015-09-04', 201, '1441357815'),
('::1', '2015-09-07', 93, '1441621917'),
('::1', '2015-09-08', 155, '1441708355'),
('::1', '2015-09-09', 244, '1441794452'),
('::1', '2015-09-10', 168, '1441881317'),
('::1', '2015-09-11', 258, '1441967352'),
('::1', '2015-09-14', 187, '1442227284'),
('::1', '2015-09-15', 100, '1442289660');

-- --------------------------------------------------------

--
-- Table structure for table `subbimbingan`
--

CREATE TABLE IF NOT EXISTS `subbimbingan` (
  `id_subbimbingan` int(11) NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `content` text,
  `date` date DEFAULT NULL,
  `seo` varchar(150) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subbimbingan`
--

INSERT INTO `subbimbingan` (`id_subbimbingan`, `title`, `content`, `date`, `seo`, `program_id`) VALUES
(25, 'Kedokteran UMS', '<p>Lembaga Konsultasi dan Bimbingan Belajar&nbsp;(LKBB)&nbsp;<strong>INDONESIA COLLEGE</strong>&nbsp;adalah institusi pendidikan yang telah berdiri sejak tahun 1993 dan memfokuskan kegiatan bimbingan khusus dan kedinasan.&nbsp;<strong>INDONESIA COLLEGE</strong>&nbsp;menyadari pada tahun-tahun terakhir siswa SMA/MA/SMK makin selektif memilih perguruan tinggi, karena sangat menentukan masa depannya. PTN maupun PTS yang dituju adalah yang membuka program prospektif baik lapangan kerja maupun untuk berwirausaha. Sayangnya para siswa SMA/MA/SMK kurang mengetahui hal-hal yang harus dipersiapkan untuk mengikuti seleksi tersebut.</p>\r\n<p><strong>INDONESIA COLLEGE</strong>&nbsp;terpanggil untuk membantu para siswa, baik sebagai pusat informsi&nbsp;maupun pusat bimbingan. Program bimbingan belajarnya diberi nama Program Intensif Khusus (PINSUS). Pengalaman&nbsp;<strong>INDONESIA COLLEGE</strong>&nbsp;bertahun-tahun menjadi jaminan kualitas, layanan, kepastian diterima di PT favorit.</p>\r\n<p>Silahkan bergabung dengan kami :</p>\r\n<p>Hubungi hotline service kami :&nbsp;<strong>(0274) 547505, 546232, 2923336</strong></p>\r\n<p>WA/SMS :</p>\r\n<p style="text-align: justify;">Lembaga Konsultasi dan Bimbingan Belajar&nbsp;(LKBB)&nbsp;<strong>INDONESIA COLLEGE</strong>&nbsp;adalah institusi pendidikan yang telah berdiri sejak tahun 1993 dan memfokuskan kegiatan bimbingan khusus dan kedinasan.&nbsp;<strong>INDONESIA COLLEGE</strong>&nbsp;menyadari pada tahun-tahun terakhir siswa SMA/MA/SMK makin selektif memilih perguruan tinggi, karena sangat menentukan masa depannya. PTN maupun PTS yang dituju adalah yang membuka program prospektif baik lapangan kerja maupun untuk berwirausaha. Sayangnya para siswa SMA/MA/SMK kurang mengetahui hal-hal yang harus dipersiapkan untuk mengikuti seleksi tersebut.</p>', '2016-12-06', '', 1),
(26, 'kedokteran UMY', '<p style="text-align: justify;">Selamat datang di INDONESIA COLLEGE, selamat datang adik-adik intelektual muda calon dokter. &nbsp;Selamat bergabung bersama bimbingan khusus CBT dan PBT kedokteran UMY Program jaminan. Program dijamin dengan soal-soal prediksi yang sangat akurat, simulasi tes yang mirip, latihan soal yang sangat terarah, pengajar oleh ahlinya, dan peluang diterima maksimal. <br /> INDONESIA COLLEGE telah berpengalaman sejak tahun 1993 dalam penyelenggaraan bimbingan kedinasan dan kedokteran. Kini INDONESIA COLLEGE hadir dengan bimbingan khusus persiapan masuk kedokteran UMY. Sebagaimana diketahui bahwa ada dua jenis tes masuk Universitas Muhammadiyah Yogyakarta, yaitu&nbsp;Computer Based Test (CBT) dan&nbsp;Paper Based Test (PBT). CBT dibuka November, pendaftaran dan seleksi pada hari yang sama. Pendaftaran PBT UMY Gelombang 1 sejak bulan Februari 2017, seleksinya dilaksanakan mulai bulan April 2017. <br /> Bimbingan khusus sukses PBT KEDOKTERAN UMY &nbsp;dilaksanakan oleh INDONESIA COLLEGE Yogyakarta. Pendaftaran dimulai sekarang dan ditutup satu pekan sebelum tes UMY setiap gelombang. Bimbingan akan dilaksanakan tanggal 21 Mar, 01 Mei, 23 Mei, dan 17 Jul 2017. Jumlah peserta dibatasi 15 orang/kelas. Bimbingan dilaksanakan secara privat maupun kelas. Silahkan hubungi INDONESIA COLLEGE, maksimalkan peluang menjadi dokter.&nbsp;<em>Pastikan anda datang, berkompetisi, dan menjadi dokter.</em> <br /> <strong>DAFTAR SISWA DITERIMA KEDOKTERAN UMY</strong> <strong>INDONESIA COLLEGE YOGYAKARTA</strong> <strong>TAHUN 2016-2017</strong></p>\r\n<table style="border-collapse: collapse; background: #ffc;" border="1" width="75%">\r\n<tbody>\r\n<tr>\r\n<td><strong>NO</strong></td>\r\n<td><strong>NAMA</strong></td>\r\n<td><strong>ASAL SEKOLAH</strong></td>\r\n<td><strong>PRODI/PT</strong></td>\r\n</tr>\r\n<tr>\r\n<td>1</td>\r\n<td>NABILA</td>\r\n<td>&nbsp;</td>\r\n<td>KEDOKTERAN UMUM/UMY</td>\r\n</tr>\r\n<tr>\r\n<td>2</td>\r\n<td>NABILA NORMA</td>\r\n<td>SMA N 2 MADIUN</td>\r\n<td>KEDOKTERAN UMUM/UMY</td>\r\n</tr>\r\n<tr>\r\n<td>3</td>\r\n<td>ANDI ORLANDO</td>\r\n<td>SMA N 1 SANGGATA</td>\r\n<td>KEDOKTERAN UMUM/UMY</td>\r\n</tr>\r\n<tr>\r\n<td>4</td>\r\n<td>SENO ADI WICAKSONO</td>\r\n<td>SMA N 2 YOGYAKARTA</td>\r\n<td>KEDOKTERAN UMUM/UMY</td>\r\n</tr>\r\n<tr>\r\n<td>5</td>\r\n<td>ALFAN AL GHIFARI SUDARMANTO</td>\r\n<td>SMA N 1 PONOROGO</td>\r\n<td>KEDOKTERAN UMUM/UMY</td>\r\n</tr>\r\n<tr>\r\n<td>6</td>\r\n<td>NUR RAFIDA</td>\r\n<td>SMA N 7 SURAKARTA</td>\r\n<td>KEDOKTERAN UMUM/UMY</td>\r\n</tr>\r\n<tr>\r\n<td>7</td>\r\n<td>ALMAS TANUHITA DILANTI</td>\r\n<td>SMA N 1 SURAKARTA</td>\r\n<td style="text-align: center;">KEDOKTERAN GIGI/UMY</td>\r\n</tr>\r\n<tr>\r\n<td>8</td>\r\n<td>AMALIA ZAHRA</td>\r\n<td>&nbsp;</td>\r\n<td>KEDOKTERAN GIGI/UMY</td>\r\n</tr>\r\n<tr>\r\n<td>9</td>\r\n<td>BIMANTARA LESMANA</td>\r\n<td>&nbsp;</td>\r\n<td>KEDOKTERAN UMUM/UMY</td>\r\n</tr>\r\n<tr>\r\n<td>10</td>\r\n<td>POPPY FLORENSIA WIRETNA</td>\r\n<td>SMA N 1 PLERET</td>\r\n<td>KEDOKTERAN GIGI/UMY</td>\r\n</tr>\r\n<tr>\r\n<td>11</td>\r\n<td>SHARON SESITA FRINCES</td>\r\n<td>SMA N 11 YOGYAKARTA</td>\r\n<td>KEDOKTERAN GIGI/UMY</td>\r\n</tr>\r\n<tr>\r\n<td>12</td>\r\n<td>ZAM ZAMI</td>\r\n<td>SMA N 1 MUNTOK</td>\r\n<td>PENDIDIKAN DOKTER GIGI</td>\r\n</tr>\r\n<tr>\r\n<td>13</td>\r\n<td>ASYIFA AULIA P</td>\r\n<td>SMAT KRIDA NUSANTARA</td>\r\n<td>PENDIDIKAN DOKTER</td>\r\n</tr>\r\n<tr>\r\n<td>14</td>\r\n<td>HERBAGUS ABYAN JATMIKO</td>\r\n<td>SMA MUH 1 YOGYAKARTA</td>\r\n<td>PENDIDIKAN DOKTER</td>\r\n</tr>\r\n<tr>\r\n<td>15</td>\r\n<td>TANJUNG BUDI KUSUMA</td>\r\n<td>SMA N 1 PURWODADI</td>\r\n<td>PENDIDIKAN DOKTER</td>\r\n</tr>\r\n<tr>\r\n<td>16</td>\r\n<td>BERTYLIANA PURNAMASARI</td>\r\n<td>SMA N 6 YOGYAKARTA</td>\r\n<td>PENDIDIKAN DOKTER</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NB: mohon maaf bagi yang namanya tidak kami cantumkan </em></strong> <br /> <strong>PERKIRAAN SELEKSI DAN JADWAL BIMBINGAN KEDOKTERAN UMY 2017-2018</strong></p>\r\n<table style="border-collapse: collapse; background: #ffc;" border="1" width="75%">\r\n<tbody>\r\n<tr>\r\n<td>Jalur</td>\r\n<td>Pendaftaran</td>\r\n<td>Seleksi</td>\r\n<td>Pengumuman</td>\r\n<td>Bimbingan</td>\r\n</tr>\r\n<tr>\r\n<td>PBT Gel. I*</td>\r\n<td>6 Feb - 31 Mar 2017</td>\r\n<td>02 Apr 2017</td>\r\n<td>5 Apr 2017</td>\r\n<td>21 - 31 Mar 2017</td>\r\n</tr>\r\n<tr>\r\n<td>PBT Gel. II*</td>\r\n<td>3 Apr - 12 Mei 2017</td>\r\n<td>14 Mei 2017</td>\r\n<td>17 Mei 2017</td>\r\n<td>1 - 12 Mei 2017</td>\r\n</tr>\r\n<tr>\r\n<td>PBT Gel. III*</td>\r\n<td>15 Mei - 2 Juni 2017</td>\r\n<td>4 Juni 2017</td>\r\n<td>7 Juni 2017</td>\r\n<td>23 Mei - 2 Juni 2017</td>\r\n</tr>\r\n<tr>\r\n<td>PBT Gel. IV*</td>\r\n<td>5 Juni - 28 Juli 2017</td>\r\n<td>30 Juli 2017</td>\r\n<td>2 Agustus 2017</td>\r\n<td>17 - 28 Juli 2017</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2016-12-06', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `id_subscribe` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id_subscribe`, `email`, `waktu`) VALUES
(2, 'email@mail.com', '2015-09-14 08:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_asrama`
--

CREATE TABLE IF NOT EXISTS `tb_asrama` (
  `asrama_id` int(11) NOT NULL,
  `asrama_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_asrama`
--

INSERT INTO `tb_asrama` (`asrama_id`, `asrama_name`) VALUES
(1, 'Tidak'),
(3, 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bimbingan`
--

CREATE TABLE IF NOT EXISTS `tb_bimbingan` (
  `bimbingan_id` int(11) NOT NULL,
  `bimbingan_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bimbingan`
--

INSERT INTO `tb_bimbingan` (`bimbingan_id`, `bimbingan_name`) VALUES
(1, 'PKN STAN'),
(2, 'STIS'),
(6, 'IPDN'),
(7, 'STMKG'),
(8, 'STSN'),
(9, 'DEPHUB'),
(10, 'AIM-POLTEKIP'),
(11, 'STPN'),
(12, 'POLTEKKES'),
(13, 'IUP MEDICINE UGM'),
(14, 'IUP FEB UGM'),
(15, 'IUP LAW UGM'),
(16, 'IUP IR & PPM UGM'),
(17, 'IUP MIPA UGM'),
(18, 'IUP PSIKOLOGI UGM'),
(19, 'SBMPTN SAINTEK'),
(20, 'SBMPTN SOSHUM'),
(21, 'UTUL UGM SAINTEK'),
(22, 'UTUL UGM SOSHUM'),
(23, 'KEDOKTERAN TERPADU'),
(24, 'KEDOKTERAN UMY'),
(25, 'KEDOKTERAN UII'),
(26, 'KEDOKTERAN UKDW');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE IF NOT EXISTS `tb_kelas` (
  `kelas_id` int(11) NOT NULL,
  `kelas_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`kelas_id`, `kelas_name`) VALUES
(8, 'Intake 1'),
(9, 'Preliminary'),
(10, 'Super Intensif'),
(11, 'Supercamp'),
(12, 'Gelombang 1'),
(13, 'Excellent'),
(14, 'Special'),
(15, 'Reguler');

-- --------------------------------------------------------

--
-- Table structure for table `tb_program`
--

CREATE TABLE IF NOT EXISTS `tb_program` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_program`
--

INSERT INTO `tb_program` (`program_id`, `program_name`) VALUES
(2, '19 Sept'),
(10, 'Intensif'),
(19, 'Angkatan 2'),
(20, 'Angkatan 1'),
(22, '17 Okt');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempatprogram`
--

CREATE TABLE IF NOT EXISTS `tb_tempatprogram` (
  `tempat_program_id` int(11) NOT NULL,
  `tempat_program_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tempatprogram`
--

INSERT INTO `tb_tempatprogram` (`tempat_program_id`, `tempat_program_name`) VALUES
(1, 'Surabaya'),
(2, 'Malang'),
(3, 'Depok'),
(4, 'Semarang'),
(5, 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tmp_kelas`
--

CREATE TABLE IF NOT EXISTS `tb_tmp_kelas` (
  `tmp_kelas_id` int(11) NOT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `bimbingan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tmp_kelas`
--

INSERT INTO `tb_tmp_kelas` (`tmp_kelas_id`, `kelas_id`, `bimbingan_id`) VALUES
(31, 15, 19),
(32, 14, 19),
(33, 13, 19),
(34, 11, 19),
(35, 15, 26),
(36, 14, 26),
(37, 12, 26);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tmp_program`
--

CREATE TABLE IF NOT EXISTS `tb_tmp_program` (
  `tmp_program_id` int(11) NOT NULL,
  `program_id` int(11) DEFAULT NULL,
  `bimbingan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tmp_program`
--

INSERT INTO `tb_tmp_program` (`tmp_program_id`, `program_id`, `bimbingan_id`) VALUES
(51, 10, 19),
(52, 22, 26),
(53, 20, 26),
(54, 19, 26);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `gambar`, `isi`, `tanggal`) VALUES
(2, 'Satria Baja Pink', '5982349. foto beranda 5.jpg', '<p>Menurut saya, bimbel di Indonesian College Jogja sangat membantu saya dalam mengejar cita-cita untuk bisa kuliah di kedokteran UGM. Metode pembelajaran yang menarik serta mudah dipahami memudahkan saya untuk belajar serta mengerjakan soal-soal masuk perguruan tinggi. Teman-temannya juga asyik dan seru. A lot of thanks for IC!</p>', '2015-08-10'),
(6, 'Kiara Asmara', '15123310. foto beranda 6.jpg', '<p>Menurut saya, bimbel di Indonesian College Jogja sangat membantu saya dalam mengejar cita-cita untuk bisa kuliah di kedokteran UGM. Metode pembelajaran yang menarik serta mudah dipahami memudahkan saya untuk belajar serta mengerjakan soal-soal masuk perguruan tinggi. Teman-temannya juga asyik dan seru. A lot of thanks for IC!</p>', '2015-08-01'),
(7, 'Khanaho Ano', '877417foto beranda 4.jpg', '<p>Menurut saya, bimbel di Indonesian College Jogja sangat membantu saya dalam mengejar cita-cita untuk bisa kuliah di kedokteran UGM. Metode pembelajaran yang menarik serta mudah dipahami memudahkan saya untuk belajar serta mengerjakan soal-soal masuk perguruan tinggi. Teman-temannya juga asyik dan seru. A lot of thanks for IC!</p>', '2015-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `blokir` enum('Y','N') NOT NULL,
  `id_session` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`, `id_session`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@bimbel-ic.com', '', 'admin', 'N', '0mf32uo62pmrr6jf1jghdrvfc3');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `video` varchar(150) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `judul`, `deskripsi`, `video`, `tanggal`) VALUES
(1, 'Bimbingan IUP Medicine', 'test', 'https://www.youtube.com/embed/PHArmaVMQwY', '2016-11-08 18:25:35'),
(2, 'bimbingan ', 'test', 'https://www.youtube.com/embed/NSKcb2O-d4k', '2016-10-14 15:28:03'),
(4, 'test', 'test1234', 'https://www.youtube.com/embed/NSKcb2O-d4k', '2016-11-08 18:37:19'),
(6, 'Bimbel Kedokteran UMY', 'Bimbel Kedokteran UMY Program Jaminan di Indonesia College Yogyakarta', 'https://www.youtube.com/embed/WsuXmv9VOKg', '2016-10-14 15:26:06'),
(7, 'Bimbel Terbaik Masuk Kedokteran Yogyakarta', 'tes', 'https://www.youtube.com/embed/NSKcb2O-d4k', '2016-11-08 18:34:51'),
(8, 'bimbingan kedokteran terpadu 2017 program jaminan di Indonesia College', 'bimbingan kedokteran terpadu 2017 program jaminan di Indonesia College', 'https://www.youtube.com/embed/0zdWfZYB6js', '2016-11-08 18:37:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_articles`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `cabanglain`
--
ALTER TABLE `cabanglain`
  ADD PRIMARY KEY (`id_cabanglain`);

--
-- Indexes for table `categ_porto`
--
ALTER TABLE `categ_porto`
  ADD PRIMARY KEY (`id_categ_porto`);

--
-- Indexes for table `daftar_online`
--
ALTER TABLE `daftar_online`
  ADD PRIMARY KEY (`daftar_id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `hotline`
--
ALTER TABLE `hotline`
  ADD PRIMARY KEY (`id_hotline`);

--
-- Indexes for table `hubungikami`
--
ALTER TABLE `hubungikami`
  ADD PRIMARY KEY (`id_hubungikami`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `kontakk`
--
ALTER TABLE `kontakk`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `linkterkait`
--
ALTER TABLE `linkterkait`
  ADD PRIMARY KEY (`id_linkterkait`);

--
-- Indexes for table `logosiswalolos`
--
ALTER TABLE `logosiswalolos`
  ADD PRIMARY KEY (`id_logosiswalolos`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `pesan_jasa`
--
ALTER TABLE `pesan_jasa`
  ADD PRIMARY KEY (`id_pesan_jasa`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `portofolio_img`
--
ALTER TABLE `portofolio_img`
  ADD PRIMARY KEY (`id_porto_img`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `programcategory`
--
ALTER TABLE `programcategory`
  ADD PRIMARY KEY (`programcategory_id`);

--
-- Indexes for table `running`
--
ALTER TABLE `running`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswalolos`
--
ALTER TABLE `siswalolos`
  ADD PRIMARY KEY (`id_siswalolos`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- Indexes for table `subbimbingan`
--
ALTER TABLE `subbimbingan`
  ADD PRIMARY KEY (`id_subbimbingan`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id_subscribe`);

--
-- Indexes for table `tb_asrama`
--
ALTER TABLE `tb_asrama`
  ADD PRIMARY KEY (`asrama_id`);

--
-- Indexes for table `tb_bimbingan`
--
ALTER TABLE `tb_bimbingan`
  ADD PRIMARY KEY (`bimbingan_id`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `tb_program`
--
ALTER TABLE `tb_program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `tb_tempatprogram`
--
ALTER TABLE `tb_tempatprogram`
  ADD PRIMARY KEY (`tempat_program_id`);

--
-- Indexes for table `tb_tmp_kelas`
--
ALTER TABLE `tb_tmp_kelas`
  ADD PRIMARY KEY (`tmp_kelas_id`);

--
-- Indexes for table `tb_tmp_program`
--
ALTER TABLE `tb_tmp_program`
  ADD PRIMARY KEY (`tmp_program_id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_articles` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cabanglain`
--
ALTER TABLE `cabanglain`
  MODIFY `id_cabanglain` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `categ_porto`
--
ALTER TABLE `categ_porto`
  MODIFY `id_categ_porto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `daftar_online`
--
ALTER TABLE `daftar_online`
  MODIFY `daftar_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=197;
--
-- AUTO_INCREMENT for table `hotline`
--
ALTER TABLE `hotline`
  MODIFY `id_hotline` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hubungikami`
--
ALTER TABLE `hubungikami`
  MODIFY `id_hubungikami` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kontakk`
--
ALTER TABLE `kontakk`
  MODIFY `id_kontak` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `linkterkait`
--
ALTER TABLE `linkterkait`
  MODIFY `id_linkterkait` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `logosiswalolos`
--
ALTER TABLE `logosiswalolos`
  MODIFY `id_logosiswalolos` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=420;
--
-- AUTO_INCREMENT for table `pesan_jasa`
--
ALTER TABLE `pesan_jasa`
  MODIFY `id_pesan_jasa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `portofolio_img`
--
ALTER TABLE `portofolio_img`
  MODIFY `id_porto_img` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `programcategory`
--
ALTER TABLE `programcategory`
  MODIFY `programcategory_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `running`
--
ALTER TABLE `running`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siswalolos`
--
ALTER TABLE `siswalolos`
  MODIFY `id_siswalolos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id_sosmed` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subbimbingan`
--
ALTER TABLE `subbimbingan`
  MODIFY `id_subbimbingan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id_subscribe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_asrama`
--
ALTER TABLE `tb_asrama`
  MODIFY `asrama_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_bimbingan`
--
ALTER TABLE `tb_bimbingan`
  MODIFY `bimbingan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `kelas_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_program`
--
ALTER TABLE `tb_program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_tempatprogram`
--
ALTER TABLE `tb_tempatprogram`
  MODIFY `tempat_program_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_tmp_kelas`
--
ALTER TABLE `tb_tmp_kelas`
  MODIFY `tmp_kelas_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tb_tmp_program`
--
ALTER TABLE `tb_tmp_program`
  MODIFY `tmp_program_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
