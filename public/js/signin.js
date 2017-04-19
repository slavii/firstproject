$(document).ready(function () {
    $('#cancel-btn').on('click', function () {
        $('#err-login').addClass('hidden');
        $('#err-password').addClass('hidden');
        $('#err-repassword').addClass('hidden');
        $('#err-first-name').addClass('hidden');
        $('#err-last-name').addClass('hidden');
        $('#err-email').addClass('hidden');
        $('#result').text('');

    });

    $('#submit-btn').on('click', function (e) {
        e.preventDefault();
        var login = $('#login').val();
        var password = $('#password').val();
        var repassword = $('#repassword').val();

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

        $.ajax({
            url: '/submitregistration',
            method: 'POST',
            data: {
                login: login,
                password: password,
                repassword: repassword,
            },
            success: function (response) {
                if (response != 'Yes') {
                    $('#result').text('There is already user with that name!');
                    return 0;
                }
                $('#result').text('Successfully!');
            }
        });
    });
});