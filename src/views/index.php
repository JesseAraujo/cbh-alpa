<?php
require '../components/header.php';
require '../components/nav.php';
?>

<div class="content">


    <!--
--------------------------------------------------------
CAROUSEL
--------------------------------------------------------
-->
    <section>
        <?php
        require '../components/carousel.php';
        ?>
    </section>

    <!--
--------------------------------------------------------
ULTIMAS NOTÍCIAS
--------------------------------------------------------
-->
    <section>
        <div class="noticias">
            <div class="row">

                <hr>

                <div class="col-md-3">
                    <?php
                    require '../components/pesquisa.php';

                    require '../components/barralateral.php';
                    ?>
                </div>

                <div class="col-md-9">

                    <div class="tituloPage">
                        <label> Últimos Eventos </label>
                    </div>

                    <div class="row">
                        <?php
                        require '../controller/ultimasNoticias.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>
    <!--
--------------------------------------------------------
ICONES -
--------------------------------------------------------
-->
    <section>
        <div class="icones-orgaos">
            <div class="text-center">
                <a href="https://paranapanema.org/" target="new"><img src="src/assets/images/cbhpara.png" class="rounded" title="CBH Paranapanema - Comitê da Bacia Hidrográfica do Rio Paranapanema"></a>
                <a href="https://www.ana.gov.br/" target="new"><img src="src/assets/images/ana.png" class="rounded" title="ANA - Agência Nacional de Águas"></a>
                <a href="http://www.daee.sp.gov.br/" target="new"><img src="src/assets/images/daee.jpg" class="rounded" title="DAEE - Departamento de Águas e Energia Elétrica"></a>
                <a href="http://www.sigrh.sp.gov.br/" target="new"><img src="src/assets/images/sigrh.png" class="rounded" title="Sistema Integrado de Gerenciamento de Recursos Hídricos do Estado de São Paulo"></a>
                <a href="http://fehidro.sigrh.sp.gov.br/fehidro/index.html" target="new"><img src="src/assets/images/fehidro.png" class="rounded" title="FEHIDRO - Fundo Estadual de Recursos Hídricos"></a>
                <a href="http://www.saopaulo.sp.gov.br/" target="new"><img src="src/assets/images/sp.png" class="rounded" title="Governo do Estado de São Paulo"></a>
            </div>
        </div>
    </section>


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