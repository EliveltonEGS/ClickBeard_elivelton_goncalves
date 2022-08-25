<?php

namespace Source\Enttites;

class Agendamento {

    private $agendamento_id;
    private $hora_inicio;
    private $hora_fim;
    private Barbeiro $barbeiro;
    private Cliente $cliente;

    function getAgendamento_id() {
        return $this->agendamento_id;
    }

    function getHora_inicio() {
        return $this->hora_inicio;
    }

    function getHora_fim() {
        return $this->hora_fim;
    }

    function getBarbeiro(): Barbeiro {
        return $this->barbeiro;
    }

    function getCliente(): Cliente {
        return $this->cliente;
    }

    function setAgendamento_id($agendamento_id): void {
        $this->agendamento_id = $agendamento_id;
    }

    function setHora_inicio($hora_inicio): void {
        $this->hora_inicio = $hora_inicio;
    }

    function setHora_fim($hora_fim): void {
        $this->hora_fim = $hora_fim;
    }

    function setBarbeiro(Barbeiro $barbeiro): void {
        $this->barbeiro = $barbeiro;
    }

    function setCliente(Cliente $cliente): void {
        $this->cliente = $cliente;
    }

}
