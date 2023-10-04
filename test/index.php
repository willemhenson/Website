<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Work Procrastinator</title>
	<style type="text/css">
		* {
			font-family: Helvetica;
		}
	</style>
</head>
<body>
	<center style="margin-top:40vh;max-height:100vh">
		<h1><form action="timer.php" method="post">
			<label id="title" for="value">Please Enter Your Worth: (£X/h)</label><br>
			<input id="value" type="range" name="value" min="0", max="100">
			<input type="submit">
		</form></h1>
	</center>
</body>
<script type="text/javascript">
	function update() {
		var value = document.getElementById('value').value;
		document.getElementById('title').innerHTML = 'Please Enter Your Worth: (£' + value +  '/h)';
	}
	window.setInterval(update, 10);
</script>
</html>