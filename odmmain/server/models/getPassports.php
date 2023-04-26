<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    $res = $db->query("SELECT idpasseport, names, number, country, tsdate FROM passports;");
    while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
        $key = $row["idpasseport"];
        echo <<<HTML
            <div class="col">
                <div class="card text-dark bg-light mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.iconpacks.net/icons/2/free-passport-icon-1844-thumb.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{$row['number']}</h5>
                                <p class="card-text">{$row['names']}</p>
                                <p class="bg-dark text-white shadow p-1 rounded-pill ps-3 fw-bold">{$row['country']}</p>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <p class="card-text my-auto"><small class="text-muted">{$row['tsdate']}</small></p>
                            <button class="btn btn-danger btn-sm" key={$key} id="del-pport">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        HTML;
    }
});
