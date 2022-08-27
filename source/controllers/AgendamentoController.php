<?php

namespace Source\Controllers;

use League\Plates\Engine;

class AgendamentoController
{

    private $view;

    public function __construct($router)
    {
        $this->view = Engine::create(dirname(__DIR__, 2) . "/theme", "php");
        $this->view->addData(["router" => $router]);
    }

    public function novo()
    {
        session_start();
        if (!isset($_SESSION["USUARIO"])) {
            echo $this->view->render('usuario/login');
            return;
        }

        echo $this->view->render('agendamento/novo');
    }
}
