<div class='forum-panel'>
	<img src="forum/images/logo.jpg" height="30" class="forum-logo"/>
	<input type="text" size="100" value="Pesquise as mensagens do grupo" style='border:1px solid #bfbfbf;height:35px;margin:0;margin-left:5px;'/><input type="button" value="Pesquisa" style="height:37px;border:1px solid #bfbfbf;border-left:0;margin:0;padding:5px;"/>
	<!--<table class="login-config">
		<tr>
			<td><label for="email">E-mail</label>
				<input type="text" name="email"/>
			</td>
			<td><label for="pass">Senha</label>
				<input type="text" name="pass"/>
			</td>
			<td>
				<input value="Entrar" tabindex="4" type="submit" id="u955718_3"/>
			</td>
		<!--Olá, <b>Thiago Machado</b> | altere sua configuração no grupo
		</tr>
	</table>-->
	<table cellspacing="0" class="login-config">
		<tr>
			<td><label for="email">E-mail</label></td>
			<td><label for="pass">Senha</label></td>
		</tr>
		<tr>
			<td><input type="text" class="inputtext" name="email" id="email" tabindex="1"></td>
			<td><input type="password" class="inputtext" name="pass" id="pass" tabindex="2"></td>
			<td><label><input value="Entrar" tabindex="4" type="submit"></label></td>
		</tr>
		<tr>
			<td class="login_form_label_field"><input type="checkbox" class="inputcheckbox" value="1" id="persistent" name="persistent" checked="1"><input type="hidden" name="default_persistent" value="1"><label id="label_persistent" for="persistent">Mantenha-me conectado</label></td><td class="login_form_label_field"><a href="http://www.facebook.com/recover.php" rel="nofollow">Esqueceu sua senha?</a></td></tr></tbody>
	</table>
</div>

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
