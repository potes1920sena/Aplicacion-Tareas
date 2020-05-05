$(document).ready(function () {
    let edit = false;
    fetchTasks();
    $("#task-result").hide();
    $("#task-form").hide();
    $("#search").keyup(function (e) {
        if ($("search").val()) {
            let search = $("#search").val();
            $.ajax({
                url: "user-search.php",
                type: "POST",
                data: { search },
                success: function (response) {
                    let tasks = JSON.parse(response);
                    let template = "";
                    tasks.forEach((task) => {
                        template += `<li>
                        ${task.name}
                        ${task.surname}
                        ${task.id}
                    </li>`;
                    });
                    $("#container").html(template);
                    $("#task-result").show();
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
                                <button class="user-mail btn">
                                <img src="../iconos/mail.png">
                            </button>
                            </td>
                            <td>
                            <button class="user-item btn ">
                            <img src="../iconos/editar.png">
                            </button>
                            </td>
                            <td>
                                <button class="user-delete btn ">
                                <img src="../iconos/remov.png">
                                </button>
                                </td>
                            </tr>     
                            `;
                });
                $("#tasks").html(template);
            },
        });
    }

    $(document).on("click", "#ocultar", function () {
        $("#task-form").hide();
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
            $.post("user-masivos.php", { id }, function (response) { });
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
            edit = true;
            $("#task-form").show();
        });
    });
});
