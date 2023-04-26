<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $res = $db->query("SELECT names, number, country FROM passports WHERE idpasseport=" . $_GET['query']);
    $datas = [];
    while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
       $datas[] = $row;
    }
    echo json_encode($datas);
});
