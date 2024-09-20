<?php

  class Carros extends Controller {

    public function index()
    {
      
      $db = new Carros_Model();
      print_r($db->insert('carros', array(
        "nome" => "Fiesta",
        "marca" => "Ford",
        "ano" => "2010",
        "cor" => "Verde"
      )));
      // $this->view('carrosIndex');
    }
    
    public function novos()
    {
      $this->view('carrosNovos');
    }

  }