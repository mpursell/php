<?php

	include 'php/dbconnection.php';
	/*include 'php/dbwriteStop.php'; */ 
	include 'php/dbfetch.php'; 

?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>

		<body>
		<div id='wrapper'>
			<div id="topStopped">
				<div id="topLeft">
					<h1>Project Clock</h1>
						<h3>Keep track of time spent on your projects!</h3>
				</div>
			</div>

				<div id="topRight">
					<div id="clock">
						<h3>Stopped!</h3>
						<table cellpadding="10" border="0.5">
							<tr>
								<th>User</th>
								<th>Client</th>
								<th>Project Code</th>
								<th>Cost Centre</th>
								<th>Elapsed Time</th>
							</tr>
							<tr>
								<td><?print($user); ?></td>
								<td><?print($cli); ?></td>
								<td><?print($code); ?></td>
								<td><?print($ccode); ?></td>
								<td><?print($hours.' : '.$minutes.' : '.$seconds); ?></td>
							</tr>	
					    </table>   
					</div>
					 <br>
				
					 <form method='POST' action='index.php' name='startAgain'>
							<input type='Submit' value='Start Again' class="buttonStopped">
						</form>
				</div>	

		<? include 'php/footer.php'; ?>
		</div>
	</body>
</html>