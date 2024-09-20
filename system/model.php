<?php
 
  Class Model {
    protected $db;
    public function __construct (){
        $this->db = new PDO('mysql:host=mysql;dbname=veiculos', 'root', 'root');
    }

    public function insert ( $tabela, Array $dados){
      $sql = "INSERT INTO tabela (campo1, campo2, campo3) VALUES ('valor1','valor2', 'valor3')";
      $array = array(
        "nome" => "Fiesta",
        "marca" => "Ford",
        "ano" => "2010",
        "cor" => "Verde"
      );
      foreach ( $dados as $campo => $valor){
        $campos[] = $campo;
        $valores[] = $valor;
      }
      return $campos;
    }

    public function read (){}

    public function update (){}

    public function delete (){}

}