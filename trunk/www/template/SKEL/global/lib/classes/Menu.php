<?php
	class Menu
	{
		
		function __construct ($do)
		{
			$this->bd = new BDo();
			$this->{$do}();
		}
		
		function fetchCat()
		{
			$sql = 'SELECT * FROM categoria';
			$res = $this->bd->query($sql);
			if($res->rowCount() > 0)
			{
				return $res;				
			}
			else
				return false;
		}
		
		function fetchSubCat()
		{
			$sql = 'SELECT * FROM subcategoria WHERE cd_categoria=' . $this->cat_id;
			$res = $this->bd->query($sql);
			if($res->rowCount() > 0)
			{
				return $res;				
			}
		}
		
		function printCategorias()
		{
			$res = $this->fetchCat();
			$res = $res->fetchAll();
			foreach($res as $chave=>$valor)
			{
				$this->cat_id = $res[$chave]['cd_categoria'];
				echo '<b>' . utf8_encode($res[$chave]['categoria']) . '</b><br/><br/>';
				$this->printSubcategorias();
			}
		}
		
		function printSubcategorias()
		{
			$res = $this->fetchSubCat();
			$res = $res->fetchAll();
			foreach($res as $chave=>$valor)
			{
					echo '<span>' . utf8_encode($res[$chave]['subcategoria']) .  '</span><br/>';
			}
		}
	}
