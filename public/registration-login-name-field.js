$(document).ready(function () {
    $('#submit-btn').on('click', function (e) {
        e.preventDefault();
        var login = $('#login').val();
        $.ajax({
            url: '/registration',
            method: 'POST',
            data: {
                text_value: login
            },
            success: function () {
                if (!isValidLoginName(login)) {
                    $('#err-login').removeClass('hidden');
                }
                else {
                    $('#err-login').addClass('hidden');
                }
            }
        });
    });
});

function isValidLoginName(loginName) {
    var pattern = new RegExp('^[a-zA-Z0-9]{3,15}$');
    return pattern.test(loginName);
}