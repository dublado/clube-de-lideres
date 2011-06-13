<h1>Noticias e Eventos</h1><?php
$noticias = noticias::noticias();
foreach ($noticias as $key => $value)
{
    //echo "$key - $value<br>";
    //var_dump($value);

    echo "<a href='../noticia/".($value['permalink'])."/"."'>". 
    date("d/m/Y",strtotime($value['data'])) . " - " . 
    utf8_encode($value['titulo']) ."</a><br>";
    //exit;
    
}

