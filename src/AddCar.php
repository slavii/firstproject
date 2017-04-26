<?php

namespace Project;

class AddCar
{
    public function __construct($arr = [])
    {
        $db = DBConnection::getInstance();

        $stmt = $db->prepare('INSERT INTO cars (car_make, car_model, car_fuel, car_price, car_gears, car_year) 
                                                    VALUES (:make, :model, :fuel, :price, :gears, :year)');

        $stmt->bindParam(':make', $arr["make"]);
        $stmt->bindParam(':model', $arr["model"]);
        $stmt->bindParam(':year', $arr["year"]);
        $stmt->bindParam(':fuel', $arr["fuel"]);
        $stmt->bindParam(':gears', $arr["gears"]);
        $stmt->bindParam(':price', $arr["price"]);

        $stmt->execute();
    }
}