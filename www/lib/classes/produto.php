<?php
class produto extends siteman 
{

	function __construct ()
	{


		$this->bd = new BDo();
	
		$sql = "select * from new_produto where permalink= '" . parametros(1) . "'";
		//echo $sql;
		$rss = $this->bd->query($sql);
		$produto_rs = $rss->fetchAll();	
		$this->produto = $produto_rs[0];
		error_log('chamou so agora');

	parent::__construct(array(
	"titulo"=>$this->produto['nome'],
	"skel"=>"global",
	"js"=>array("galleria-1.2.3.js"),
	"description"=>"i need a miracle"
	));

    
    //echo "o loko";

		
	}
	
	function produto()
	{
	    return ($this->produto);
	}
	
	
	function __destruct()
	{
		parent::__destruct();
		//include ()		
	}

}
