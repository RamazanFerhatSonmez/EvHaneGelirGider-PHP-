<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "evhanegelirgider";

// Create connection
try{
  $conn = new PDO("mysql:host=$dbHost;dbname=$dbName","$dbUsername","$dbPassword",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die('Veritabanına bağlanlamadı ! !');
}
?>