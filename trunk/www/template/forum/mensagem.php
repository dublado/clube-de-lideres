<?php $mensagem=forum::mensagem(parametros(2)); ?><div class="forum">
	<a href="../forum" class="back"><b>voltar para o forum</b></a>
	<span class='messages-count'>Mostrando 32 de 29110 tópicos (100 não lidos)</span>

	<div class='forum-messages'><h1 class="post-titulo"><?php echo utf8_encode($mensagem['principal']->titulo); ?></h1></div>
<?php
foreach($mensagem['resultados'] as $id=>$item){
?>
	<div class="mensagem">
			<div class="post">
				<div>
					<img src="../arquivos/perfil/loira.jpg" width="45" height="45" class="imagem-perfil"/>
					<span class='postagem-info'><b>responder</b></span>
					<img src="forum/images/star.png" class='star' height="20"/> <h2 class='post-from'><a href="../membro/<?php echo urlencode(utf8_encode($item['membro']));?>"><?php echo utf8_encode($item['membro']);?></a></h2>

				<div class="post-content"><?php echo utf8_encode((strip_tags($item['conteudo'],"<script><br>")));?></div>
				</div>
			</div>	
	</div>
<?}?></div>
