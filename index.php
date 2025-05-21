<?php

//echo "Olá Mundo <br>"; 
//<br> quebra de linha html - navegador so entente HTML, Java
//usa \n se for executar no terminal
//echo "Soma 2 + 2 = ", 2 + 2;

/* comentario
    de bloco*/

/* $d = 3;
$e = 5;
$f = $d + $e;

echo "<br> Soma d + e = ", $f;*/


//13/05/2025
//Tabuada
/*echo "<br/>";
$multiplicador = 4;
echo "Tabuada do $multiplicador <br/>";
echo "1 x $multiplicador = ", 1 * $multiplicador, "<br/>";
echo "2 x $multiplicador = ", 2 * $multiplicador, "<br/>";
echo "3 x $multiplicador = ", 3 * $multiplicador, "<br/>";
echo "4 x $multiplicador = ", 4 * $multiplicador, "<br/>";
echo "5 x $multiplicador = ", 5 * $multiplicador, "<br/>";
echo "6 x $multiplicador = ", 6 * $multiplicador, "<br/>";
echo "7 x $multiplicador = ", 7 * $multiplicador, "<br/>";
echo "8 x $multiplicador = ", 8 * $multiplicador, "<br/>";
echo "9 x $multiplicador = ", 9 * $multiplicador, "<br/>";
echo "10 x $multiplicador = ", 10 * $multiplicador, "<br/>";
echo "<br/>";
$multiplicador_2 = 9;
echo "Tabuada do $multiplicador_2 <br/>";
for($i = 0; $i <=10; $i++)
{
    echo "$i X $multiplicador_2 = ", $i * $multiplicador_2, "<br/>";
}
*/
// 20/05/2025

// constante
const DATA_NASCIMENTO = "01/01/1950";
//constante sempre neste formato -> snake case e maiusculas
echo "<br/>";

echo DATA_NASCIMENTO,"<br/>";

echo date("d/m/y"), "<br/>";

echo date("d/m/y H:i:s"), "<br/>";

$potencia_10 = 4e20;
echo $potencia_10, "<br/>";

echo 4 * $potencia_10, "<br/>";

//mock/chumbado - valores fixos "informados pelo usuario"
/*$valorA = 3;
$valorB = 5;

if ($valorA == $valorB){
    echo "Os numeros são iguais!<br/>";
}else if ($valorA != $valorB){
    echo "Os numeros são diferentes!<br/>";
}else{
    echo "Não são valores validos!<br/>";
}*/

/**
 * verificar a apartir de um ano(numero) informado a idade do usuario, se é maior de idade.
*/

$ano_nascimento = 2010;
$ano = date("Y");

//echo $ano_nascimento, "<br/>", $ano, "<br/>";

$idade = $ano - $ano_nascimento;

if($idade < 18){
    echo "<br/>Sua idade é $idade anos - Menor de idade";
}else{
    echo "<br/>Sua idade é  $idade anos - Maior de idade";
}

/**
 * dadas as notas de 4 provas, a media para aprovação é 7.
 * calcular se o aluno atiniu a média e informar se o aluno foi aprovado.
 * 
 * calcular a média pnderada e harmonica
 */

echo "<br/> Médias";
echo "<br/>";
$nota_1 = 5;
$nota_2 = 6;
$nota_3 = 7.8;
$nota_4 = 6.7;

$media = ($nota_1 + $nota_2 + $nota_3 + $nota_4) / 4;


if($media < 7){
    echo "<br/> $media Reprovado";
}else{echo "<br/> $media Aprovado";}

$media_harmonica = 4 / (1/$nota_1 + 1/$nota_2 + 1/$nota_3 + 1/$nota_4 );
echo "<br/> Media Harmonica $media_harmonica";

$media_ponderada = ($nota_1 * 1 + $nota_2 * 2 + $nota_3 * 3 + $nota_4 * 4) / (1 + 2 + 3 + 4);
echo "<br/> Media Ponderada $media_ponderada";



