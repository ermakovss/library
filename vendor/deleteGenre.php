<?php
	
	require_once '../config/connect.php';

    $id = $_GET['id'];
    mysqli_query($connect, "DELETE FROM `genre` WHERE `genre`.`id` = '$id'");

    header('Location: genre.php'); 
?>