<?php
    include("conexion/database.php");

    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $query = "INSERT INTO usuario(email, password)
        VALUES ('$email','$password')";
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query Failed.');
        }
        echo 'Task Added Successfully';
    }

?>