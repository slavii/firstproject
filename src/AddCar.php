<?php

namespace Project;

class AddCar
{
    public function __construct($carData = [])
    {
        $db = DBConnection::getInstance();

        $stmt = $db->prepare('INSERT INTO cars (car_make, car_model, car_fuel, car_price, car_gears, car_year, car_date
                                                    VALUES (:make, :model, :fuel, :price, :gears, :year, :date)');


        $stmt->bindParam(':make', $carData["make"]);
        $stmt->bindParam(':model', $carData["model"]);
        $stmt->bindParam(':year', $carData["year"]);
        $stmt->bindParam(':fuel', $carData["fuel"]);
        $stmt->bindParam(':gears', $carData["gears"]);
        $stmt->bindParam(':price', $carData["price"]);
        $stmt->bindParam(':date', date("Y.m.d"));

        $stmt->execute();
    }
}