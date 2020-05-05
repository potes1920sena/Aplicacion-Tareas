<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
        <link rel="stylesheet" href="styles/style.css">
        <script src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
        crossorigin="anonymous">
        </script>
        <script src="appu.js"></script>
        <title>SignUp</title>
    </head>
<body class="inicio">
    
<?php require'partials/header.php'; ?>
<br><br>
<?php if(!empty($message)) : ?>
    <h3><?= $message ?></h3>
<?php endif;?>
<br>
    <form action="validar-login.php"  method="post">
        <h3>INICIAR SECCION</h3>
        <br>
         <span>or</span> <a href="signup.php">To Register</a>
        <br>
         <input class = "form-control" type = "text" name="login">
         <input class = "form-control" type = "password" name="password" autocomplete ><br><br><br>
         <button type="submit" class="btn btn-primary btn-block text-center">LOGIN</button>
    </form>
    <div id="mensaje"></div>
</body>
</html>