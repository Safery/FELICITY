# FELICITY

### About
What is FELICITY? Felicity means intense happiness. The goal of the application is to provide support to useres of charity 'Camp Quality' by providing efficient way to manage campers medical record including the tracking of users daily medicine. It provides easy to use interface for admins to log into the application, register new campers fast and upload any detailed medical records or other information into respected campers profile. These can later be generated If needed, but the main purpose of the application is to remind the admins of the medication in-take for each campers.

### Features

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

CREATE TABLE `medication` (
  `medication_id` int(64) NOT NULL,
  `medication_name` varchar(258) COLLATE utf8_unicode_ci NOT NULL,
  `medication_intake` varchar(258) COLLATE utf8_unicode_ci NOT NULL,
  `dosage` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `medication_linker` (
  `medication_id` int(64) NOT NULL,
  `medication_linker_id` int(64) NOT NULL,
  `patient_id` int(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `patient` (
  `patient_id` int(64) NOT NULL,
  `first_name` varchar(258) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(258) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(258) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(258) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `registration_data` (
  `Id` int(100) NOT NULL,
  `patient` text COLLATE utf8_unicode_ci NOT NULL,
  `form` varbinary(6535) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `medication`
  ADD PRIMARY KEY (`medication_id`);

ALTER TABLE `medication_linker`
  ADD PRIMARY KEY (`medication_linker_id`);

ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);
  
ALTER TABLE `registration_data`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
```

Once completed, drop the index.php root directory into your apache server and you are good to go!


### How is it working?

Everything is being done via client -> API -> HTTP Endpoint handling by the server -> client respone.


Image:
![](https://d32myzxfxyl12w.cloudfront.net/images/ckeditor_assets/pictures/275/content_rest_api_design.png)

To give you a better prespective, lets look at user authentication. You may notice the following code in each php pages;

```php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
```

It basically checks if there any session variable exists. But how does it get session variable? You have to get authenticated. Looking at the form on login.php you wil see it makes a POST request to the server. The server hands the post request using the following code:

Line 21 on login.php
```php
if($_SERVER["REQUEST_METHOD"] == "POST"){
```
Following the if statement, the user authentication happens. Once it has been completed and returned true, the POST will send a response back to the AJAX form that sent the request. The form will see the positive response and re-direct the user to the homepage.

line 69 on login.php
```php
                            header("location: ../index.php?link=welcome");
```

Now coming back to the session variable, it will return true and the user will show authenticated in all page. The creation of the session variable was stored in the following line 64,65,66 on login.php

```php
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
```
