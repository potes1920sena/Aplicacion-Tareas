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
    <title>Search-Email</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="../img/logo2.png" alt="">
        <a href="#" class="navbar-brand">Tareas Pendientes</a>
        <ul class="navbar-nav ml-auto">
            <div class="navbar navbar-expand-lg navbar-right bg-right"> 
                <a href="../app-usuario" class="navbar-warning lm-auto">Usuarios</a>
                <a href="/aplicacion-tareas/app-tareas" class="navbar-warning lm-auto">Agenda</a>
                <a href="../logout.php" class="navbar-warning lm-auto">Cerrar</a>
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
                                <td>Name</td>
                                <td>Description</td>
                                <td>Remove</td>
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