<?php
 
  Class Model {
    protected $db;
    public function __construct (){
        $this->db = new PDO('mysql:host=mysql;dbname=veiculos', 'lucas', 'lucas');
    }

    public function insert () {}

    public function read () {}

    public function update () {}

    public function delete () {}

}