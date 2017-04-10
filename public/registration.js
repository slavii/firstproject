$(document).ready(function () {
    $('#submit-btn').on('click', function (e) {
        e.preventDefault();
        var login = $('#login').text();
        $.ajax({
            url: '/registration',
            method: 'POST',
            data: {
                text_value: login
            },
            success: function () {
                if (login.length < 3 || isValidLoginName(login)) {
                    alert('TEST');
                    $("#err-login").removeClass('hidden');
                }
            }

            //$('#ajax-text').text(response);
            // var array = JSON.parse(response);
            // console.log(array);
        });
    });
});

function isValidLoginName(loginName) {
    var pattern = new RegExp('/^[a-z0-9_-]{3,16}$/');
    return pattern.test(loginName);
}

function isValidPassword(password) {
    var pattern = new RegExp('/^[a-z0-9_-]{6,18}$/');
    return pattern.test(password);
}

function isValidEmail(email) {
    var pattern = new RegExp('^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$');
    return pattern.test(email);
}

