<div id="wrap">
		<div class="main">
		<div class="all">
				<div id="header">
					<a href=".."><img src="SKEL/global/images/bctv-logo.png" alt="BCTV" id="logo"></a>
					
					<div id="central_atnd">
						<span>Central de Atendimento (<a href="../central-de-atendimento" class="saiba_mais_top">saiba mais</a>):</span> <strong>4003-5544</strong> * Televendas: <strong>4003-2000</strong>
					</div>
				</div>
				
				<div id="menu">
					<ul id="menu_dropdown" class="menubar">
						<li class="submenu"><a href="../empresa">Empresa</a></li>
						<li class="submenu"><a href="../produtos">Produtos</a>
						  <ul class="menu">
							<li>
								<div>
									<?php $menu = new Menu('printCategorias');?>
									<!--
									<table cellpadding="10px" cellspacing="0" class="tabmenu">
										<tr>
											<td valign="top" width="205px">
												<strong>Baterias</strong><br />
												<a href="../produtos">» baterias - adptadores</a>
												<a href="../produtos">» baterias - carregadores</a>
												<br /><br />
												<strong>Carregadores</strong><br />
												<a href="../produtos">» carregadores - adaptadores</a>
												<br /><br />
												<strong>Cartões de memória</strong>
												<br /><br />
												<strong>Cases</strong>
												<br /><br />
												<strong>Computadores</strong><br />
												<a href="../produtos">» Apple</a>
											</td>
											
											<td width="15px">
												<img src="SKEL/global/images/line_menu_h.jpg">
											</td>
											
											<td valign="top" width="205px">
												<strong>Conversores</strong><br />
												<a href="../produtos">» Conversor de áudio</a>
												<a href="../produtos">» Conversor de áudio e vídeo</a>
												<a href="../produtos">» Conversor de vídeo</a>
												<br /><br />
												<strong>Duplicadores</strong>
												<br /><br />
												<strong>Estabilizadores</strong><br />
												<a href="../produtos">» Estabilizadores de câmeras</a>
												<br /><br />
												<strong>Estações</strong><br />
												<a href="../produtos">» Estações - plataforma de edição</a>
											</td>
											
											<td width="15px">
												<img src="SKEL/global/images/line_menu_h.jpg">
											</td>
											
											<td valign="top" width="205px">
												<strong>Filmadoras</strong><br />
												<a href="../produtos">» Filmadoras - Acessórios</a>
												<br /><br />
												<strong>Fitas</strong><br />
												<a href="../produtos">» Geradores de caracteres</a>
												<br /><br />
												<strong>Gravadores</strong><br />
												<a href="../produtos">» Gravador de vídeo</a>
												<a href="../produtos">» Gravadores externos</a>
												<br /><br />
												<strong>Estabilizadores</strong><br />
												<a href="../produtos">» Estabilizadores de câmeras</a>
											</td>
											
											<td width="15px">
												<img src="SKEL/global/images/line_menu_h.jpg">
											</td>
											
											<td valign="top" width="205px">
												<strong>Estações</strong><br />
												<a href="../produtos">» Estações - plataforma de edição</a>
												<br /><br />
												<strong>Filmadoras</strong><br />
												<a href="../produtos">» Filmadoras - Acessórios</a>
												<br /><br />
												<strong>Fitas</strong><br />
												<a href="../produtos">» Geradores de caracteres</a>
												<br /><br />
												<strong>Gravadores</strong><br />
												<a href="../produtos">» Gravador de vídeo</a>
												<a href="../produtos">» Gravadores externos</a>
											</td>
										</tr>
									</table>-->
								</div>
							</li>
						  </ul>
						</li>
						<li class="submenu"><a href="../servicos">Serviços</a></li>
						<li class="submenu"><a href="../representacoes">Representações</a></li>
						<li class="submenu"><a href="../noticias">Notícias</a></li>
					   <li class="submenu"><a href="../projetos">Projetos</a></li>
					   <li class="submenu"><a href="../eventos">Eventos</a></li>
					   <li class="submenu"><a href="../contato">Contato</a></li>
					</ul>
					

					<div id="camp_busca">
						<form onsubmit="return goBusca()">
							<input type="text" id="busca" name="busca" />
							<a href="javascript:goBusca();"><img src="SKEL/global/images/bt_ok.png" class="bt_ok"></a>
						</form>
					</div>
					
				</div>
		</div>		
		<?php new Destaque_rotativo(); ?>
		<div class="all">		
				<div id="content">
		<?php
			$this->doContent();
		?>
					</div>
		</div>			
	</div>		
</div>
<div id="footer">
			<div id="parceiros">
				<div id="box_parceiros">
					<img src="SKEL/global/images/paiceiros.png">
					<a href="http://www.apple.com/" target="_blank"><img src="SKEL/global/images/apple.png"></a> 
					<a href="http://www.blackmagic-design.com/" target="_blank"><img src="SKEL/global/images/bmdesign.png"></a> 
					<a href="http://www.caldigit.com/" target="_blank"><img src="SKEL/global/images/caldigit.png"></a> 
					<a href="http://www.newtek.com/" target="_blank"><img src="SKEL/global/images/newtek.png"></a> 
					<a href="http://www.matrox.com.br/" target="_blank"><img src="SKEL/global/images/matrox.png"></a> 
					<a href="http://www.jvc.com.br/" target="_blank"><img src="SKEL/global/images/jvc.png"></a> 
					<a href="http://www.panasonic.com.br/" target="_blank"><img src="SKEL/global/images/panasonic.png"></a> 
					<a href="http://www.manfrotto.com/" target="_blank"><img src="SKEL/global/images/manfrotto.png"></a>
				</div>
			</div>
	<div id="div_footer">
		<table align="center">
			<tr>
				<td valign="middle" width="150px"><img src="SKEL/global/images/bctv_footer.png"></td>
				<td valign="middle" width="600px">
					<a class="link_footer" href="..">HOME</a> &nbsp; | &nbsp; 
					<a class="link_footer" href="../empresa">EMPRESA</a> &nbsp; | &nbsp; 
					<a class="link_footer" href="../contato">CONTATO</a> &nbsp; | &nbsp; 
					<a class="link_footer" href="../mapa-do-site">MAPA DO SITE</a>
					<br /><br />
					©2011 BCTV - Todos os direitos reservados / Al. Joaquim Eugênio de Lima, 598 - São Paulo - SP 
				</td>
			</tr>
		</table>
	</div>
</div>
