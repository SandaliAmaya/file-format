$("#login").on("click", function() {
   login();
});

$("#signup").on("click", function() {
    register();
});

function login(){
    var data = {
        'email': $("#login-email").val(),
        'password': $("#login-password").val(),
    };

    ajaxRequest("POST", "/api/auth/login", data, function (response) {
        if (response.status) {
            var cookie = response.data.authorization.token.access_token;
            $.cookie('token', cookie);
            window.location.href = "/create-file-format";
        }
    });
}

function register(){
    var data = {
        "first_name": $("#reg-first-name").val(),
        "last_name": $("#reg-last-name").val(),
        "email": $("#reg-email").val(),
        "password": $("#reg-password").val()
    };

    ajaxRequest("POST", "/api/auth/register", data, function (response) {
        if (response.status) {
            window.location.href = "/login";
        }
    });
}
