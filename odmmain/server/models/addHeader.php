<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    list("odmheadname" => $header, "odmnewheader" => $img) = $_POST;
    $db->exec("INSERT INTO headers (name, image) VALUES ('{$header}','{$img}')");
});
