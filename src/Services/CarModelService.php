<?php


namespace Project\Services;

use Project\DBConnection;
use PDO;


class CarModelService
{
    public function loadModelId($make)
    {
        $db = DBConnection::getInstance();

        $query = "SELECT car_model FROM car_models WHERE car_make_id = (SELECT car_make_id FROM car_makes WHERE car_make = :make)";
        $stmt = $db->prepare($query);

        $stmt->bindParam(':make', $make);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}