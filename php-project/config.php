<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19-Mar-19
 * Time: 11:50
 */

$dbHost = 'localhost';
$dbUser = 'root';
$dbPss = '';
$dbName = 'login-users';

$db = new pdo(
    "mysql:host=$dbHost;dbname=$dbName",
    $dbUser,
    $dbPss
);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
