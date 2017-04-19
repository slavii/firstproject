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
            case 'bg': {
                $array = [
                    'Varna',
                    'Sofia'
                ];
                break;
            }
            case 'uk': {
                $array = [
                    'London',
                    'Birmingham'
                ];
            }
        }

        echo json_encode($array);
    }
}