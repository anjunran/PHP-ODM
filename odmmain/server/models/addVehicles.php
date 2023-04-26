<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    list("odmvehicleid" => $id, "odmvehiclebrand" => $brand, "odmvehicleseat" => $seat) = $_POST;
    $db->exec("INSERT INTO vehicles (matriculation, brand, seats) VALUES ('{$id}','{$brand}','{$seat}')");
});
