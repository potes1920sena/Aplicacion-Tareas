<?php

include("../conexion/database.php");

$nit = $_POST['nit'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$user = $_POST['user'];

    $query = "UPDATE usuario SET name = '$name', surname = '$surname',
     email = '$email', phone = '$phone', user = '$user' 
    WHERE nit = '$nit' "; 

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query Field.');
    }

    echo "Update Task Successfully";
?>