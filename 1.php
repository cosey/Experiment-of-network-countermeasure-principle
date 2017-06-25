<?php 

$con=mysqli_connect("localhost","root","123qwe");

if (!$con) {	
	die ('connect error:'.mysql_error());
}

$db_selectd=mysql_select_db("test",$con);

if(isset($_GET['id'])){

	$id=$_GET['id'];
	$sql="SELECT * FROM student WHERE id=".$id;

	$result=mysql_query($sql,$con);

	if ($row=mysql_fetch_assoc($result)) {		
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

mysql_close($con);
 
?>
