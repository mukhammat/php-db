# php-db

Installation
======
Create table in database:
CREATE TABLE `guestbook` (
    `id` INT NOT NULL AUTO_INCREMENT, 
    `user_name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `homepage` VARCHAR(100) NULL,
    `message` TEXT NOT NULL,
    `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `ip` VARCHAR(20) NOT NULL,
    `browser` VARCHAR(200) NOT NULL,
    PRIMARY KEY (`id`)
    )

copy `include/connect_db.example.php` to `include/connect_db.php`
and define correct connect options in it
