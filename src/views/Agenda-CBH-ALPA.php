<?php
require '../components/header.php';
?>

<div class="content">

    <div class="mapaSite">
        <div class="container">
            <ol class="breadcrumb mapaSite">
                <li class="breadcrumb-item"><a href="/">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Agenda</li>
            </ol>
        </div>
    </div>


    <div class="container">
        <div class="tituloPage">
            <label> Agenda </label>
        </div>


        <?php
        require '../controller/agenda.php';
        ?>

    </div>


</div>
<!--content-->

<?php
require '../components/footer.php';
?>