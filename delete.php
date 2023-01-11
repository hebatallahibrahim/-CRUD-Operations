<?php 
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'myshop';
$connection = new mysqli($servername, $username, $password,$database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

  if(isset($_GET["id"])){
    $id = $_GET["id"];
  }
$sql = "DELETE FROM clients WHERE id=$id";
 $connection->query($sql);
 header("location:/myshop/index.php");
 exit;
?>