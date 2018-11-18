#FELICITY
###About
What is FELICITY? Felicity means intense happiness. The goal of the application is to provide support to useres of charity 'Camp Quality' by providing efficient way to manage campers medical record including the tracking of users daily medicine. It provides easy to use interface for admins to log into the application, register new campers fast and upload any detailed medical records or other information into respected campers profile. These can later be generated If needed, but the main purpose of the application is to remind the admins of the medication in-take for each campers.

###Features

- Session Mangement support for admin of Camp Quality. Thus it prevents any external users accessing any information.
- Fast and easy management tool to create new campers
- Ability to add medication records to each campers.
- Get reminded for each campers
- Mobile application available. 
- Created wiith PHP, thus only requires apache servers to run the application.


### How to modify the database.

Before you start running the application, you must set up the database. Follow the instruction. Have an MySQL server ready and running and modify the config.php inside php folder under web application section. Add the respected details:

```php
define('DB_SERVER', '@@@');
define('DB_USERNAME', '@@@');
define('DB_PASSWORD', '@@@');
define('DB_NAME', '@@@');
```

once completed, run the following sql code in your database to have the template ready for the function of the website;

```sql
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `medication_id` int(64) NOT NULL,
  `medication_name` varchar(258) COLLATE utf8_unicode_ci NOT NULL,
  `medication_intake` varchar(258) COLLATE utf8_unicode_ci NOT NULL,
  `dosage` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `medication_linker`
--

CREATE TABLE `medication_linker` (
  `medication_id` int(64) NOT NULL,
  `medication_linker_id` int(64) NOT NULL,
  `patient_id` int(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(64) NOT NULL,
  `first_name` varchar(258) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(258) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(258) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(258) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
-- Table structure for table `registration_data`
--

CREATE TABLE `registration_data` (
  `Id` int(100) NOT NULL,
  `patient` text COLLATE utf8_unicode_ci NOT NULL,
  `form` varbinary(6535) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`medication_id`);

--
-- Indexes for table `medication_linker`
--
ALTER TABLE `medication_linker`
  ADD PRIMARY KEY (`medication_linker_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `registration_data`
--
ALTER TABLE `registration_data`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```

Once completed, drop the index.php root directory into your apache server and you are good to go!
