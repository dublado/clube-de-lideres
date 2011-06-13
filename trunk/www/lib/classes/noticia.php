<?php
class noticia extends siteman 
{

	function __construct ()
	{
		$this->bd = new BDo();
	
		$sql = "select * from new_noticia where permalink = '".parametros(1)."'";//echo $sql;
		$rss = $this->bd->query($sql);
		$this->noticias = $rss->fetchobject();	

        $titulo = utf8_encode($this->noticias->titulo);
        
		parent::__construct(
		array(
		"titulo"=>$titulo,
		"skel"=>"global",
		"description"=>"i need a miracle",
		));
		
	}
	
	function noticias()
	{
	    return ($this->noticias);
	}
	
	function __destruct()
	{
		parent::__destruct();
	}

}
