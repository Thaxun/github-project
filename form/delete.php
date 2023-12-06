<?php 
     require '../connect.php';
     $id = $_GET['id'];
     $sql = $conn->prepare("DELETE FROM list WHERE id = ?");
     $sql->execute([$id]);
     header("location:select.php");
?>