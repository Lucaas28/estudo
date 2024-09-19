<?php

  class Carros extends Controller {

    public function index()
    {
      $db = new Carros_Model();
      

      // $this->view('carrosIndex');
    }
    
    public function novos()
    {
      $this->view('carrosNovos');
    }

  }