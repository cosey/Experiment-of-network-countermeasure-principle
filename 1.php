<?php 

$connect=mysqli_connect("localhost","root","123qwe","test") or die("unable to connect");

if(isset($_GET['id'])){

	$id=$_GET['id'];
	$sql="SELECT * FROM student WHERE id=".$id;

	$result=mysqli_query($connect,$sql);

	if ($row=mysqli_fetch_assoc($result)) {		
		echo "id:".$row["id"]."</br>";
		echo "name:".$row["name"]."</br>";
		echo "score:".$row["score"]."</br>";
	}
	else(
		echo "without this id";
	)
}
else{
	echo "get id error";
}

?>
