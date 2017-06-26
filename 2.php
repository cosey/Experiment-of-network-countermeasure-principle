<?php 

$connect=mysqli_connect("localhost","root","123qwe","test") or die("unable to connect");

$sql="SELECT * FROM student WHERE id=".$_GET['id'];

$result=mysqli_query($connect,$sql);

if ($row=mysqli_fetch_assoc($result)) {	
	echo "this id exits.";
}
else{
	echo "this id doesnot exit."
}

?>