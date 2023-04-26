<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $res = $db->query("SELECT idvehicle, matriculation FROM vehicles;");
    $datas = [];
    while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
        $key = $row["idvehicle"];
        $datas[] = ["id" => $key, "ni" => $row['matriculation']];
    }
    echo json_encode($datas);
});
