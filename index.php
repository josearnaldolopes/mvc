<?php
/*---- Tratando erros ----*/
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
/*---- Fim do Tratando erros ----*/

//http://127.0.0.1/mvc/?class=controller&metodo=view

$class  = $_GET['class'];
$metodo = $_GET['metodo'];

require_once 'controller/controller.php';

$mvc = new $class;
$mvc->$metodo();