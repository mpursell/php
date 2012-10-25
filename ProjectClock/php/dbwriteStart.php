<?php
	
/*Grab some variables from the POST array */
$projectuser = $_POST["user"];
$code = $_POST["code"];
$currenttime = time();
$client = $_POST["client"];
$costcode = $_POST["costcode"];

/*Write project code, username and current time into the DB */
try{
	$writeStart = $connection->prepare('INSERT INTO clock (user, code, timeStart, client, costcode) 
									VALUES (:projectuser, :code, :currenttime, :client, :costcode)');

	$writeStart->bindParam(':projectuser', $projectuser);
	$writeStart->bindParam(':code', $code);
	$writeStart->bindParam(':currenttime', $currenttime); 
	$writeStart->bindParam(':client', $client);
	$writeStart->bindParam(':costcode', $costcode);

	$writeStart->execute();

	
}catch(PDOException $e){
	echo $e->getMessage();
}


?>