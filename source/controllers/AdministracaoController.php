<?php

namespace Source\Controllers;

use League\Plates\Engine;

class AdministracaoController 
{
    
    private $view;
    
    public function __construct($router)
    {
        $this->view = Engine::create(dirname(__DIR__, 2)."/theme", "php");
        $this->view->addData(["router" => $router]);
    }
    
    public function home() 
    {
        echo $this->view->render('adm/home');
    }
}
