<?php

$QUERYSTRING = filter_var($_SERVER['QUERY_STRING'], FILTER_SANITIZE_URL);
parse_str($QUERYSTRING, $URL);

$URL = array_key_exists("url", $URL) ? $URL['url'] : "";
$URL = explode("/", $URL);

require_once("../access/fetchpage.php");
call_user_func("fetchpage", $URL);
