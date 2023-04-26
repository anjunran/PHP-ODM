<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    list("odmpjname" => $title, "odmjsmanager" => $manager, "odmpjlocation" => $location, "odmpjbegindate" => $begin, "odmduration" => $duration) = $_POST;
    $db->exec("INSERT INTO projects (title, manager, location, startdate, durationyear) VALUES ('{$title}','{$manager}','{$location}','{$begin}','{$duration}')");
});
