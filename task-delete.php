<?php

    include('database.php'); //recibe conexion
    if(isset($_POST['id'])){ //recibe id del cliente
        $id = $_POST['id'];
    $query = "DELETE FROM tareas WHERE id = $id"; // consulta en la base de datos
    $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query Failed.');
        }
        echo "Task Deleted Successfully";
    }
?>