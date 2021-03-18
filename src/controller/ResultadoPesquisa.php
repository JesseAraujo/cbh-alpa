<?php
require '../config/db.php';

//$busca = $_GET['busca']; //recebendo palavra digitada
//$busca = $_GET['busca'];


//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;


if (!isset($_GET['busca'])) {
    header("Location: Agenda");
} else {
    $busca = $_GET['busca'];
}

//Selecionar todas noticias
$sql = "SELECT * FROM cbhalpa_noticias where titulo_not like '%$busca%' or descricao_not like '%$busca%' or palavra_chave_not like '%$busca%' or sub_titulo_not like '%$busca%' order by data_pos_not desc";
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
$sql = "SELECT * FROM cbhalpa_noticias where titulo_not like '%$busca%' or descricao_not like '%$busca%' or palavra_chave_not like '%$busca%' or sub_titulo_not like '%$busca%' order by data_pos_not desc limit $incio, $quantidade_pg ";
$resultado = mysqli_query($con, $sql);
$total_noticias = mysqli_num_rows($resultado);
?>

<section>
    <div class="resulPesquisa">
        RESULTADO EM NOSSO SISTEMA POR: <span> <?php echo $busca; ?> </span>
    </div>
</section>


<?php
require 'cards.php';
?>



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
                <a class="page-link" href="ResultadoPesquisa?pagina=<?php echo $pagina_anterior ?>&busca=<?php echo $busca ?>" aria-label="Previous" title="Anterior">
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
            <li class="page-item"><a class="page-link" href="ResultadoPesquisa?pagina=<?php echo $i ?>&busca=<?php echo $busca ?>"><?php echo $i; ?></a></li>
        <?php } ?>

        <li class="page-item">
            <?php
            if ($pagina_posterior <= $num_pagina) { ?>
                <!--
                            Verifica se a página solicitada é a principal. Caso seja principal, o if cairá no else para habilitará o botão "Última Página"
                            -->
                <a class="page-link" href="ResultadoPesquisa?pagina=<?php echo $pagina_posterior ?>&busca=<?php echo $busca ?>" aria-label="Previous" title="Próxima">
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