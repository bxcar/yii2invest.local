<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=invest',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];


//ALTER TABLE `users` ADD `age` VARCHAR(45) AFTER `phone`

//CREATE TABLE `users` (
//`id` INT(11) NOT NULL AUTO_INCREMENT,
//    `last_name` VARCHAR(45) NOT NULL,
//    `first_name` VARCHAR(45) NOT NULL,
//    `username` VARCHAR(15) NOT NULL,
//    `password` VARCHAR(32) NOT NULL,
//    `auth_key` VARCHAR(32) NOT NULL,
//    `access_token` VARCHAR(32) NOT NULL,
//    PRIMARY KEY (id)
//)