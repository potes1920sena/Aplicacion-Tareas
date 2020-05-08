<?php
	
	include("../conexion/database.php");
	$id=$_POST['id'];
	$name=$_POST['name'];
	$description=$_POST['description'];

	$sql="INSERT into tareas (id,name,description) 
	                            values ('$id','$name','$description')";
	echo $result=mysqli_query($connection,$sql);

 ?>