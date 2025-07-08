/**usuario informa data - validar essa data
 * caso invalida retornar a proxima data correta
 * 29/02/2025 => 01/03/2025
 * fuçao expload
 */

// $data = "29/02/2025";
// $dataArray = explode("/", $data);

// function diaDia($dia){
//     return 1; 
// }
// function mesMes($mes){
//     return $mes + 1;
// }
// function data($dataArray){
//     $dia = (int)$dataArray[0];
//     $mes = (int)$dataArray[1]; 
//     $ano = (int)$dataArray[2];
    

//     if($mes < 1 || $mes > 13){
//         $dia = diaDia($dia);
//         $mes = 1; 
//         $ano += 1;
//     }
//     if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12){
//         //meses com 31 dias 
//         if ($dia > 31 ){
//             $dia  = diaDia($dia);
//             $mes = mesMes($mes);
//         }
//     }elseif($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11){
//             //meses com 30 dias
//             if ($dia > 30 ){
//                 $dia = diaDia($dia);
//                 $mes = mesMes($mes);
//             }
//     }elseif($mes == 2){
//         if($ano % 4 == 0 && $ano % 100 != 0 || $ano % 400 == 0){// ano bissexto
//             if($dia > 29){
//                 $dia = diaDia($dia);
//                 $mes = mesMes($mes);
//             }
//         }else{//ano não bissexto
//                 if($dia > 28){
//                     $dia = diaDia($dia);
//                     $mes = 3;
//                 }
//             }
    
//     }else{
//         $dia = diaDia($dia);
//         $mes = 1;
//         $ano = $ano + 1;

//     }
//     $dataCorrigida = $dia . "/" . $mes . "/" . $ano;
//     return $dataCorrigida;
// }
// echo "<br/>".data($dataArray);

//**
// ordenar os arrays em ordem decrescente
// $alfa = ["A", "B", "C", "D", "E"] 
// $numeros = [10, 20, 30, 40, 50]
// laço for e count*/

$alfa = ["A", "B", "C", "D", "E"];
$numeros = [10, 20, 30, 40, 50];
$aleatorio = [rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), 
                rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)];


//$vetor = $numeros;
//$cont = count($vetor);
//echo "<br/> $cont";
$vetor = [];

function ordenar($vetor){
    
    $cont = count($vetor);
    $novo = $vetor;

    for($i = 0, $j = ($cont-1); $i < $cont ; $i++, $j--){
        for($j = 0 ; $j < $cont - $i -1 ; $j++){

             if ($novo[$j] > $novo[$j + 1]) {
                // ordena os elementos 
                $aux = $novo[$j];
                $novo[$j] = $novo[$j + 1];
                $novo[$j + 1] = $aux;

            }
        }
   
    }
    return $novo;
}

$vetorOrdenado = ordenar($numeros);
echo "<br/>" . implode(", ", $vetorOrdenado);

$vetorOrdenado = ordenar($alfa);
echo "<br/>" . implode(", ", $vetorOrdenado);

echo "<br/>Vetor Desordenado: ". implode(", ", $aleatorio);
$vetorOrdenado = ordenar($aleatorio);
echo "<br/>Vetor Ordenado: " . implode(", ", $vetorOrdenado);
