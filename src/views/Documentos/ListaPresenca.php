<?php
require '../../components/header.php';
?>

<div class="content">

    <div class="mapaSite">
        <div class="container">
            <ol class="breadcrumb mapaSite">
                <li class="breadcrumb-item"><a href="/">Início</a></li>
                <li class="breadcrumb-item"><a href="../Documentos-CBH-ALPA">Documentos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lista de Presença</li>
            </ol>
        </div>
    </div>



    <div class="container">
        <div class="tituloPage">
            <label> Lista de Presença </label>

        </div>




        <div class="button-esconde-lista documentos">

            <div class="accordion" id="accordionExample">


                <?php
                $pasta = '../../../public/pdf/Lista Presenca';
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
                                    $files = glob("../../../public/pdf/Lista Presenca/$k/*.*");

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

</div>
<!--content-->



<?php
require '../..//components/footer.php';
?>