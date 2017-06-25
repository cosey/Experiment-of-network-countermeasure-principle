<?php

$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '123qwe';
$dbname = 'test';
$db = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

	
	$query = "SELECT * FROM student WHERE id=".$_GET['id'];
	// var_dump($query);
	$result = mysqli_query($db, $query);
	if ($row = mysqli_fetch_assoc($result)){
		echo 'id: '.$row['id'].'<br />';
		echo 'name: '.$row['name'].'<br />';
		echo 'score: '.$row['score'].'<br />';
	}


?>
