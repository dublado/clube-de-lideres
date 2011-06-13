<?php
header('Content-type: text/html; charset=UTF-8');

$this->bd = new BDo();


if( parametros(3) != "" )
{
    $p = parametros(3);

    if( parametros(4) == "produto")
    {
		$sql = "SELECT * FROM new_produto WHERE nome LIKE '%" . $p . "%' order by nome limit 10";
		//echo $sql;
		//error_log($sql);
		$r = $this->bd->query( $sql );
		if ( $r )
		{
			echo '<ul>'."\n";
			while( $l = $r->fetchObject())
			{
			$p = $l->nome;
			$p = preg_replace('/(' . $p . ')/i', '<span style="font-weight:bold;" onclick="jogarBusca($(this).text())">$1</span>', $p);
			echo "\t".'<li id="autocomplete_'.$l->cd_produto.'" rel="'.utf8_encode($l->nome).'">'. utf8_encode( $p ) .'</li>'."\n";
			}
			echo '</ul>';
		}
    }
}

