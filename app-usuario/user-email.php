<?php

use  PHPMailer \ PHPMailer \ PHPMailer ; 
use  PHPMailer \ PHPMailer \ Exception ;

require  'PHPMailer/src/Exception.php' ; 
require  'PHPMailer/src/PHPMailer.php' ; 
require  'PHPMailer/src/SMTP.php' ;
require  'conexion/database.php' ;

$id = $_POST['id'];

$query = "SELECT * FROM usuario WHERE id = $id"; // consulta en la base de datos
$result = mysqli_query($connection, $query);
	if(!$result) {
		die('Query Failed');
	}

$mail = new PHPMailer();

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host ='smtp.gmail.com';
$mail->Port = '587';
$mail->Username = 'oscareduardopotes@gmail.com';
$mail->Password = 'Desarrollador1318333';


$mail->setFrom('oscareduardopotes@gmail.com', 'Emisor');

$mail->addAddress('email','Receptor');

$mail->addAttachment('bienvenida.doc','Bienvenida.doc');

$mail->Subject = 'Hola';
$mail->Body = '<b>Hola como estas<b><br> Mensaje de Bienvenida';
$mail->IsHTML(true);

if ($mail->send()) {
	echo 'Archivo Enviado';
}else{
	'Error al enviar el correo';
}
$jsonstring = json_encode($json[0]);
	echo $jsonstring;
?>