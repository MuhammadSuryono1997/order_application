-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 17 Jul 2020 pada 01.25
-- Versi Server: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_orders`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `item_id`) VALUES
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `T_items`
--

CREATE TABLE `T_items` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `T_items`
--

INSERT INTO `T_items` (`id`, `name`, `description`, `price`) VALUES
(1, 'Ayam Goreng', 'Ayam Goreng Biasa', 7000),
(2, 'Es Teh', 'Teh dengan Es Batu', 2500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `T_orders`
--

CREATE TABLE `T_orders` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `order_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `T_orders`
--

INSERT INTO `T_orders` (`id`, `customer_id`, `order_date`, `amount`, `user_id`) VALUES
(1, '2020071500001', '2020-07-15', 2, 1),
(2, '2020071500002', '2020-07-15', 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `T_users`
--

CREATE TABLE `T_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `T_users`
--

INSERT INTO `T_users` (`id`, `name`, `email`) VALUES
(1, 'Ahmad Abi Mulya', 'abimulya.2001@gmail.com'),
(2, 'Iman Fauzi Maulidan', 'iman01@gmail.com'),
(3, 'Muhammad Suryono', 'suryono1997@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `T_items` (`item_id`),
  ADD KEY `T_orders` (`order_id`);

--
-- Indexes for table `T_items`
--
ALTER TABLE `T_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `T_orders`
--
ALTER TABLE `T_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `T_users` (`user_id`);

--
-- Indexes for table `T_users`
--
ALTER TABLE `T_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `T_orders`
--
ALTER TABLE `T_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `T_users`
--
ALTER TABLE `T_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `T_items` FOREIGN KEY (`item_id`) REFERENCES `T_items` (`id`),
  ADD CONSTRAINT `T_orders` FOREIGN KEY (`order_id`) REFERENCES `T_orders` (`id`);

--
-- Ketidakleluasaan untuk tabel `T_orders`
--
ALTER TABLE `T_orders`
  ADD CONSTRAINT `T_users` FOREIGN KEY (`user_id`) REFERENCES `T_users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
