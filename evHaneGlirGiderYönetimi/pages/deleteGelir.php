<?php 
  session_start();
  include("dbConnect.php");
$id = $_GET['id'];
$sql = $conn->query("DELETE FROM kullanicigelirleri WHERE gelirId = $id");
    header('Location: Gelir.php'); //If book.php is your main page where you list your all records
    $conn->close(); 

?>