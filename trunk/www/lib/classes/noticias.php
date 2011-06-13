<?php
class noticias extends siteman 
{

	function __construct ()
	{
		$this->bd = new BDo();
	
		$sql = "select * from new_noticia order by data desc";//echo $sql;
		$rss = $this->bd->query($sql);
		$this->noticias = $rss->fetchAll();	

        $titulo = "Noticias e Eventos";
        
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
