$(document).ready(function() {

    let edit = false;
    fetchRegistry();
    $('#user-result').hide();

    $('#search').keyup(function(e) {
        if($('search').val()){
            let search = $('#search').val();
            $.ajax({
                url: 'user-search.php',
                type: 'POST',
                data: {search},
                success: function(response){
                    let users = JSON.parse(response);
                    let template = '';
                    users.forEach(user => {
                        template +=   `<li>
                        ${user.nit}
                    </li>`                     
                    });
                    $('#container').html(template);
                    $('#user-result').show();
                }
            });
        }
    });

    $('#user-form').submit(function(e){
        const postData = {
            name : $('#name').val(),
            surname : $('#surname').val(),
            email : $('#email').val(),
            phone : $('#phone').val(),
            user : $('#user').val(),
            nit : $('#nit').val()
        };

        let url = edit === false ? 'user-add.php' : 'user-edit.php';

        $.post(url,postData, function(response){
            console.log(response);
            fetchRegistry();

            $('#user-form'). trigger('reset');
        });

        e.preventDefault();
    });

    function fetchRegistry(){
        $.ajax({
            url : 'user-list.php',
            type : 'GET',
            success: function(response){
                let users = JSON.parse(response);
                let template="";
                users.forEach(user =>{
                    template += `
                    <tr nit="${user.nit}">
                        <td><a href="#" class="user-item">${user.nit}</a></td>
                        <td>${user.name}</td>
                        <td>${user.surname}</td>
                        <td>${user.email}</td>
                        <td>${user.phone}</td>
                        <td>${user.user}</td>
                        <td>
                        <button class="user-item btn btn-warning">
                        <img src="../iconos/pencil.png">
                      </button>
                      </td>
                      <td>
                        <button class="user-delete btn btn-danger">
                        <img src="../iconos/remove.png">
                        </button>
                        </td>
                    </tr>     
                    `
                });
                $('#users').html(template);
            }
        });
    }
        $(document).on('click', '.user-delete', function(){
            if(confirm('¿Are you sure you want to delete it?')){
                let element = $(this)[0].parentElement.parentElement;
                let nit = $(element).attr('nit');
                $.post('user-delete.php', {nit}, function(response){
                    fetchRegistry();
                });
            }
        });

        $(document).on('click', '.user-item', function(){
            let element = $(this)[0].parentElement.parentElement;
            let users = $(element).attr('nit');
            $.post('user-single.php', {users}, function(response)  {
            const user = JSON.parse(response);
            $('#name').val(user.name);
            $('#surname').val(user.surname);
            $('#email').val(user.email);
            $('#phone').val(user.phone);
            $('#user').val(user.user);
            $('#nit').val(user.nit);
            edit = true;
        });
    });
});