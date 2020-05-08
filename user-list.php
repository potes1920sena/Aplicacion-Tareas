<?php

include("../conexion/database.php");

    $query = "SELECT * FROM usuario";
    $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die('Query Failed'. mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
        'nit' => $row['nit'],
        'name' => $row['name'],
        'surname' => $row['surname'],
        'email' => $row['email'],
        'phone' => $row['phone'],
        'password' => $row['password'],
        'id' => $row['id']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;

?>