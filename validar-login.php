<?php
try{
   $login = htmlentities(addslashes($_POST["login"]));
   $password = htmlentities(addslashes($_POST["password"]));

   $contador=0;

   $base = new PDO("mysql:host=localhost; dbname=app-tareas" , "root" , "");
   $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $sql = "SELECT password FROM usuario WHERE email = :login";
   mysqli_close($connection);
   $resultado = $base->prepare($sql);
   $resultado->execute(array(":login"=>$login));
        $message = "";
   while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {

        if(password_verify($password, $registro['password'])){

            $contador++;

        }

    }

    if($contador > 0){
                session_start();
                $_SESSION['user_id'] = $resultado;
                header('Location: /aplicacion-tareas/app-usuario');
    }else{
        $message = "Sorry, Those credentials do not match ";
        header('Location: /aplicacion-tareas/signup.php');
    }

}catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
}

?>