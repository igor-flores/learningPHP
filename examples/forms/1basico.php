<!-- Inclusão do Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- Fim da inclusão do Bootstrap -->
<?php
    /* Esse arquivo receberá os dados do formulário 1 em 0form.html
     * Se o method for post, existirão variáveis do tipo $_POST
     * Se for get, existirão variáveis do tipo $_GET
     * Ambas são arrays e suas posições serão os names definidos nos inputs do próprio formulário
     */
    $nome = $_GET['nome'];
    echo("<br>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='card'>
                        <div class='card-header'>
                        Seja bem-vindo!
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>Olá, $nome! Tudo bem?</h5>
                            <p class='card-text'>Espero que este repositório esteja te ajudando!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ");
?>