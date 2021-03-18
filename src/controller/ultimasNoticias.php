<?php

require '../config/db.php';

//Listando todas noticias contidas na tabela TB_NOTICIAS
$sql = mysqli_query($con, 'SELECT * FROM cbhalpa_noticias order by data_pos_not desc limit 3 ') or die("Erro");
$qtd = mysqli_num_rows($sql);

while ($rows_not = mysqli_fetch_assoc($sql)) {

?>

    <!---------------- listando notícias contidas na tabela ---------------->
    <div class='col-sm-4'>
        <div class='card'>

            <div class="card-top">
                <h5 class='card-title'><?php echo $rows_not['titulo_not']; ?></h5>
            </div>

            <?php
            $dt_atual        = date("Y-m-d"); // data atual
            $timestamp_dt_atual     = strtotime($dt_atual); // converte para timestamp Unix

            $dt_expira        = $rows_not['data_evento']; // data de expiração do anúncio
            $timestamp_dt_expira    = strtotime($dt_expira); // converte para timestamp Unix

            // data atual é maior que a data de expiração
            if ($timestamp_dt_atual < $timestamp_dt_expira) // true
                echo "<div class='new-post'>Novo</div>";
            ?>

            <div class='card-body'>
                <p class='card-text'><?php echo $rows_not['descricao_not']; ?></p>
            </div>

            <?php
            if ($rows_not["link_not"] == '' && $rows_not["url"] == '') {
                echo " <a href='http://www.sigrh.sp.gov.br/cbhalpa/agenda' class='btn'>Ver Completo</a>";
            } else if ($rows_not["url"] != '') {
                echo "<a class='btn' href='" . $rows_not["url"] . "' >Ver Completo</a>";
            } else {
                echo "<a class='btn' href='Agenda/" . $rows_not["link_not"] . "' >Ver Completo</a>";
            }
            ?>

        </div>
        <!--FIM class='card'-->
    </div>
    <!--FIM class='col-sm-4'-->

<?php }  /*fim do while*/ ?>