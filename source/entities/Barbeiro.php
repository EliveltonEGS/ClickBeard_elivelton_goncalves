<?php

namespace Source\Enttites;

class Barbeiro {

    private $barbeiro_id;
    private $nome;
    private $cpf;
    private $data_contratacao;
    private Especialidade $especialidade;

    function getBarbeiro_id() {
        return $this->barbeiro_id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getData_contratacao() {
        return $this->data_contratacao;
    }

    function getEspecialidade(): Especialidade {
        return $this->especialidade;
    }

    function setBarbeiro_id($barbeiro_id): void {
        $this->barbeiro_id = $barbeiro_id;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    function setData_contratacao($data_contratacao): void {
        $this->data_contratacao = $data_contratacao;
    }

    function setEspecialidade(Especialidade $especialidade): void {
        $this->especialidade = $especialidade;
    }

}
