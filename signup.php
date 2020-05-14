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

    <?php if(!empty($message)): ?>
    <p><?= $message ?></p>
    <?php endif; ?>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Registro Nuevo</h1>
                <span>or <a href="login.php">Login</a></span>
            </div>
            <div class="panel-body">
                <span id="mensaje"></span>
                <form id="task-form">
                    <input type="hidden" id="taskId">

                    <div class="form-group" align="center">
                        <input type="text" id="nit" placeholder="Registra Identidad" class="form-control" required>
                        <span id="nit_error" class="text-danger"></span>
                    </div>
                    <div class="form-group" align="center">
                        <input type="text" id="name" placeholder="Registra Nombres" class="form-control" required>
                        <span id="name_error" class="text-danger"></span>
                    </div>
                    <div class="form-group" align="center">
                        <input type="text" id="surname" placeholder="Registra Apellidos" class="form-control" required>
                        <span id="surname_error" class="text-danger"></span>
                    </div>
                    <div class="form-group" align="center">
                        <input type="text" id="email" placeholder="Registra E-Mail" class="form-control" required>
                        <span id="email_error" class="text-danger"></span>
                    </div>
                    <div class="form-group" align="center">
                        <input type="text" id="phone" placeholder="Registra Movil o Telefono" class="form-control"
                            required>
                        <span id="phone_error" class="text-danger"></span>
                    </div>
                    <div class="form-group" align="center">
                        <input type="text" id="password" placeholder="Ingresa un Password" class="form-control"
                            required>
                        <span id="password_error" class="text-danger"></span>
                    </div>
                    <div class="form-group" align="center">
                        <input type="submit" name="save" id="save" class="btn btn-info" value="Registrar">
                    </div>
                </form>
              <!--  <div class="form-group" id="process" style="display-none;">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</body>

</html>