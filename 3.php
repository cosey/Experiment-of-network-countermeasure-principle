<?php 

function randomnum(){	
	$numbers = range (0,9); 
	shuffle ($numbers);
	$randnum = array_slice($numbers,0,6); 
	return $randnum;
}

$connect=mysqli_connect("localhost","root","123qwe","test") or die("unable to connect");

$sql="SELECT * FROM student WHERE id=".$_GET['id'];

$result=mysqli_query($connect,$sql);

if ($row=mysqli_fetch_assoc($result)) {	
	echo randomnum()."existence".randomnum();
}
else{
	echo randomnum()."inexistence".randomnum();
}

?>