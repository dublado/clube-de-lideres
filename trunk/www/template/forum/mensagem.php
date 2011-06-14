<?php $mensagem=forum::mensagem(parametros(2));?><div class="forum">
	<a href="../forum" class="back"><b>voltar para o forum</b></a>

	<div class='forum-messages'>
		<h1 class="post-titulo"><a href="#"><?php echo utf8_encode($mensagem['principal']->titulo); ?></a></h1>
		<?php echo count($mensagem['resultados']);?> postagens de <?php echo $mensagem['qtdmembros'];?> autores
		<span class="postagem-info">Atualizar</span>
	</div>
<?php
foreach($mensagem['resultados'] as $id=>$item){
?>
	<div class="mensagem">
			<div class="post">
					<img src="../arquivos/perfil/loira.jpg" width="45" height="45" class="imagem-perfil"/>
					<span class='postagem-info'><?php echo date("d M",strtotime($item['data']));?><a href="#"><b>responder</b></a></span>
					<img src="forum/images/star.png" class='star' height="20"/> <h2 class='post-from'><a href="../membro/<?php echo urlencode(utf8_encode($item['membro']));?>"><?php echo utf8_encode($item['membro']);?></a></h2>

					<div class="post-content"><?php echo utf8_encode((strip_tags($item['conteudo'],"<script><br>")));?></div>
				
			</div>	
	</div>
<?}?></div>
