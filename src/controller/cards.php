<section>
    <div class="agenda">
        <div class="container">
            <div class="row">
                <?php while ($rows_not = mysqli_fetch_assoc($resultado)) {
                    $date = date('d-m-Y', strtotime($rows_not["data_pos_not"]));
                ?>

                    <div class='col-sm-4 space'>
                        <div class='card'>

                            <div class="card-top">
                                <h5 class='card-title'><?php echo $rows_not['titulo_not']; ?></h5>
                            </div>

                            <div class="card-date-post">
                                Postado em <?php echo $date; ?>
                            </div>

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
            </div>

        </div>
    </div>
</section>