<?php
    require_once '../config/connect.php';

    $author_name = $_POST['author'];
    
    $authorInfo = mysqli_query($connect, "SELECT * FROM `author`");
	$authorInfo = mysqli_fetch_all($authorInfo);

    $isChange = false;
    foreach($authorInfo as $item){
        
        if($item[1] != $author_name){
            $isChange = true;
        }
    }

    if($isChange){
        mysqli_query($connect, "INSERT INTO `author` (`id`, `name`) VALUES (NULL, '$author_name')");
    }

    if(!$isChange){
        echo "<script>alert('Такой автор уже имеется в базе данных!')</script>";
    }

    header('Location: author.php');	
?>