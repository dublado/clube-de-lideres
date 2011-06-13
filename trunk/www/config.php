<?php
define("Erro404",true);
define("pagina404",'/template/SKEL/404/404.htm');

define("Titulo","Clube de Líderes Online"); //define titulo padrao

switch($_SERVER['HTTP_HOST'])
{
    case "servidor.local":
        define("Ambiente","servidor"); //prod e local
    break;    
    case "localhost":
        define("Ambiente","local"); //prod e local
    break;
    case "pcampos":
		define("Ambiente","pcampos");
	break;
    default:
        define("Ambiente","local"); //prod e local
}

$_base['pcampos'] = array
(
	"base"		=>	"/var/www/bctvv2/www",
	"base_url"	=>	"/bctvv2/www/"
);

$_base['servidor'] = array
(
	"base"		=>	"/var/www/bctv/www",
	"base_url"	=>	"/bctv/www/"
);

$_base['prod'] = array
(
	"base"		=>	"/home1/atreyoco/public_html/clubedelider/clo",
	"base_url"	=>	"/clo/"
);


$_base['local'] = array
(
//PALHARES
/*
	"base"		=>	"/var/www/bctvv2/www",
	"base_url"	=>	"/bctvv2/www/"
*/

//DUBLADO
	"base"		=>	"/var/www/clo/www",
	"base_url"	=>	"/clo/www/"
);

$_base[Ambiente]['base_url'] = "http://".$_SERVER['HTTP_HOST'].$_base[Ambiente]['base_url'];

$dbconfig['prod'] = array
(
	"driver"	=>	"mysql",
	"host"  	=>	"mysql.ants.com.br",
	"db"		=>	"ants_dev",
	"user"		=>	"antscomunicacao",
	"pass"		=>	"ants2201"
);


// TESTE/LOCAL
$dbconfig['local'] = array
(
//PALHARES
/*
	"driver"	=>	"mysql",
	"host"		=>	"localhost",
	"db"		=>	"bctv_dementor",
	"user"		=>	"root",
	"pass"		=>	"dea"
*/	
//DUBLADO
	"driver"	=>	"mysql",
	"host"		=>	"localhost",
	"db"		=>	"clo",
	"user"		=>	"root",
	"pass"		=>	"root"
/*	"driver"	=>	"mysql",
	"host"		=>	"dbmy0041.whservidor.com",
	"db"		=>	"bctv",
	"user"		=>	"bctv",
	"pass"		=>	"vtcb00admin"
*/);
$dbconfig['pcampos'] = array
(
	"driver"	=>	"mysql",
	"host"		=>	"localhost",
	"db"		=>	"bctv_dementor",
	"user"		=>	"root",
	"pass"		=>	"dea"
);
// TESTE/LOCAL
$dbconfig['servidor'] = array
(
	"driver"	=>	"mysql",
	"host"		=>	"dbmy0041.whservidor.com",
	"db"		=>	"bctv",
	"user"		=>	"bctv",
	"pass"		=>	"vtcb00admin"
);


switch(Ambiente){
	case "prod":
		//define("base","/home1/atreyoco/public_html/clubedelider");
		//define("base",$_base[Ambiente]["base"]);
		//define("base","/home/antscomunicacao/ants.com.br/clientes/dublado");
		//define("base_url",$_base[Ambiente]["base_url"]); 
		//define("base_url","http://atreyo.com/LABS/clo/"); 
		//define("base_url","http://www.ants.com.br/clientes/dublado/"); 
	break;
	default:
		//define("base","/var/www/dementor/framework-dementor");
		//define("base_url","http://localhost/dementor/framework-dementor/"); 
	break;
}

define("base",$_base[Ambiente]['base']);
define("base_url",$_base[Ambiente]['base_url']); 

set_include_path(base);

if(!file_exists(base)){
echo "Defina Base(sugestão): " . $_SERVER["DOCUMENT_ROOT"] . '<br>';
}

define("mode",""); //mode = dev ativa o depurador _GET _POST _REQUEST
define("error_log",true); 
// true para exeuctar error_log e false para imprimir na tela
// algum servidores não deixam acessar o log diretamente do arquivo

define("error-ip","192.168.20.106"); //define ip que verá a depuração
define("TIME_LIMIT",5);
define("ScriptTime",false);
