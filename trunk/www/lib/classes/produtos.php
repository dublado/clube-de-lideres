<?php
class produtos extends siteman 
{

	function __construct ()
	{
//exit;
		$pages = new Paginator();
		$this->bd = new BDo();
//exit;
        //echo (isset(parametros(2)) ? ( parametros(2)=="marca" ? parametros(3) : "ok" ) : "nao");

        $lola = parametros(1);
        $comparisson = isset($lola) ? (parametros(1)=="marca" ? " $parametros and m.marca ='".parametros(2)."'" : "" ) : "";
        $parametros = (isset($parametros) ? " and $comparisson" : $comparisson);
        
        
        
        //$parametro = isset($parametros) 
        
		$sql = "select * from new_produto np left join marca m on np.cd_marca=m.cd_marca where ((status_novo=1 or status_novo = 'True' ) and status=1) and (nome like '%".
		(parametros(1)!="marca" ? parametros(1) : "") 
		."%') $parametros order by cd_produto";
		// desc limit 0,10
		
		//echo $sql;
		$rss = $this->bd->query($sql);

		/*
		$this->produtos = $rss->fetchAll();	*/


if($rss->rowCount()>0){


		$pages->items_per_page=10;
		$pages->mid_range=5;
		$pages->items_total = $rss->rowCount();

		$pages->paginate();
		$q = "$sql $pages->limit";
		//echo $q;
		$resultados = $this->bd->query($q);
		$this->produtos = $resultados->fetchAll();
	    $this->pag = $pages->display_pages();
}else{$this->pag="";$this->produtos=array();}

        $sql = "select marca from marca order by marca";
		$rss = $this->bd->query($sql);
		$this->fabricantes = $rss->fetchAll();
		$temp="";
		foreach($this->fabricantes as $id=>$val){
		$temp.="<option".( $comparisson = isset($lola) ? (parametros(1)=="marca" ? (parametros(2)==$val["marca"] ? " selected " : "") : "" ) : "" ).">".$val["marca"]."</option>";
		}
		$this->fabricantes=$temp;


        $titulo = "Produtos";
        	
		parent::__construct(
		array(
		"titulo"=>$titulo,
		"skel"=>"global",
		"description"=>"i need a miracle",
		));
		
	}
	
	function produtos()
	{
	    return array('resultados'=>$this->produtos, 'paginacao'=>$this->pag,'fabricantes'=>$this->fabricantes);
	}
	
	function __destruct()
	{
		parent::__destruct();
	}

}
