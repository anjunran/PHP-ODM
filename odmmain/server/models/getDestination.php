<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $res = $db->query("SELECT destination FROM destinations;");
    while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
        echo <<<HTML
            <li class="list-group-item py-3 shadow-lg">
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="fw-bold fs-6">
                        {$row['destination']}
                    </span>
                </div>
                <hr>
                <div class="d-flex">
                    <span class="font-monospace">
                       <a href="http://localhost/odmmain/public/?location={$row['destination']}">
                        Edit</a> 
                    an ODM with this destination?
                    </span>
                    <button type="button" class="btn btn-outline-danger btn-sm ms-auto" id="del-btn">
                    <i class="fa-regular fa-trash-can"></i>
                    </button>
                </div>
                
            </li>
        HTML;
    }
});
