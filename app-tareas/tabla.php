<?php
session_start();
require "../conexion/database.php";

?>
<div class="correo">
	<div class="contenido">
		<table class="tabla">
			<caption>
				<button id="guardarnuevo" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
					Nueva Tarea<img src="../iconos/correo.png">
					<span class="glyphicon glyphicon-plus"></span>
				</button>
			</caption>
			<thead>
				<th> Fecha</th>
				<th> Descripcion</th>
				<th> Modificar</th>
				<th> Eliminar</th>
			</thead>

			<?php

			if (isset($_SESSION['consulta'])) {
				if ($_SESSION['consulta'] > 0) {
					$idp = $_SESSION['consulta'];
					$sql = "SELECT id,name,description 
					from tareas where id='$idp'";
				} else {
					$sql = "SELECT id,name,description 
					from tareas ORDER BY id DESC LIMIT 10 ";
				}
			} else {
				$sql = "SELECT id,name,description 
				from tareas  ORDER BY id DESC LIMIT 10 ";
			}

			$result = mysqli_query($connection, $sql);
			while ($ver = mysqli_fetch_row($result)) {

				$datos = $ver[0] . "||" .
					$ver[1] . "||" .
					$ver[2];

			?>

				<tr>
					<td><?php echo $ver[1] ?></td>
					<td><?php echo $ver[2] ?></td>
					<td>
						<button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">
							<img src="../iconos/editar.png">
						</button>
					</td>
					<td>
						<button class="btn btn-remove" onclick="preguntarSiNo('<?php echo $ver[0] ?>');">
						<img src="../iconos/remove1.png">
						</button>
					</td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>
</div>