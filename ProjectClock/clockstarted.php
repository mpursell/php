<?php
	include 'php/dbconnection.php';
	include 'php/dbwriteStart.php';

?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	
	<body>
		<div id='wrapper'>
			<div id="top">
				<div id="topLeft">
					<h1>Project Clock</h1>
					<h3>Keep track of time spent on your projects!</h3>
				</div>
			</div>

				<div id="topRight">
					<div id="clock">
						<h3>Project "<?print($code)?>" running...</h3>
					</div>
					<br>
					
					<form name="ClockStop" method="GET" action="clockstopped.php">
						<input type="submit" value="Stop" class="button">
					</form>
				</div>	


		<? include 'php/footer.php'; ?>
		</div>
	</body>
</html>

