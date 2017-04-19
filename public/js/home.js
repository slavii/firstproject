$(document).ready(function () {
    $('#ajax-test').on('click', function () {
        var text = $('#ajax-text').text();
        $.ajax({
            url: '/updateMyCustomResult',
            method: 'POST',
            data: {
                text_value: text
            },
            success: function (response) {
                $('#ajax-text').text(response);
                // var array = JSON.parse(response);
                // console.log(array);
            }
        });
    });
});
