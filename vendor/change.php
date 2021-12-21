<?php

	require_once '../config/connect.php';

	$id = $_POST['id'];
	$title = $_POST['title'];
	$subtitle = $_POST['subtitle'];
	$description = $_POST['description'];

	$SQL = "UPDATE `book` SET `title` = '$title', `sub_title` = '$subtitle', `description` = '$description' 
				WHERE `book`.`id` = '$id'";

	mysqli_query($connect, $SQL);

	header('Location: ../index.php');
?>


