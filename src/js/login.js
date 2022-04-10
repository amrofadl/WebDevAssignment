$('.form').on('submit', function() {
    var email = $('input[name=email');
    var password = $('input[name=password');

    if (email.val() == "" || password.val() == "") {
        return false;
    }

    $.ajax({
        url: 'php/login.php',
        method: 'POST',
        data: {email:email.val(), password:password.val()},
        success: function(data) {
            if (data == "student") {
                window.location.replace("Student_Dashboard.php");

            } else if (data == "supervisor") {
                window.location.replace("Supervisor_Dashboard.php");
                
            } else {
                
                // fail to log in
            }
        }
    })

    return false;
});