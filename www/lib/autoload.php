<?php
function class_preloader($param="",$class,$path="")
{

loader($class,$param);

}


function loader($class,$param="",$path="")
{ 

	if($param==""){$param=null;}

	$find_class = strpos($class,'/');
	if($find_class === false)
	{


	switch($class)
	{
	    case "template"://echo "oh noooooooooo";
	    break;	
		default:
		    $class = str_replace("-","_",$class);
        	new $class($param); 
	}

	}else{
		$temp_path = split("/",$class);
		
		$_SESSION['path_class']=$temp_path[0];
	    $temp_path[1] = str_replace("-","_",$temp_path[1]);
		$obj_path = new $temp_path[1]($param);
		return $obj_path;
	}
}

function __autoload($class_name) 
{

	if(!class_exists($class_name))
	{

			

			//echo "okok " .get_class(parent);

			//echo "<br>".$class_name;
			//echo dirname(__FILE__).'/classes/' . $class_name . '.php<br>';
			//echo dirname(__FILE__);

			// require_once dirname(__FILE__).'/classes/' . $class_name . '.php';
			//echo "<h3>".dirname(__FILE__)."/../</h3>";
			//   set_include_path(__DIR__);    
			//if($class_name=="doContent"){echo "mostra conteudo";}

			//echo '<br/>autoload: '.get_include_path().'lib/classes/' . $class_name . '.php<br/>';
			//echo __DIR__;

			switch($class_name)
			{
			    case "ajax":
				    $php = base . '/lib/classes/core/' . $class_name . '.php';
				    //error_log($php);exit;
				    //echo "autoload: $php<br>";
				    //error_log("Pagina carregada: " . $php);
				    if(file_exists($php)){ require_once($php); }else{echo('Não foi possivel carregar ' . $php);return false;}

			    break;
			    case "template":echo "oh noooooooooo";break;
			    case "BDo":case "ajax":case "canvas":case "carrinho":case "CRUD":case "erros":case "global":case "Paginator":case "parametros":case "phpinfo":
			    case "siteman":case "Utils":

				    $php = base . '/lib/core/' . $class_name . '.php';
				    //echo "autoload: $php<br>";
				    //error_log("Pagina carregada: " . $php);
				    if(file_exists($php)){ require_once($php); }else{echo('Não foi possivel carregar ' . $php);return false;}

			    break;
			    default:

				    if(!empty($_SESSION['path_class']))
					{
						$php = base . '/template/' . $_SESSION['path_class'] . '/lib/classes/' . $class_name . '.php';
						$_SESSION['path_class']="";
						//$path_to_load = base . '/template/'.$path_to_load[0].'/lib/classes/'.$path_to_load[1].'.php';
					}else{
				    	
				    $php = get_include_path() . '/lib/classes/' . $class_name . '.php';
				    }
				    //echo "autoload: $php<br>";
				    //error_log("Pagina carregada: " . $php);
				    if(file_exists($php)){ require_once($php);  if(!class_exists($class_name)){
				    
				    if(Erro404)
				    {
				    require_once(base . pagina404);
				    error_log("a classe $class_name não existe dentro de $php!");return false;
				    }else
{
				    echo "a classe $class_name não existe dentro de $php!";return false;
}				    
				    }   }else{

if(Erro404)
{
require_once(base . pagina404);
error_log("Não foi possivel carregar " . $php);
}else{
echo('Não foi possivel carregar ' . $php);
}

return false;}
			}

 
   } 

    //echo "<br>".get_include_path();

}
