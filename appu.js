$(document).ready(function () {
  let edit = false;
  let titles = "LISTA DE USUARIOS";
  $("#action-form").html(titles);
  fetchTasks();
  $("#task-result").hide();
  $("#task-form").hide();
  $("#search_id").keyup(function (e) {
    if ($("#search_id").val()) {
      let search = $("#search_id").val();
      $.ajax({
        url: "user-search.php",
        type: "POST",
        data: { search },
        success: function (response) {
          let tasks = JSON.parse(response);
          let template = "";
          tasks.forEach((task) => {
            template += ` <li> 
                            <tr><td>N°:</td><td>${task.id}</td><td> -/- </td></tr>
                            <tr><td>Nit:</td><td>${task.nit}</td><td> -/- </td></tr>
                            <tr><td>Nombre:<td><td>${task.name} ${task.surname}<td> -/- <td></td><tr>
                            <tr><td>Telefono:<td><td>${task.phone}<td><td> -/- </td><tr>
                            <tr><td>E-Mail:<td><td>${task.email}<td><td></td><tr>     
                        </li>`;
          });
          $("#container").html(template);
          $("#task-result").show();
          $("#task-form").hide();
        },
      });
    }
  });
  $("#search_name").keyup(function (e) {
    if ($("#search_name").val()) {
      let search = $("#search_name").val();
      $.ajax({
        url: "nit-search.php",
        type: "POST",
        data: { search },
        success: function (response) {
          let tasks = JSON.parse(response);
          let template = "";
          tasks.forEach((task) => {
               template += ` <li> 
                        <tr><td>N°:</td><td>${task.id}</td><td> -/- </td></tr>
                        <tr><td>Nit:</td><td>${task.nit}</td><td> -/- </td></tr>
                        <tr><td>Nombre:<td><td>${task.name} ${task.surname}<td> -/- <td></td><tr>
                        <tr><td>Telefono:<td><td>${task.phone}<td><td> -/- </td><tr>
                        <tr><td>E-Mail:<td><td>${task.email}<td><td></td><tr>    
                        </li>`;
          });
          $("#container").html(template);
          $("#task-result").show();
          $("#task-form").hide();
        },
      });
    }
  });

  $("#task-form").submit(function (e) {
    const postData = {
      nit: $("#nit").val(),
      name: $("#name").val(),
      surname: $("#surname").val(),
      email: $("#email").val(),
      phone: $("#phone").val(),
      password: $("#password").val(),
      id: $("#taskId").val(),
    };

    let url = edit === false ? "user-add.php" : "user-edit.php";

    $.post(url, postData, function (response) {
      $("#task-form").hide();
      $("#mensaje").html(response);
      fetchTasks();
      $("#task-form").trigger("reset");
    });

    e.preventDefault();
  });

  function fetchTasks() {
    $.ajax({
      url: "user-list.php",
      type: "GET",
      success: function (response) {
        let tasks = JSON.parse(response);
        let template = "";
        tasks.forEach((task) => {
          template += `
                            <tr taskId="${task.id}">
                                <td>${task.id}</td>
                                <td>${task.nit}</td>
                                <td>${task.name}</td>
                                <td>${task.surname}</td>
                                <td>${task.email}</td>
                                <td>${task.phone}</td>
                                <td>
                                <a href="#" class="user-mail btn">
                                <img src="../iconos/gmail.png">
                            </a>
                            </td>
                            <td>
                            <a href="#" class="user-item btn">
                            <img src="../iconos/editado.png">
                            </a>
                            </td>
                            <td>
                                <a href="#" class="user-delete btn ">
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
    hora = momentoActual.getHours(00);
    minuto = momentoActual.getMinutes(00);
    segundo = momentoActual.getSeconds(00);
    
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

  $(document).on("click", "#ocultar", function () {
    $("#task-form").hide();
    edit="";
  });
  $(document).on("click", "#open", function () {
    titles = "NUEVO USUARIO";
    $("#action-form").html(titles);
    mostrarHora();
    mostrarFecha();
    $("#task-form").show();
    edit = false;
  });

  $(document).on("click", ".user-delete", function () {
    if (confirm("¿Are you sure you want to delete it?")) {
      let element = $(this)[0].parentElement.parentElement;
      let id = $(element).attr("taskId");
      $.post("user-delete.php", { id }, function (response) {
        fetchTasks();
      });
    }
  });

  $(document).on("click", ".user-mail", function () {
    if (confirm("¿Are you sure you want to send emails to all users?")) {
      let element = $(this)[0].parentElement.parentElement;
      console.log(element);
      let id = $(element).attr("taskId");
      console.log(id);
      $.post("user-masivos.php", { id }, function (response) {});
    }
  });

  $(document).on("click", ".user-item", function () {
    let element = $(this)[0].parentElement.parentElement;
    let id = $(element).attr("taskId");
    $.post("user-single.php", { id }, function (response) {
      const task = JSON.parse(response);
      $("#nit").val(task.nit);
      $("#name").val(task.name);
      $("#surname").val(task.surname);
      $("#email").val(task.email);
      $("#phone").val(task.phone);
      $("#password").val(task.password);
      $("#taskId").val(task.id);
      titles = "ACTUALIZAR DATOS";
      $("#action-form").html(titles);
      edit = true;
      $("#action-form").html(titles);
      $("#task-result").hide();
      $("#task-form").show();
    });
  });
});
