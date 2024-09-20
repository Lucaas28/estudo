<?php

$_GET['chave'] = (isset($_GET['chave']) ? $_GET['chave'] : 'index/index');

$chave = $_GET['chave'];

$separacao = explode ('/', $chave);

$controller = $separacao[0];
$action = ($separacao[1] == null ? 'index' : $separacao[1]);

function __autoload ($file){
   require_once('app/models/' . $file . '.php') ;
}

require_once('system/controller.php');
require_once('system/model.php');

require_once('app/controllers/'.$controller.'Controller.php');
$app = new $controller;
$app->$action();
