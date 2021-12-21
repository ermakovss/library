<?php
    require_once '../config/connect.php';

    $genre_name = $_POST['genre'];
    
    $genreInfo = mysqli_query($connect, "SELECT * FROM `genre`");
	$genreInfo = mysqli_fetch_all($genreInfo);

    $isChange = false;
    foreach($genreInfo as $item){
        
        if($item[1] != $genre_name){
            $isChange = true;
        }
    }

    if($isChange){
        mysqli_query($connect, "INSERT INTO `genre` (`id`, `name`) VALUES (NULL, '$genre_name')");
    }

    if(!$isChange){
        echo "<script>alert('Такой автор уже имеется в базе данных!')</script>";
    }

    header('Location: genre.php');	
?>