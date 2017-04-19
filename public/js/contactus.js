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

                $("#city").html('');
                $("#city").append("<option>" + 'Choose city' + "</option>");

                var array = JSON.parse(response);

                if (array.length == 0) {
                    $('#city').prop("disabled", true);
                    return 0;
                }

                $('#city').prop("disabled", false);

                var appendData = [];
                for (var i = 0; i < array.length; i++) {
                    appendData += "<option value = '" + array[i] + "', class = 'newitem'>" + array[i] + " </option>";
                }
                $("#city").append(appendData);
            }
        });
    });

    $('#city').on('change', function () {
        var location = $('#city').val() + "," + $('#country').val();
        $.ajax({
            url: '/updateLocation',
            method: 'POST',
            data: {
                location: location
            },
            success: function (response) {

                var array = JSON.parse(response);
                var lat = array['lat'];
                var lng = array['lng'];

                initMap(lat, lng);
            }
        });
    });

});

function initMap(lat, lng) {

    lat = lat || 43.2140504;
    lng = lng || 27.9147333;

    var uluru = {lat: lat, lng: lng};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}