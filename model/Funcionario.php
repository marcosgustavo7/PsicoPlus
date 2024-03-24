<?php

class Funcionario{

    private $id;
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $senha;

    
    function getID() {
        return $this->id;
    }

    function setID($id) {
        $this->id = $id;
    }

    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function getIdade() {
        return $this->idade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function getSenha() {
        return $this->senha;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

}








?>