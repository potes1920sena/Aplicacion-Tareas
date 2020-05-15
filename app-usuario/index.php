<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include("../librerias/estilos2.php");
?>
    <script src="../appu.js"></script>
    <title>Registry-User</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#"><img src="../iconos/logo1.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="nav nav-tabs">
                <li class="nav-item active">
                    <a class="nav-link" href="../app-usuario">Usuarios<span class="sr-only">(current)</span></a>
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="true">Dropdown</a>
                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="salir" href="../logout.php">Salir</a>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <input id="search_id" class="form-control mr-sm-2" type="text" placeholder="Search Identification">
            <!--<button type="submit" class="btn btn-outline-success"><img src="../iconos/lupa.png"></button>-->
        </form>
        <!-- <form class="form-inline my-2 my-lg-0" style="float:right;">
                            <input id="search_name" class="form-control mr-sm-2" type="text" placeholder="User Name">
                            <button type="submit" class="btn btn-outline-success"><img
                                    src="../iconos/lupa.png"></button>-->
        </form>
        <div class="dropdown nb-3">
            <a href="#" class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuEnlace2"
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
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md 3">

                <div class="card" style="margin-left:10em;margin-right:10em;">
                    <div id="ocultar" class="alert alert-dismissible alert-info">
                        <button type="text" class="close" data-dismiss="alert">&times;</button>
                        <h4 class="alert-heading" id=action-form></h4>
                    </div>
                    <div class="card-body">
                        <form id="task-form">
                            <input type="hidden" id="taskId">
                            <div class="list-group" style="float:left; margin:5px;">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    Id</a>
                                <input type="text" id="nit" placeholder="Registra Identidad" class="form-control"
                                    required>
                            </div>
                            <div class="list-group" style="float:left; margin:5px;">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    Name</a>
                                <input type="text" id="name" placeholder="Registra Nombres" class="form-control"
                                    required>
                            </div>
                            <div class="list-group" style="float:left; margin:5px;">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    Surname</a>
                                <input type="text" id="surname" placeholder="Registra Apellidos" class="form-control"
                                    required>
                            </div>
                            <div class="list-group" style="float:left; margin:5px;">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    E-Mail</a>
                                <input type="text" id="email" placeholder="Registra E-Mail" class="form-control"
                                    required>
                            </div>
                            <div class="list-group" style="float:left; margin:5px;">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    Phone</a>
                                <input type="text" id="phone" placeholder="Registra Movil o Telefono"
                                    class="form-control" required>
                            </div>
                            <div class="list-group" style="float:left; margin:5px;">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    Password</a>
                                <input type="password" id="password" placeholder="Ingresa un Password"
                                    class="form-control" required autocomplete>
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
                    <div id="open" class="alert alert-dismissible alert-info">Nuevo Usuario</div>
                    <table class="table table-hover table-sm">
                        <thead id="cabecera">
                            <tr class="table-info">
                                <td>Id</td>
                                <td>Nombres</td>
                                <td>Apellidos</td>
                                <td>Correo</td>
                                <td>Telefonos</td>
                                <td>Correo</td>
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