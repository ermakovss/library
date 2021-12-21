<?php
	
	require_once 'config/connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Library</title>
	<link rel="stylesheet" href="Style/style.css">
</head>
<body>

	<header class ="header">
		<div class="container">
			<div class="header__wrapper">
				<div class="header__logo">
					<img src="images/logo.png" alt="" class="logo">
				</div>
				<div class="header__title"><a href="index.php">Library</a></div>
				<div class="header__burger">
					<span></span>
				</div>
				<div class="header__menu__wrapper">
				<nav class="header__menu">
					<ul class="header__links">
						<li><a href="index.php" class="header__link">Главная</a></li>
						<li><a href="vendor/create.html" class="header__link">Предложения</a></li>
						<li><a href="vendor/information.php" class="header__link">Информация</a></li>
					</ul>
				</nav>
			</div>
			</div>
		</div>
	</header>

	<section class="popylarity">
		<div class="container">
			<div class="popylarity__title__wrapper">
				<div class="popylarity__title">Популярные жанры</div>
			</div>

			<div class="popylarity__wrapper">	
				<div class="popylarity__leftblock">
					<div class="popylarity__image__wrapper">
						<img src="images/fantastic.jpg" alt="" class="popylarity__image">
						<div class="popylarity__image--class">Фантастика</div>
					</div>
					<div class="popylarity__image__wrapper">
						<img src="images/classic.jpg" alt="" class="popylarity__image">
						<div class="popylarity__image--class">Классика</div>
					</div>
					<div class="popylarity__image__wrapper">
						<img src="images/detective.jpg" alt="" class="popylarity__image">
						<div class="popylarity__image--class">Детективы</div>
					</div>
					<div class="popylarity__image__wrapper">
						<img src="images/child.jpg" alt="" class="popylarity__image">
						<div class="popylarity__image--class">Детская</div>
					</div>
				</div>

				<div class="popylarity__rigthblock">
					<div class="popylarity__image__wrapper">
						<img src="images/matrin.jpg" alt="" class="popylarity__image popylarity__image--rigth">
						<div class="popylarity__image--class">Образовательная</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="books">
		<div class="container">
			<div class="books__title--head popylarity__title">Наш ассортимент книг:</div>

			<?php

				$books = mysqli_query($connect, "SELECT * FROM `book`");
				$books = mysqli_fetch_all($books);
				
				foreach ($books as $book) {
			?>

				<div class="books__block container_books">
					<div class="books__wrapper">
						<div class="books__image__wrapper">
							<img src="images/default.png" alt="">
						</div>
						<div class="books__info">
							<div class="books__title"><?= $book[1] ?></div>
							<div class="books__subtitle"><?= $book[2] ?></div>
							<div class="books__author"><?= $book[4] ?></div>
							<div class="books__genre">Жанр: <?= $book[3] ?></div>
							<a href="vendor/update.php?id=<?= $book[0] ?>" class="shine__button">Изменить</a>
							<a href="vendor/delete.php?id=<?= $book[0] ?>" class="shine__button shine__button--rigth">Удалить</a>
						</div>
					</div>
					<div class="books__discription">
						<div class="books__discription__title">Аннотация</div>
							<div class="books__discription__info"><?= $book[5] ?>
						</div>
						<div class="books__dropdown">
							<button class="triangle--down" id="dropDown"></button>
						</div>
					</div>
				</div>

			<?php

				}
			?>

		</div>
	</section>

<script type="text/javascript" src="source/script.js"></script>
</body>
</html>