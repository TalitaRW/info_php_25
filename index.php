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
//const DATA_NASCIMENTO = "01/01/1950";
//constante sempre neste formato -> snake case e maiusculas
/**echo "<br/>";

echo DATA_NASCIMENTO,"<br/>";

echo date("d/m/y"), "<br/>";

echo date("d/m/y H:i:s"), "<br/>";

$potencia_10 = 4e20;
echo $potencia_10, "<br/>";

echo 4 * $potencia_10, "<br/>";
*/
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
/*
$ano_nascimento = 2010;
$ano = date("Y");

//echo $ano_nascimento, "<br/>", $ano, "<br/>";

$idade = $ano - $ano_nascimento;

if($idade < 18){
    echo "<br/>Sua idade é $idade anos - Menor de idade";
}else{
    echo "<br/>Sua idade é  $idade anos - Maior de idade";
}
*/
/**
 * dadas as notas de 4 provas, a media para aprovação é 7.
 * calcular se o aluno atiniu a média e informar se o aluno foi aprovado.
 * 
 * calcular a média pnderada e harmonica
 */

/*echo "<br/> Médias";
echo "<br/>";
$nota_1 = 9;
$nota_2 = 6;
$nota_3 = 8;
$nota_4 = 6.7;

$media = ($nota_1 + $nota_2 + $nota_3 + $nota_4) / 4;
echo "<br/> Media = ", number_format($media, 2);

if($media < 7){
    echo "<br/> Reprovado";
}else{echo "<br/>Aprovado";}

$media_harmonica = 4 / (1/$nota_1 + 1/$nota_2 + 1/$nota_3 + 1/$nota_4 );
echo "<br/> Media Harmonica = ", number_format($media_harmonica, 2);

if($media_harmonica < 7){
    echo "<br/>Reprovado";
}else{echo "<br/>Aprovado";}

$media_ponderada = ($nota_1 * 1 + $nota_2 * 2 + $nota_3 * 3 + $nota_4 * 4) / (1 + 2 + 3 + 4);
echo "<br/> Media Ponderada = ", number_format($media_ponderada, 2);

if($media_ponderada < 7){
    echo "<br/>Reprovado";
}else{echo "<br/>Aprovado";}
*/

//CALCULADORA

// $operacao = "+";
// $valor_1 = 8;
// $valor_2 = 5;
// $resultado = 0;

// if ($operacao == "+"){
//     $resultado = $valor_1 + $valor_2;
//     echo "<br/> $valor_1 + $valor_2 = $resultado";
// } else if ($operacao == "-"){
//     $resultado = $valor_1 - $valor_2;
//     echo "<br/> $valor_1 - $valor_2 = $resultado";
// } else if ($operacao == "*"){
//     $resultado = $valor_1 * $valor_2;
//     echo "<br/> $valor_1 * $valor_2 = $resultado";
// } else if ($operacao == "/" && $valor_2 != 0){
//     $resultado = $valor_1 / $valor_2;
//     echo "<br/> $valor_1 / $valor_2", " = ", number_format($resultado, 2);
// }else{
//     echo "<br/>Operação Invalida";
// }

// switch ($operacao){
//     case '+':
//         echo "<br/> $valor_1 + $valor_2 =", number_format($valor_1 + $valor_2, 2);
//         break;
//     case "-":
//         echo "<br/> $valor_1 - $valor_2 = ", number_format($valor_1 - $valor_2, 2);
//         break;
//     case "*":
//         echo "<br/> $valor_1 * $valor_2 = ", number_format($valor_1 * $valor_2, 2);
//         break;    
//     case "/":
//         if ($valor_2 == 0){
//             echo "<br/>DIV/0";
//         }else{
//             echo "<br/> $valor_1 / $valor_2", " = ", number_format($valor_1 / $valor_2, 2);
//             break;
//         }

//     default;
//         echo "<br/><br/>Operação Invalida";
//         break;
// }

/*ler 3 valore e informar se eles são iguais*/
// $valor_A = 6;
// $valor_B = 6;
// $valor_C = 6;
// if ($valor_A == $valor_B && $valor_A == $valor_C){
//     echo "<br/> $valor_A = $valor_B = $valor_C <br/>Valores Iguais";
// }else {echo "<br/>Os valores não são iguais";}



/*ler 3 valores e informar o tipo de triangulo formado*/
// $lado_A = 82;
// $lado_B = 80;
// $lado_C = 44;
 
// //verificar existencia - soma de quaisquer dois lados deve ser maior que o terceiro
// if ($lado_A == $lado_B && $lado_B == $lado_C){
//     echo "<br/>Triangulo Equilátero";
// }else if ($lado_A + $lado_B > $lado_C && $lado_A + $lado_C > $lado_B && $lado_C + $lado_B > $lado_A){
//     if($lado_A != $lado_B && $lado_B != $lado_C){
//         echo "<br/>Triangulo Escaleno";
//     }else{echo "<br/>Triangulo Isóseles"; }
// }else{ echo "<br/>Não é triangulo!!!!";}

//FOR
// for($i = 0; $i < 10; $i++){
//     echo "<br/> $i";

// }
// echo "<br/> ----------------------";
// $i = 0;
// while ($i < 10){
//     echo "<br/> $i";
//     $i++;
// }
// echo "<br/> ----------------------";
// $j = 11;
// do{
//      echo "<br/> $j";
//     $j++;
// }while($j < 10);

/**refazer o exercicio da tabuada  */

// $multiplicador = 5;
// $i=0;
// for ($i = 0; $i <= 10; $i++){
//     echo "$i x $multiplicador = ", $i * $multiplicador, "<br/>";
// }

// echo "<br/>";

// $i = 0;
// while($i <= 10){
//     echo "$multiplicador x $i = ", $multiplicador * $i, "<br/>";
//     $i++;
// }

/**03/06/2025*/

// $a = 5/2;
// echo $a;
// echo "<br/>";
// $b = 5%2;
// echo $b;
// echo "<br/>";
// $c = intdiv(5,2);
// echo $c;

//para descobrir se é par ou não

// $resultado = 10 / 2;
// $resultado = 10 % 2;

// $numero = 1452362;
// $resto = $numero % 2;
// $par = $resto == 0;


//20 primeiros pares

// echo "FOR--------<br/>";
// $cont = 1;
// for($i = 0; $cont < 21; $i++){
//     if($i % 2 == 0){
//         echo "$cont -> $i <br/>";
//         $cont++;        
//     }
// }

// echo "WHILE--------";
// $cont = 1;
// $k = 0;
// while($cont < 21){
//     if($k % 2 == 0){
//         echo "<br/>$cont ->$k";
//         $cont++;
//     }
//     $k++;
// }
//contagem regressiva de 10 - 0
echo "<br/>CONTAGEM REGRES.";
for($i = 10; $i>=0; $i--){
    echo "<br/>$i";
}
echo "<br/>PRIMOS";
// encontrar os primeiros 5 primeiros primos

$numero = 2;
$cont = 0;

while ($cont < 15){
    $divisores = 0;
    
    for($div =1; $div <= $numero; $div++){
        if($numero % $div == 0){
            $divisores++;
        }
    }
    if($divisores == 2){
        $cont++;
        echo "<br/>$cont -> $numero";
        
    }
    $numero++;
    
}

echo "<br/>PRIMOS 2";
// encontrar os primeiros 5 primeiros primos
$cont = 0;
for($numero = 2; $cont < 15;  $numero++){
    $divisores = 0;
    for($div = 1; $div <= $numero; $div++){
        if($numero % $div == 0){
            $divisores++;
        }
    }
    if($divisores == 2){
        $cont++;
        echo "<br/>$cont -> $numero";
    }
}
