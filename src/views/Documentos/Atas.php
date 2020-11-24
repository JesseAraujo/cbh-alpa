<?php
require '../../components/header.php';
require '../../components/nav.php';
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
                    <li class="breadcrumb-item"><a href="../Documentos-CBH-ALPA">Documentos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Atas</li>
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
                <label> Atas </label>

            </div>
        </div>
    </section>


    <!--
--------------------------------------------------------
CONTEUDO
--------------------------------------------------------
-->
    <section>
        <div class="button-esconde-lista documentos">
            <div class="container">
                <div class="accordion" id="accordionExample">


                    <?php
                    $pasta = '../../../public/pdf/Atas';
                    $s = scandir($pasta);

                    //ordem decrescente dos diretórios
                    krsort($s);

                    foreach ($s as $k) {

                        if ($k != '.' && $k != '..') {
                    ?>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo "$k" ?>" aria-expanded="false" aria-controls="collapseTwo">
                                            <?php echo "Ano $k" ?>
                                        </button>
                                    </h2>
                                </div>
                                <div id=collapse<?php echo "$k" ?> class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">

                                        <?php
                                        //caminho onde os arquivos se encontram
                                        $files = glob("../../../public/pdf/Atas/$k/*.*");

                                        require '../../controller/listarDoc.php';

                                        ?>

                                    </div>
                                </div>
                            </div>

                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="sigrh">
                <a href="http://www.sigrh.sp.gov.br/cbhalpa/atas" title="SIGRH - Sistema Integrado de Gerenciamento de Recursos Hídricos do Estado de São Paulo">SIGRH | CBH-ALPA</a>
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
require '../../components/footer.php';
?>