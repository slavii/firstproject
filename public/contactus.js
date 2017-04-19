$(document).ready(function () {
    $('#country').on('change', function () {
        var country = $('#country').val();
        $.ajax({
            url: '/updateCities',
            method: 'POST',
            data: {
                country: country
            },
            success: function (response) {

                //$("#city").find('option').remove();

                $("#city").html(''); //Chetoh, che .html() raboti po-byrzo ot .empty() ili .remove()
                $("#city").append("<option>" + 'Choose city' + "</option>");

                var array = JSON.parse(response);

                if (array.length == 0) {
                    $('#city').prop("disabled", true);
                    return 0;
                }

                $('#city').prop("disabled", false);

                var appenddata = [];
                for (var i = 0; i < array.length; i++) {
                    appenddata += "<option value = '" + array[i] + " ', class = 'newitem'>" + array[i] + " </option>";
                }
                $("#city").append(appenddata);

                //$('#result').text(array.length);
                // console.log(array);
            }
        });
    });
});