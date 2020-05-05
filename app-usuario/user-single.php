<?php
     include("../conexion/database.php"); //recibe conexion
     $id = $_POST['id'];
     $query = "SELECT * FROM usuario WHERE id = $id"; // consulta en la base de datos
     $result = mysqli_query($connection, $query);
         if(!$result) {
             die('Query Failed');
         }

         $json = array();
         while ($row = mysqli_fetch_array($result)) {
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

         $jsonstring = json_encode($json[0]);
         echo $jsonstring;
?>