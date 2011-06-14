<?php
class siteman extends Utils
{

	function __construct() {

    ob_start( ('sendcompressedcontent') );

	global $script_start;
		    list($utime, $time) = explode(" ", microtime());
		    $script_start = ((float)$utime + (float)$time);
	
		$titulo = Titulo;
		if(func_num_args()>0)
		{$args=func_get_arg(0);}else{$args="";}
		$this->args=$args;
		//$scriptname = pathinfo($_SERVER["PHP_SELF"]);$scriptname=$scriptname["filename"];

		$scriptname = parametros(0);//echo $scriptname;
		$this->base = 'template/' . $scriptname;

		set_include_path(base."/".$this->base."/");

		$this->pagina = $scriptname;
		if(isset($args['pagina'])){$this->pagina=$args['pagina'];}

		$this->titulo .= $titulo;
		if(isset($args['titulo'])){
			$this->titulo .= ' - ' . $args['titulo'];}

			//var_dump($args);
			$meta[] = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
			$meta[] = '<meta http-equiv="CONTENT-LANGUAGE"  content="pt-br">';
			$meta[] = '<meta name="keywords" lang="pt-br" content="PALAVRAS, CHAVE, POR, VIRGULA"/>';
			if(isset($args['description'])){ $meta[] = '<meta name="description" content="'.$args['description'].'" />'; }

			$title = '<title>'. $this->titulo.'</title>';

			array_walk($meta,array(&$this,'gerameta'));
			$meta = implode("\n",$meta);
			
			//initiallizer template
			$templater = base . '/lib/classes/' . $this->args['skel'] . '.php';//echo $templater;
			if(file_exists($templater)){
			include($templater);
			}

			if(isset($this->args['skel'])){
			$cssglobal[] = base_url.'template/SKEL/' . $this->args['skel'] . '/css/main.css'; //css padrao
			$cssglobal[] = base_url.'template/SKEL/' . $this->args['skel'] . '/css/simpleAutoComplete.css'; //css padrao
			$cssglobal[] = base_url.'template/SKEL/' . $this->args['skel'] . '/css/slider.css'; //slider
			}

			$cssglobal[] = base_url . $this->base."/css/".$this->pagina.'.css'; 

			if(isset($temp_css)){ 
			array_walk($temp_css,array(&$this,'prepararraycsstemp'));
            $cssglobal = array_merge($cssglobal,$temp_css);
            }			

			array_walk($cssglobal,array(&$this,'geracssglobal'));
			$cssglobal = implode("\n",$cssglobal);

			if(isset($this->args['skel'])){
			$jsglobal[] = base_url.'template/SKEL/' . $this->args['skel'] . '/js/jquery.js';
			$jsglobal[] = base_url.'template/SKEL/' . $this->args['skel'] . '/js/simpleAutoComplete.js';
			$jsglobal[] = base_url.'template/SKEL/' . $this->args['skel'] . '/js/jquery.flash.js';
			$jsglobal[] = base_url.'template/SKEL/' . $this->args['skel'] . '/js/slider2.js';
			$jsglobal[] = base_url.'template/SKEL/' . $this->args['skel'] . '/js/busca.js';
			}
			
			if(isset($temp_js)){ 
			array_walk($temp_js,array(&$this,'prepararrayjstemp'));
            $jsglobal = array_merge($jsglobal,$temp_js);
            }			

//			exit;
            
			$jsglobal[] = base_url.$this->base."/js/".$this->pagina.'.js';
			array_walk($jsglobal,array(&$this,'gerajsglobal'));
			$jsglobal = implode("\n",$jsglobal);

			if(isset($args['js'])){ 
			array_walk($args['js'],array(&$this,'prepararrayjs'));
			array_walk($args['js'],array(&$this,'gerajsglobal'));
			$args['js'] = implode("\n",$args['js']);
			$jsglobal.="\n".$args['js'];
			}

			if(isset($args['css'])){ 
			array_walk($args['css'],array(&$this,'prepararraycss'));
			array_walk($args['css'],array(&$this,'geracssglobal'));
			$args['css'] = implode("\n",$args['css']);
			$cssglobal.="\n".$args['css'];
			}


			$this->head = "$title\n$meta\n$jsglobal\n$cssglobal\n<base href='".base_url."template/'/><!--[if ie]></base><![endif]--> ";
//			$this->head = "$title\n$meta\n\n\n\n$jsglobal\n\n\n\n$cssglobal\n<base href='".base_url."template/'/><!--[if ie]></base><![endif]--> ";
			//echo $args["titulo"];
			//var_dump($args);
	}

	public function gerameta(&$item1, $key) {
		$item1 = "\t$item1";
	}
	
	public function prepararrayjs(&$item,$key)
	{
		$item = base_url .  $this->base . "/js/$item";
	}

	public function prepararrayjstemp(&$item,$key)
	{
		$item = base_url .  "template/SKEL/".$this->args['skel']."/js/$item";
	}
	
	public function prepararraycsstemp(&$item,$key)
	{
		$item = base_url .  "template/SKEL/".$this->args['skel']."/css/$item";
	}
	
	public function prepararraycss(&$item,$key)
	{
		$item = parametros(0) . "/css/$item";
	}
	
	public function geracssglobal(&$item1, $key) {
		$item1 = "\t" . '<link rel="stylesheet" href="'. $item1 . '" type="text/css" media="screen" title="'.$this->titulo.'" charset="UTF-8" />';
	}

	public function gerajsglobal(&$item1, $key) {
		$item1 = "\t" . '<script src="' . $item1 . '" type="text/javascript" language="javascript" charset="UTF-8"></script>';
	}

	
	public function doContent(){

	    //$vars = $this->args['vars'];


		//var_dump($membro);
		$previouspath = get_include_path() ;
		$dopath = base."/".$this->base;
		if(!file_exists($dopath))
		{
			$dopath = base . "/template/index/";
		}
//echo $dopath;
//error_log(get_class($this) . "/" . $dopath."/index.php");
		set_include_path($dopath);
		//echo get_include_path();exit;
		require_once("index.php");
		set_include_path($previouspath);
		
	}
	
	function __destruct() {
		switch($_SERVER["QUERY_STRING"])
		{

			default:
				header('content-type: text/html; charset: utf-8');
				$doctype = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">';
				$htmlini = '<html>';
				
				$ants_ini = "$doctype\n$htmlini\n<head>\n\t$this->head\n</head>\n<body>";
				echo $ants_ini;
				
				//correto
				$php = 'index.php';
				
				//echo $php.'<br>';
				//$php = 'template/global/' . $this->base.'/'.$this->pagina.'.php';//echo $php.'<br>';
				
				//correto
				if(isset($this->args['skel'])){
				set_include_path(base . '/template/SKEL/'.$this->args['skel'].'/');//echo get_include_path();
				}
				//error_log("Passou aqui" . get_include_path() . $php);
				//echo get_include_path() . $php;
				if(file_exists(get_include_path() . $php)){
					//error_log(get_include_path() .$php);
					require_once($php);
				}

				//echo "pump: " . dirname(__FILE__)."/../../".$this->base . "<br>";
/*				
				set_include_path(base."/".$this->base."/");
				$html = $this->base.'/'.$this->pagina.'.html';//echo $html;
				if(file_exists($html)){
					require_once($html);
				}
*/

				$htmlend = '</html>';
				$ants_end = "</body>\n$htmlend";
				echo $ants_end;

		}

		    global $script_start;
		    list($utime, $time) = explode(" ", microtime());
		    $script_end = ((float)$utime + (float)$time);
		    if(ScriptTime){echo "Script executed in ".bcsub($script_end, $script_start, 4)." seconds.";}



	}	
	
        function sendcompressedcontent( $content )
        {
            header( "Content-Encoding: gzip" );
            return gzencode( $content, 9 );
        }

	
}
