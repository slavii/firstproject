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

    $('#submit').on('click', function (e) {
        e.preventDefault();
        var make = $('#make').val();
        var model = $('#model').val();
        var year = $('#year').val();
        var fuel = $('#fuel').val();
        var gears = $('#gears').val();
        var price = $('#price').val();
        $('#result').text('');

        $('.not-empty').addClass('hidden');

        var carData = {
            make: make,
            model: model,
            year: year,
            fuel: fuel,
            gears: gears,
            price: price
        };

        for (var key in carData) {
            isEmpty(carData[key]);
        }

        $.ajax({
            url: '/submitcar',
            method: 'POST',
            data: {
                carData: carData
            },
            success: function (response) {
                $('#result').removeClass('hidden');
                if (response == 'Yes') {
                    $('#result').text('Successfully!');
                }
                else {
                    $('#result').text('Not Successfully!');
                }
            }
        })
    })

});

function isEmpty(field) {
    if (field == "") {
        $('.not-empty').removeClass('hidden');
    }
}