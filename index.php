<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";

$router = new Router(ROOT);
$router->namespace("Source\Controllers");

#ROTAS DE USUARIO
$router->group(null);
$router->get('/', 'UsuarioController:login', 'usuario.login');
$router->get('/registro', 'UsuarioController:registro', 'usuario.registro');
$router->post('/cadastrar', 'UsuarioController:cadastrar', 'usuario.cadastrar');
$router->post('/logar', 'UsuarioController:logar', 'usuario.logar');
$router->get('/sair', 'UsuarioController:sair', 'usuario.sair');
$router->get('/perfil', 'UsuarioController:perfil', 'usuario.perfil');

#ROTAS DA HOME PRINCIPAL ADMISTRACAO
$router->group('/adm');
$router->get('/home', 'AdministracaoController:home', 'adm.home');

#ROTAS DE ESPECIALIDADES
$router->group('/especialidade');
$router->get('/', 'EspecialidadeController:home', 'especialidade.home');
$router->get('/novo', 'EspecialidadeController:novo', 'especialidade.novo');
$router->get('/editar/{id}', 'EspecialidadeController:editar', 'especialidade.editar');
$router->post('/cadastrar', 'EspecialidadeController:cadastrar', 'especialidade.cadastrar');
$router->get('/deletar/{id}', 'EspecialidadeController:deletar', 'especialidade.deletar');

#ROTAS DE BARBEIROS
$router->group('/barbeiro');
$router->get('/', 'BarbeiroController:home', 'barbeiro.home');
$router->get('/novo', 'BarbeiroController:novo', 'barbeiro.novo');
$router->get('/especialidade', 'BarbeiroController:especialidade', 'barbeiro.especialidade');
$router->post('/cadastrar', 'BarbeiroController:cadastrar', 'barbeiro.cadastrar');
$router->get('/deletar/{id}', 'BarbeiroController:deletar', 'BarbeiroController.deletar');
$router->post('/get-especialidade', 'BarbeiroController:especialidadBarbeiro', 'BarbeiroController.get-especialidade');

#ROTAS DO AGENDAMENTO
$router->group('/agendamento');
$router->get('/novo', 'AgendamentoController:novo', 'agendamento.novo');

$router->dispatch();

if ($router->error()) {
    var_dump($router->error());
}
