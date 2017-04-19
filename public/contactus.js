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

                initMap();

                //$('#result').text(array.length);
                // console.log(array);
            }
        });
    });
});

function initMap() {
    var uluru = {lat: -25.363, lng: 131.044};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}
