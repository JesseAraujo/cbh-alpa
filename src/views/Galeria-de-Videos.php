<?php
require '../components/header.php';
?>

<div class="content">


    <div class="mapaSite">
        <div class="container">
            <ol class="breadcrumb mapaSite">
                <li class="breadcrumb-item"><a href="/">Início</a></li>
                <li class="breadcrumb-item"><a href="/">Mídias CBH</a></li>
                <li class="breadcrumb-item active" aria-current="page">Galeria de Vídeos</li>
            </ol>
        </div>
    </div>


    <div class="container">

        <div class="tituloPage">
            <label> Galeria de Vídeos</label>
        </div>

        <div class="row">

            <?php
            $pasta = '../assets';

            //caminho onde os arquivos se encontram
            $files = glob('../assets/videos/*.mp4', GLOB_BRACE);

            for ($i = 0; $i < count($files); $i++) {
                $num = $files[$i];

            ?>


                <div class="col-md-4">
                    <?php



                    //separando nome do arquivo para fácil remoção do nome  
                    $path_parts = pathinfo($num);

                    //corrigindo caracteres especiais para exibir apenas o nome do documento
                    krsort($path_parts);
                    $nome = $path_parts['filename'];

                    echo '
                            <video width="100%" controls>
                                <source src="src/assets/videos/' . $nome . '.mp4" type="video/mp4">
                                Your browser does not support HTML video.
                             </video>  
                                    
                        ';
                    ?>
                </div>
            <?php
            }
            ?>



        </div>

    </div>

</div>


<?php
require '../components/footer.php';
?>