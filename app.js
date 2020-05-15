$(document).ready(function () {
  $("#task-form").submit(function (e) {
    const postData = {
      nit: $("#nit").val(),
      name: $("#name").val(),
      surname: $("#surname").val(),
      email: $("#email").val(),
      phone: $("#phone").val(),
      password: $("#password").val(),
    };

    $.post("app-usuario/user-add.php", postData, function (response) {
      $("#mensaje").html(response);
      $("#task-form").trigger("reset");
    });

   /* e.preventDefault();
    $.ajax({
      url: "validar-login.php",
      method: "POST",
      data: $(this).serialize(),
      beforeSend: function () {
        $("#save").attr("disabled", "disabled");
        $("#process").css("display", "block");
      },
      success: function (data) {
        var percentage = 0;

        var timer = setInterval(function () {
          percentage = percentage + 20;
          progress_bar_process(percentage, timer);
        }, 1000);
      },
    });

    function progress_bar_process(percentage, timer) {
      $(".progress-var").css("width", percentage + "%");
      if (percentage > 100) {
        clearInterval(timer);
        $("#task-form")[0].reset();
        $("#process").css("display", "none");
        $(".progress-bar").css("width", "0%");
        $("#save").attr("disabled", false);
        $("#success_message").html("<div class='alert alert-success'>Data Saved</div>");
        setTimeout(function () {
          $("#success_message").html("");
        }, 5000);
      }
    }*/
  }); 
});
