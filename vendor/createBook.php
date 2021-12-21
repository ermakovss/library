<?php
	require_once '../config/connect.php';

	$title = $_POST['title'];
	$subtitle = $_POST['subtitle'];
	$author = $_POST['author'];
	$genre = $_POST['genre'];
	$description = $_POST['description'];

	$authorAll = mysqli_query($connect, "SELECT * FROM `author`");
	$authorAll = mysqli_fetch_all($authorAll);

	$genreAll = mysqli_query($connect, "SELECT * FROM `genre`");
	$genreAll = mysqli_fetch_all($genreAll);

	mysqli_query($connect, addStroke($authorAll, $author, 'author'));
	mysqli_query($connect, addStroke($genreAll, $genre, 'genre'));

	$SQL = "INSERT INTO `book` (`id`, `title`, `sub_title`, `genre_name`, `author`, `description`)
			 VALUES (NULL, '$title', '$subtitle', '$genre', '$author', '$description');";

	mysqli_query($connect, $SQL);

	#header('Location: ../index.php');

	function addStroke($array, $parametr, $table_name){
		$isChange = false;
		foreach($array as $item){
			if($item[1] != $parametr){
				$isChange = true;
			}
		}

		if($isChange){
			if($table_name == "author"){
				return "INSERT INTO `author` (`id`, `name`) VALUES (NULL, '$parametr');";
			}

			if($table_name == "genre"){
				return "INSERT INTO `genre` (`id`, `name`) VALUES (NULL, '$parametr');";
			}
		}
	}
?>


