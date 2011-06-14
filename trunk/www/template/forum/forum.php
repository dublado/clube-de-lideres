<?php $mensagens=forum::mensagens(); ?><div class="forum">
	<h1>Clube de lideres Online - fórum</h1>

	<div class='forum-messages'><span class='post-info'>Mostrando 32 de 29110 tópicos (100 não lidos)</span><br clear="both"/></div>
<?php
foreach($mensagens['resultados'] as $id=>$item){
	$mensagem = forum::mensagem_info($item['id']);
?>
	<div class="mensagem">
		<a href="../forum/mensagem/<?php echo $item['id'];?>" class="post-url">
			<div class="item">
				<div>
					<img src="../arquivos/perfil/loira.jpg" width="45" height="45" class="imagem-perfil"/>
					<span class='postagem-info'>
						<b>4 novas</b><br/>
						<?php echo $mensagem['qtd'];?> postagens
					</span>
					<img src="forum/images/star.png" class='star' height="20"/> <h2 class='titulo-post'><?php echo utf8_encode($item['titulo']);?></h2>
				</div>

				<span class="post-from">Por <?php echo utf8_encode($item['membro']);?></span> - <span class='post-update'>Última atualização em <?php echo date("d F",strtotime($mensagem['lastupdate']));?> (# meses)</span>
			</div>	
		</a>
	</div>
<?}?></div>
