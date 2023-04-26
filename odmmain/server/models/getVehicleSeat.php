<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $car = $_GET['vehicle'];
    $stmt = $db->prepare('SELECT seats FROM vehicles WHERE idvehicle=:car');
    $stmt->bindValue(":car", $car, SQLITE3_INTEGER);
    $result = $stmt->execute();
    echo($result->fetchArray(SQLITE3_NUM)[0] * 1);
});
