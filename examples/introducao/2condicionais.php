<?php
    #Vamos criar duas variaveis numéricas
    $n1 = 5;
    $n2 = 10;

    #Esse é um exemplo de Se-senão (if - elseif - else)
    if($n1 == $n2){
        echo "<p>$n1 é igual a $n2</p>";
    }elseif($n1 > $n2){
        echo "<p>$n1 é maior a $n2</p>";
    }else{
        echo "<p>$n1 é menor a $n2</p>";
    }

    #Escolha-caso (Escolha - caso)
    switch($n1){
        case $n2: echo "<p>É igual a $n2</p>"; break;
        default: echo "<p>Não é igual a $n1</p>";
    }
?>