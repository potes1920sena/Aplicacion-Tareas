<?php
     include("../conexion/database.php"); //recibe conexion
     $id = $_POST['nit'];
     $query = "SELECT * FROM usuario WHERE nit = $nit"; // consulta en la base de datos
     $result = mysqli_query($connection, $query);
         if(!$result) {
             die('Query Failed');
         }

         $json = array();
         while ($row = mysqli_fetch_array($result)) {
             $json[] = array(
                 'name' => $row['name'],
                 'surname' => $row['surname'],
                 'email' => $row['email'],
                 'phone' => $row['phone'],
                 'user' => $row['user'],
                 'id' => $row['id']
             );
         }

         $jsonstring = json_encode($json[0]);
         echo $jsonstring;
?>