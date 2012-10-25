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
					<h3>Enter project details below (optional), and hit Start to begin tracking your time.</h3>
				
				<br>
				
				<form name="Clock" method="POST" action="clockstarted.php">
					User:&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<input type = "text" name="user">	<br><br>
					Client: &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type = "text" name="client">	<br><br>
					Project Code: &nbsp;<input type = "text" name="code">&nbsp; &nbsp;	<br><br>					
					Cost Code:&nbsp; &nbsp;&nbsp;&nbsp; <input type = "text" name="costcode">	<br>
					<br>
					<br>
				</div>
					<br>
					<input type="submit" value="Start" class="button">
					<br>
				</form>	
			</div>
			
	<? include 'php/footer.php'; ?>
			
		</div>
	</body>
</html>
