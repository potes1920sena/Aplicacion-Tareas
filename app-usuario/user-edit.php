<?php

include("../conexion/database.php");

$id = $_POST['id'];
$nit = $_POST['nit'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT, array("cost"=> 12));

    $query = "UPDATE usuario SET name= '$name', surname= '$surname', email= '$email', phone= '$phone', password= '$password' 
    WHERE id= '$id' "; 

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query Field.');
    }

    echo "Update Task Successfully";
?>