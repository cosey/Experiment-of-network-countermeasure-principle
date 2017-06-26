<?php 
$connect=mysqli_connect("localhost","root","123qwe","test") or die("unable to connect");

function SearchId($id){
	global $connect;
	$sql="SELECT * FROM student WHERE id=".$id;
	$result=mysqli_query($connect,$sql);
	$row=mysqli_fetch_assoc($result);
	if($row){
		return $row["score"];
	}else{
		return "error";
	}
}

$id=$_GET['id'];
echo "id:".$id."</br>";

$Oldscore=SearchId($id);
echo "Old score:".$Oldscore."</br>";

$sqlN="UPDATE student SET score=".$_GET['score']."WHERE id=".$id;
echo "New score:".$_GET['score']."</br>";

mysqli_query($connect,$sqlN);
$Nowscore=SearchId($id);
echo "Now score:".$Nowscore."</br>";

?>