$('.form').on('submit', function() {
    var username = $('input[name=username');
    var email = $('input[name=email');
    var password = $('input[name=password');

    if (username.val() == "" || email.val() == "" || password.val() == "") {
        return false;
    }

    $.ajax({
        url: 'php/register.php',
        method: 'POST',
        data: {username:username.val(), email:email.val(), password:password.val()},
        success: function(data) {
            if (data == "Existed") {
                window.alert("Account already exists!");

            } else if (data == "Registered") {
                window.alert("Registered!");
                window.location.replace("login.php");

            } else if (data == "Empty") {
                window.alert("Field empty!");

            }
        }
    })

    return false;
});