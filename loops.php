<?php

echo("LOOP - FOR <br>**************<br>");

$tabuadado = 2;

echo("Tabuada do $tabuadado <br>============<br>");

        for($i=0; $i <=10; $i++){
            echo("$tabuadado X $i = "). ($tabuadado * $i). "<br>";
        }


echo("<br><br>**************<br>");
echo("LOOP - WHILE <br>**************<br>");

$num = 100;

while ($num >= 85) {
    echo "$num <br>";
    $num--; 
}

echo("<br><br>**************<br>");
echo("LOOP - WHILE - Exercicio 3 <br>**************<br>");

$counter = 1;
while ($counter <= 5) {
    echo $counter * 2 . "<br>";
    $counter++;
}

    echo("<br><br>**************<br>");
    echo("LOOP - WHILE - Exercicio 4 <br>**************<br>");

// $cara = 0;
// $jogadas = 0;

// while ($cara < 5) {
//     $moeda = rand(0,1);
//     echo "<br> moeda: $moeda";

//     if ($moeda == 1) {
//         $cara++;
//     }else{
//         $cara=0;
//     }

//     $jogadas++;
// }

// echo "<br>Foram realizadas $jogadas jogadas";
echo "Exercicio Comentado";

echo("<br><br>**************<br>");
echo("LOOP - FOR - Exercicio 5 <br>**************<br>");


$array =["Primeiro", "segundo", "terceiro", "quarto", "quinto"];

    for( $i=0; $i<count($array); $i++){

        echo $array[$i]. "<br>";

    }


echo("<br><br>**************<br>");
echo("LOOP - WHILE - Exercicio 5 <br>**************<br>");
$a=0;



while ($a < count($array)) {
    echo "$array[$a] <br>";
    $a++;
}

echo("<br><br>**************<br>");
echo("LOOP -DO WHILE - Exercicio 5 <br>**************<br>");

$b = 0;
do {
    echo "$array[$b] <br>";
    $b++;
} while ($b < count($array));

echo("<br><br>**************<br>");
echo("LOOP -FOREACH - Exercicio 5 <br>**************<br>");



foreach ($array as $chave => $valor) {
    echo "$chave: $valor <br>";
}

?>