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
}