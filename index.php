<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>learningPHP</title>
        <meta charset="utf-8">
        <!-- Inclusão do Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <!-- Fim da inclusão do Bootstrap -->
        <style>
            a{color: #252525;}
            a:hover{color: #000000;}
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#"> learningPHP </a>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> <br>
                    <h2>Bem vindo!</h2>
                    <p>Este repositório usa como referência o <a href="">manual do PHP</a> e para sua estilização o framework <b><a href="https://getbootstrap.com/docs/4.5/getting-started/introduction/">Bootstrap v.4.5.2</a></b>.</p>
                    <p>Abaixo estão separados em módulos, exemplos sobre determinados assuntos. Os links disponíveis mostram o código interpretado, para a compreensão é necessário abrir os códigos. Você pode encontrá-los seguindo os diretórios embaixo dos módulos, entre os colchetes [ ] estão o nome dos arquivos de cada exemplo.</p>
                    <p>No módulo de Banco de Dados é utilizado como modelo o banco sakila, você deve criá-lo e importar o código sakila.sql incluso nesse repositório.</p>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <h3>Introdução</h3>
                    <pre>examples/introducao/</pre>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="examples/1introducao/1basico.php" target="_blank">[1basico.php] Noções básicas</a> </li>
                        <li class="list-group-item"><a href="examples/1introducao/2condicionais.php" target="_blank">[2condicionais.php] Estruturas Condicionais</a> </li>
                        <li class="list-group-item"><a href="examples/1introducao/3repeticao.php" target="_blank">[3repeticao.php] Laços de Repetição</a> </li>
                        <li class="list-group-item"><a href="examples/1introducao/4funcoes.php" target="_blank">[4funcoes.php] Criar Funções</r></a> </li>
                    </ul>
                    <br>
                    <h3>Formulários</h3>
                    <pre>examples/forms/</pre>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="examples/2forms/0form.html" target="_blank">[0form.php] Formulário em HTML</a> </li>
                        <li class="list-group-item">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="examples/2forms/1basico.php" target="_blank">[1basico.php] Formulário em HTML</a> </li>
                                <li class="list-group-item"><a href="examples/2forms/2tratamento.php" target="_blank">[2tratamento.php] Formulário em HTML</a> </li>
                            </ul>
                        </li>
                        <li class="list-group-item"><a href="examples/2forms/3mesmaPagina.php" target="_blank">[3mesmaPagina.php] Tratar formulário na mesma página</a> </li>
                        <li class="list-group-item"><a href="examples/2forms/4arquivos.php" target="_blank">[4arquivos.php] Tratar arquivos</a> </li>
                    </ul>
                    <br>
<!--                    <h3>Banco de Dados</h3>-->
<!--                    <pre>examples/mysql/</pre>-->
<!--                    <ul class="list-group list-group-flush">-->
<!--                        <li class="list-group-item"><a href="examples/3mysql/1basico.php" target="_blank">[1basico.php] Noções básicas</a> </li>-->
<!--                    </ul>-->
<!--                    <br>-->

                </div>
            </div>
        </div><br><br>
    </body>
</html>