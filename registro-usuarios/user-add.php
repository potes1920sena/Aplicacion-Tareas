<?php
    include("../conexion/database.php");

    if(isset($_POST['nit'])) {
        $nit = $_POST['nit'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $user = $_POST['user'];

        $query = "INSERT INTO usuario(nit, name, surname, email, phone, user)
        VALUES('$nit','$name','$surname','$email','$phone','$user')";
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query Failed.');
        }
        echo 'User Added Successfully';
    }

?>