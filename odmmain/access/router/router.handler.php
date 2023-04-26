<?php
require_once("files.index.php");
$router = new routeNodes(
    routeNodes::Route("/", function () {
        return "create.odm.php";
    }),
    routeNodes::Route("/setdestination", function () {
        return "add.destinations.php";
    }),
    routeNodes::Route("/setpassports", function () {
        return "add.passeports.php";
    }),
    routeNodes::Route("/setvehicles", function () {
        return "add.vehicles.php";
    }),
    routeNodes::Route("/setproject", function () {
        return "add.project.php";
    }),
    routeNodes::Route("/setheader", function () {
        return "update.header.php";
    })
);
$Goto = array_values($router->setRouter($page, function () {
    return "404.notfound.php";
}));

require_once("../access/pages/routes.handler.php");
