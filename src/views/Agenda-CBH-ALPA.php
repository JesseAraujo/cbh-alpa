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
                    <li class="breadcrumb-item active" aria-current="page">Agenda</li>
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
        <div class="container">
            <div class="tituloPage">
                <label> Agenda </label>
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
    require '../controller/agenda.php';
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