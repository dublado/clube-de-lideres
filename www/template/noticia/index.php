<h1>Noticias e Eventos</h1><?php
$noticias = noticia::noticias();

$descricao = str_replace("/painel/","http://www.bctv.com.br/painel/",$noticias->descricao);
//var_dump($noticias);
    //echo "$key - $value<br>";
    //var_dump($value);
    echo date("d/m/Y",strtotime($noticias->data))." - " . utf8_encode($noticias->titulo)."<br>";
    echo utf8_encode($descricao);   

