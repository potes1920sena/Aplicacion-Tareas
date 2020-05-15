<?php
session_start();
try{
   $login = htmlentities(addslashes($_POST["email"]));
   $password = htmlentities(addslashes($_POST["password"]));

   $contador=0;

   $base = new PDO("mysql:host=localhost; dbname=app-tareas" , "root" , "");
   $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $sql = "SELECT password FROM usuario WHERE email = :login";
   $resultado = $base->prepare($sql);
   $resultado->execute(array(":login"=>$login));
        $message = "";
   while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {

        if(password_verify($password, $registro['password'])){

            $contador++;

        }

    }

    if($contador > 0){        
                $_SESSION['user_id'] = $registro['email'];
                header('Location: /aplicacion-tareas/sessiones.php');
    }else{
        $message = "Sorry, Those credentials do not match ";
        header('Location: /aplicacion-tareas/signup.php');
    }

}catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
}

?>