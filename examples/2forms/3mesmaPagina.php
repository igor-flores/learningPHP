<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title>Quantidade de letras no nome</title>
    <!-- Inclusão do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Fim da inclusão do Bootstrap -->

    <?php
    /* Nesse exemplo o formulário será tratado na mesma página
     * Usando a função isset para conferir se o formulário foi enviado ou não, para que não apareça erros
     * Nesse exemplo vamos contar quantas letras tem o nome de uma pessoa
     */
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        /* A função str_replace substitui ocorrências em uma string
         * Nesse caso vamos substituir os possíveis espaços em branco(' ') por nada('')
         */
        $nome = str_replace(" ", "", $nome);
        # A função strlen conta quantos caracteres possui uma string
        $nome = strlen($nome);
        // Será ecoado um código em javascript
        echo ("
            <script>
                alert('Seu nome possui $nome letras');
            </script>
        ");
    }
    ?>
</head>
<body><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <h2>Confira quantas letras seu nome possui</h2>
            <form action="" method="post">
                <input class="form-control" name="nome" placeholder="Insira seu nome"><br>
                <input type="submit" name="enviar" value="Enviar" class="btn btn-outline-success">
            </form>
        </div>
    </div>
</div>
</body>
</html>
