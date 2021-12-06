-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 04:35 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"vehicle_hub\",\"table\":\"hire\"},{\"db\":\"vehicle_hub\",\"table\":\"sell\"},{\"db\":\"vehicle_hub\",\"table\":\"user\"},{\"db\":\"vehicle_hub\",\"table\":\"buyer_requests\"},{\"db\":\"vehicle_hub\",\"table\":\"feedback\"},{\"db\":\"vehicle_hub\",\"table\":\"rent\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'vehicle_hub', 'user', '{\"sorted_col\":\"`user_id`  ASC\"}', '2021-10-25 09:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-10-28 14:34:39', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `vehicle_hub`
--
CREATE DATABASE IF NOT EXISTS `vehicle_hub` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vehicle_hub`;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_requests`
--

CREATE TABLE `buyer_requests` (
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL,
  `add_id` int(11) NOT NULL,
  `buyer_email` varchar(50) NOT NULL,
  `buyer_name` varchar(50) NOT NULL,
  `buyer_contact` varchar(20) NOT NULL,
  `publisher_email` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `buyer_message` varchar(100) NOT NULL,
  `add_type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_requests`
--

INSERT INTO `buyer_requests` (`date_time`, `id`, `add_id`, `buyer_email`, `buyer_name`, `buyer_contact`, `publisher_email`, `date`, `buyer_message`, `add_type`, `status`) VALUES
('2021-10-28 08:31:33', 46, 1, 'user2@gmail.com', 'user2', '0714265255', 'user1@gmail.com', ' 2020-07-14', ' message', 'rent', 'approved'),
('2021-10-28 08:31:33', 47, 1, 'user2@gmail.com', 'user1', '0718524565', 'user1@gmail.com', ' 2020-07-06', ' description', 'rent', 'approved'),
('2021-10-28 08:31:33', 48, 1, 'user1@gmail.com', 'geethan chanaka', '071426422', 'user1@gmail.com', ' 2020-07-06', ' msg', 'rent', 'pending'),
('2021-10-28 08:31:33', 49, 1, '', 'dfgdf', 'fdgdf', 'user1@gmail.com', ' 2021-07-21', ' gfdg', 'rent', 'pending'),
('2021-10-28 08:31:33', 50, 1, 'praveen@gmail.com', 'praveen', '0123154646', 'user1@gmail.com', ' 2021-05-20', ' no', 'rent', 'pending'),
('2021-10-28 08:31:33', 51, 1, 'praveen@gmail.com', 'shamika', '0123154646', 'user1@gmail.com', ' 2021-10-13', ' 5646546465465465', 'sell', 'pending'),
('2021-10-28 08:31:33', 52, 2, 'praveen@gmail.com', 'praveen', '0123154646', 'user1@gmail.com', ' 2021-10-23', ' need this', 'rent', 'pending'),
('2021-10-28 08:31:33', 53, 1, 'praveen@gmail.com', 'praveen', '0123154646', 'user1@gmail.com', ' 2021-10-14', ' need this', 'hire', 'pending'),
('2021-10-28 08:31:33', 54, 1, 'praveen@gmail.com', 'Stolllll', '5464545644', 'user1@gmail.com', ' 2021-10-07', ' need this', 'sell', 'pending'),
('2021-10-28 08:31:33', 55, 1, 'praveen@gmail.com', 'fhdskfjshdfkjsdfhjk', '0123154646', 'user1@gmail.com', ' 2021-10-26', ' need this', 'rent', 'pending'),
('2021-10-28 08:31:33', 56, 5, 'praveen@gmail.com', 'new man', '5464545644', 'gdfgdfg@gmail.com', ' 2021-10-07', ' I really need this', 'rent', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `add_id` int(11) NOT NULL,
  `add_type` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`date_time`, `id`, `user`, `add_id`, `add_type`, `description`, `publisher`, `rate`) VALUES
('2021-10-28 08:30:06', 21, '', 1, 'rent', 'Pakaya', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 22, 'gdfgdfg@gmail.com', 1, 'hire', 'fhhfhfhf', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 23, 'gdfgdfg@gmail.com', 1, 'hire', '', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 24, 'gdfgdfg@gmail.com', 1, 'hire', 'fhhfhfhf', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 25, 'gdfgdfg@gmail.com', 1, 'hire', 'fhhfhfhf', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 26, 'gdfgdfg@gmail.com', 1, 'hire', 'kawada', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 27, 'gdfgdfg@gmail.com', 1, 'hire', 'kawada', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 28, 'gdfgdfg@gmail.com', 1, 'hire', 'dsfsgfdfsdfsfdsdfsdfsfsfsfsfsfsf', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 29, 'gdfgdfg@gmail.com', 1, 'hire', 'dsfsgfdfsdfsfdsdfsdfsfsfsfsfsfsf', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 30, 'gdfgdfg@gmail.com', 1, 'hire', '212131312', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 31, '', 1, 'hire', '212131312', 'user1@gmail.com', 212131312),
('2021-10-28 08:30:06', 32, '', 1, 'hire', 'kawada', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 33, 'gdfgdfg@gmail.com', 1, 'hire', 'kawada', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 34, 'gdfgdfg@gmail.com', 1, 'hire', 'biwwada', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 35, 'gdfgdfg@gmail.com', 1, 'hire', 'biwwada', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 36, 'gdfgdfg@gmail.com', 1, 'hire', 'hello', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 37, 'gdfgdfg@gmail.com', 1, 'hire', 'hello', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 38, 'gdfgdfg@gmail.com', 1, 'hire', 'new', 'user1@gmail.com', 5),
('2021-10-28 08:30:06', 39, 'gdfgdfg@gmail.com', 1, 'hire', 'new', 'user1@gmail.com', 5),
('2021-10-28 08:30:06', 40, 'praveen@gmail.com', 1, 'hire', 'ponna patiya\r\n', 'user1@gmail.com', 4),
('2021-10-28 08:30:06', 41, 'praveen@gmail.com', 1, 'rent', 'star\r\n', 'user1@gmail.com', 0),
('2021-10-28 08:30:06', 42, 'praveen@gmail.com', 1, 'rent', '656665', 'user1@gmail.com', 2),
('2021-10-28 08:30:06', 43, 'praveen@gmail.com', 1, 'rent', '656665', 'user1@gmail.com', 2),
('2021-10-28 08:30:06', 44, 'praveen@gmail.com', 1, 'rent', '656665', 'user1@gmail.com', 2),
('2021-10-28 08:30:06', 45, 'praveen@gmail.com', 1, 'rent', 'dfsdfsd', 'user1@gmail.com', 4),
('2021-10-28 08:30:06', 46, 'praveen@gmail.com', 2, 'hire', 'hjkkljkl', 'gdfgdfg@gmail.com', 4),
('2021-10-28 08:30:06', 47, 'praveen@gmail.com', 2, 'hire', 'hjkkljkl', 'gdfgdfg@gmail.com', 4),
('2021-10-28 08:30:06', 48, 'praveen@gmail.com', 2, 'hire', 'hjkkljkl', 'gdfgdfg@gmail.com', 4),
('2021-10-28 08:30:06', 49, 'praveen@gmail.com', 4, 'rent', '45464546', 'gdfgdfg@gmail.com', 2),
('2021-10-28 08:30:06', 50, 'praveen@gmail.com', 4, 'rent', '45464546', 'gdfgdfg@gmail.com', 2),
('2021-10-28 08:30:06', 51, 'gdfgdfg@gmail.com', 1, 'rent', 'seee', 'user1@gmail.com', 4),
('2021-10-28 08:30:06', 52, 'praveen@gmail.com', 1, 'hire', 'gcbcbc', 'user1@gmail.com', 4),
('2021-10-28 08:30:06', 53, 'praveen@gmail.com', 1, 'hire', 'cbvcvbcvbcvbcvbcvbcvbcvbcvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvccccccccccccccccccc', 'user1@gmail.com', 4),
('2021-10-28 08:30:06', 54, 'gdfgdfg@gmail.com', 1, 'hire', 'saranga', 'user1@gmail.com', 4),
('2021-10-28 08:30:06', 55, 'praveen@gmail.com', 1, 'sell', '56464', 'user1@gmail.com', 4),
('2021-10-28 08:30:06', 56, 'praveen@gmail.com', 2, 'sell', 'nghnnghn', 'gdfgdfg@gmail.com', 0),
('2021-10-28 08:30:06', 57, 'praveen@gmail.com', 2, 'sell', 'fghfgh', 'gdfgdfg@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `hire_id` int(11) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `vehicle_Brand` varchar(30) NOT NULL,
  `vehicle_model` varchar(50) NOT NULL,
  `vehicle_number` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `owner_phone_number` varchar(20) NOT NULL,
  `owner_email` varchar(50) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `driver_phone_number` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `img_path1` varchar(100) NOT NULL,
  `img_path2` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `add_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`date_time`, `hire_id`, `publisher`, `vehicle_Brand`, `vehicle_model`, `vehicle_number`, `price`, `owner_name`, `owner_phone_number`, `owner_email`, `driver_name`, `driver_phone_number`, `description`, `img_path`, `img_path1`, `img_path2`, `status`, `area`, `add_type`) VALUES
('2021-10-28 08:29:21', 1, 'user1@gmail.com', 'BMW', '520D', 'SP CAU - 1024', '3500', ' passindu', ' 0718524565', 'pasindu@gmail.com', 'sahan', '0711236548', 'description', './vehicle_images/47694272bmw_m8_competition_coupe_2020_5k_3-1920x1080.jpg', '', '', 'approved', 'akuressa', 'hire'),
('2021-10-28 13:34:30', 3, 'gdfgdfg@gmail.com', 'ghfhfgh', 'fhfghf', '45246345', '100000000', ' Isuru', ' +94778414073', 'shamika.maduroshan@gmail.com', 'Thisuru', '45654454', 'fgfghfh', 'vehicle_images/704967840_Harry-Prior-Runnymede-CCTV-camera-operator-Credit-Runnymede-Borough-Council', 'vehicle_images/439059870_I_FGU3cW-hywxknC.png', 'vehicle_images/61757668220px-Firewall.png', 'pending', 'Galle', 'hire');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `rent_id` int(11) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `vehicle_Brand` varchar(50) NOT NULL,
  `vehicle_model` varchar(50) NOT NULL,
  `vehicle_number` varchar(30) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `owner_phone_number` varchar(20) NOT NULL,
  `owner_email` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `img_path1` varchar(100) NOT NULL,
  `img_path2` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `add_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`date_time`, `rent_id`, `publisher`, `vehicle_Brand`, `vehicle_model`, `vehicle_number`, `owner_name`, `owner_phone_number`, `owner_email`, `price`, `description`, `img_path`, `img_path1`, `img_path2`, `status`, `area`, `add_type`) VALUES
('2021-10-28 08:28:47', 1, 'user1@gmail.com', 'SUZUKI', 'alto', 'SP CAU - 1023', 'kamal', ' 0716548525', ' kamal@gmail.com', '2200', ' description', './vehicle_images/39685607unnamed.jpg', '', '', 'approved', 'colombo', 'rent'),
('2021-10-28 08:28:47', 2, 'user1@gmail.com', 'aaaa', 'aaa', 'a', 'aa', ' a', ' a', 'a', 'a', './vehicle_images/47929240Bash configuration for Windows CMDexe refugees unsafePerformIO.png', '', '', 'approved', 'a', 'rent'),
('2021-10-28 08:28:47', 3, 'user2@gmail.com', 'ddddddd', 'ddddddddddd', 'dddddddd', 'dddddddddddddddddddddddd', ' dddddddd', ' ddddddd', 'ddddddd', 'dddddddddd', './vehicle_images/97506438hd-anonymous_123836285_275.jpg', '', '', 'approved', 'dddddd', 'rent'),
('2021-10-28 08:28:47', 5, 'gdfgdfg@gmail.com', 'fbdgbd', 'dfgdgd', '21215525', 'gdfgdgdfg', ' +94778414073', ' shamika.maduroshan@gmail.com', '100000000', 'dfghfghfh', 'vehicle_images/491544590_Harry-Prior-Runnymede-CCTV-camera-operator-Credit-Runnymede-Borough-Council', 'vehicle_images/941382530_I_FGU3cW-hywxknC.png', 'vehicle_images/73021372220px-Firewall.png', 'approved', 'hgfhfghfh', 'rent');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `sell_id` int(11) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `vehicle_model` varchar(50) NOT NULL,
  `vehicle_number` varchar(20) NOT NULL,
  `seller_name` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `img_path1` varchar(100) NOT NULL,
  `img_path2` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `vehicle_brand` varchar(30) NOT NULL,
  `engine_capacity` varchar(30) NOT NULL,
  `model_year` varchar(10) NOT NULL,
  `mileage` int(11) NOT NULL,
  `area` varchar(20) NOT NULL,
  `add_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`date_time`, `sell_id`, `publisher`, `vehicle_model`, `vehicle_number`, `seller_name`, `phone_number`, `email`, `price`, `description`, `img_path`, `img_path1`, `img_path2`, `status`, `vehicle_brand`, `engine_capacity`, `model_year`, `mileage`, `area`, `add_type`) VALUES
('2021-10-28 08:27:32', 2, 'gdfgdfg@gmail.com', 'aventador', 'CAL12345', 'Saranga', '+94772369520', ' saranga123@gmail.com', '97580000', 'brand new', 'vehicle_images/67017304marc-kleen-8hU6vtwY8l8-unsplash.jpg', 'vehicle_images/20092909pexels-jae-park-8664306.jpg', 'vehicle_images/57501372pexels-jae-park-8664302.jpg', 'approved', 'lamborghini', '740', '2012', 1011111, 'Galle', 'sell'),
('2021-10-28 08:27:32', 3, 'dasa@gmail.com', 'nevera', '12345', 'Saranga', '021354648', ' Saranga@gmail.com', ' 8000000', 'dfsafdfs', 'vehicle_images/73661408pexels-jae-park-8664306.jpg', 'vehicle_images/51885841Ford_Mustang_Mach-E_AWD_First_Edition_–_f_15072021.jpg', 'vehicle_images/9643348151559866986_2ab2abd1f3_c.jpg', 'approved', 'lamborghini', '1000', '2012', 1011111, 'Ampegama', 'sell');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `security_q` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`date_time`, `user_id`, `first_name`, `last_name`, `email`, `password`, `role`, `security_q`) VALUES
('2021-10-28 05:50:55', 16, 'user1', ' user1', 'user1@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user', NULL),
('2021-10-28 05:50:55', 17, 'user2', ' user2', 'user2@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user', NULL),
('2021-10-28 05:50:55', 18, 'user3', ' user3', 'user3@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user', NULL),
('2021-10-28 05:50:55', 20, 'Saranga', ' Gamage', 'sarangagamage24@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'user', 'mother'),
('2021-10-28 05:50:55', 22, 'Shamika Roshan Maduj', ' Arachchi', 'shamika.maduroshan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Role', 'samala'),
('2021-10-28 05:50:55', 24, 'Shamika Roshan Maduj', ' dgfgh', 'gdfgdfg@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Seller', 'easf'),
('2021-10-28 05:50:55', 25, 'praveen', ' guna', 'praveen@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Buyer', 'samala'),
('2021-10-28 05:50:55', 26, 'Senaka', ' Arachchi', 'Senaka@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'admin', 'kamala'),
('2021-10-28 05:50:55', 27, 'Shamika Roshan Maduj', ' Arachchi', 'shamika.maduroshan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Seller', 'samala'),
('2021-10-28 05:50:55', 28, 'Shamika Roshan Maduj', ' Arachchi', 'shamika.maduroshan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'admin', 'samala'),
('2021-10-28 05:50:55', 30, 'pakaya', ' ponnaya', 'pakaya@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'admin', 'osa'),
('2021-10-28 05:50:55', 31, 'Shamika Roshan Maduj', ' Arachchi', 'shamika.maduroshan@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin', '1234'),
('2021-10-28 05:50:55', 32, 'hawa', ' balla', 'balla@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'admin', 'pusa'),
('2021-10-28 05:50:55', 34, 'bula', ' Arachchi', 'shamika.maduroshan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'admin', 'pinaya'),
('2021-10-28 05:50:55', 35, 'Shamika Roshan Maduj', ' Arachchi', 'shamika.maduroshan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'admin', '0001'),
('2021-10-28 05:50:55', 36, 'Shamika Roshan Maduj', ' Arachchi', 'shamika.maduroshan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'admin', '002'),
('2021-10-28 05:50:55', 37, 'Shamika Roshan Maduj', ' Arachchi', 'shamika.maduroshan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'admin', '333'),
('2021-10-28 05:50:55', 38, 'Shamika Roshan Maduj', ' Arachchi', 'shamika.maduroshan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'admin', '333'),
('2021-10-28 05:50:55', 39, 'Shamika Roshan Maduj', ' Arachchi', 'shamika.maduroshan@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'admin', '12345'),
('2021-10-28 05:50:55', 40, 'Shamika Roshan Maduj', ' Arachchi', 'shamika.maduroshan@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'user', '0000000000'),
('2021-10-28 05:50:55', 41, 'GL', ' Peries', 'Glperies@mail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'user', 'bosa'),
('2021-10-28 05:50:55', 43, 'Saranga', ' manaya', 'manaya@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'sell', 'kamala'),
('2021-10-28 05:50:55', 44, 'hfkjsdfhs', ' sdhfuisdf', 'sha@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'hadg', 'pusa'),
('2021-10-28 05:50:55', 45, 'Saranga', ' dasa', 'dasa@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Seller', '333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer_requests`
--
ALTER TABLE `buyer_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`sell_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer_requests`
--
ALTER TABLE `buyer_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `sell_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
