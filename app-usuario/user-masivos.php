<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
    crossorigin="anonymous">
</script>
    <script src="appt.js"></script>
    <title>App Registry</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="../img/logo2.png" alt="">
        <a href="#" class="navbar-brand">CORREOS MASIVOS</a>
        <ul class="navbar-nav ml-auto">
            <div class="navbar navbar-expand-lg navbar-right bg-right"> 
                <a href="../app-usuarios/index.php" class="navbar-warning lm-auto">Usuarios</a>
                <a href="../uapp-usuarios/index.php" class="navbar-warning lm-auto">Agenda</a>
                <a href="user-masivos.php" class="navbar-warning lm-auto">E-Mail</a>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <input type="search" id="search" class="form-control mr-sm-2" 
                placeholder="Search Your Task">
                <button class="btn btn-success my-2 my-sm-0" type="submit">
                    Search
                </button>
            </form>
        </ul>
    </nav>
    <div class="container p-4">
        <div class="row">
            <div class="col-md 5">
                <div class="card">
                    <div class="card-body">
                        <form id="task-form">
                            <input type="hidden" id="taskId">
                            <div class="form-group">
                                <input type="text" id="name" 
                                placeholder="Task Name" 
                                class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea id="description" cols="30" rows="10" 
                                class="form-control" 
                                placeholder="Task Description">
                            </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary 
                            btn-block text-center">
                                Save Task</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card my-4" id="task-result">
                        <div class="card-body">
                            <ul id="container"></ul>
                        </div>
                    </div>
                    <table class="table table-bordered table-sm">
                        <thead id="cabecera">
                            <tr>
                                <td>Id</td>
                                <td>E-Mail</td>
                                <td>Mensaje</td>
                                <td>Remove</td>
                            </tr>
                        </thead>
                        <tbody id="tasks">
						<?php

use  PHPMailer \ PHPMailer \ PHPMailer ; 
use  PHPMailer \ PHPMailer \ Exception ;

require  'PHPMailer/src/Exception.php' ; 
require  'PHPMailer/src/PHPMailer.php' ; 
require  'PHPMailer/src/SMTP.php' ;
require  '../conexion/database.php' ;

$query = "SELECT * FROM configuracion";
$result = mysqli_query($connection,$query);
$row = $result->fetch_assoc();

$mail = new PHPMailer();

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = $row['host'];
$mail->Port = $row['puerto'];
$mail->Username = $row['email_emisor'];
$mail->Password = $row['password'];


$mail->setFrom($row['email_emisor'], 'OP Soluciones Tecnologicas');

$query = "SELECT * FROM usuario";
$result = mysqli_query($connection,$query);

while ($rows = mysqli_fetch_assoc($result)) {

$correo_receptor = $rows['email'];
$receptor = $rows['name'];

$mail->addAttachment('bienvenida.doc','Bienvenida.doc');

$mail->addAddress($correo_receptor, $receptor);

$mail->Subject = $row['asunto'];
$mail->Body = $row['cuerpo'];
$mail->IsHTML(true);

if ($mail->send()) {
	echo 'Los Correos Fueron Enviados';
}else{
	'Error al enviar el correo';
}
}
?>
						</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

