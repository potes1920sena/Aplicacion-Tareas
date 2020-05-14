<?php
    include("../conexion/database.php");

    if(isset($_POST['autor'])) {
        $autor = $_POST['autor'];
        $date = $_POST['date'];
        $hour = $_POST['hour'];
        $title = $_POST['title'];
        $description = $_POST['description'];
       
       $query = "INSERT INTO tareas(autor, date, hour, title, description)
        VALUES('$autor','$date','$hour','$title','$description')";
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query Failed.');
        }
        echo 'Task Added Successfully';
    }

?>