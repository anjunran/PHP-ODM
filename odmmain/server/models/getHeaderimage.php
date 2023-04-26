<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $id = $_GET['query'];
    $res = $db->querySingle("SELECT image FROM headers WHERE idheader='{$id}';", true);
    echo($res['image']);
});
