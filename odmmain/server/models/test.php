<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $db->exec('INSERT INTO tests (body) VALUES ("w")');
});
