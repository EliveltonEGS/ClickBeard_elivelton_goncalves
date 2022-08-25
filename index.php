<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";

$router = new Router(ROOT);
$router->namespace("Source\Controllers");

//category
//$router->group(null);
//$router->get("/", "CategoryController:home", "category.home");
//$router->get("/list", "CategoryController:list", "category.list");
//$router->get("/create", "CategoryController:create", "category.create");
//$router->get("/read-id", "CategoryController:readId", "category.readId");
//$router->get("/update", "CategoryController:update", "category.update");
//$router->get("/delete", "CategoryController:delete", "category.delete");

//post
$router->group(null);
$router->get('/', 'UsuarioController:login', 'usuario.login');
$router->get('/registro', 'UsuarioController:registro', 'usuario.registro');

$router->group('/adm');
$router->get('/home', 'AdministracaoController:home', 'adm.home');



// $router->get('/read-codremessa/{id}', 'PedidoController:getPedByRemessa', 'pedido.read-codremessa');
// $router->get('/busca-codhist/{id}', 'PedidoController:getDataEdicao', 'pedido.get-edicao');
// $router->post('/editar', 'PedidoController:editar', 'pedido.editar');

$router->dispatch();

if ($router->error()) {
    var_dump($router->error());
}