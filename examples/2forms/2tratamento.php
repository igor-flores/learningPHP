<?php
    /* Se você reparar, você pode acessar o arquivo 1basico.php
     * Se ele não possuir as variaveis dos inputs, ele dará um erro
     * Para corrigir isso podemos usar a função isset()
     * Ela serve para conferir se realmente existe a variavel
     */

    # Com esse if você confere se o formulário foi enviado (se existe um valor na var que é o botão enviar)
    if(isset($_GET['enviar'])){
        #O código abaixo é um if inline
        #         <condição>     ?    true     : false
        $n1 = isset($_GET['n1']) && ($_GET['n1'] != '') ? $_GET['n1'] : 0;
        $n2 = isset($_GET['n2']) && ($_GET['n2'] != '') ? $_GET['n2'] : 0;

        echo "$n1 + $n2 = ".($n1 + $n2);
    }else{
        echo "O formulário não foi enviado!";
    }
?>