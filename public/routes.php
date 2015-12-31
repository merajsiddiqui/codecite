<?php

// define routes

$routes = array(
    array(
        "pattern" => "contact",
        "controller" => "home",
        "action" => "contact"
    ),
    array(
        "pattern" => "home",
        "controller" => "home",
        "action" => "index"
    ),
    array(
        "pattern" => "team",
        "controller" => "home",
        "action" => "team"
    ),
    array(
        "pattern" => "article",
        "controller" => "home",
        "action" => "article"
    ),
    array(
        "pattern" => "about",
        "controller" => "home",
        "action" => "about"
    ),
    array(
        "pattern" => "author",
        "controller" => "home",
        "action" => "login"
    )
);

// add defined routes
foreach ($routes as $route) {
    $router->addRoute(new Framework\Router\Route\Simple($route));
}

// unset globals
unset($routes);
