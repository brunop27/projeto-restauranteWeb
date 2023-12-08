<?php

namespace Core;

abstract class Model{
    //Nome da tabela no banco de dados
    protected $table;
    protected $columns = [];
    // Seleciona a query
    public function query(string $sql){
        $conn = Connection::getInstance();
        $stm = $conn->prepare($sql);
        $stm->execute();
        return $stm;
    }

    // Insere no Banco de Dados
    public function insert(){

    }
    public function update(){

    }
    public function delete(){

    }
    public function all(){
        $columns = implode(', ',$this->columns);
        $sql = "SELECT $columns FROM $this->table;";

        return $this->query($sql)->fetchAll(\PDO::FETCH_CLASS, get_class($this));
    }
    public function get(){
        $sql = "SELECT * FROM $this->table;";
        return $this->query($sql)->fetch();
    }


}