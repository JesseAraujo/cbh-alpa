<?php
require '../components/header.php';
require '../components/nav.php';
?>

<div class="content">

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


    <div class="container">

        <div class="tituloPage">
            <label> RESULTADO DA PESQUISA</label>
        </div>


        <?php
        require '../controller/ResultadoPesquisa.php';
        ?>

    </div>
</div>
<!--content-->



<?php
require '../components/footer.php';
?>