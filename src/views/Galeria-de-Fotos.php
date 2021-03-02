<?php
require '../components/header.php';
?>

<div class="content">


    <div class="mapaSite">
        <div class="container">
            <ol class="breadcrumb mapaSite">
                <li class="breadcrumb-item"><a href="/">Início</a></li>
                <li class="breadcrumb-item"><a href="/">Mídias CBH</a></li>
                <li class="breadcrumb-item active" aria-current="page">Galeria de Fotos</li>
            </ol>
        </div>
    </div>


    <div class="container">

        <div class="tituloPage">
            <label> Galeria de Fotos</label>
        </div>

        <div class="row">
            <?php
            $pasta = 'Galeria/fotos';
            $s = scandir($pasta);

            //ordem decrescente dos diretórios
            ksort($s);

            foreach ($s as $k) {

                if ($k != '.' && $k != '..') {
            ?>
                    <div class='col-sm-4'>
                        <form action="Galeria" method="GET" style="margin-bottom: 20px;">
                            <div class='card-galery'>
                                <img src="Galeria/fotos/<?php echo $k ?>/1.jpg" class="card-img-top" style=' border-radius: 0; height: 250px;'>
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


<?php
require '../components/footer.php';
?>