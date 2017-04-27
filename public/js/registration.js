$(document).ready(function () {
    $('#cancel-btn').on('click', function () {
        $('#err-login').addClass('hidden');
        $('#err-password').addClass('hidden');
        $('#err-repassword').addClass('hidden');
        $('#err-email').addClass('hidden');
        $('#result').text('');

    });

    $('#submit-btn').on('click', function (e) {
        e.preventDefault();
        var login = $('#login').val();
        var password = $('#password').val();
        var repassword = $('#repassword').val();
        var email = $('#email').val();

        $('#err-login').addClass('hidden');
        $('#err-password').addClass('hidden');
        $('#err-repassword').addClass('hidden');

        if (!isValidLoginName(login)) {
            $('#err-login').removeClass('hidden');
        }
        if (!isValidPassword(password)) {
            $('#err-password').removeClass('hidden');
        }
        if (!isValidRePassword(password, repassword)) {
            $('#err-repassword').removeClass('hidden');
        }

        var personData = {
            login: login,
            password: password,
            repassword: repassword,
            email: email
        };

        $.ajax({
            url: '/submitregistration',
            method: 'POST',
            data: {
                personData: personData
            },
            success: function (response) {
                switch(response)
                {
                    case 'Yes': {
                        $('#result').text('Successfully!');
                        break;
                    }
                    case 'No': {
                        $('#result').text('There is already user with that name!');
                        break;
                    }
                    default: {
                        $('#result').text('Not Successfully!');
                    }
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

function isValidEmail(email) {
    var pattern = new RegExp('^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$');
    return pattern.test(email);
}