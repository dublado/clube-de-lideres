<?php
class membro extends siteman 
{

	function __construct ()
	{
		global $membro;
		
		$this->bd = new BDo();
	
        
		parent::__construct(
		array(
		"titulo"=>"",
		"skel"=>"header_footer",
		"description"=>"i need a miracle"
		));
		
		
	}
	
	function membro($nome)
	{
		$membro = split(" ",$nome);
		$membro = $membro[count($membro)-1];
		
		$sql = "select * from membros_tempo where concat(membros_tempo.login,' ',membros_tempo.email) like '%$membro%'";//echo $sql;
		$rss = $this->bd->query($sql);
		$membro = $rss->fetchObject();	
		
		$sql = "select count(*) as qtd from forumm where membro like  '%$$nome%'";//error_log($sql);
		$rss = $this->bd->query($sql);
		$posts = $rss->fetchObject();
		$posts = $posts->qtd;	
		
		return array('resultado'=>$membro,'posts'=>$posts);
		
	}
	
}
