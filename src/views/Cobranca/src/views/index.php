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


<!-------------------------------------------------- CONTEUDO -->
<section>
    <div class="cobranca">
        <div class="container">

            <p>A cobrança pelo uso dos recursos hídricos representa um dos instrumentos de gestão definidos pela política estadual de recursos hídricos, pautados na lei das águas paulista Lei 7.663/1991, em consonância com Outorga de Direito de Uso, fiscalização e enquadramento dos recursos hídricos.</p>
            <p>Posteriormente a cobrança foi regulamentada através do Decreto nº 50.667, de 30 de março de 2006, a Lei nº 12.183, de 29 de dezembro de 2005, que estabeleceu as diretrizes para a implementação da cobrança no Estado de São Paulo. </p>
            <p>A cobrança pelo uso dos recursos hídricos tem por objetivos:</p>

            <ul class="item">
                <li>
                    <b>Reconhecer a água como bem público de valor econômico, e dar ao usuário uma indicação de seu real valor; </b>
                </li>
                <li>
                    Incentivar o uso racional e sustentável da água;
                </li>
                <li>
                    <b>Obter recursos financeiros para o financiamento dos programas e intervenções contemplados nos planos de recursos hídricos e saneamento;</b>
                </li>
                <li>
                    Distribuir o custo socioambiental pelo uso degradador e indiscriminado da água;
                </li>
                <li>
                    <b>Utilizar a cobrança da água como instrumento de planejamento, gestão integrada e descentralizada do uso da água e seus conflitos.</b>
                </li>
            </ul>

        </div>
    </div>
</section>

<section>
    <div class="cobBotoes">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='http://www.sigrh.sp.gov.br/cobrancapelousodaagua';">Cobrança</button>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='http://www.atoconvocatorio.daee.sp.gov.br/Publico/DefaultRepresentante.aspx';">Ato Declaratório</button>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='http://www.daee.sp.gov.br/index.php?option=com_content&view=article&id=108%3Asaiba-o-que-e-cobranca&catid=40%3Acobranca&Itemid=30';">O Que é?</button>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
require '../components/footer.php';
?>