<head>
	<title>Thanks for your Submission! </title>
	<?php 
		$username="dbo512305653";
		$password="TeamAwesome";
		$database="db512305653";
		$host="db512305653.db.1and1.com";
		$GamVal=$_POST['game_name'];
		$MinVal=$_POST['MinPeople'];
		$MaxVal=$_POST['MaxPeople'];
		$UseVal=$_POST['User'];
		$DriVal=$_POST['Drinking'];
		$WeiVal=$_POST['Weight'];
		$RulVal=$_POST['Rules'];
		$ReqVal=$_POST['Requirements'];
		mysql_connect($host,$username,$password);
		@mysql_select_db($database) or die( "Unable to select database");
		$query = "INSERT INTO Games_List (Game_Name, MinPeople, MaxPeople,User, Drinking, Rules, Requirements)
		VALUES('$GamVal','$MinVal','$MaxVal','$UseVal','$DriVal','$RulVal','$ReqVal')";
		echo $query;
		mysql_query($query);
		mysql_close();
	?>
</head>
<body>
	<h1>Thanks for your submission!</h1>
	<p><a href="InputForm.php">Submit another!</a></p>
</body>