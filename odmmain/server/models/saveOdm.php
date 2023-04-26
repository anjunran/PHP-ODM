<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $project = $_POST['odmproject'];
    $date = $_POST['odmdate'];
    $from = $_POST['odmfrom'];
    $to = $_POST['odmto'];
    $vehicle = $_POST['odmvehicle'];
    $crew = $_GET['crew'];
    $crew = json_decode($crew);
    $crew = join(" ", $crew);
    $stmt = $db->prepare("INSERT INTO odm (idproject, de, vers, vehicle, passengers, tripdate) VALUES (:p,:f,:t,:v,:c,:d)");
    $stmt->bindParam(":p", $project);
    $stmt->bindParam(":f", $from);
    $stmt->bindParam(":t", $to);
    $stmt->bindParam(":v", $vehicle);
    $stmt->bindParam(":c", $crew);
    $stmt->bindParam(":d", $date);
    $res = $stmt->execute();
    if ($res) {
        $newRow = $db->lastInsertRowID();
        $query = $db->querySingle('SELECT * FROM odmdocs WHERE idodm=' . $newRow, true);
        echo json_encode(["saved" => true, "datas" => $query]);
    } else {
        echo json_encode(["saved" => false, "datas" => null]);
    }
});
