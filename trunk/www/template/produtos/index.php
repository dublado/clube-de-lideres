<?php
$produtos=produtos::produtos();

?>

<div id='caminho'>
    <a href="#">Home</a> » <a href="#">Câmeras</a>
</div>
<div id='filtro'>
    Ache o produto que está interessado filtrando a marca
    <select id='the_fabricante' name='the_fabricante' onchange='javascript:busca_por_fabricante(this);'>
    <option>Fabricante</option>
    <?php 
    echo $produtos["fabricantes"];
    ?>
    </select>
   
<span class="paginacao"><?php echo utf8_decode($produtos['paginacao']) ?></span>
</div>

<ul class='produtos'><?
foreach($produtos['resultados'] as $id=>$val){
?><li class='item'><?php
    echo "<img src='http://bctv.com.br/admin/5/arquivos/". $val['cd_produto'] ."/foto/" . $val['thumb'] . "'/>\n";
    //var_dump($val);
    echo "<h2>" . $val['nome'] . "</h2>\n";
    echo '<p>' . parent::string_limit_words(strip_tags(utf8_encode($val['introducao'])),50)."...</p>";
    
?>
<div class='base'> 
<a href='#'><div class='botaoverde'>Adicionar ao orçamento</div></a> 
<a href='#'><div class='botaocinza'>Compare com outra câmera</div></a> 
<a href='../produto/<?php echo $val['permalink'] ;?>'><div class='botaocinza'>Mais detalhes</div></a> 
</div>
</li><?php
}
if(count($produtos['resultados'])==0){echo "Nenhum produto encontrado";}
?>
<div id='filtro'>
    Ache o produto que está interessado filtrando a marca
    <select id='the_fabricante' name='the_fabricante' onchange='javascript:busca_por_fabricante(this);'>
    <option>Fabricante</option>
    <?php 
    echo $produtos["fabricantes"];
    ?>
    </select>
   
<span class="paginacao"><?php echo utf8_decode($produtos['paginacao']) ?></span>
</div>
</ul>
