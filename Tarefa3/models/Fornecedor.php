<?php

include_once 'Conn.php';

//EXTENÇÃO PHP GETTERS & SETTERS

class Categoria {

    private $id;
    private $nome;
    private $cidade;
    private $conn;

    public function getID() {
        return $this->id;
    }

    public function setID($id)
    {
        $this->id = $id;
        return $this;
    }

     public function getNOME() {
        return $this->nome;
    }

    public function setNOME($nome)
    {
        $this->nome = $nome;
        return $this;
    }

     public function getCidade() {
        return $this->informacoes;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function salvar() {
        try{
           $this->conn = new Conn();
           $sql = "CALL salvar_categoria(?, ?, ?)";
           $executar = $this->conn->prepare($sql);
           $executar->bindValue(1, $this->id);
           $executar->bindValue(2, mb_strtoupper ($this->nome));
           $executar->bindValue(3, mb_strtoupper ($this->cidade));
           return $executar->execute() == 1 ? true : false;
        } catch(PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}