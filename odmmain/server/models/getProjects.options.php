<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $res = $db->query("SELECT idproject, title FROM projects;");
    $datas = [];
    while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
        $key = $row["idproject"];
        $datas[] = ["id" => $key, "name" => $row['title']];
    }
    echo json_encode($datas);
});
