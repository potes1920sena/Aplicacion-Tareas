<?php

include("../conexion/database.php");

    $search = $_POST['search'];

    if(!empty($search)) {
        $query = "SELECT * FROM usuario WHERE nit LIKE '$search%'";
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query Error'. mysqli_error($connection)); 
        }

        $json = array();
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'nit' => $row['nit'],
                'name' => $row['name'],
                'surname' => $row['surname'],
                'email' => $row['email'],
                'phone' => $row['phone'],
                'id' => $row['id']
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

?>