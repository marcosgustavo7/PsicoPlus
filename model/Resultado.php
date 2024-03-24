<?php

class Resultado{

    private $id;
    private $idData;
    private $idFuncionario;
    private $nota;
    private $nomeFuncionario;
    private $cpfFuncionario;
    private $telefoneFuncionario;
    private $data;
 

    
    function getID() {
        return $this->id;
    }

    function setID($id) {
        $this->id = $id;
    }

    function getIdData() {
        return $this->idData;
    }


    function setIdData($idData) {
        $this->idData = $idData;
    }

    function getIdFuncionario() {
        return $this->idFuncionario;
    }
    function setIdFuncionario($idFuncionario) {
        $this->idFuncionario = $idFuncionario;
    }

    function getNota() {
        return $this->nota;
    }
    function setNota($nota) {
        $this->nota = $nota;
    }

    function getNomeFuncionario() {
        return $this->nomeFuncionario;
    }

    function setNomeFuncionario($nomeFuncionario) {
        $this->nomeFuncionario = $nomeFuncionario;
    }

        
    function getCpfFuncionario() {
        return $this->cpfFuncionario;
    }

    function setCpfFuncionario($cpfFuncionario) {
        $this->cpfFuncionario = $cpfFuncionario;
    }

        
    function getTelefoneFuncionario() {
        return $this->telefoneFuncionario;
    }

    function setTelefoneFuncionario($telefoneFuncionario) {
        $this->telefoneFuncionario = $telefoneFuncionario;
    }

        
    function getData() {
        return $this->data;
    }

    function setData($data) {
        $this->data = $data;
    }

}








?>