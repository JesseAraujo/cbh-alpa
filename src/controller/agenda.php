<?php
require 'connect/connect.php';

//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;


//Selecionar todas noticias
$sql = "SELECT * FROM cbhalpa_noticias";
$resultado = mysqli_query($con, $sql);

//Contar o total de noticias
$total_noticias = mysqli_num_rows($resultado);

//Seta a quantidade de noticias por pagina
$quantidade_pg = 6;

//calcular o número de pagina necessárias para apresentar as noticias
$num_pagina = ceil($total_noticias / $quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg * $pagina) - $quantidade_pg;

//Selecionar as noticias a serem apresentado na página
$sql = "SELECT * FROM cbhalpa_noticias order by data_pos_not desc limit $incio, $quantidade_pg ";
$resultado = mysqli_query($con, $sql);
$total_noticias = mysqli_num_rows($resultado);


require 'cards.php';

?>


<section>
    <div class="agenda">
        <div class="container">
            <?php
            //Verificar a pagina anterior e posterior
            $pagina_anterior = $pagina - 1;
            $pagina_posterior = $pagina + 1;
            ?>


            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <?php

                        //icone Primeira Página
                        if ($pagina_anterior != 0) { ?>
                            <!--
                        Verifica se a página solicitada não é a principal. Caso seja principal, o if cairá no else para inabilitar o botão "Primeira Página"
                        -->
                            <a class="page-link" href="Agenda-CBH-ALPA?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous" title="Anterior">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        <?php } else { ?>
                            <a class="page-link" aria-label="Previous" title="Anterior">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        <?php }  ?>
                    </li>

                    <?php

                    //Apresentar a paginacao
                    for ($i = 1; $i < $num_pagina + 1; $i++) { ?>
                        <li class="page-item"><a class="page-link" href=" Agenda-CBH-ALPA?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php } ?>

                    <li class="page-item">
                        <?php
                        if ($pagina_posterior <= $num_pagina) { ?>
                            <!--
                        Verifica se a página solicitada é a principal. Caso seja principal, o if cairá no else para habilitará o botão "Última Página"
                        -->
                            <a class="page-link" href="Agenda?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous" title="Próxima">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        <?php } else { ?>
                            <a class="page-link" aria-label="Previous" title="Próxima">
                                <span aria-hidden="true">&raquo;</span>
                            </a>

                        <?php }  ?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>