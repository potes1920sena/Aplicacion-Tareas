<?php

include("../conexion/database.php"); //recibe conexion
    if(isset($_POST['nit'])){ //recibe id del cliente
        $nit = $_POST['nit'];
    $query = "DELETE FROM usuario WHERE it = $nit"; // consulta en la base de datos
    $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query Failed.');
        }
        echo "Task Deleted Successfully";
    }
?>