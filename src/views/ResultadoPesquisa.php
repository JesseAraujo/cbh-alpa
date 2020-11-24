<?php
require '../components/header.php';
require '../components/nav.php';
?>

<div class="content">

    <!--
--------------------------------------------------------
BREADCRUMB
--------------------------------------------------------
-->
    <section>
        <div class="mapaSite">
            <div class="container">
                <ol class="breadcrumb mapaSite">
                    <li class="breadcrumb-item"><a href="/">Início</a></li>
                    <li class="breadcrumb-item"><a href="Agenda-CBH-ALPA">Agenda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Resultado da Pesquisa</li>
                </ol>
            </div>
        </div>
    </section>


    <!--
--------------------------------------------------------
TÍTULO DA PÁGINA
--------------------------------------------------------
-->
    <section>
        <div class="tituloPage">
            <div class="container">
                <label> RESULTADO DA PESQUISA</label>
            </div>
        </div>
    </section>


    <!--
--------------------------------------------------------
CONTEUDO
--------------------------------------------------------
-->
    <section>
        <div class="container">
            <?php
            require '../components/pesquisaAgenda.php';
            ?>
        </div>
    </section>


    <?php
    require '../controller/ResultadoPesquisa.php';
    ?>

</div>
<!--content-->


<!--
--------------------------------------------------------
FOOTER
--------------------------------------------------------
-->
<?php
require '../components/footer.php';
?>