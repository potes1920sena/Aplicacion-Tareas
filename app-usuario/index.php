<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../librerias/bootstrap.css">
    <link rel="stylesheet" href="../librerias/bootstrap.min.css">
    <link rel="stylesheet" href="../librerias/style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous">
    </script>
    <script src="../appu.js"></script>
    <title>Registry-User</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#"><img src="../iconos/logo1.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../app-usuario">Usuarios<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aplicacion-tareas/app-tareas">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Información</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Salir</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input id="search" class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <form>
    <div id="ocultar" class="alert alert-dismissible alert-info">
        <button type="text" class="close" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading">ACTUALIZAR DATOS</h4>
    </div>
    </form>
    <div class="jumbotron">
        <div class="row">
            <div class="col-md 5">
                <div class="card">
                    <div class="card-body">
                        <form id="task-form">
                            <input type="hidden" id="taskId">
                            <div class="form-group">
                                <input type="text" id="nit" placeholder="Registra Identidad" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="name" placeholder="Registra Nombres" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="surname" placeholder="Registra Apellidos" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="email" placeholder="Registra E-Mail" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="phone" placeholder="Registra Movil o Telefono"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
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
                    <table class="table table-hover table-sm">
                        <thead id="cabecera">
                            <tr class="table-info">
                                <td>Id</td>
                                <td>Nit</td>
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