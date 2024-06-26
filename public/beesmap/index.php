<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/login", "Web:login");
$route->get("/registrar", "Web:register");
$route->get("/perguntas", "Web:faq");
$route->get("/contato", "Web:contact");
$route->get("/sobre", "Web:about");
$route->get("/mapa", "Web:map");

$route->get("/ops/{errcode}", "Web:error");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
