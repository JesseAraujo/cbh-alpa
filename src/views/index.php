<?php
require '../components/header.php';
?>

<div class="container content">

    <?php
    require '../components/carousel.php';
    ?>



    <?php
    require '../components/link-in-button.php'
    ?>

    <hr>

    <main>
        <div id="noticias">
            <div class="tituloPage">
                <label> Últimos Eventos </label>
            </div>
            <div class="row">
                <?php
                require '../controller/ultimasNoticias.php';
                ?>
            </div>
        </div>
    </main>

    <hr>



    <div class="icones-orgaos">
        <div class="text-center">
            <a href="https://paranapanema.org/" target="new">
                <img src="src/assets/images/cbhpara.png" class="rounded" title="CBH Paranapanema - Comitê da Bacia Hidrográfica do Rio Paranapanema" width="60" height="60" alt="CBH Paranapanema - Comitê da Bacia Hidrográfica do Rio Paranapanema">
            </a>
            <a href="https://www.ana.gov.br/" target="new">
                <img src="src/assets/images/ana.png" class="rounded" title="ANA - Agência Nacional de Águas" width="60" height="60" alt="ANA - Agência Nacional de Águas">
            </a>
            <a href="http://www.daee.sp.gov.br/" target="new">
                <img src="src/assets/images/daee.jpg" class="rounded" title="DAEE - Departamento de Águas e Energia Elétrica" width="60" height="60" alt="DAEE - Departamento de Águas e Energia Elétrica">
            </a>
            <a href="http://www.sigrh.sp.gov.br/" target="new">
                <img src="src/assets/images/sigrh.png" class="rounded" title="Sistema Integrado de Gerenciamento de Recursos Hídricos do Estado de São Paulo" width="60" height="60" alt="Sistema Integrado de Gerenciamento de Recursos Hídricos do Estado de São Paulo">
            </a>
            <a href="http://fehidro.sigrh.sp.gov.br/fehidro/index.html" target="new">
                <img src="src/assets/images/fehidro.png" class="rounded" title="FEHIDRO - Fundo Estadual de Recursos Hídricos" width="60" height="60" alt="FEHIDRO - Fundo Estadual de Recursos Hídricos">
            </a>
            <a href="http://www.saopaulo.sp.gov.br/" target="new">
                <img src="src/assets/images/sp.png" class="rounded" title="Governo do Estado de São Paulo" width="100" height="70" alt="Governo do Estado de São Paulo">
            </a>
        </div>
    </div>



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