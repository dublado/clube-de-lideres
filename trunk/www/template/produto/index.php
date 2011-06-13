<div id='caminho'>
    <a href="#">Home</a> » <a href="#">Câmeras</a>
    <a href="#" class="voltar">Voltar</a>
</div>
<?php

    $produto=produto::produto();

?>
<div class='dados'>
<?php
	/*
	<div class="grande"><img src="http://bctv.com.br/admin/5/arquivos/7/foto/882008170944.jpg"/></div>
	<img class='pequena' src='http://bctv.com.br/admin/5/arquivos/7/album/hdv_100_570_1.jpg'/>
	<img class='pequena' src='http://bctv.com.br/admin/5/arquivos/7/album/hdv_100_570_1.jpg'/>
	<img class='pequena' src='http://bctv.com.br/admin/5/arquivos/7/album/hdv_100_570_1.jpg'/>
	*/
?>

        <div id="galleria">
            <!--<a href="http://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Locomotives-Roundhouse2.jpg/1000px-Locomotives-Roundhouse2.jpg">
            	<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Locomotives-Roundhouse2.jpg/100px-Locomotives-Roundhouse2.jpg">
        	</a>-->
            <a href="http://www.rookscastle.com/tutorials/bttf-011.jpg">
            	<img src="http://www.ants.com.br/envio/produto_detalhes.jpg">
        	</a>
        </div>
    </div>
    
	<div class="ficha">
		<h1><?php echo ($produto['nome']);?></h1>

		<p>
			<?php echo ($produto['introducao']);?>
		</p>

		<a href='#'><div class='botaoverde'>Adicionar ao orçamento</div></a> 
		<a href='#'><div class='botaocinza'>Compare com outra câmera</div></a> 
		<a href='../produto/'><div class='botaocinza'>Mais detalhes</div></a> 
		<table>
			<tr>
				<td width="80">
					<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="bctv_com_br">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
				</td>
				<td>
					<iframe src="http://www.facebook.com/plugins/like.php?app_id=223507910993794&amp;href=http%3A%2F%2Fwww.bctv.com.br<?echo urlencode($_SERVER['REQUEST_URI']); ?>&amp;send=false&amp;layout=button_count&amp;width=50&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>
					<br/>
<!-- Place this tag in your head or just before your close body tag -->
<script type="text/javascript" src="http://apis.google.com/js/plusone.js">
  {parsetags: 'explicit'}
</script>

<!-- Place this tag where you want the +1 button to render -->
<g:plusone size="medium"></g:plusone>

<!-- Place this render call where appropriate -->
<script type="text/javascript">gapi.plusone.go();</script>					
				</td>
			</tr>
		</table>

	</div>    


	<div id="box_tabs">
					<ul class="tabs">
						<li class="active"><a href="#tab1">Descricao</a></li>
						<li class=""><a href="#tab2">Dados tecnicos</a></li>
						<li class=""><a href="#tab3">Itens inclusos</a></li>
						<li class=""><a href="#tab4">Conteudo exclusivo</a></li>
					</ul>
					<div class="tab_container">
						<div class="tab_content" id="tab1" style="display: block;">
							<?php echo ($produto['introducao']);?>
						</div>
						
						<div class="tab_content" id="tab2" style="display: none;">
							Dados Técnicos
						</div>
						
						<div class="tab_content" id="tab3" style="display: none;">
							Itens Inclusos
						</div>
						
						<div class="tab_content" id="tab4" style="display: none;">
												</div>
						
					</div>
	</div>

</div>


