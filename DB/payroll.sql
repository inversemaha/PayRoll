-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2017 at 04:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_table`
--

CREATE TABLE `department_table` (
  `department_id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_table`
--

INSERT INTO `department_table` (`department_id`, `department_name`, `created_at`) VALUES
(1, 'IT', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designation_table`
--

CREATE TABLE `designation_table` (
  `designation_id` int(10) UNSIGNED NOT NULL,
  `designation_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designation_table`
--

INSERT INTO `designation_table` (`designation_id`, `designation_name`, `department_id`, `created_at`) VALUES
(1, 'Programmer', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `emp_id` int(10) UNSIGNED NOT NULL,
  `employee_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_father_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_local_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_martial_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employee_department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_date_of_joining` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_joining_salary` int(11) DEFAULT NULL,
  `employee_account_holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_account_number` int(11) DEFAULT NULL,
  `employee_bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_bank_branch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`emp_id`, `employee_name`, `employee_father_name`, `emp_image`, `employee_birthday`, `gender`, `employee_phone`, `employee_local_address`, `employee_permanent_address`, `nationality`, `employee_martial_status`, `resume`, `email`, `password`, `employee_id`, `employee_department`, `employee_designation`, `employee_date_of_joining`, `employee_joining_salary`, `employee_account_holder_name`, `employee_account_number`, `employee_bank_name`, `employee_bank_branch`, `active_status`, `created_at`, `updated_at`) VALUES
(1, 'Mahmudur rahaman', 'father', 'default.jpg', '2017-09-15', 'M', '123654789', 'Dhaka', 'Dhaka', 'Bangladeshi', 'Married', NULL, 'memotiur@gmail.com', '123', 101, '1', NULL, 'Nothing', 50000, 'ggggg', 78964, 'kkk', 'hh', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `holiday_table`
--

CREATE TABLE `holiday_table` (
  `holiday_id` int(10) UNSIGNED NOT NULL,
  `holiday_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holiday_occasion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holiday_table`
--

INSERT INTO `holiday_table` (`holiday_id`, `holiday_date`, `holiday_occasion`, `created_at`) VALUES
(1, '2017-09-15', 'Nothng', NULL),
(2, '2017-09-22', 'gdfhgfhj', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_09_181436_create_employee_details', 1),
(4, '2017_09_14_152222_working_day_setup_migration', 1),
(5, '2017_09_15_224134_create_department', 1),
(6, '2017_09_15_224413_create_designation', 1),
(7, '2017_09_16_222338_holiday_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `emp_full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL,
  `user_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_active_status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `emp_full_name`, `emp_f_name`, `user_picture`, `emp_birthday`, `user_designation`, `user_religion`, `user_gender`, `user_phone_number`, `user_email`, `user_type`, `user_password`, `users_active_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '', NULL, NULL, NULL, NULL, NULL, NULL, 'admin@gmail.com', 1, '123456', 1, '\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `working_day_setup`
--

CREATE TABLE `working_day_setup` (
  `working_day_id` int(10) UNSIGNED NOT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_day_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_starting_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_closing_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `working_day_setup`
--

INSERT INTO `working_day_setup` (`working_day_id`, `day`, `working_day_status`, `office_starting_time`, `office_closing_time`, `created_at`) VALUES
(1, 'saturday', 'on', '09:00 AM', '06:00 PM', NULL),
(2, 'sunday', 'on', '09:00 AM', '06:00 PM', NULL),
(3, 'monday', 'on', '09:00 AM', '06:00 PM', NULL),
(4, 'tuesday', 'on', '09:00 AM', '06:00 PM', NULL),
(5, 'wednesday', 'on', '09:00 AM', '06:00 PM', NULL),
(6, 'thursday', 'on', '09:00 AM', '06:00 PM', NULL),
(7, 'friday', 'off', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_table`
--
ALTER TABLE `department_table`
  ADD PRIMARY KEY (`department_id`),
  ADD UNIQUE KEY `department_table_department_name_unique` (`department_name`);

--
-- Indexes for table `designation_table`
--
ALTER TABLE `designation_table`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `employee_table_email_unique` (`email`),
  ADD UNIQUE KEY `employee_table_employee_id_unique` (`employee_id`);

--
-- Indexes for table `holiday_table`
--
ALTER TABLE `holiday_table`
  ADD PRIMARY KEY (`holiday_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_user_email_unique` (`user_email`);

--
-- Indexes for table `working_day_setup`
--
ALTER TABLE `working_day_setup`
  ADD PRIMARY KEY (`working_day_id`),
  ADD UNIQUE KEY `working_day_setup_day_unique` (`day`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department_table`
--
ALTER TABLE `department_table`
  MODIFY `department_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `designation_table`
--
ALTER TABLE `designation_table`
  MODIFY `designation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `emp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `holiday_table`
--
ALTER TABLE `holiday_table`
  MODIFY `holiday_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `working_day_setup`
--
ALTER TABLE `working_day_setup`
  MODIFY `working_day_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
