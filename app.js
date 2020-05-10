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

    e.preventDefault();
    /* });

     $(document).ready(function() {

        $('#task-form').on('submit', function(event) {
            event.preventDefault();
            var count_error = 0;
    
            if ($('#nit').val() == '') 
            {
                $('#nit_error').text('Se requiere Identificación');
                count_error++;
            } 
            else 
            {
                $('#nit_error').text('');
            }

            if ($('#name').val() == '') 
            {
                $('#name_error').text('Se requiere Nombres');
                count_error++;
            } 
            else 
            {
                $('#name_error').text('');
            }

            if ($('#surname').val() == '') 
            {
                $('#surname_error').text('Se requiere Apellidos');
                count_error++;
            } 
            else 
            {
                $('#surname_error').text('');
            }

            if ($('#email').val() == '') 
            {
                $('#email_error').text('Se requiere E-Mail');
                count_error++;
            } 
            else 
            {
                $('#email_error').text('');
            }

            if ($('#phone').val() == '') 
            {
                $('#phone_error').text('Se requiere N° de Telefono');
                count_error++;
            } 
            else 
            {
                $('#phone_error').text('');
            }
    

            if ($('#password').val() == '') 
            {
                $('#password_error').text('Se requiere la Clave');
                count_error++;
    
            } else {
                $('#password_error').text('');
            }
    
            if (count_error == 0) {
                $.ajax({
                    url: "process.php",
                    method: "POST",
                    data:$(this).serialize(),
                    beforeSend: function() {
                        $('#save').attr('disabled', 'disabled');
                        $('#process').css('display', 'block');
                    },
                    success:function(data) 
                    {
                        var percentage = 0;
                        
                        var timer = setInterval(function() {
                            percentage = percentage + 20;
                            progress_bar_process(percentage, timer);
                        }, 1000);
                    }
                });
    
            } else {
                return false;
            }
        }); */
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
        $("#success_message").html(
          "<div class='alert alert-success'>Data Saved</div>"
        );
        setTimeout(function () {
          $("#success_message").html("");
        }, 5000);
      }
    }
  });
});
