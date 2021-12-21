<?php
	
	require_once '../config/connect.php';

    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `author` WHERE `author`.`id` = '$id'");

    header('Location: genre.php'); 
?>