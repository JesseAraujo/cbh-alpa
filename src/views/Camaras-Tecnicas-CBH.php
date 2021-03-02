<?php
require '../components/header.php';
?>


<div class="content">


    <div class="mapaSite">
        <div class="container">
            <ol class="breadcrumb mapaSite">
                <li class="breadcrumb-item"><a href="/">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Câmaras Técnicas CBH-ALPA</li>
            </ol>
        </div>
    </div>

    <div class="container">

        <div class="tituloPage">
            <label> Câmaras Técnicas CBH-ALPA</label>
        </div>

        <div class="group-buttons">
            <div class="links-buttons-ct">

                <button onclick="window.location.href='Camaras-Tecnicas/Camara-Tecnica-PGA';">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h2>Planejamento Gerenciamento e Avaliação de Projetos – PGA</h2>
                </button>

                <button onclick="window.location.href='Camaras-Tecnicas/Camara-Tecnica-AI';">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h2>Assuntos Institucionais – AI</h2>
                </button>

                <button onclick="window.location.href='Camaras-Tecnicas/Camara-Tecnica-SAS';">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h2>Saneamento e Águas Subterrâneas – SAS</h2>
                </button>

                <button onclick="window.location.href='Camaras-Tecnicas/Camara-Tecnica-EA';">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h2>Educação Ambiental, Capacitação, Mobilização Social e Informação - EA</h2>
                </button>

            </div>
        </div>

    </div>

</div>



<?php
require '../components/footer.php';
?>