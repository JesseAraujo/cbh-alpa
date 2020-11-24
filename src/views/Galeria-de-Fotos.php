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
                    <li class="breadcrumb-item active" aria-current="page">Galeria de Fotos</li>
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
                <label> Galeria de Fotos</label>
            </div>
        </div>
    </section>

    <!--
--------------------------------------------------------
CONTEUDO
--------------------------------------------------------
-->
    <section>
        <div class="agenda">
            <div class="container">
                <div class="row">
                    <?php
                    $pasta = 'Galeria/fotos';
                    $s = scandir($pasta);

                    //ordem decrescente dos diretórios
                    ksort($s);

                    foreach ($s as $k) {

                        if ($k != '.' && $k != '..') {
                    ?>
                            <div class='col-sm-3'>
                                <form action="Galeria" method="GET" style="margin-bottom: 50px; ">
                                    <div class='card' style='height: 230px; border:0'>
                                        <img src="Galeria/fotos/<?php echo $k ?>/1.jpg" class="card-img-top" style='height: 170px;  border-radius: 0;'>
                                        <button type="submit" name="album" style='font-size:1rem;' value="<?php echo $k ?>" title="<?php echo $k ?>">
                                            <?php echo $k ?>
                                        </button>
                                    </div>
                                </form>
                            </div>

                    <?php
                        }
                    }
                    ?>

                </div>
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