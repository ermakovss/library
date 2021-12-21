<?php 
	
	require_once '../config/connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Library</title>
	<link rel="stylesheet" href="../Style/style.css">
	<link rel="stylesheet" href="../Style/author.css">
	<link rel="stylesheet" href="../Style/information.css">
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

	<section class="create">

		<div class="container">

			<div class="create__title books__title--head popylarity__title">Добавьте новый жанр</div>

			<form action="createGenre.php" method="post">
				<input type="text" name="genre" class="author__input">
				<input type="submit" name="submit" value="Добавить" class="information__block__btn author__submit">
			</form>

		</div>

	</section>

	<div class="container container__title">
		<div class="create__title books__title--head popylarity__title">Список Жанров</div>
	</div>
	


	<section class="author">
		<div class="container">
			
			<table class="author__table">
				<tr>
					<th class="author__table--id">Идентификатор</th>
					<th class="author__table--author">Автор</th>
				</tr>
				<?php
					$genreInfo = mysqli_query($connect, "SELECT * FROM `genre`");
					$genreInfo = mysqli_fetch_all($genreInfo);

					$counter = 1;
					foreach($genreInfo as $item){
				?>

				<tr>
					<td><?= $counter ?></td>
					<td><?= $item[1] ?></td>
					<td><a href ="deleteGenre.php?id=<?= $item[0] ?>"> Удалить </a></td>
				</tr>

				<?php 
						$counter++;
					}
				?>
			</table>

		</div>
	</section>

	<script type="text/javascript" src="../source/script.js"></script>
</body>
</html>