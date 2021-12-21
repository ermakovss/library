<?php
	
	require_once '../config/connect.php';

	$book_id = $_GET['id'];
	$book = mysqli_query($connect, "SELECT * FROM `book` WHERE `id` = '$book_id'");
	$book = mysqli_fetch_assoc($book);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Library</title>
	<link rel="stylesheet" href="../Style/style.css">
	<link rel="stylesheet" href="../Style/create.css">
</head>
<body>

	<header class ="header">
		<div class="container">
			<div class="header__wrapper">
				<div class="header__logo">
					<img src="../images/logo.png" alt="" class="logo">
				</div>
				<div class="header__title"><a href="../index.php">Library</a></div>
				<div class="header__burger">
					<span></span>
				</div>
				<div class="header__menu__wrapper">
				<nav class="header__menu">
					<ul class="header__links">
						<li><a href="../index.php" class="header__link">Главная</a></li>
						<li><a href="create.html" class="header__link">Предложения</a></li>
						<li><a href="information.php" class="header__link">Информация</a></li>
					</ul>
				</nav>
			</div>
			</div>
		</div>
	</header>

	<section class="offer">
		<div class="container">
			
			<div class="offer__title">Изменяйте, если нашли ошибку</div>

			<form action="change.php" method="post" class="offer__form">

				<input type="hidden" name="id" value="<?= $book['id'] ?>">
				
				<div class="offer__book offer__book--title">Имя книги</div>
				<input type="text" class="offer__book--input" name="title" value="<?= $book['title'] ?>">

				<div class="offer__book offer__book--title">Важная информация</div>
				<input type="text" class="offer__book--input" name="subtitle" value="<?= $book['sub_title'] ?>">	

				<div class="offer__book offer__book--title">Аннотация</div>
				<textarea class="offer__book--input offer__book--description" name="description" ><?=$book['description'] ?></textarea>

				<div class="miltipurprose_button">
					<button type="submit">Изменить</button>
				</div>
			</form>

		</div>
	</section>

<script type="text/javascript" src="../source/script.js"></script>
</body>
</html>
