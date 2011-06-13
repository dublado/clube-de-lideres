<?php
class newsletter
{
	function inserirEmail()
	{
		
		$this->bd = new BDo();
		$query = 'INSERT INTO newsletter (email) VALUES (\'' . $_POST['email'] . '\')';
		$rss = $this->bd->query($query);
		return $rss;
	}
}

