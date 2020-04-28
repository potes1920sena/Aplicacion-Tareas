<!DOCTYPE html>
<html lang="en">
    <?php
    include("../librerias/styles.php");
    ?>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="../img/logo2.png" alt="">
        <a href="#" class="navbar-brand">Registro Usuarios</a>
        <ul class="navbar-nav ml-auto">
        <div class="navbar navbar-expand-lg navbar-right bg-right">
            <a href="../registro-usuarios/" class="navbar-warning lm-auto">Usuarios</a>
            <a href="../tareas-pendientes/" class="navbar-warning lm-auto">Agenda</a>
            <a href="#" class="navbar-warning lm-auto">Soporte</a>
                <a href="#" class="navbar-warning lm-auto">Cerrar</a>
        </div>
            <form class="form-inline my-2 my-lg-0">
                <input type="search" id="search" class="form-control mr-sm-2" 
                placeholder="Search Your Users">
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
                        <form id="user-form">
                            <div class="form-group">
                                <input type="text" id="nit" 
                                placeholder="Registra Identidad" 
                                class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="name" 
                                placeholder="Registra Nombres" 
                                class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="surname" 
                                placeholder="Registra Apellidos" 
                                class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="email" 
                                placeholder="Registra E-Mail" 
                                class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="phone" 
                                placeholder="Registra Movil o Telefono" 
                                class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="user" 
                                placeholder="Tipo de Usuario" 
                                class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary 
                            btn-block text-center">
                                Save User</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card my-4" id="user-result">
                        <div class="card-body">
                            <ul id="container"></ul>
                        </div>
                    </div>
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <td>Nit</td>
                                <td>Nombres</td>
                                <td>Apellidos</td>
                                <td>Correo</td>
                                <td>Telefonos</td>
                                <td>Usuario</td>
                                <td colspan=2>Modificadores</td>
                            </tr>
                        </thead>
                        <tbody id="users"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>