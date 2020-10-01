<!-- Todo o código em PHP, necessariamente será iniciado como na linha 2, encerrando com ?>  -->
<?php
    #Isso é um comentário em PHP

    /* Isso também é um comentário
     * Porém com N linhas
     */

    #Instrução para imprimir (ou ecoar) na tela
    echo "Hello World!";

    #Se você sabe usar HTML ou CSS, você pode usar dentro dos echos
    echo "<h1 style='color: aqua'> Hello World </h1>";

    /* Para declarar variáveis, você não precisar declarar o seu tipo
     * Para que uma variavel seja declarada, ela deve simplesmente colocar um $ no inicio
     * A atribuição é feita com o sinal =
     */
    $varTexto = "Isso é um texto";
    $varInt = 42;
    $varFloat = 5.1;
    $varBool = true;

    /* Vetores (arrays) podem ser declarados de N formas
     * Inclusive, no PHP, suas posições não são necessariamente numéricas
     * Ou seja, suas posições podem ser strings
     */
    $varVetor = [
        0 => "Essa é uma maneira",
        1 => "de declarar um array",
        "posicao" => "'posicao' é uma posição no vetor assim como 0 e 1"
    ];

?>