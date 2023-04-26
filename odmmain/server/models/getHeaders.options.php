<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $res = $db->query("SELECT idheader, name FROM headers;");
    $datas = [];
    while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
        $key = $row["idheader"];
        $datas[] = ["id" => $key, "header" => $row['name']];
    }
    echo json_encode($datas);
});
