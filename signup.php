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

<?php if(!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>
<h1>Registro Nuevo</h1>
<span>or <a href="login.php">Login</a></span>
<form id="task-form">
        <input type="hidden" id="taskId">

        <div class="form-group">
            <input type="text" id="nit" 
            placeholder="Registra Identidad" 
            class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" id="name" 
            placeholder="Registra Nombres" 
            class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" id="surname" 
            placeholder="Registra Apellidos" 
            class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" id="email" 
            placeholder="Registra E-Mail" 
            class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" id="phone" 
            placeholder="Registra Movil o Telefono" 
            class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" id="password" 
            placeholder="Ingresa un Password" 
            class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary 
        btn-block text-center">Save</button>
    </form>
    <div id="mensaje"></div>
</body>
</html>