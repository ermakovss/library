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
						<li><a href="" class="header__link">Models</a></li>
					</ul>
				</nav>
			</div>
			</div>
		</div>
	</header>

	<section class="information">
		<div class="container">

			<div class="information__title popylarity__title">Основная информация</div>

				<div class="information__wrapper">

					<?php

						$sql = mysqli_query($connect, "SHOW TABLES FROM `books`");
						$counter = 0;
						while ($row = mysqli_fetch_array($sql)) {		
							$res = mysqli_query($connect ,"SELECT COUNT(*) FROM $row[0]");
							$rows = mysqli_fetch_row($res);
							$total = $rows[0]; 
					?>
						
						<div class="information__block">
							
							<div class="information__block__title"> <?= $row[0] ?></div>
							<div class="information__block__size"><?= $total ?></div>
							<div class="information__block__subsize">Колличество экзепляров данной сущности</div>

						<?php
							if($counter == 1){
						?>
							<button class="information__block__btn"><a href="../index.php">Просмотреть</a></button>
						<?php 
							}

							if($counter == 0){
						?>

						<button class="information__block__btn"><a href="author.php">Просмотреть</a></button>


						<?php 
							}

							if($counter == 2){
						?>
						<button class="information__block__btn"><a href="genre.php">Просмотреть</a></button>
						<?php 
							}				
							
							$counter++;
						 ?>
					</div>
					<?php
						}
					?>
				</div>
			</div>
	</section>


<script type="text/javascript" src="../source/script.js"></script>
</body>
</html>