-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 03:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gowes_heaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_index`
--

CREATE TABLE `product_index` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `deskripsi` varchar(4096) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_index`
--

INSERT INTO `product_index` (`id`, `nama`, `kategori`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Double Seat Bike', 'full bike', 'Sepeda santai untuk digunakan bersama orang terdekat', 900000000, 'doubleSeatBike.jpg'),
(2, 'Helmet', 'aksesoris', 'Untuk melindungi kepala dari benturan benda keras', 7000000, 'helmet.jpg'),
(3, 'Surly Bike Black', 'fullbike', 'Sepeda produksi Surly digunakan untuk berkendara di area perkotaan maupun pedesaan', 45000000, 'blackSurlyBike.jpg'),
(4, 'Classic Tire', 'sparepart', 'Ban produksi Table Top dengan warna hitam dan oranye', 340000, 'classicTire.jpeg'),
(5, 'Element Grey Bike', 'fullbike', 'Sepeda tipe BMX produksi Inspired cocok digunakan untuk freestyle', 6500000, 'elementGreyBike.jpg'),
(6, 'Gear', 'sparepart', 'Set gear dengan rantai', 450000, 'gear.jpeg'),
(7, 'Gear Set', 'sparepart', 'Gear crank produksi Shimano', 760000, 'gearSet.jpeg'),
(8, 'Handle Bar Bag', 'aksesoris', 'Tas dengan ukuran medium digunakan pada handle sepeda', 750000, 'handleBarBag.jpg'),
(9, 'Karate Monkey Blue', 'fullbike', 'Bike set produksi Surly cocok untuk jalan perkotaan', 9800000, 'KarateMonkeyBlue.jpg'),
(10, 'Karate Monkey Blue Small', 'fullbike', 'Bike set ukuran small produksi Surly cocok untuk jalan perkotaan', 7800000, 'KarateMonkeyBlueSmall.jpg'),
(11, 'Marathon Spike Tire', 'sparepaert', 'Ban dengan duri yang digunakan pada saat kondisi bersalju,produksi Schwalbe', 2300000, 'marathonSpikeTire.jpeg'),
(12, 'Midnigth Surly Bike', 'fullbike', 'Bike set produksi Surly cocok digunakan pada velodrome dan jalanan perkotaan ', 74000000, 'midnigthSurlyBike.jpg'),
(13, 'Mint Surly Bike', 'fullbike', 'Bike set produksi Surly cocok digunakan pada velodrome dan jalanan perkotaan ', 64000000, 'mintSurleyBike.jpg'),
(14, 'Orange Surly Bike', 'fullbike', 'Bike set produksi Surly cocok digunakan pada velodrome dan jalanan perkotaan ', 67000000, 'orangeSurlyBike.jpg'),
(15, 'TI Parts Paddle', 'sparepart', 'Pedal Produksi TI Parts', 879000, 'paddle.jpg'),
(16, 'Red Ogre Surly', 'fullbike', 'Bike set produksi Surly cocok digunakan pada velodrome dan jalanan perkotaan ', 8900000, 'redOgreSurlyBike.jpg'),
(17, 'Shimano Gear Crank', 'sparepart', 'Gear Crank produksi Shimano', 980000, 'shimanoGear.jpeg'),
(18, 'Shimano Gear Set', 'sparepart', 'Gear Set produksi Shimano dengan fitur octalink', 1000000, 'shimanoGearSet.jpeg'),
(19, 'Winter Tire Spike', 'sparepart', 'Ban Produksi Ice Spike Pro digunakan pada saat cuaca bersalju', 1500000, 'winterSpikeTire.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'adam', 'kilmeisdisaster@gmail.com', 'default.jpg', '$2y$10$nWWBtxPL3nPntoVKlKoiTuxnw1h9v9S6GsFq/qQFRT/Pd7SEWYic6', 2, 1, 1575565322),
(2, 'Aziz Luqman Hidayat', 'azizluqmanhidayat@gmail.com', 'default.jpg', '$2y$10$KzqVIPp5urXG903JcHrjGOOMUy8QtDO5vdAUnPnyJtwi4SJ6h9t92', 2, 1, 1575572120),
(3, 'Ichlasul Al', 'm.ichal7749@mail.unpas.ac.id', 'default.jpg', '$2y$10$BorjdUcYgnEuLg70SASe4OhcOMHA1zRIzXgjreI6ZdGYMgrD.HKcS', 2, 1, 1576200540);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_index`
--
ALTER TABLE `product_index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_index`
--
ALTER TABLE `product_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
