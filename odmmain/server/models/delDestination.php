<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $query = $_GET['query'];
    $db->exec("DELETE FROM destinations WHERE destination='{$query}'");
});
