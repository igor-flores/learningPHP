<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <title>Tratar Arquivos</title>
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
    if(isset($_POST['enviar'])){
        /* Apesar do metodo ser post, os arquvios são tratados como $_FILES
         * Também é um array, porém de duas posições
         * Sua primeira posição é o name do input
         * Você pode usar a função var_dump($_FILES); para conferir as demais posições
         * Para esse exemplo vamos usar o tmp_name (caminho temporário onde o arquivo enviado esta salvo)
         */
        if(isset($_FILES['image']) && $_FILES['image']['tmp_name'] != ''){
            $imagem = $_FILES['image'];
            /* A função copy permite copiar um arquivo de um lugar a outro
             * mandamos a imagem que está em um local temporário (tmp_name) para a pasta images com o mesmo nome enviado(name)
             * Se deu certo enviará uma mensagem de sucesso
             */
            if(copy($imagem['tmp_name'], "images/".$imagem['name'])){
                echo ("
                    <script>
                        alert('Imagem salva em examples/2forms/images');
                    </script>
                ");
            }else{
                echo ("
                    <script>
                        alert('Imagem não foi salva, pode ter ocorrido dela ser muito grande! Confira o limite de upload do xampp');
                    </script>
                ");
            }
        }
    }
    ?>
</head>
<body><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <h2>Envie uma imagem</h2>
            <!-- Repare que no formulário foi inserido o atributo enctype -->
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image">Insira uma Imagem</label>
                    <!-- Aqui também temos o atributo accept, para buscar apenas imagens -->
                    <input type="file" name="image" class="form-control-file" id="image" accept="image/*" >
                </div>
                <input type="submit" name="enviar" value="Enviar" class="btn btn-outline-success">
            </form>
        </div>
    </div>
</div>
</body>
</html>
