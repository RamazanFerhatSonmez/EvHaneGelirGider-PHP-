<?php 
  session_start();
  include("dbConnect.php");
$id = $_GET['id'];
$sql = $conn->query("DELETE FROM kullanicigiderleri WHERE giderId = $id");
    header('Location: Gider.php'); //If book.php is your main page where you list your all records
    $conn->close(); 

?>