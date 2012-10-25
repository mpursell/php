<?php


$timeQuery = $connection->query('SELECT * FROM clock');
	foreach($timeQuery as $row);
		$timeStart = ($row[timeStart]);

		$elapsed = (time() - $timeStart); 

		try{
			$writeStop = $connection->prepare('INSERT INTO clock (timeElapse) VALUES (:timeElapsed)');

			$writeStop->bindParam(':timeElapsed', $elapsed); 

			$writeStop->execute();

			
		}catch(PDOException $e){
			echo $e->getMessage();
		}



?>