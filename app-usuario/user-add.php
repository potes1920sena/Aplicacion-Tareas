<?php
    include("../conexion/database.php");

    $message ="";

    if(isset($_POST['nit'])) {
        $nit = $_POST['nit'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT, array("cost"=> 12));

        $query = "INSERT INTO usuario(nit, name, surname, email, phone, password)
        VALUES('$nit','$name','$surname','$email','$phone','$password')";
        $result = mysqli_query($connection, $query);
        if(!$result) {
            ?>
            <h3><span>FALLO EL REGISTRO</span></h3>
            <h4 class="bad">ya existe un usuario con esa Identificación"</h4>
            <?php
        }else{
        ?>
        <h3 class="ok">¡Te has inscrito correctamente!</h3>
        <p class="bad">se te ha enviado un correo de Verificación</p>
        <div id="correo_Bienvenida"></div>
        <?php
        }
    }

?>