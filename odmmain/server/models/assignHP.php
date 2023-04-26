<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    list("h" => $header, "p" => $project) = $_GET;
    $db->exec("INSERT INTO linkheader (idheader, idproject) VALUES ('{$header}','{$project}')");
});