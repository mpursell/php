<?php


	/* Set the query */
	$fetch = $connection->query('SELECT * FROM clock');

	/*iterate over the $fetch array */
	foreach($fetch as $row);
		$user = ($row[user]);
		$code = ($row[code]);
		$cli = ($row[client]);
		$ccode = ($row[costcode]);
		
	$timeQuery = $connection->query('SELECT * FROM clock');
			foreach($timeQuery as $row);
				/*Produce the elapsed time by subtracting time started from the time stopped */
				$timeStart = ($row[timeStart]);
				$elapsed = (time() - $timeStart);
				
				/*format the elasped time in seconds into a clock format */
				$init = $elapsed;
				$hours = floor($init / 3600);
				$minutes = floor(($init / 60) % 60);
				$seconds = $init % 60;


?>