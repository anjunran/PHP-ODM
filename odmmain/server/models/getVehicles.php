<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $res = $db->query("SELECT * from vehicles;");
    while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
        echo <<<HTML
                    <tr>
                      
                        <td>{$row['matriculation']}</td>
                        <td>{$row['brand']}</td>
                        <td>{$row['seats']}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button key={$row["idvehicle"]} title="Delete" type="button" class="rounded-circle btn-danger me-2" id="del-vehicule" style="width:30px;aspect-ratio:1">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                HTML;
    }
});
