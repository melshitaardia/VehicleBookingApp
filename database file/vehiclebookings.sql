-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2025 at 06:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehiclebookings`
--

-- --------------------------------------------------------

--
-- Table structure for table `tms_admin`
--

CREATE TABLE `tms_admin` (
  `a_id` int(20) NOT NULL,
  `a_name` varchar(200) NOT NULL,
  `a_email` varchar(200) NOT NULL,
  `a_pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tms_admin`
--

INSERT INTO `tms_admin` (`a_id`, `a_name`, `a_email`, `a_pwd`) VALUES
(1, 'Approver', 'approver@gmail.com', 'approver123');

-- --------------------------------------------------------

--
-- Table structure for table `tms_feedback`
--

CREATE TABLE `tms_feedback` (
  `f_id` int(20) NOT NULL,
  `f_uname` varchar(200) NOT NULL,
  `f_content` longtext NOT NULL,
  `f_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tms_feedback`
--

INSERT INTO `tms_feedback` (`f_id`, `f_uname`, `f_content`, `f_status`) VALUES
(1, 'Ari Wijaya', 'Aplikasi ini cukup membantu, tapi waktu tunggu untuk mendapatkan konfirmasi pemesanan agak lama. Selain itu, busnya bagus dan pengemudi sangat berpengalaman. Semoga pelayanan semakin cepat ke depannya.', 'Published'),
(2, 'Bunga Citra', 'Pengalaman saya menggunakan aplikasi ini sangat memuaskan! Proses pemesanan bus sangat mudah, dan bus yang saya sewa dalam kondisi bersih serta nyaman. Pengemudinya juga ramah dan profesional. Sangat direkomendasikan!', 'Published'),
(3, 'Riko Pratama', 'Saya suka dengan variasi pilihan kendaraan yang tersedia. Pengemudinya ramah, tetapi ada sedikit keterlambatan dalam keberangkatan karena kendala teknis. Secara keseluruhan, pelayanan tetap memuaskan. Terima kasih!', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `tms_pwd_resets`
--

CREATE TABLE `tms_pwd_resets` (
  `r_id` int(20) NOT NULL,
  `r_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tms_pwd_resets`
--

INSERT INTO `tms_pwd_resets` (`r_id`, `r_email`) VALUES
(2, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tms_syslogs`
--

CREATE TABLE `tms_syslogs` (
  `l_id` int(20) NOT NULL,
  `u_id` varchar(200) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_ip` varbinary(200) NOT NULL,
  `u_city` varchar(200) NOT NULL,
  `u_country` varchar(200) NOT NULL,
  `u_logintime` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tms_syslogs`
--

INSERT INTO `tms_syslogs` (`l_id`, `u_id`, `u_email`, `u_ip`, `u_city`, `u_country`, `u_logintime`) VALUES
(1, '1', 'johns@gmail.com', '', '', '', '0000-00-00 00:00:00.000000'),
(2, '4', 'johns@gmail.com', 0x3a3a31, 'Unknown', 'Unknown', '2024-12-30 08:12:56.682022'),
(3, '4', 'budirudi@gmail.com', 0x3a3a31, 'Unknown', 'Unknown', '2024-12-30 21:09:30.083133'),
(4, '4', 'budirudi@gmail.com', 0x3a3a31, 'Unknown', 'Unknown', '2024-12-30 21:33:19.157867'),
(5, '4', 'budirudi@gmail.com', 0x3a3a31, 'Unknown', 'Unknown', '2024-12-31 11:24:09.651580'),
(6, '4', 'budirudi@gmail.com', 0x3a3a31, 'Unknown', 'Unknown', '2024-12-31 19:50:56.531464'),
(7, '4', 'budirudi@gmail.com', 0x3a3a31, 'Unknown', 'Unknown', '2024-12-31 19:55:06.452084'),
(8, '4', 'budirudi@gmail.com', 0x3a3a31, 'Unknown', 'Unknown', '2024-12-31 20:33:02.770902'),
(9, '4', 'budirudi@gmail.com', 0x3a3a31, 'Unknown', 'Unknown', '2024-12-31 20:33:06.409589'),
(10, '8', 'eko@gmail.com', 0x3a3a31, 'Unknown', 'Unknown', '2025-01-01 16:53:46.260710'),
(11, '8', 'eko@gmail.com', 0x3a3a31, 'Unknown', 'Unknown', '2025-01-01 16:59:26.464259'),
(12, '8', 'eko@gmail.com', 0x3a3a31, 'Unknown', 'Unknown', '2025-01-01 17:01:21.276263'),
(13, '12', 'rendi@gmail.com', 0x3a3a31, 'Unknown', 'Unknown', '2025-01-01 17:03:19.075646');

-- --------------------------------------------------------

--
-- Table structure for table `tms_user`
--

CREATE TABLE `tms_user` (
  `u_id` int(20) NOT NULL,
  `u_fname` varchar(200) NOT NULL,
  `u_lname` varchar(200) NOT NULL,
  `u_phone` varchar(200) NOT NULL,
  `u_addr` varchar(200) NOT NULL,
  `u_category` varchar(200) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_car_type` varchar(200) NOT NULL,
  `u_car_regno` varchar(200) NOT NULL,
  `u_car_bookdate` varchar(200) NOT NULL,
  `u_car_book_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tms_user`
--

INSERT INTO `tms_user` (`u_id`, `u_fname`, `u_lname`, `u_phone`, `u_addr`, `u_category`, `u_email`, `u_pwd`, `u_car_type`, `u_car_regno`, `u_car_bookdate`, `u_car_book_status`) VALUES
(3, 'Fauzi ', 'Rahman', '08213152671', 'Jl. Singosari 123', 'Driver', 'fauzi@gmail.com', 'fauzi123', 'SUV', '', '', ''),
(5, 'Riyan', 'Zaki', '08211239293', 'Jl. Bandung 12', 'Driver', 'riyan@gmail.com', 'riyan123', 'SUV', 'N 8219 AG', '', ''),
(6, 'Aldo', 'Haga', '0821192921', 'Jl. Danau Maninjau 1', 'Driver', 'aldo@gmail.com', 'aldo123', 'SUV', 'N 8991 UG', '', ''),
(7, 'Rafa', 'Wisnu', '0821829181', 'Jl. Jakarta 23', 'Driver', 'rafa@gmail.com', 'rafa123', 'Sedan', 'N 8980 AB', '', ''),
(8, 'Eko', 'Saputra', '08212199132', 'Jl. Bunga Matahari No. 32, Malang', 'User', 'eko@gmail.com', 'eko123', 'SUV', 'E 9087 LMN', '2025-01-01', 'Pending'),
(9, 'Putri', 'Amelia', '08212198912', 'Jl. Dahlia Raya No. 45, Jakarta Selatan', 'User', 'putri@gmail.com', 'putri123', '', '', '', ''),
(10, 'Citra', 'Purnama', '0821812392', 'Jl. Kenanga No. 7, Yogyakarta', 'User', 'citra@gmail.com', 'citra123', '', '', '', ''),
(11, 'Andi', 'Gunawan', '0822119831', 'Jl. Merpati No. 12, Bandung', 'User', 'andi@gmail.com', 'andi123', '', '', '', ''),
(12, 'Rendi', 'Mahendra', '0823719392', 'Jl. Melati No. 18, Surabaya', 'User', 'rendi@gmail.com', 'rendi123', 'Sedan', 'G 6543 OPQ', '2025-01-01', 'Approved'),
(17, 'Carlos', 'Sainz', '0821928382', 'Jl. Sudirman No. 28, Semarang', 'Driver', 'carlos@gmail.com', 'carlos123', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tms_vehicle`
--

CREATE TABLE `tms_vehicle` (
  `v_id` int(20) NOT NULL,
  `v_name` varchar(200) NOT NULL,
  `v_reg_no` varchar(200) NOT NULL,
  `v_pass_no` varchar(200) NOT NULL,
  `v_driver` varchar(200) NOT NULL,
  `v_category` varchar(200) NOT NULL,
  `v_dpic` varchar(200) NOT NULL,
  `v_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tms_vehicle`
--

INSERT INTO `tms_vehicle` (`v_id`, `v_name`, `v_reg_no`, `v_pass_no`, `v_driver`, `v_category`, `v_dpic`, `v_status`) VALUES
(3, 'Hino RK8 R260', 'D 8765 XYZ', '50', 'Budi Santosa', 'Bus', 'hinorkb8.png', 'Available'),
(4, 'Toyota Land Cruiser', 'D 5678 DEF', '7', 'Andi Prasetyo', 'SUV', 'toyotaland.png', 'Available'),
(5, 'Mitsubishi Pajero SPort', 'D 8762 XYZ', '5', 'Ahmad Fauzan', 'SUV', 'pajerosport.png', 'Available'),
(6, 'Nissan Rogue', 'E 9087 LMN', '7', 'Satria Mahendra', 'SUV', 'Nissan_Rogue_SV_2021.jpg', 'Available'),
(7, 'Subaru Legacy', 'G 6543 OPQ', '5', 'Teguh Wijaya', 'Sedan', 'Subaru_Legacy_Premium_2022_2.jpg', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tms_admin`
--
ALTER TABLE `tms_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tms_feedback`
--
ALTER TABLE `tms_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tms_pwd_resets`
--
ALTER TABLE `tms_pwd_resets`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tms_syslogs`
--
ALTER TABLE `tms_syslogs`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tms_user`
--
ALTER TABLE `tms_user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `tms_vehicle`
--
ALTER TABLE `tms_vehicle`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tms_admin`
--
ALTER TABLE `tms_admin`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tms_feedback`
--
ALTER TABLE `tms_feedback`
  MODIFY `f_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tms_pwd_resets`
--
ALTER TABLE `tms_pwd_resets`
  MODIFY `r_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tms_syslogs`
--
ALTER TABLE `tms_syslogs`
  MODIFY `l_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tms_user`
--
ALTER TABLE `tms_user`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tms_vehicle`
--
ALTER TABLE `tms_vehicle`
  MODIFY `v_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
