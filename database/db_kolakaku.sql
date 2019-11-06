-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 07:32 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_beritaku`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_about`
--

CREATE TABLE `table_about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `tagline` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `logo` text NOT NULL,
  `banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_about`
--

INSERT INTO `table_about` (`id`, `title`, `company`, `tagline`, `email`, `telepon`, `address`, `description`, `logo`, `banner`) VALUES
(1, 'KolakaKU', 'PT. Media Infotama Grup', 'Media Online Terpercaya Kolaka', 'informasikolaka@gmail.com', '082211443366', 'Jl.Perumnas Blok. No.51 Kel. Lalombaa , Kec. Kolaka , Kab. Kolaka', 'adalah media online terpercaya untuk masyrakat, dengan menginformasikan berita – berita secara update dan faktual, baik berita – berita lokal yang ada dikolaka,sultra,nasional,bahkan internasional.', 'logo-header.png', 'banner.png');

-- --------------------------------------------------------

--
-- Table structure for table `table_groups`
--

CREATE TABLE `table_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_groups`
--

INSERT INTO `table_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(3, 'contributor', 'Contributor');

-- --------------------------------------------------------

--
-- Table structure for table `table_log`
--

CREATE TABLE `table_log` (
  `id` int(11) NOT NULL,
  `action` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_login_attempts`
--

CREATE TABLE `table_login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_login_attempts`
--

INSERT INTO `table_login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(2, '::1', 'riksan.taslim88@gmail.com', 1572242747),
(3, '::1', 'riksan.taslim88@gmail.com', 1572242756),
(4, '::1', 'riksan.taslim88@gmail.com', 1572242795);

-- --------------------------------------------------------

--
-- Table structure for table `table_post`
--

CREATE TABLE `table_post` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `image` text NOT NULL,
  `status` int(1) NOT NULL,
  `level` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_contributor` int(11) NOT NULL,
  `id_reviewer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_post`
--

INSERT INTO `table_post` (`id`, `slug`, `title`, `content`, `date`, `image`, `status`, `level`, `id_category`, `id_contributor`, `id_reviewer`) VALUES
(1, 'wajah-baru-sultra-wakili-suara-rakyat-di-senayan', 'Wajah Baru Sultra, Wakili Suara Rakyat Di Senayan', 'Calon anggota DPR RI dari partai Golkar Dapil Sultra Abdul Rahman Farisi (ARF) memastikan siap memperjuangkan seluruh aspirasi masyarakat Sultra di senayan sehingga menjadi perhatian pemerintah pusat. Salah satu yang menjadi perhatianya penguatan sektor kemaritiman untuk wilayah Sultra.\r\n\r\nAbdul Rahman Farisi (ARF) menyatakan visi yang akan diperjuangkan nanti di DPR RI mewakili masyarakat Sultra di senayan soal kepentingan penguatan sektor kamaritiman. Karena Sultra memiliki potensi itu.\r\n\r\nDPR kata dia, bekerja pada kewenangan legislasi, bageting dan pengawasan. Ia memastikan kewenangan legislasi untuk mengawal undang-undang yang dibahas di DPR nanti bagaimana memberi manfaat atau keuntungan bagi wilayah kepulauan. Karena Sultra ada delapan wilayah kabupaten/kota berada dikepulauan.\r\n\r\nCalon nomor empat di Golkar ini juga memastikan dalam tiap pembahasan undang-undangan itu agar bagaimana memberikan tekanan bahwa ada perhatian kepada wilayah kepulauan. Karena dari sisi infrastruktur kepulauan dan daratan itu beda. Di kepulauan itu membutuhkan angggaran cukup besar.\r\n\r\nSoal kemiskinan sebagian besar berada diwilayah pesisir .Karena itu banyak butuh perhatian khusus dan penanganan serius. “Nah inilah kemudian yang harus diperjuangkan termaksud disitu soal perjuangan kepulauan Buton,” ujarnya.\r\n\r\nMenurutnya, perjuangan pemekaran Kepulauan Kepton itu harga mati harus diperjuangkan. Namun ia mengingatkan perlu ditambah jangan hanya kita melihat pemekaran Kepton itu pada urusan atau berakhir pada Kepton menjadi provinsi.\r\n\r\nIa mengajak agar tidak mengabaikan perjuangan-perjuangan yang bersifat jangka pendek untuk menjadikan misalnya Kota Baubau atau daerah sekitarnya ini sebagai mesin lokomotif pertumbuhan pembangunan di Sultra itu menjadi kota yang mandiri.\r\n\r\nArtinya infrastruktur yang terbangun di Kota Kendari pelayanan-pelayanan harus digeser di daerah lain. Bandara udara Baubau harus ditambah, pesawatnya jangan hanya jenis ATR tapi pesawat berbadan lebar.\r\n\r\nSoal pendidikan, di Sultra hanya ada dua universitas negeri. Dua universitas ini ada didaratan di Kolaka dan Kendari. Belum ada diwilayah kepulauan. Ini yang mesti diperjuangkan. Karena jika sudah ada fasilitas pendidikan negeri maka akan menjadi layanan pendidikan.\r\n\r\n“Kita tetap perjuangkan kepton tapi kita jangan lupa perjuangan-perjuangan kecilnya ini. Sambil kita menunggu moratorium di cabut, kita mesti menggenjot infrastrukturnya, ini harus seimbang perjuanganya,” katanya.\r\n\r\nKata dia, perjuangan pemekaran Kepton ini mesti diperluas spirit perjuangannya. Jika diperjuangkan secara meluas misalnya aktifitas ekonomi lainya pula didukung dan diperluas maka yang memungkinkan banyak orang terlibat.\r\n\r\nPerjuangan Kepton itu mesti seiring sejalan antara DPR dan Pemerintah. Ia berjanji siap untuk memperjuangkan aspirasi masyarakat Sultra yang tersumbat sehingga bisa direalisasikan.\r\n\r\nMenurutnya, hampir seluruh wilayah Sultra berada didsesa pesisir. Memang ini butuh perjuangan untuk menguatkan sektor maritim untuk mensejahtrakan masyarkat yang berada dipesisir.\r\n\r\n“Lewat apa, kita perbaiki produksi nelayan, perikanan budidaya, mesti kita liat dari sisi misalnya kebijakan pemerintah secara nasional,” katanya.\r\n\r\nIa berjanji seluruh program kementrian keluatan dan perikanan itu memiliki program-program yang tersentuh di Sultra. Sehingga kebijakan KKP ini menjadi sasaran di Sultra.\r\n\r\nJadi tidak boleh kebijakan strategis nasional tanpa memasukan Sultra sebagai salah satu wilayah sasaran. Artinya tidak boleh ada program peemrintah pusat terutama kementrian perikanan dan keluatan tentang pengembangan masyarakat persisir dan penguatan sektor maritim yang tidak menjadikan Sultra menjadi sasaran utama program. Karena Sultra memenuhi syarat.\r\n\r\nIni yang menjadi komitmen dirinya yang diperjuangkan disenayan. Ia tak akan melewatkan seluruh program strategis nasional yang tidak menjadikan Sultra sebagai sasaran utama. Salah satunya sektor penguatan sektor kemaritiman dan sektor pertanian.\r\n\r\nSoal pemasaran produksi warga ia juga akan terus suarakan sehingga ini juga menjadi perhatian bersama pemerintah pusat, pemerintah provinsi dan kabupaten/kota.\r\n\r\nIa juga tak akan berhenti bicara untuk menyoal bagaimana pemerintah bertanggungjawab soal stabilitasasi dan pemasaran produk perikanan. Ia juga memastikan penguatan sektor kemaritiman ini tak akan henti diperjuangkan dan disuarakan sehingga menjadi perhatian serius pemerintah.', '2019-03-17 00:00:00', 'bilboard-arf.jpg', 0, 2, 1, 7, 1),
(2, 'kritik-pernyataan-mahfud-md-di-ilc-eks-ketua-mpm-uho-buka-suara', 'Kritik Pernyataan Mahfud MD di ILC, Eks Ketua MPM UHO Buka Suara.', 'Kader PMII kota kendari dan juga  Eks Ketua MPM UHO La Ode Inta menyayangkan Pernyataan Mahfud MD di ILC terkait stigma negatif terhadap pemilihan Rektor UIN JAKARTA\r\n\r\n“Saya sangat sayangkan pernyataan seorang profesor hukum menuding sembarang tanpa bukti yang valid terkait terpilih nya Rektor UIN JAKARTA. “\r\n\r\n“Kalo memang dia memiliki bukti silakan di proses secara hukum saja dengan melaporkan ke KPK RI supaya selesai semua jangan hanya bernyanyi di forum ILC TV ONE doang. “\r\n\r\n“Saya sangat apresiasi dan mendukung  rekan2 Mahasiswa UIN JAKARTA menggelar  aksi damai untuk membantah tudingan tersebut.”\r\n\r\nhttp://tangerangnews.com/tangsel/read/26493/Bantah-Pernyataan-Mahfud-MD-Mahasiswa-UIN-Jakarta-Gelar-Aksi-Damai\r\n\r\n“Karena Saya yakin mahasiswa UIN JAKARTA mencintai Rektor Nya makanya mereka terpanggil nuraninya untuk membela Rektor nya dan terkhusus kampus mereka bebas dari Tudingan  pembungkaman demokrasi kampus sebagaimana pernyataan Pak Mahfud di ILC “\r\n\r\nSumber : Kolakainfo.com', '2019-03-22 00:00:00', 'WhatsApp-Image-2019-03-22-at-01.43.01.jpeg', 1, 1, 1, 8, 1),
(3, 'sekjend-permikomnas-mengajak-mahasiswa-it-se-sultra-hadir-di-permitech-expo-2019', 'Sekjend PERMIKOMNAS Mengajak Mahasiswa IT ?? Se Sultra Hadir Di PERMITECH Expo 2019', '<p><strong>Kolakaku.com,</strong>&nbsp;Kegiatan PERMITECH Expo 2019 yang akan diselenggarakan oleh Perhimpunan Mahasiswa Informatika dan Komputer Nasional (PERMIKOMNAS) merupakan kegiatan yang menjadi Program Kerja Nasional PERMIKOMNAS yang dipimpin oleh Ketua Umum PERMIKOMNAS Andi Ahmad Fauzy (Universitas Alaudin Makassar) dan Sekretaris Umum PERMIKOMNAS Adriyan Dwi Perkasa (Universitas Halu Oleo Kendari) dengan masa periode 2 tahun mulai dari 2017 &ndash; 2019.</p>\r\n\r\n<p>Kegiatan ini dijadwalkan akan dimulai pada tanggal 22 &ndash; 25 April 2019 Di Kota Daeng Makassar sebagai tuan rumah kegiatan ini. Dengan rangkaian kegiatan Seminar,Pameran IT,Lomba IT (IoT Competition,Line Followers, E-Sport Game Competition)</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><img alt=\"\" src=\"https://kolakainfo.com/wp-content/uploads/2019/04/WhatsApp-Image-2019-03-31-at-22.00.03-744x1024.jpeg\" /></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Dalam kegiatan ini akan dihadiri oleh Bapak&nbsp;<strong>Rudiantara, S.Stat. MBA</strong>&nbsp;(Menteri Komunikasi dan Informatika Indonesia), Bapak&nbsp;<strong>Ir. H. Danny Pomanto</strong>&nbsp;(Wali Kota Makassar),&nbsp;<strong>Bapak Achmad Sugiarto</strong>&nbsp;(Direktur Telkom Sigma ), Bapak Prof.<strong>&nbsp;Zainal Arifin Hasibuan, Msc.. Phd.</strong>&nbsp;(Ketua Aptikom Indonesia), dan juga akan dihadiri oleh CEO Bukalapak&nbsp;<strong>Ahmad Zaky</strong>&nbsp;dan CEO Gojek<strong>&nbsp;Nadiem Makarim</strong>&nbsp;yang merupakan pemilik startup terbesar yang ada di Indonesia.</p>\r\n\r\n<p>Tak hanya itu para penggiat IT serta Kampus yang tergabung dalam PERMIKOMNAS Sebanyak 160 Kampus akan turut serta dalam kegiatan ini. Mengambil tema &ldquo;&nbsp;<em>Inovasi Digital Dari Timur Indonesia &rdquo;&nbsp;</em>Sekretaris Umum PERMIKOMNAS Adriyan Dwi Perkasa mengajak seluruh Mahasiswa IT Se-Indonesia untuk ikut menyukseskan kegiatan ini.</p>\r\n\r\n<p><em>&ldquo;Kegiatan ini merupakan kegiatan terbesar yang pertama kali ada di Kawasan Timur Indonesia, menghadirkan Pakar &ndash; pakar IT hebat dan juga mengumpulkan seluruh Mahasiswa IT Se-Indonesia untuk berdiskusi dan mengkaji khusus arah perkembangan teknologi untuk kemajuan Indonesia. Saya mengajak seluruh mahasiswa IT Se- Indonesia, terkhusus Mahasiswa IT yang ada di Sulawesi Tenggara untuk hadir dikegiatan tersebut karena mengingat pentingnya kegiatan ini untuk kemajuan daerah kita.&rdquo;</em>&nbsp;Tutur Mantan Ketua BEM Teknik Universitas Halu Oleo ini.</p>\r\n', '2019-10-24 09:56:11', 'post-img-20191024095611.jpg', 1, 1, 1, 7, 1),
(4, '21tahunreformasi-kegalauan-pemuda-koltim', '#21TahunReformasi ?? Kegalauan Pemuda Koltim', '<p>Enam tahun sudah, masyarakat Kolaka Timur merasakan Daerah Otonomi Baru (DOB). Melalui undang-undang nomor 8 Tahun 2013 tentang pembentukan kabupaten Kolaka Timur, masyarakat telah menempuh perjuangan panjang dan berliku sampai ditetapkannya secara resmi oleh Dewan Perwakilan Rakyat Republik Indonesia.</p>\r\n\r\n<p>Keberhasilan memekarkan daerah tidak terlepas dari kontribusi tim pemekaran dibawa pimpinan H. Nakean Beddu. Selain itu, tentu ada peran anak muda didalamnya. Karena tidak ada perubahan besar yang terjadi dalam suatu negara atau daerah tanpa melibatkan peran pemuda. Posisi pemuda sebagai kelas menengah&nbsp;<em>(middle class)</em>&nbsp;yang mampu berkomunikasi ke kalangan &ldquo;elite&rdquo; dan&nbsp;<em>grass root</em>&nbsp;(rakyat) merupakan bagian penting dalam perjalanan Kolaka Timur menjadi DOB.</p>\r\n\r\n<p>Pertanyaannya kemudian adalah dimana para pemuda hebat tersebut? yang telah mengantarkan masyarakat Kolaka Timur hingga dapat menikmati manfaat pemekaran. Karena hakikatnya tujuan pemekaran adalah&nbsp;<em>bringing the state closer to the people</em>&nbsp;(membawa pelayanan negara lebih dekat kepada masyarakat). Mungkinkah para pemuda dilupakan oleh pemerintah daerah? jawabanya, bisa jadi iya, bisa jadi tidak. Karena secara kasat mata tim pemekaran hampir terlupakan, bahkan jasa-jasanya jarang lagi disampaikan kepada publik.</p>\r\n\r\n<p>Tidak bisa dipungkiri atau suka tidak suka, bahwa pemuda adalah pemegang tongkat estasfet kepemimpinan bangsa. karena setiap masa ada pemimpinnya dan setiap pemimpin ada masanya. Pemuda&nbsp;<em>(agen of change, agen of control and agen of analysis)&nbsp;</em>&nbsp;seyogyanya diberi ruang dan kesempatan oleh pemerintah daerah untuk berakselerasi dan memberikan sumbangsih pemikiran untuk daerah tercinta (KOLAKA TIMUR). Namun, pada kenyataannya selama ini pemerintah daerah kurang men<em>support</em>&nbsp;kegiatan-kegiatan pemuda-mahasiswa.</p>\r\n\r\n<p>Padahal, telah terbukti bahwa pemuda-mahasiswa Kolaka Timur sebenarnya memiliki potensi yang luar biasa. Sebut saja: (1) yang terpilih sebagai Delegasi Indonesia dalam program PPAN (Pertukaran Pemuda Antara Negara) di Korea Selatan tahun 2018 adalah pemudi Kabupaten Kolaka Timur; (2) juga, pemuda asal Kec. Dangia lolos dalam program AYIMUN (Asia Youth International Model United Nation) di Thailand merupakan program simulasi sidang PBB dalam melatih Kepemimpinan, Negosiasi, Diplomasi dan Jaringan Internasional, dan masih banyak lagi. Namun sedihnya, ini tidak mendapat dukungan dari pemerintah daerah. Harapanya, ketika kaum muda dengan semangat kemajuan dan kebaruan yang hadir untuk &ldquo;berbuat&rdquo; dan berkontribusi untuk daerahnya, paling tidak diberikan ruang dan&nbsp; kesempatan. Semoga tulisan singkat ini dapat menggugah pemikiran pemerintah daerah.</p>\r\n\r\n<p><strong>Muhammad Lutfi</strong></p>\r\n\r\n<p><strong>Generasi Kreatif Kolaka Timur</strong></p>\r\n', '2019-10-25 17:30:31', 'WhatsApp-Image-2019-05-20-at-21.40.05.jpeg', 1, 1, 1, 7, 1),
(5, 'sahrul-kemendagri-perlu-menyekolahkan-rajiun', 'Sahrul: Kemendagri Perlu Menyekolahkan Rajiun', '<p>Tudingan Bupati Muna Barat L.M Rajiun Tumada yang di alamatkan kepada Dirjen Bina Keuangan Daerah, Kementerian dalam negeri, Syarifuddin Udu mengisyaratkan lemahnya pengetahuan seorang bupati ihwal pengelolaan pemerintahan. Pernyataan Rajiun tersebut di nilai tidak mencirikan seorang pemimpin yang memiliki pengetahuan yang luas sehingga hal tersebut sudah memenuhi syarat bagi Kemendagri untuk menyekolahkan Rajiun. &ldquo;Selain krisis pengetahuan, Bupati Muna Barat ini tidak beretika,&rdquo; kata Sahrul, Ketua Jaringan kemandirian nasional (JAMAN) Sultra, Rabu, 22 Mei 2019.</p>\r\n\r\n<p>Perihal pinjaman yang di ajukan oleh Bupati Muna Barat, Sahrul meminta Rajiun untuk belajar alur dan mekanismenya. Sebab permohonan utang yang di ajukan oleh daerah kata Sahrul mesti melewati banyak pertimbangan dan mekanisme. Mantan aktivis Makassar ini menjelaskan, mekanisme utang itu menyangkut banyak hal diantaranya menyangkut wilayah, menyangkut pemanfaatan, menyangkut keberlanjutan fiskal. Karena utang itu bukan utang Rajiun pribadi melainkan utang pemda. &ldquo;Saya pikir hal ini mesti di perhitungkan baik-baik jangan sampai ada motif ekonomi tertentu atau motif proyek,&rdquo; ujar pria yang kerap di sapa Arul ini.</p>\r\n\r\n<p>Sahrul menyayangkan pernyataan Rajiun yang menuding Dirjen Bina Keuangan Daerah, Kementerian Dalam Negeri, Syarifuddin Udu bahwa tidak mulusnya utang tersebut karena ada kaitannya dengan politik. Rajiun menyebut Dirjen menghalangi utang tersebut demi kepentingan politiknya. Bahkan Rajiun berujar Dirjen Syarifuddin di gadang-gadang ikut bertarung di pilkada muna 2020. Sahrul menegaskan, Bupati Muna Barat tidak boleh membawa urusan utang ke politik. Apalagi seorang bupati sampai menyalahkan Dirjen.</p>\r\n\r\n<p>&ldquo;Menurut saya ini pernyataan seorang bupati yang tidak beretika. Dan Kemendagri perlu menyekolahkan Rajiun. Ini institusi pemerintah, pemerintah pusat dan pemerintah daerah satu kesatuan tidak boleh saling menyalahkan di publik,&rdquo; ucap mantan jurnalis Tempo ini.</p>\r\n\r\n<p>Jika Rajiun menyoal dirjen, Sahrul menjelaskan, berarti Rajiun menyoal Menteri, kalau menyoal Menteri berarti Rajiun menyoal Presiden. Karna Dirjen merupakan bawahan Menteri berarti Rajiun menyalahkan Menteri, dan Menteri bawahan Presiden berarti Rajiun menyalahkan Presiden. Menurut Sahrul, Ini kali pertama ada seorang bupati menyalahkan dirjen dan secara struktural turut menyalahkan menteri dan presiden. &ldquo;Ini persoalan etika. Masa seorang bupati menyalahkan seorang pejabat eselon 1 hingga Presiden, dan menarik urusan pemerintahan ke politik,&rdquo; pungkasnya. &ldquo;Ini tidak boleh.&rdquo;</p>\r\n', '2019-10-28 13:58:48', 'post-img-20191028135848.jpg', 0, 0, 1, 8, 0),
(6, 'arul-ode-a-r-f-sahabat-arf-minta-ali-mazi-lukman-kompak-kelola-pemerintahan', 'Arul Ode A R F: Sahabat ARF Minta Ali Mazi-Lukman Kompak Kelola Pemerintahan', '<p><strong>Kolakaku.com</strong>&nbsp;&ndash; Kurang lebih satu tahun Ali Mazi &ndash; Lukman Abunawas di lantik menjadi Gubernur dan Wakil Gubernur Sulawesi Tenggara, belum menunjukan kualitas pengelolaan pemerintahan yang baik. Pasangan ini lebih disibukkan dengan urusan keretakan hubungan daripada mengurus kepentingan rakyat. &ldquo;Daerah ini tidak bisa di urus sesuka hati, mestinya antara gubernur dan wakilnya memaksimalkan koordinasi secara proporsional dalam mengelola pemerintahan,&rdquo; kata Sahrul, Juru bicara Sahabat Abdul Rahman Farisi (ARF) dalam rilis yang di kirimkan ke media ini.</p>\r\n\r\n<p>Dugaan keretakan hubungan Gubernur Ali Mazi dan Wakilnya Lukman Abunawas berawal saat pelantikan 42 pejabat esalon III dan esalon IV, Senin (7/1) lalu. Wakil Gubernur Sultra Lukman Abunawas kecewa karena tidak diundang. Kekecewaan mantan Sekda Pemerintah provinsi Sultra ini berlanjut pada pelantikan pelaksana tugas Sekda Sultra baru-baru ini. Menurut Sahrul, Ali Mazi-Lukman Abunawas adalah pilihan rakyat secara paket. Mestinya mereka berkoordinasi dalam mengelola pemerintahan. &ldquo;Memang mutasi itu hak proegatif gubernur, tapi alangkah eloknya jika wakilnya turut diberitahukan juga biar pasangan ini tetap sejuk hubungannya,&rdquo; ujar mantan aktivis Makassar ini.</p>\r\n\r\n<p>Ketua Jaringan Kemandirian Nasional (Jaman) Sultra ini menambahkan, mereka tidak elok mempertontokan urusan yang tidak substantif terhadap rakyat. Sahrul khawatir jangan sampai antara gubernur dan wakilnya selama memimpin Sultra hingga 4 tahun ke depan waktunya habis hanya untuk mengurusi kemesraan mereka yang terus kendor. Sementara daerah ini butuh terobosan baru serta realisasi janji politik saat mereka menjadi calon gubernur. &ldquo;Masih banyak persoalan rakyat yang lebih penting untuk di urusi oleh gubernur dan wakil gubernur, sudahlah ribut-ribut soal keretakan hubungan karena rakyat tak butuh itu,&rdquo; katanya menegaskan.</p>\r\n\r\n<p>Sahrul berharap agar Gubernur Sultra Ali Mazi dalam mengangkat pejabatnya sesuai dengan mekanisme perundang-undangan. Dia tidak ingin gubernur dua periode ini bernasib sama dengan Gubernur Sulawesi Selatan Nurdin Abdullah yang tengah menjalani pasus angket DPRD untuk di Makzulkan. Sang profesor di sidang atas dugaan pengangkatan dan pemberhentian pejabat yang diduga melanggar undang-undang. Selain itu, mantan Bupati Bantaeng itu juga di duga mengangkat keluarganya sebagai pejabat dan adanya dugaan makelar proyek di tubuh pemprov yang menyeret orang-orang dekat gubernur.</p>\r\n\r\n<p>&ldquo;Jika antara Ali Mazi dan Lukman tidak kompak mengelola pemerintahan, tidak menutup kemungkinan pansus hak angket DPRD Sultra bakal terjadi. Alasannya, sebelumnya ada seorang guru di lantik jadi kepala bidang dan jika keretakan terus bergulir saya yakin akan banyak dugaan pelanggaran lain yang terkuak,&rdquo; kata mantan jurnalis Tempo ini.<br />\r\nSecara kewenangan politik tentu Berbeda takaranya anatara Gubernur dan Wakil Gubernur, bila ini menjadi prinsip komunikasi politik maka tentu keduanya akan mudah menemukan formulasi pengaturan dalam memimpin Sultra. &ldquo;Kami percaya Kedua Tokoh ini akan mudah menemukan titik temu demi kemajuan Rakyat Sultra,&rdquo; pungkasnya.</p>\r\n', '2019-10-28 14:01:01', 'post-img-20191028140101.jpeg', 0, 2, 1, 8, 1),
(7, 'hianati-partai-koalisi-sahrul-rajiun-menjemput-karma-politik', 'Hianati Partai Koalisi, Sahrul : Rajiun Menjemput Karma Politik', '<p>Bupati Muna Barat, Laode Muhammad Rajiun Tumada mulai menjajaki partai politik setelah menyatakan siap bertarung di Muna pada pemilihan kepala daerah (Pilkada) serentak 2020 mendatang. Bupati yang baru menjabat kurang lebih 2 tahun tersebut tampak duduk bersama Ketua Partai Hanura Sulawesi Tenggara (Sultra), Waode Nurhayati, Ketua Hanura Kabupaten Muna, La Saemuna dan Kerua PDI Perjuangan Sultra, Abu Hasan.</p>\r\n\r\n<p>Ketua jaringan kemandirian nasional (Jaman) Sultra, Sahrul menilai bahwa Rajiun akan kesulitan meyakinkan ketua-ketua partai untuk mengusung dirinya pada pilkada Muna nanti. Alasannya cukup jelas, Rajiun memutuskan mundur dari Ketua PAN Muna Barat dan memerintahkan seluruh pengurusnya hijrah ke salah satu partai.</p>\r\n\r\n<p>&ldquo;Inikan menghianati partai. Pada saat itu pak Rajiun dan pengurusnya membakar bendera PAN. Padahal PAN dan partai koalisinya yang mengantarkan beliau menduduki kursi Bupati Muna Barat,&rdquo; kata Sahrul, yang juga fungsionaris Partai Kebangkitan Bangsa (PKB) Muna Barat, kepada wartawan, Sabtu, 24 Agustus 2019 di Raha.</p>\r\n\r\n<p>Selain menghianati PAN, Sahrul mengungkapkan,&nbsp; Rajiun juga mengingkari komitmennya terhadap partai koalisi saat bertarung di Pilkada Muna Barat 2017 lalu. Mantan Kasatpol PP Sultra tersebut berjanji akan membesarkan serta memberi ruang kepada partai koalisi dalam menghadapi pemilu 2019 baru-baru ini. Namun faktanya, kata Sahrul, justru mematikan partai koalisi dengan cara melancarkan intimidasi terhadap seluruh pemerintah desa beserta perangkatnya.</p>\r\n\r\n<p>&ldquo;Fakta lainnya Jokowi kalah di Muna Barat,&rdquo; ujar mantan aktifis Makassar ini.</p>\r\n\r\n<p>Kata Sahrul, Rajiun ini lupa jika dirinya sukses menjadi Bupati Muna Barat berkat kerja keras partai koalisi. Saat itu, mantan Ketua PAN Muna Barat tersebut mendapat perlawanan sengit dari rivalnya Laode Muhammad Ihsan Taufik Ridwan yang berpasangan dengan La Nika. Sang rival yang di usung oleh Partai Golkar meraih 17.823 suara, sementara Rajiun yang berpasangan dengan Achmad Lamani di usung oleh Partai PAN, PKS, PDIP, Demokrat, Gerindra, Nasdem, PBB, PPP, dan PKB meraih suara 21.121 suara.</p>\r\n\r\n<p>&ldquo;Fakta ini mestinya menjadi perhatian serius bagi ketua-ketua partai baik yang ada di DPP maupu&nbsp; daerah. Ibaratnya saat ini Rajiun sedang menjemput karma politik. Saatnya partai menghukumnya dengan tidak memberi ruang sedikit pun,&rdquo; tegas mantan jurnalis Tempo ini.</p>\r\n\r\n<p>Sebelumnya Ketua Partai Hanura, Waode Nurhayati dalam akun facebooknya menuliskan, Politik itu dinamis, selalu koma Tidak pernah titik. Hal-hal besar bisa dikalahkan oleh hal-hal kecil. &ldquo;Saya percaya senantiasa bahwa politik yang sehat Endingnya selalu kualitas personal Bukan kepentingan jangka pendek apalagi praghmatis.&rdquo; Refleksi Ketua DPP Hanura Sulawesi Tenggara.</p>\r\n\r\n<p>Menurut Sahrul, yang tersirat dalam pernyataan Ketua Hanura Sultra tersebut bahwa semua partai politik memiliki ruang dan kesempatan yang sama untuk bersama-sama memikirkan persoalan rakyat di republik ini. Caranya, lanjut dia, tentu saja melalui peran-peran strategis kader yang ada di lembaga perwakilan rakyat. Dengan begitu tatanan pengelolaan pemerintahan jauh lebih dinamis khsusnya di lembaga legislatif. &ldquo;Tapi di Muna Barat, Pak Rajiun menutup semua ruang partai-partai koalisinya saat mencalonkan diri sebagai Bupati Muna Barat. Sepertinya beliau ini tak paham teori demokrasi dan terkesan otoriter,&rdquo; ujar Sahrul.</p>\r\n\r\n<p>Panglima BSB tersebut lupa bahwa masih ada agenda-agenda politik berikutnya yang membutuhkan sokongan partai politik. Sahrul mencotohkan, menjelang pelaksanaan tahapan pilkada Muna, Rajiun mulai membangun komunikasi politik dengan menjajaki ketua-ketua partai yang tak di beri ruang pada pemilu baru-baru ini. Sementara partai politik dalam mengusung calon membutuhkan komitmen yang salah satunya calon tersebut bersedia membesarkan partai. &ldquo;Saya yakin tak ada satupun partai koalisi di luar Nasdem memberikan rekomendasi ke Rajiun, saya tidak tau kalau Pak Rajiun menggunakan instrumen lain ya,&rdquo; pungkasnya.</p>\r\n', '2019-10-28 14:30:28', 'post-img-20191028143028.jpeg', 0, 0, 1, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_post_category`
--

CREATE TABLE `table_post_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_post_category`
--

INSERT INTO `table_post_category` (`id`, `name`) VALUES
(1, 'Berita'),
(2, 'Opini'),
(3, 'Kampus'),
(4, 'Viral ');

-- --------------------------------------------------------

--
-- Table structure for table `table_users`
--

CREATE TABLE `table_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `image` text NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '3',
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_users`
--

INSERT INTO `table_users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `image`, `group_id`, `point`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$4/Va.QwF4GrREqL3T5ZPjenC1FUgS78aIf5cRCRuy3aj4LGVGU5ly', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1572243454, 1, 'Admin', 'istrator', 'ADMIN', '081133557799', 'profile-admin-08092019.png', 1, 0),
(7, '::1', 'contributor@kolakaku.com', '$2y$10$o/vU6294sCQB7J2/RDIReeHNVvKJbtyMhaqF9inxzBHv/uiAwvTTy', 'contributor@kolakaku.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1570900667, 1572242699, 1, 'Contributor', 'KolakaKU', NULL, '081122334455', '', 3, 125000),
(8, '::1', 'tiyanattirmidzi20@gmail.com', '$2y$10$7JNwct12kJXGV5.9jE.jxOjcvrN/Vq.GeXFE/qgLTpDYTfD4T7e9a', 'tiyanattirmidzi20@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1572159601, 1572243033, 1, 'Tiyan', 'Attirmidzi', NULL, '082324252618', '', 3, 150000),
(11, '::1', 'fulan123@gmail.com', '$2y$10$VhMhRHvrYaGZVn0N2t6R2OirKYfFss/VwOv6OgsaPi68Yl/dM5jQC', 'fulan123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1572243563, 1572243596, 1, 'Fulan', 'Bin Fulan', NULL, '081133557799', '', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_users_groups`
--

CREATE TABLE `table_users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_users_groups`
--

INSERT INTO `table_users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(7, 7, 3),
(8, 8, 3),
(11, 11, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_about`
--
ALTER TABLE `table_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_groups`
--
ALTER TABLE `table_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_log`
--
ALTER TABLE `table_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_login_attempts`
--
ALTER TABLE `table_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_post`
--
ALTER TABLE `table_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_post_category`
--
ALTER TABLE `table_post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_users`
--
ALTER TABLE `table_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `table_users_groups`
--
ALTER TABLE `table_users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_about`
--
ALTER TABLE `table_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_groups`
--
ALTER TABLE `table_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_log`
--
ALTER TABLE `table_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_login_attempts`
--
ALTER TABLE `table_login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_post`
--
ALTER TABLE `table_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table_post_category`
--
ALTER TABLE `table_post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_users`
--
ALTER TABLE `table_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table_users_groups`
--
ALTER TABLE `table_users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_users_groups`
--
ALTER TABLE `table_users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `table_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `table_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
