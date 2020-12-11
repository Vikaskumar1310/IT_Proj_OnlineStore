-- Database for online store

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
-- Database: `store`

-- Table structure for table `items`
--
CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ;

--
-- Dumping data for table `items`
--
INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Cannon EOS', 36000),
(2, 'Sony DSLR', 40000),
(3, 'Sony DSLR', 50000),
(4, 'Olympus DSLR', 80000),
(5, 'Titan Model #301', 13000),
(6, 'Titan Model #201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Favre Lueba #111', 18000),
(9, 'Raymond', 1500),
(10, 'Charles', 1000),
(11, 'HXR', 900),
(12, 'PINK', 1200);

-- Table structure for table `users`
--
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
);

--
-- Dumping data for table `users`
--
INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'vikas', 'vikas@gmail.com', '9c7dc387429c5734561d1913b61e062f', '8978677889', 'Hyd', 'UOH,Hostel-f'),
(2, 'aftabh', 'aftabh@gmail.com', 'ce719acdab9ae0c1f71bc5c75e3418b0', '9857385738', 'Hyd', 'UOH,Hostel-f'),
(3, 'lucky', 'lucky@gmail.com', '0350bd3a76978e23f875cd798e97b6cf', '1231231123','Hyd', 'UOH,Hostel-g');

-- Table structure for table `users_items`
--
CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(7, 3, 3, 'Added to cart'),
(8, 2, 4, 'Added to cart'),
(9, 2, 5, 'Added to cart'),
(10, 1, 11, 'Added to cart');

--
-- Indexes for dumped tables
--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);
--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);
--
-- AUTO_INCREMENT for dumped tables
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
