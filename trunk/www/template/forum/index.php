<div class='forum-panel'>
	<img src="forum/images/logo.jpg" height="30" class="forum-logo"/>
	<input type="text" size="100" value="Pesquise as mensagens do grupo" style='border:1px solid #bfbfbf;height:30px;margin:0;margin-left:5px;'/><input type="button" value="Pesquisa" style="height:32px;border:1px solid #bfbfbf;border-left:0;margin:0;padding:5px;"/>
	<span class="forum-config">altere sua configuração no grupo</span>
</div>

Olá, <b>Thiago Machado</b>

<?php
switch(parametros(1))
{
	case "mensagem":
	include "mensagem.php";
	break;
	default:
	include "forum.php";
	break;
}
?>
