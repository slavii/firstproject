<?php

namespace Project;

class AddCar
{
    public function __construct($make, $model, $year, $fuel, $gears, $price)
    {
        $db = DBConnection::getInstance();

        $stmt = $db->prepare('INSERT INTO cars (car_make, car_model, car_fuel, car_price, car_gears, car_year) 
                                                    VALUES (:make, :model, :fuel, :price, :gears, :year)');

        $stmt->bindParam(':make', $make);
        $stmt->bindParam(':model', $model);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':fuel', $fuel);
        $stmt->bindParam(':gears', $gears);
        $stmt->bindParam(':price', $price);

        $stmt->execute();
    }
}