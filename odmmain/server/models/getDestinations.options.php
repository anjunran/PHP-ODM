<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $res = $db->query("SELECT iddestination, destination FROM destinations;");
    $datas = [];
    while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
        $key = $row["iddestination"];
        $datas[] = ["id" => $key, "dest" => $row['destination']];
    }
    echo json_encode($datas);
});
