<?php

include("../conexion/database.php");

    $query = "SELECT * FROM tareas order by id";
    $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die('Query Failed'. mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
        'autor' => $row['autor'],
        'date' => $row['date'],
        'hour' => $row['hour'],
        'title' => $row['title'],
        'description' => $row['description'],
        'id' => $row['id']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;

?>