# php-db

Installation
======
Create table in database:
CREATE TABLE `guest_book`.`guestbook` ( `id` INT NOT NULL AUTO_INCREMENT , `user_name` VARCHAR(20) NOT NULL , `email` VARCHAR(255) NOT NULL , `homepage` VARCHAR(255) NULL , `message` TEXT NOT NULL , `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `ip` VARCHAR(20) NOT NULL , `browser` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

and define connect options in include/connect_db.php
