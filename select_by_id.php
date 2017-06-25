<?php

$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'test';

if (!$_GET){
	echo 'Please input the student id in the url (?id=xxx).';
	exit;
}else{
	$db = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

	if (mysqli_connect_errno()){
		echo 'Can not connect the database.';
		exit;
	}
	
	$query = "SELECT * FROM student WHERE id=".$_GET['id'];
	// var_dump($query);
	$result = mysqli_query($db, $query);
	if ($row = mysqli_fetch_assoc($result)){
		echo 'id: '.$row['id'].'<br />';
		echo 'name: '.$row['name'].'<br />';
		echo 'score: '.$row['score'].'<br />';
	}
}

?>
