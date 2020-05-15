$(document).ready(function () {
  let edit = false;
  let titles = "LISTA DE EVENTOS";
  $("#action-form").html(titles);
  fetchTasks();
  $("#task-result").hide();
  $("#task-form").hide();
  $("#search").keyup(function (e) {
    if ($("#search").val()) {
      let search = $("#search").val();
      $.ajax({
        url: "task-search.php",
        type: "POST",
        data: { search },
        success: function (response) {
          let tasks = JSON.parse(response);
          let template = "";
          tasks.forEach((task) => {
            template += `<li>
                     <tr><td>N°:</td><td>${task.id}</td><td> -/- </td></tr>
                     <tr><td>Autor:</td><td>${task.autor}</td><td> -/- </td></tr>
                     <tr><td>Titulo:<td><td>${task.title}</td><td> -/- </td></tr>
                     <tr><td>Fecha:<td><td>${task.date}</td><td></td></tr>
                    </li>`;
          });

          $("#container").html(template);
          $("#task-result").show();
          $("#task-form").hide();
          e.preventDefault();
        },
      });
    }
  });

  $("#task-form").submit(function (e) {
    const postData = {
      autor: $("#autor").val(),
      date: $("#date").val(),
      hour: $("#hour").val(),
      title: $("#title").val(),
      description: $("#description").val(),
      id: $("#taskId").val(),
    };

    let url = edit === false ? "task-add.php" : "task-edit.php"; // valor ternario

    $.post(url, postData, function (response) {
      $("#task-form").hide();
      $("#mensaje").html(response);
      console.log(response);
      fetchTasks();
      $("#task-form").trigger("reset"); // resetea el formulario.
    });

    e.preventDefault(); // evita que mi pagina se actualize.
  });
  // esta lista se ejecuta iniciando el programa.

  function fetchTasks() {
    $.ajax({
      url: "task-list.php",
      type: "GET",
      success: function (response) {
        let tasks = JSON.parse(response);
        let template = "";
        tasks.forEach((task) => {
          template += `
                <tr taskId="${task.id}">
                    <td>${task.id}</td>
                    <td>${task.autor}</td>
                    <td>${task.date}</td>
                    <td>${task.hour}</td>
                    <td>${task.title}</td>
                    <td>
                    <a href="#" class="task-mail btn">
                    <img src="../iconos/gmail.png">
                    </a>
                    </td>
                    <td>
                    <a href="#" class="task-item btn">
                    <img src="../iconos/editado.png">
                    </a>
                    </td>
                    <td>
                    <a href="#" class="task-delete btn">
                    <img src="../iconos/remove.png">
                    </a>
                    </td>
                </tr>     
                `;
        });
        $("#tasks").html(template);
      },
    });
  }

  function mostrarHora(){

    momentoActual= new Date();
    hora = momentoActual.getHours();
    minuto = momentoActual.getMinutes();
    segundo = momentoActual.getSeconds();
    
    horaActual = hora  + " : " + minuto  + " : " +  segundo ;
    
    $("#hour").val(horaActual);
    }

  function mostrarFecha() {

    var now = new Date();

    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);

    var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

    $("#date").val(today);
}

  $(document).on("click", "#ocultar", function () {
    $("#task-form").hide();
    edit="";
  });

  $(document).on("click", "#open", function () {
    titles = "NUEVO EVENTO";
    $("#action-form").html(titles);
    mostrarHora();
    mostrarFecha();
    $("#task-form").show();
    edit = false;
  });

  $(document).on("click", ".task-delete", function () {
    if (confirm("¿Are you sure you want to delete it?")) {
      let element = $(this)[0].parentElement.parentElement;
      let id = $(element).attr("taskId");
      $.post("task-delete.php", { id }, function (response) {
        fetchTasks();
      });
    }
  });

  $(document).on("click", ".task-mail", function () {
    if (confirm("¿Are you sure you want to send emails to all users?")) {
      let element = $(this)[0].parentElement.parentElement;
      console.log(element);
      let id = $(element).attr("taskId");
      console.log(id);
      $.post("user-masivos.php", { id }, function (response) {});
    }
  });

  $(document).on("click", ".task-item", function () {
    let element = $(this)[0].parentElement.parentElement;
    let id = $(element).attr("taskId");
    $.post("task-single.php", { id }, function (response) {
      const task = JSON.parse(response);
      $("#autor").val(task.autor);
      $("#date").val(task.date);
      $("#hour").val(task.hour);
      $("#title").val(task.title);
      $("#description").val(task.description);
      $("#taskId").val(task.id);
      edit = true;
      titles = "ACTUALIZAR DATOS";
      mostrarHora();
      mostrarFecha();
      $("#action-form").html(titles);
      $("#task-result").hide();
      $("#task-form").show();
    });
  });
});
