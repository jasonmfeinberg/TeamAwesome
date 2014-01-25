<!DOCTYPE HTML>
<html>
<head>
	<title>Activity Input Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
	<script src="validate_submit.js"></script>
</head>
<body>
	<div id="formdiv" style="padding:50px;">
		<form action="insert.php" name="submit_form" onsubmit="return validate_submit()" method="post">
		<!-- User text area -->
		<label for="text-basic">Username:</label>
		<input type="text" name="User" id="text-basic" value="">
		
		<!-- Game Name text field -->
		<label for="text-basic">Game Name:</label>
		<input type="text" name="game_name" id="text-basic" value="">

		<!-- Rules/Instructions -->
		<label for="textarea">Rules/Instructions:</label>
		<textarea cols="40" rows="8" name="Rules" id="textarea"></textarea>

		<!-- Requirements -->
		<label for="textarea">Requirements:</label>
		<textarea cols="40" rows="8" name="Requirements" id="textarea"></textarea>
		
		<!-- Min/Max Slider -->
		<div data-role="rangeslider">
			<label for="range-1a">Min/Max People:</label>
			<input type="range" name="MinPeople" id="range-1a" min="2" max="25" value="3">
			<label for="range-1b">Max People:</label>
			<input type="range" name="MaxPeople" id="range-1b" min="2" max="25" value="8">
		</div>

		<!-- Drinking Game? -->
		<label for="slider2">Drinking?:</label>
		<select name="Drinking" id="slider2" data-role="slider">
			<option value="0">No</option>
			<option value="1">Yes</option>
		</select>

		

		<input type="Submit" value="Submit" /></form>
	</div>
	
	<div data-role="footer" style="overflow:hidden;">
		<h4 style="text-align:center;">Navigation</h4>
		<div data-role="navbar">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="inputform.php" class="ui-btn-active">Submit Activity</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->
</body>
<footer>
</footer>
</html>