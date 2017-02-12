<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Pireti kodukas</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script>
		//Võetud http://www.w3schools.com/js/tryit.asp?filename=tryjs_timing_clock
		function startTime() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById('txt').innerHTML =
			h + ":" + m + ":" + s;
			var t = setTimeout(startTime, 500);
		}
		function checkTime(i) {
			if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
			return i;
		}
		</script>
	</head>
	
	<body onload="startTime()">
	<?php echo phpversion()?>
		<h1>Tere, maailm ning muud karvased ja sulelised!</h1>
		
		<!--See jätab tühja rea-->
		<p>&nbsp;</p>	
		
		<!--See on kooli arvutis, kodulehe kasutas olev pilt-->
		<img src="Kreeka.jpg" style="width:600px;height:200px;" alt="Kreeka">
		
		<!--See jätab tühja rea-->
		<p>&nbsp;</p>	
		
		<p>Pireti kodulehekülg aines võrgurakendused I.</p>
		<p></p>
		<p></p>
		
		<div id="txt">
		</div>
	</body>
</html>
