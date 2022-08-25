<?php

namespace Source\Controllers;

use League\Plates\Engine;

class UsuarioController 
{
    
    private $view;
    
    public function __construct($router)
    {
        $this->view = Engine::create(dirname(__DIR__, 2)."/theme", "php");
        $this->view->addData(["router" => $router]);
    }
    
    public function login() 
    {
        echo $this->view->render('login/login');
    }

    public function registro() 
    {
        echo $this->view->render('login/registro');
    }
}
