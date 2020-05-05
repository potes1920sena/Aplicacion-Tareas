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
    <script src="appu.js"></script>
    <title>Registry-User</title>
</head>
<body>
<nav class="cabecera navbar navbar-expand-lg navbar-dark bg-dark" style="position: absolute">
        <img src="../img/logo2.png" alt="">
        <a href="#" class="navbar-brand">Registro Usuarios</a><br>
            <ul class="navbar-nav ml-auto">
        <div class=" navbar navbar-expand-lg lm-auto">
            <a href="/aplicacion-tareas/app-usuario">Usuarios </a>
            <a href="../app-tareas" > Agenda </a>
            <a href="../logout.php"> Cerrar </a>
        </div>
        <form class="form-inline my-2 my-lg-0">
                <input type="search" id="search" class="form-control mr-sm-2" 
                placeholder="Search Your User">
                <button class="btn btn-success my-2 my-sm-0" type="submit">
                    Search
                </button><br>
     </form>   
        </ul>  
       
    </nav>
    <div class="container" id="contenedor">
        <div class="row">
            <div class="col-md 5">
                <div class="card" id="registro">
                    <div class="card-body">
                        <form id="task-form">
                            <div class="cabecera">
                            <a href="#" id="ocultar">X</a>
                            <h3>Registro</h3></div>
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
                                <input type="password" id="password" 
                                placeholder="Ingresa un Password" 
                                class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary 
                            btn-block text-center">Save</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                <div class="card my-4" id="task-result">
                    <div class="card-body">
                       <ul id="container"></ul>
                     </div>
                 </div>
                   
                    <table id="lista1" class="table table-bordered table-sm">
                        <thead id="cabecera">
                            <tr>
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
                        <tbody id="tasks"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>