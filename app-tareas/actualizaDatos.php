<?php	
	include("../conexion/database.php");
	$id=$_POST['id'];
	$name=$_POST['name'];
	$description=$_POST['description'];

	$sql="UPDATE tareas set name='$name', description='$description' where id='$id'";

	echo $result=mysqli_query($connection,$sql);

 ?>