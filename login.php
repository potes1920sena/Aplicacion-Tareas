<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include("librerias/estilos1.php");
?>
    <script src="app.js"></script>
    <title>SignUp</title>
</head>
<style>
body {
    background-size: cover;
    background-position: center;
}
</style>

<body class="inicio">

    <?php require'partials/header.php'; ?>
    <br>
    <?php if(!empty($message)) : ?>
    <h3><?= $message ?></h3>
    <?php endif;?>
    <br>
    <dw-login-form>
        <div slot="form">
            <div class="panel-heading">
            <label for="" class="list-group-item list-group-item-action active">
                            INICIAR SESSION</label>
                <span>or</span> <a href="signup.php">To Register</a>
            </div>
            <div class="Register-form">
                <span id="success_message"></span>
                <form action="validar-login.php" id="user_id" method="post">
                    <br>
                    <div class="Form-group">
                        <input id="email" type="text" name="email" value="" class="form-control" autocomplete="off">
                    </div>
                    <div class="Form-group">
                        <input class="form-control" type="password" id="password" name="password" autocomplete="off">
                        <span id="password_error" class="text-danger"></span>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="form-group" style="align:center">
                        <input type="submit" name="save" id="save" value="Save" class="btn btn-info">
                </form>
            </div>
        </div>
        <div slot="forget">
            <a href="#" class="Register-forgot">
                ¿Olvidaste la clave?
            </a>
        </div>
    </dw-login-form>
    <dw-top-feedback opened>Garantizamos que todos los datos suministrados, seran Utilizados solo para uso de la
        plataforma y no seran de ninguna manera compartidos con nadie.</dw-top-feedback>

    <body>

</html>