<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $count = $db->querySingle("SELECT docstotal FROM totalpassports");
    echo $count;
});
