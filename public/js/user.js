// fill profile information
$("#open_profile").click(function (){
    $.ajax({
        url: "/user/get",
        type: "GET",
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            var user = JSON.parse(data);
            $("#username").val(user.name);
            $('#user_surname').val(user.surname);
            $('#user_email').val(user.email);
        },
        error: function (msg) {
            alert('Ajax error');
        }
    });
});

//update profile information
$("#user_save").click(function (){

    var username = $("#username").val();
    var surname = $('#user_surname').val();
    var email = $('#user_email').val();
    $.ajax({
        url: "/user/edit",
        type: "POST",
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            username:username,
            surname:surname,
            email:email
        },
        success: function (data) {
            var user = JSON.parse(data);
            $("#username").val(user.name);
            $('#user_surname').val(user.surname);
            $('#user_email').val(user.email);
            $("#message_profile").text('Updated!');
        },
        error: function (msg) {
            $("#message_profile").text('ajax error!');
        }
    });
});

