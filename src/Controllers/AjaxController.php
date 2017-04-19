<?php
namespace Project\Controllers;


class AjaxController
{
    public function updateMyCustomResult()
    {
//        $array = [
//            'slavi' => [
//                'name' => 123
//            ],
//            'niki' => [
//                'name' => 333
//            ]
//        ];
//        echo json_encode($array);

        echo $_POST['text_value'] + 1;
    }

    public function loadCities($country)
    {
        $array = [];
        switch ($country) {
            case 'Bulgaria': {
                $array = [
                    'Varna',
                    'Sofia'
                ];
                break;
            }
            case 'United Kingdom': {
                $array = [
                    'London',
                    'Birmingham'
                ];
            }
        }

        echo json_encode($array);
    }

    public function setLocation($location)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/geocode/json?address=' . rawurlencode($location));

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $json = curl_exec($curl);

        $array = json_decode($json);

        $lat = $array->results[0]->geometry->location->lat;
        $lng = $array->results[0]->geometry->location->lng;

        echo json_encode([
            'lat' => $lat,
            'lng' => $lng
        ]);

        curl_close($curl);
    }

}