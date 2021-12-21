<?php

	$connect = mysqli_connect('localhost', 'root', '', 'books');
	if(!$connect){
		echo 'Failed to connect bd';
	}
	
?>