$(document).ready(function () {
    $('#cancel-btn').on('click', function () {
        $('#err-login').addClass('hidden');
        $('#err-password').addClass('hidden');
        $('#err-repassword').addClass('hidden');
        $('#err-first-name').addClass('hidden');
        $('#err-last-name').addClass('hidden');
        $('#err-email').addClass('hidden');

    });

    $('#submit-btn').on('click', function (e) {
        e.preventDefault();
        var login = $('#login').val();
        var password = $('#password').val();
        var repassword = $('#repassword').val();
        // var firstname = $('#first-name').val();
        // var lastname = $('#last-name').val();
        // var email = $('#email').val();
        // var phone = $('#phone').val();
        // var url = $('#url').val();

        if (!isValidLoginName(login)) {
            $('#err-login').removeClass('hidden');
        }
        else {
            $('#err-login').addClass('hidden');
        }
        if (!isValidPassword(password)) {
            $('#err-password').removeClass('hidden');
        }
        else {
            $('#err-password').addClass('hidden');
        }
        if (!isValidRePassword(password, repassword)) {
            $('#err-repassword').removeClass('hidden');
        }
        else {
            $('#err-repassword').addClass('hidden');
        }
        // if (!isValidFirstName(firstname)) {
        //     $('#err-first-name').removeClass('hidden');
        // }
        // if (!isValidFirstName(lastname)) {
        //     $('#err-last-name').removeClass('hidden');
        // }
        // if (!isValidEmail(email)) {
        //     $('#err-email').removeClass('hidden');
        // }
        // if (!isValidPhone(phone)) {
        //     $('#err-phone').removeClass('hidden');
        // }
        // if (!isValidEmail(email)) {
        //     $('#err-url').removeClass('hidden');
        // }

        // $('#err-first-name').addClass('hidden');
        // $('#err-last-name').addClass('hidden');
        // $('#err-email').addClass('hidden');

        $.ajax({
            url: '/submitregistration',
            method: 'POST',
            data: {
                login: login,
                password: password,
                repassword: repassword,
            },
            success: function (response) {
                if(response != 'Yes') {
                    console.log("There is already user with that name!");
                    return 0;
                }
            }
        });
    });
});

function isValidLoginName(loginName) {
    var pattern = new RegExp('^[a-zA-Z0-9]{3,15}$');
    return pattern.test(loginName);
}

function isValidPassword(password) {
    //At least one digit (0-9);
    //At least one upper-case (A-Z);
    //At least one lower-case (a-z);
    //At least 6 characters;
    var pattern = new RegExp('^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$');
    return pattern.test(password);
}

function isValidRePassword(password, repassword) {
    return (repassword == password) ? 1 : 0;
}

function isValidFirstName(firstname) {
    var pattern = new RegExp('^[a-zA-Z]{3,15}$');
    return pattern.test(firstname);
}

function isValidEmail(email) {
    var pattern = new RegExp('^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$');
    return pattern.test(email);
}

function isValidPhone(phone) {
    var pattern = new RegExp('^[0-9]');
    return pattern.test(phone);
}
function isValidURL(url) {
    var pattern = new RegExp('(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9]\.[^\s]{2,})');
    return pattern.test(url);
}