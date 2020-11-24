<!doctype html>
<html lang="pt-br">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="../images/icon/icon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <link rel="stylesheet" href="fotos.css">
    <link rel="stylesheet" href="fotosMobile.css">
    <link rel="stylesheet" href="../../../public/styles/fonts.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <title>CBH-ALPA | Comitê da Bacia Hidrográfica do Alto Paranapanema</title>
</head>

<body>

    <?php
        $n = $_GET['album'];
    ?>

    <section>
        <div class="topGaleria">
            <div class="iconVoltar">
                <a href="../Galeria-de-Fotos">
                    <i class="fa fa-arrow-left" title="Voltar"></i>
                </a>
            </div>
        </div>
    </section>

    <section>
        <div class="container gallery-container">

            <h1>
                <?php

                $files = glob('fotos/' . $n . '/{*.jpg,*.jpeg,*.JPG}', GLOB_BRACE); //caminho do diretório das fotos com as extensões que desejo listar
                echo "<p>" . basename(__DIR__ . '/../fotos/' . $n . '/') . "</p>"; //Exibir nome do diretório onde as fotos se encontram

                ?>
            </h1>


            <div class="tz-gallery">
                <div class="row">

                    <?php


                    for ($i = 0; $i < count($files); $i++) {
                        $img = $files[$i];

                        ?>

                        <div class="col-md-4">
                            <figure class="figure">
                                <a class="lightbox" href="<?php echo $img ?>">
                                    <img src="<?php echo $img ?>" class="img-thumbnail" />
                                    <!--exibindo imagens dentro do diretório-->
                                </a>
                            </figure>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>

    <script>
        baguetteBox.run('.tz-gallery');
    </script>


</body>

</html>