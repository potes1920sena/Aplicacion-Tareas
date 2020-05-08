<?php
	
	include("../conexion/database.php");
	$id=$_POST['id'];

	$sql="DELETE from tareas where id='$id' ";
	echo $result=mysqli_query($connection,$sql);

 ?>