<?php
	$news = loader("index/newsletter");
 	$res = ($news->inserirEmail() ? true : false);
	if($res == true)
		echo 'E-mail cadastrado com sucesso!';
	else
		echo 'Erro ao cadastrar e-mail';
?>
