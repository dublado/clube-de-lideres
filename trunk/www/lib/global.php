<?php
$script_start=0;


session_start();
$_SESSION['path_class']="";

require_once "config.php"; // parametros de configuracao simples
define('dbconfig', serialize($dbconfig)); //serializa os dados de conexao para o BDo

//echo get_include_path()."/lib/autoload.php";
require_once("lib/autoload.php"); 
//$erros = new erros(); //instancia a classe de depuracao (analisar melhor);

//var_dump($erros);
require_once("lib/core/parametros.php");
