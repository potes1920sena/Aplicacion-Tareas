<?php

include("../conexion/database.php");

    $id = $_POST['id'];
    $autor = $_POST['autor'];
    $date = $_POST['date'];
    $hour = $_POST['hour'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "UPDATE tareas SET autor = '$autor', date = '$date', hour = '$hour', title = '$title', description = '$description' 
    WHERE id = '$id' "; 

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query Field.');
    }

    echo "Update Task Successfully";
?>