<!-- Inclusão do Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- Fim da inclusão do Bootstrap -->
<?php
    /* Para criar uma função declare function
     * dê um nome à ela e dentro dos parenteses os parametros que ela receberá
     * Uma função por si só não é executada, você deve chamá-la para que isso aconteça, como na linha 16
     * As variaveis criadas dentro de uma função tem validade somente dentro da mesma
     */
    function somarDoisValores($n1, $n2){
        return $n1 + $n2;
    }
    $soma = somarDoisValores(5, 5);
    echo $soma;

    # A função abaixo é criada com o bootstrap, por isso é a inclusão do framework no topo da página
    function bootstrapModal($titulo, $texto){
        echo("
            <div class='modal' tabindex='-1' id='myModal'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title'>$titulo</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                        <div class='modal-body'>
                            <p>$texto</p>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function (){
                    $('#myModal').modal('show')
                })
            </script>
        ");
    }
    bootstrapModal('Este é um título', 'Aqui é o corpo da modal');
?>