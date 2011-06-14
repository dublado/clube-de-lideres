<?php
//new siteman();

class forum extends siteman 
{

	function __construct ()
	{
		//global $membro;
		
		parent::__construct(
		array(
		"titulo"=>"agora é a página do forum!!!",
		"skel"=>"header_footer",
		"description"=>"i need a miracle"
		));
		
		$this->bd = new BDo();
		
		
	}
	
	function mensagem($id_mensagem)
	{
		$sql = "SELECT * FROM `forumm` 
		where id=$id_mensagem";//echo $sql."<Br>";
		$rss = $this->bd->query($sql);
		$rs = $rss->fetchObject();	
		
		
		$sql = "SELECT * FROM `forumm` WHERE titulo = '".$rs->titulo."' or titulo = 'Re: ".$rs->titulo."'";//echo $sql;
		$rss = $this->bd->query($sql.' order by data');
		$this->resultados = $rss->fetchAll();	
		
		
		$sql = "$sql group by membro";
		$rss = $this->bd->query($sql);
		$this->qtdmembros = count($rss->fetchAll());	

		return array('resultados'=>$this->resultados,'principal'=>$rs,'qtdmembros'=>$this->qtdmembros);
	}
	
	function mensagens()
	{

		$sql = "SELECT id,titulo,membro,data FROM `forumm` 
		where year(data) > 2002
		group by titulo order by data desc
		limit 0,100";//echo $sql;
		$rss = $this->bd->query($sql);
		$this->resultados = $rss->fetchAll();	

	

	    return array('resultados'=>$this->resultados);
	}	
	
	function mensagem_info($id)
	{
		$sql = "SELECT * FROM `forumm` 
		where id=$id";//echo $sql."<Br>";
		$rss = $this->bd->query($sql);
		$rs = $rss->fetchObject();	
		
		
		$sql = "SELECT data,count(data) as qtd FROM `forumm` WHERE titulo = '".$rs->titulo."' or titulo = 'Re: ".$rs->titulo."'";//echo $sql;
		$rss = $this->bd->query($sql.' order by data desc limit 0,1');
		$this->resultados = $rss->fetchAll();	
	    return array('qtd'=>$this->resultados[0]['qtd'],'lastupdate'=>$this->resultados[0]['data']);
	}

}
