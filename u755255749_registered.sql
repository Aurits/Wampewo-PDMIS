SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `registered`

-- --------------------------------------------------------

-- Table structure for table `citizen_groups`

CREATE TABLE `citizen_groups` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(255) NOT NULL,
  `Contact_Information` VARCHAR(255) NOT NULL,
  `Chair` VARCHAR(100) NOT NULL,
  `Business_Description` TEXT DEFAULT NULL,
  `Funding_Proposal` TEXT DEFAULT NULL,
  `Number_of_People` INT(11) DEFAULT NULL,
  `Amount_for_Funding` DECIMAL(20,2) DEFAULT NULL,
  `village` VARCHAR(100) NOT NULL,
  `timestamps` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Table structure for table `forum_posts`

CREATE TABLE `forum_posts` (
  `Post_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Topic_Title` VARCHAR(255) NOT NULL,
  `Subject` TEXT NOT NULL,
  `Created_At` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`Post_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Table structure for table `government_bodies`

CREATE TABLE `government_bodies` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(255) NOT NULL,
  `Contact_Information` VARCHAR(255) NOT NULL,
  `Role` TEXT DEFAULT NULL,
  `Authority` TEXT DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Table structure for table `messages`

CREATE TABLE `messages` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `Subject` VARCHAR(255) NOT NULL,
  `Message` TEXT NOT NULL,
  `Timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `IsRead` TINYINT(1) DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Table structure for table `services`

CREATE TABLE `services` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(255) DEFAULT NULL,
  `Description` TEXT DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Table structure for table `users`

CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(30) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `reg_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `responsibilities` VARCHAR(200) NOT NULL,
  `skill` VARCHAR(100) NOT NULL,
  `age` INT(5) NOT NULL,
  `village` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Table structure for table `Wampeewo_citizens`

CREATE TABLE `Wampeewo_citizens` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `age` INT(30) NOT NULL,
  `gender` VARCHAR(30) NOT NULL,
  `occupation` VARCHAR(100) NOT NULL,
  `Income` VARCHAR(100) NOT NULL,
  `education` VARCHAR(100) NOT NULL,
  `Village` VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

COMMIT;
