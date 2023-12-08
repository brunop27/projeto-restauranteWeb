<?php

namespace Core;

abstract class Model{
    //Nome da tabela no banco de dados
    protected $table;
    protected $columns = [];

    protected $__data = [];

    protected $pk = 'id';
    public function __set(string $name, $value){
        if(in_array($name, $this->columns)){
            $this->__data[$name] = $value;
        }
    }

    public function __get(string $name){
        return (array_key_exists($name, $this->__data))?$this->__data[$name]:null;
    }
    
    // Seleciona a query
    public function query(string $sql, array $data = []){
        $conn = Connection::getInstance();
        $stm = $conn->prepare($sql);
        $stm->execute($data);
        return $stm;
    }

    /**
     *  Insere no Banco de Dados
     * @return int
    */
    public function insert(array $data = []){
        $data = array_merge($this->__data, $data);
        $columns = implode(', ', array_keys($data));
        $values = implode(', :',array_keys($data));
        $sql = "INSERT INTO $this->table ($columns) values (:$values);";
        //['name'=>'N_MESAS', 'value'=>'20']
        // echo $sql;
        $this->query($sql, $data);
        $id = $this->getLastInsertId();
        $pk = $this->pk;
        $this->__data = $data;
        $this->$pk = $id;

        return $id;
    }
    
    //Serve de porta para acesso ao query
    public function getLastInsertId(){
        $conn = connection::getInstance();
        return $conn->lastInsertId($this->table);   
    }
    public function update(){

    }
    public function delete(){

    }

    private function select(){
        $columns = implode(', ',$this->columns);
        $sql = "SELECT $columns FROM $this->table;";

        return $this->query($sql);
    }

    public function all(){
        return $this->select()->fetchAll(\PDO::FETCH_CLASS, get_class($this));
    }
    public function get(){

        return $this->select()->fetchObject(get_class($this));
    }


}