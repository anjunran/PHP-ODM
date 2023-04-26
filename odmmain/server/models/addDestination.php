<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $destination  = $_POST['odmdestination'];
    $db->exec("INSERT INTO destinations (destination) VALUES ('{$destination}')");
});
