<?php

include("../conexion/database.php"); //recibe conexion
    if(isset($_POST['id'])){ //recibe id del cliente
        $id = $_POST['id'];
    $query = "DELETE FROM usuario WHERE id = $id"; // consulta en la base de datos
    $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query Failed.');
        }
        echo "Task Deleted Successfully";
    }
?>