<?php
session_start();
if(isset($_SESSION['user_id'])){
    header('Location: ');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
include("librerias/estilos1.php");
?>
    <script src="app.js"></script>
    <title>SignUp</title>
</head>

<body class="inicio">

    <?php require'partials/header.php'; ?>
    <br><br>
    <?php if(!empty($message)) : ?>
    <h3><?= $message ?></h3>
    <?php endif;?>
    <br>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Iniciar Sección</h1>
                <span>or</span> <a href="signup.php">To Register</a>
            </div>
            <div class="panel-body">

                <div class="pane-body">
                    <span id="success_message"></span>
                    <form action="validar-login.php" id="usr-id" method="post">

                        <br>
                        <div class="form-group" style="align:center">
                            <p class="text-success">Usuario</p>
                            <input class="form-control" type="text" id="login" name="login">
                            <span id="login_error" class="text-danger"></span>
                        </div>
                        <div class="form-group"  style="align:center">
                            <p class="text-success">Contraseña</p>
                            <input class="form-control" type="password" id="password" name="password" autocomplete>
                            <span id="password_error" class="text-danger"></span>
                        </div>
                        <div class="form-group"  style="align:center">
                            <input type="submit" name="save" id="save" value="Save"
                                class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div id="mensaje"></div>
</body>

</html>