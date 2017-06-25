<?php 

$connect=mysqli_connect("localhost","root","123qwe","test") or die("unable to connect");

$id=$_GET['id'];

if(isset($id){

	$sql="SELECT * FROM student WHERE id=".$id;

	$result=mysqli_query($connect,$sql);

	if ($row=mysqli_fetch_assoc($result)) {		
		echo "id:".$row["id"]."</br>";
		echo "name:".$row["name"]."</br>";
		echo "score:".$row["score"]."</br>";
	}
}
else{
	echo "get id error";
}

?>
