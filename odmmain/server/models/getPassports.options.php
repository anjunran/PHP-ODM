<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $res = $db->query("SELECT idpasseport, names, number FROM passports;");
    $datas = [];
    while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
        $key = $row["idpasseport"];
        $datas[] = ["id" => $key, "name" => $row['names'], "pnum" => $row['number']];
    }
    echo json_encode($datas);
});
