<?php



function filtraArray($umArray) {

    $resultado = [];

    for($i=0; $i<count($umArray); $i++){

            if ($umArray[i]%2 == 0){

              $resultado <= $umArray[i];

            }

    }

    echo "O Resultado é $resultado";
}




?>
