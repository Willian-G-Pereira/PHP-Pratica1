<?php

$pessoa = [ "nome" => "Jon",
            "sobreNome" =>"Snow", 
            "idade" => 27, 
            "Passatempo" => ["Netflix", "Futebol", "Música"]
        ];

        // echo "<pre>";
        // var_dump ($pessoa);

// echo "<br>";
// echo "==================<br>";
// echo "<br>";

$pessoa["idade"] = 25;

// var_dump ($pessoa);

// echo "<br>";
// echo "==================<br>";
// echo "<br>";


$pessoa["endereço"] = "Winterfell";

        // echo "<pre>";
        // var_dump ($pessoa);


// echo "<br>";
// echo "==================<br>";
// echo "<br>";


$pessoa["Passatempo"][] = "Programação";
        // echo "<pre>";
        // var_dump ($pessoa);  




echo "Condicionais";

echo "<br>";
echo "==================<br>";
echo "Exercício 1 <br> <br>";

$a = 42;
$b = 50;

$result = $a > $b ? $a : $b;

echo "O maior valor é $result";
echo "<br>";
echo "==================<br>";
echo "Exercício 2 <br> <br>";


$numeroAleatorio = rand(1, 5);

var_dump($numeroAleatorio); 
echo "<br>";

if ($numeroAleatorio == 3 || $numeroAleatorio == 5){  
    echo " $numeroAleatorio é um Número da Sorte";
} else{
    echo(" $numeroAleatorio Não é número da sorte");
}

echo "<br>";
echo "==================<br>";
echo "Exercício 3 <br> <br>";

if ($numeroAleatorio == 3 || $numeroAleatorio == 5){  
    echo " $numeroAleatorio é um Número da Sorte";
} else{
    echo(" $numeroAleatorio Não é número da sorte");
}


echo "<br>";
echo "==================<br>";
echo "Exercício 4 <br> <br>";


$outroAleatorio = rand (1, 100);
echo "<br>";
echo $outroAleatorio;
echo("<br>");

// if ($outroAleatorio >= 50 ){
//     echo("Maior que 50");
// }else{
//     echo("Menor que 50");
// }

$maior = $outroAleatorio >= 50 ? "Maior que 50" : "Menor que 50";
echo $maior;

echo "<br>";
echo "==================<br>";
echo "Exercício 5 <br> <br>";

$username = "admin";
$password = "1234";

if($username == "admin" && $password == "1234"){
    echo("Bem Vindo");
}else{
    echo("Erro de login");

}

echo "<br>";
echo "==================<br>";
echo "Exercício 7 <br> <br>";


$number = rand(1, 10);
echo $number;
echo("<br>");

echo($number %2 == 0) ? " Número Par" : "Número Ímpar";


echo "<br>";
echo "==================<br>";
echo "Exercício 8 <br> <br>";

$nota = 8;
echo("Sua nota foi $nota ");

switch ($nota) {
    case 1:
    echo "Aluno reprovado";
        break;
    case 2:
    echo "Aluno reprovado";
        break;

    case 3:
    echo "Aluno reprovado";
        break;
    
    case 4:
    echo "Na risca";
        break;

    case 5:
    echo "Na risca";
        break;
    
    case 6:
    echo "Bom !!!";
        break;
        
    case 7:
    echo "Bom !!!";
        break;

    case 8:
    echo "Bom !!!";
        break;

    case 9:
    echo " MUITO BOM !! ";
        break;

    default:
    echo " Excelente !!!!! ";
        break;
}






?>