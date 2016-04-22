-- Database for internal use in I3P Information System

SET time_zone = "+07:00";

DROP DATABASE IF EXISTS `db_i3p_core`;
CREATE DATABASE IF NOT EXISTS `db_i3p_core`;

USE `db_i3p_core`;

-- Table structure for table `users`
CREATE TABLE `users` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`full_name` TEXT NOT NULL,
	`tel_no` TEXT NOT NULL,
	`type` INT(10) UNSIGNED NOT NULL,
	`created_at` TIMESTAMP DEFAULT 0 NOT NULL,
	`updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE (`username`, `email`)
);

-- Table structure for table `customer_users`
CREATE TABLE `customer_users` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`user_id` INT (10) UNSIGNED NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
	UNIQUE (`user_id`)
);

-- Table structure for table `staff_users`
CREATE TABLE `staff_users` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`user_id` INT(10) UNSIGNED NOT NULL,
	`type` TEXT NOT NULL,
	`created_at` TIMESTAMP DEFAULT 0 NOT NULL,
	`updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
	UNIQUE (`user_id`)
);

-- Table structure for table `employee_users`
CREATE TABLE `employee_users` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`user_id` INT(10) UNSIGNED NOT NULL,
	`position` TEXT,
	`birth_date` DATE NOT NULL,
	`birth_place` TEXT NOT NULL,
	`gender` TEXT NOT NULL,
	`religion` TEXT NOT NULL,
	`first_work_date` DATE,
	`created_at` TIMESTAMP DEFAULT 0 NOT NULL,
	`updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
	UNIQUE (`user_id`)
);

-- Table structure for table `employee_presences`
CREATE TABLE `employee_presences` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`employee_user_id` INT(10) UNSIGNED NOT NULL,
	`created_at` TIMESTAMP DEFAULT 0 NOT NULL,
	`updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`employee_user_id`) REFERENCES `employee_users`(`id`)
);

-- Table structure for table `bookings`
CREATE TABLE `bookings` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`user_id` INT(10) UNSIGNED NOT NULL,
	`id_enc` VARCHAR(255) NOT NULL,
	`booking_datetime` DATETIME NOT NULL,
	`booking_service` VARCHAR(255) NOT NULL,
	`status` VARCHAR(255),
	`created_at` TIMESTAMP DEFAULT 0 NOT NULL,
	`updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
);

-- Table structure for table `booking_assignments`
CREATE TABLE `booking_assignments` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`booking_id` INT(10) UNSIGNED NOT NULL,
	`customer_user_id` INT(10) UNSIGNED NOT NULL,
	`employee_user_id` INT(10) UNSIGNED NOT NULL,
	`created_at` TIMESTAMP DEFAULT 0 NOT NULL,
	`updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY	 (`customer_user_id`) REFERENCES `customer_users`(`user_id`),
	FOREIGN KEY (`employee_user_id`) REFERENCES `employee_users`(`user_id`)
);

-- Table structure for table `complaints`
CREATE TABLE `complaints` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`user_id` INT(10) UNSIGNED NOT NULL,
	`id_enc` VARCHAR(255) NOT NULL,
	`message` TEXT NOT NULL,
	`status` TEXT NOT NULL,
	`created_at` TIMESTAMP DEFAULT 0 NOT NULL,
	`updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
);

-- Table structure for table `complaint_comms`
CREATE TABLE `complaint_comms` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`complaint_id` INT(10) UNSIGNED NOT NULL,
	`user_id` INT(10) UNSIGNED NOT NULL,
	`message` TEXT NOT NULL,
	`created_at` TIMESTAMP DEFAULT 0 NOT NULL,
	`updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
	FOREIGN KEY (`complaint_id`) REFERENCES `complaints`(`id`)
);

-- Table structure for table `rate_and_reviews`
CREATE TABLE `rate_and_reviews` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	# `booking_id` INT(10) UNSIGNED NOT NULL,
	`user_id` INT(10) UNSIGNED NOT NULL,
	`rating` INT(10),
	`review` TEXT,
	`created_at` TIMESTAMP DEFAULT 0 NOT NULL,
	`updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
	# FOREIGN KEY (`booking_id`) REFERENCES `bookings`(`id`),
	# UNIQUE (`booking_id`)
);