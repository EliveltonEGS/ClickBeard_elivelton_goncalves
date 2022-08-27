<?php

namespace Source\Controllers;

use League\Plates\Engine;
use Source\Models\EspecialidadeModel;
use Source\Entities\Especialidade;

class EspecialidadeController {

    private $especialidadeModel;
    private $especialidade;
    private $view;

    public function __construct($router) {
        $this->especialidadeModel = new EspecialidadeModel();
        $this->especialidade = new Especialidade();

        $this->view = Engine::create(dirname(__DIR__, 2) . "/theme", "php");
        $this->view->addData(["router" => $router]);
    }

    public function home(): void {
        echo $this->view->render('especialidade/home', ['especialidades' => $this->especialidadeModel->listarTodos()]);
    }

    public function novo() {
        echo $this->view->render('especialidade/novo');
    }

    public function editar(array $data): void {
        echo $this->view->render('especialidade/editar', ['especialidade' => $this->especialidadeModel->buscarPorId($data['id'])]);
    }

    public function cadastrar(array $data): void {
        if (in_array('', $data)) {
            echo $this->view->render('especialidade/editar', ['error' => 'Todos os campos são obrigatórios!', 'especialidade_id' => $data['especialidade_id']]);
            return;
        }

        if (isset($data['especialidade_id'])) {
            $this->especialidade->setEspecialidade_id($data['especialidade_id']);
            $this->especialidade->setDescricao($data['especialidade']);
            $this->especialidadeModel->alterar($this->especialidade);
            echo $this->view->render('especialidade/editar', ['success' => 'Nova especialidade alterada com sucesso!']);
        } else {
            $this->especialidade->setDescricao($data['especialidade']);
            $this->especialidadeModel->cadastrar($this->especialidade);
            echo $this->view->render('especialidade/novo', ['success' => 'Nova especialidade incluída com sucesso!']);
        }
    }

    public function deletar(array $data): void {
        $this->especialidadeModel->deletarPorId($data['id']);
        echo $this->view->render('especialidade/home', ['especialidades' => $this->especialidadeModel->listarTodos(), 'success' => 'Especialidade removida com sucesso!']);
    }

}
