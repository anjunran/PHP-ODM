<?php
require_once("../connection/connection.php");
$db = new Connection;
$db->dispatch(function ($db) {
    list("odmpassportname" => $holder, "odmpassportnum" => $num, "odmpassportnationality" => $nationality) = $_POST;
    $db->exec("INSERT INTO passports (names, number, country) VALUES ('{$holder}','{$num}','{$nationality}')");
});
