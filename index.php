<?php
require 'vendor/autoload.php';
require 'config.php';


$user = new User;
$user->name = 'John Doe';
$user->email = 'john@example.com';
$user->password = password_hash('password', PASSWORD_BCRYPT);
$user->save();