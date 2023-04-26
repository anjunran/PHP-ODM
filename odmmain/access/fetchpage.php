<?php
function fetchpage(array $url): void
{
    $page = null;
    $file = null;
    if (!empty($url)) {
        $page = array_key_exists(0, $url) ? filter_var($url[0], FILTER_SANITIZE_URL) : "";
        $file = array_key_exists(1, $url) ? filter_var($url[1], FILTER_SANITIZE_URL) : "";
    }
    $open = "router/router.handler.php";
    require_once("init.php");
}
