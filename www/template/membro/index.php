<?php $membro = membro::membro(parametros(1));
//var_dump($membro);

//var_dump($membro['resultado']);
echo "<img src='../arquivos/perfil/avatar.jpg'/>";
echo "<h1>".$membro['resultado']->login. '</h1>'.$membro['resultado']->email.'<br>';
$data = strtotime($membro['resultado']->data);
$tempo = date("Y") - date("Y",$data);
if($tempo==0)
{
	$tempo = "há pouco tempo";
}elseif($tempo==1){$tempo = " apenas 1 ano";}else{$tempo = " há $tempo anos";}
echo "Membro " . $tempo."<br>";
echo "Desde: " . date("d/m/Y",$data);

