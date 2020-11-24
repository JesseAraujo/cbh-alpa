<?php
require '../components/header.php';
?>

<!--------------------------------------------------- HEADER ---->
<section>
    <div class="header">
        <div class="container">
            <div class="titulo">
                COBRANÇA DAEE - CBH-ALPA
                <div class="subtitulo">
                    Cobrança pelo Uso da Água da Bacia do Alto Paranapanema
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require '../components/nav.php';
?>

<section>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mapaSite">
                <li class="breadcrumb-item"><a href="../Cobranca">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contato</li>
            </ol>
        </nav>
    </div>
</section>


<!-------------------------------------------------- CONTEUDO -->
<section>
    <div class="cobranca">
        <div class="container">

            <div class="titulo">
                Contato
            </div>

            <i class="fa fa-location-arrow" style="margin-right:8px;"></i>Av. São Sebatião, 125 - Jd. Europa - 18.800-656 - Piraju/SP <br>
            <i class="fa fa-phone" style="margin-right:8px;"></i>(14) 3351-2599

            <form action="" method="post" name="enviar">
                <div class="form-row">

                    <div class="col-md-6 mb-3">
                        <input type="text" id="nome"  class="form-control" placeholder="Nome" required autocomplete="off">
                        <input type="text" id="email" class="form-control" placeholder="E-mail" required autocomplete="off">
                        <input type="text" id="assunto" class="form-control" placeholder="Assunto" required autocomplete="off">
                    </div>

                    <div class="col-md-6 mb-3">
                        <textarea class="form-control" id="mensagem" rows="6" placeholder="Mensagem" required></textarea>
                        <input class="enviar" type="submit" value="ENVIAR" id="submit" />
                    </div>

                </div>

                <div id="enviar"></div>
            </form>


        </div>
    </div>
</section>




<?php
require '../components/footer.php';
?>