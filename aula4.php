<?php
//salario= $dia = $valordia
 
$nome="Julia";
$sobrenome="Cavalcanti Rodrigues";
$idade="16";
$numero="3092";
$dia="21";
$valordia="100";
$salario="1900000";
$salario ="$dia" * "$valordia";
 
 
echo("nome: " .$nome. "<br>" );
echo("sobrenome: " .$sobrenome. "<br>");
echo ( "nome completo: " .$nome. "" .$sobrenome. "<br>");
echo("idade: " .$idade."<br>" );
echo ("numero: ".$numero."<br>");
echo ("dia: ".$dia."<br>");
echo ("valor dia: ".$valordia."<br>");
echo ("salário: R$".$salario."<br>");
echo ("salario: R$".$dia * $salario."<br>");

print("##########################################". "<br>" );
$a=10;
$b=20;
$soma;
$subtracao;
$multiplicacao;
$divisao;

$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;

echo ("".$soma. "<br>");
echo ("".$subtracao. "<br>");
echo ("". $multiplicacao. "<br>");
echo ("". $divisao. "<br>");



?>