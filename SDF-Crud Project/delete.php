<?php
 require_once 'function.php';

 $connection = new Connection();
 $conn = $connection->conn;

   if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header('location:admin.php');
} 
    
}     