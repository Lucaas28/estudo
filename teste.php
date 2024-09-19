<?php

class Pessoa {
    public $nome;

    public $idade = 0;

    public function fazerAniversario() {
        $this->idade++;
    }
}


$lucas = new Pessoa();
$lucas->nome = 'Lucas';

$lucas->idade = 29;

var_dump($lucas);

$lucas->fazerAniversario();

var_dump($lucas);


$petrius = new Pessoa();

$petrius->nome = 'Petrius';

$petrius->idade = 31;

for ($i=0; $i < 20; $i++) { 
    $petrius->fazerAniversario();
}

var_dump($petrius);