<?php
	$username = '';
	$password = '';

	try{
		$connection = new PDO('mysql:host=localhost; dbname=projectclock', $username, $password);
	}catch(PDOException $e){
		echo 'Error: '.$e->getMessage();
	}
?>
