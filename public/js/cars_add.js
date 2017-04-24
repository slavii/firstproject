$(document).ready(function () {
    $('#make').on('change', function () {
        var make = $('#make').val();
        $.ajax({
            url: '/updateModels',
            method: 'POST',
            data: {
                make: make
            },
            success: function (response) {

                $("#model").html('');
                $("#model").append("<option>" + 'Model' + "</option>");

                var array = JSON.parse(response);

                if (array.length == 0) {
                    $('#model').prop("disabled", true);
                    return 0;
                }

                $('#model').prop("disabled", false);

                var appendData = [];
                for (var i = 0; i < array.length; i++) {
                    appendData += "<option value = '" + array[i] + "', class = 'newitem'>" + array[i] + " </option>";
                }
                $("#model").append(appendData);
            }
        });
    });

    $('#submit').on('click', function () {

    })

});