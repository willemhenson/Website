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
	<center style="margin-top:30vh;max-height:100vh">
		<h1>Current Time Elapsed:</h1>
		<h1 id="timer">0s</h1>
		<button onclick="pause()" id="pause">Pause</button>
		<h1>Current Money Wasted:</h1>
		<h1 id="money" style="color: red;">£0</h1>
	</center>
</body>
<script type="text/javascript">
	var paused = false;
	function increment() {
		<?php echo('var value = ' . $_POST['value'] . ';')?>

		var time = parseFloat(document.getElementById('timer').innerHTML);
		if (paused == false) {
			time += 1;
		}
		document.getElementById('timer').innerHTML = time.toString() + 's';
		document.getElementById('money').innerHTML = '£' + (Math.round(100 * value/60/60 * time)/100);
	}
	window.setInterval(increment, 1000);
	function pause() {
		if (paused) {
			paused = false;
			document.getElementById('pause').innerHTML = 'Pause';
		}
		else {
			paused = true;
			document.getElementById('pause').innerHTML = 'Resume';
		}
	}
</script>
</html>
