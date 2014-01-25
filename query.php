<head>
	<?php 
		$username="dbo512305653";
		$password="TeamAwesome";
		$database="db512305653";
		$host="db512305653.db.1and1.com";
		mysql_connect($host,$username,$password);
		@mysql_select_db($database) or die( "Unable to select database");
		$query = "SELECT * FROM Games_List";
		$result=mysql_query($query);
		$possibilities=array();
		while ($row=mysql_fetch_array($result)){
			for($i=0;$i<$row['Weight'];$i++){
				$possibilities[]=$row['Key'];
			}
		}
		$num=rand(0,(count($possibilities)-1));
		$choice=$possibilities[$num];
		$chosenquery="SELECT * FROM `Games_List` WHERE `Key`='". strval($choice) ."'";
		$gamequery=mysql_query($chosenquery);
		$selectedgame=mysql_fetch_array($gamequery);
		mysql_close();
	?>
	<title>Play <?php echo $selectedgame['Game_Name']; ?></title>
</head>
<body>
	<p>
	<?php
		echo $selectedgame['Game_Name'];
		echo '<br>';
		echo $selectedgame['Requirements'];
	?>
	</p>
</body>