<?php
    include("conexion/database.php");

    if(isset($_POST['nit']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password'])) {
        $nit = $_POST['nit'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $query = "INSERT INTO usuario(nit, name, surname, email, phone, password)
        VALUES ('$nit','$name','$surname','$email','$phone','$password')";
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query Failed.');
        }
        echo 'Task Added Successfully';
    }

?>