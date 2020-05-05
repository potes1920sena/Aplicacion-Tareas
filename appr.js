$(document).ready(function() {
   
     $('#task-result').hide();
 
     $('#task-form').submit(function(e){
         const postData = {
             email : $('#email').val(),
             password : $('#password').val(),
         };
 
         $.post(signup.php, postData, function (response) {
             console.log(response);
         $('#task-form'). trigger('reset'); // resetea el formulario.
         });
         
         e.preventDefault(); //evita que mi pagina se actualize.
     });

 });