$(document).ready(function () {
    $('#submit-btn').on('click', function (e) {
        e.preventDefault();
        var password = $('#password').val();
        $.ajax({
            url: '/registration',
            method: 'POST',
            data: {
                text_value: password
            },
            success: function () {
                if (!isValidPassword(password)) {
                    $('#err-password').removeClass('hidden');
                }
                else {
                    $('#err-password').addClass('hidden');
                }
            }
        });
    });
});

function isValidPassword(password) {
    //At least one digit (0-9);
    //At least one upper-case (A-Z);
    //At least one lower-case (a-z);
    //At least 6 characters;
    var pattern = new RegExp('^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$');
    return pattern.test(password);
}

function isValidEmail(email) {
    var pattern = new RegExp('^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}$');
    return pattern.test(email);
}