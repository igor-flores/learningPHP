<?php
    $i = 0;
    #Laço enquanto (while)
    while($i < 10){
        echo "$i ";
        $i++;
    }

    echo "<br>";

    /* O do-while, diferente do while, faz primeiro sua execução
     *  depois confere se a condição é verdadeira
     * No caso abaixo, mesma a condição sendo a mesma
     * ele acaba exibindo o valor de $i
     */
    do{
        echo "$i ";
        $i++;
    }while($i < 10);

    echo "<br>";

    #Laço para (for)
    for($i = 0; $i < 10; $i++){
        echo "$i ";
    }

    $array = ["Abacaxi", "Abacate", "Maçã"];
    foreach($array as $key => $value){
        /* Esse laço facilita iterações em arrays (vetores)
         * a variavel $key recebe a posição do vetor
         * enquanto $value recebe o valor guardado na posição
         * O laço termina quando chega na ultima posição do vetor
         */
        echo "<p> $key : $value</p>";
    }
?>