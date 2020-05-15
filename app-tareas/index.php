<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include("../librerias/estilos2.php");
?>
    <script src="../appt.js"></script>
    <title>Search-Task</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#"><img src="../iconos/logo1.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-haspopup="true" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="nav  nav-tabs">
                <li class="nav-item active">
                    <a class="nav-link" href="../app-usuario">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aplicacion-tareas/app-tareas">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Evaluaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Salir</a>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <input id="search" class="form-control mr-sm-2" type="text" placeholder="Search Task">
           <!-- <button type="submit" class="btn btn-outline-success"><img src="../iconos/lupa.png"></button>-->
        </form>
        <div class="dropdown nb-3">
            <a href="" class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuEnlace2"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <img src="../iconos/avatar.png" class="rounded-circle"></a>


            <div class="dropdown-menu" aria-labelledby="dropdownMenuEnlace2">
                <a class="dropdown-item" href="../app-usuario">Usuario</a>
                <a class="dropdown-item" href="/aplicacion-tareas/app-tareas">Agenda</a>
                <a class="dropdown-item" href="#">Información</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../logout.php">Cerrar Sesión</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md 3">

                <div class="card" style="margin-left:10em;margin-right:10em;">
                    <div id="ocultar" class="alert alert-dismissible alert-info">
                        <button type="text" class="close" data-dismiss="alert">&times;</button>
                        <h4 class="alert-heading" id="action-form"></h4>
                    </div>
                    <div class="card-body">
                        <form id="task-form">
                            <div>
                                <input type="hidden" id="taskId">
                            </div>
                            <div class="list-group" style="float:left; margin:5px;">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    Fecha Modificado</a>
                                <input type="text" style="text-align:center;" id="date" placeholder="Task Date"
                                    class="form-control" disabled required>
                            </div>
                            <div class="list-group" style="float:left; margin:5px;">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    Hora Modificado</a>
                                <input type="text" style="text-align:center;" id="hour" placeholder="Task Date"
                                    class="form-control" disabled required>
                            </div>
                            <div class="list-group" style="float:left; margin:5px;">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    Creado</a>
                                <input type="text" style="text-align:center;" id="autor" placeholder="Task Autor"
                                    class="form-control" disabled required>
                            </div>
                            <div class="list-group" style="float:left; margin:5px;">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    Titulo Evento</a>
                                <input type="text" style="text-align:center;" id="title" placeholder="Task Title"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <textarea id="description" cols="10" rows="10" class="form-control"
                                    placeholder="Task Description" required>
                            </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary 
                            btn-block text-center">Save</button>
                        </form>
                    </div>
                </div>
                <div class="jumbotron">
                    <div class="card my-4" id="task-result">
                        <div class="card-body">
                            <ul id="container"></ul>
                        </div>
                    </div>
                    <div id="open" class="alert alert-dismissible alert-info">Nuevo Evento</div>
                    <table class="table table-hover table-sm">
                        <thead id="cabecera">
                            <tr class="table-info">
                                <td>N°</td>
                                <td>Autor</td>
                                <td>Fecha</td>
                                <td>Hora</td>
                                <td>Titulo</td>
                                <td>Enviar</td>
                                <td>Editar</td>
                                <td>Eliminar</td>
                            </tr>
                        </thead>
                        <div class="container">
                            <tbody id="tasks"></tbody>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>