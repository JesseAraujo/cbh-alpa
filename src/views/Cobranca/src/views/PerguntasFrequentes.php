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
                <li class="breadcrumb-item active" aria-current="page">Perguntas Frequentes</li>
            </ol>
        </nav>
    </div>
</section>


<!-------------------------------------------------- CONTEUDO -->
<section>
    <div class="cobranca">
        <div class="container">

            <div class="titulo">
                Perguntas Frequentes
            </div>

            <div class="accordion" id="accordionExample">

                <!--1-->
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                1 - O que é a cobrança pelo uso da água?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            A cobrança pelo uso da água é um dos instrumentos de gestão dos recursos hídricos previsto nas Políticas Nacional e Estadual de Recursos Hídricos.
                            <p>Tendo como base legal:</p>
                            <ul class="item">
                                <li><b>Lei Federal nº 9.433/1997</b></li>
                                <li>Lei Estadual nº 7.663/1991</li>
                                <li><b>Lei Estadual nº 12.183/2005</b></li>
                                <li>Decreto Estadual nº 50.667/2006</li>
                                <li><b>Decreto Estadual n° 63.263/2018</b></li>
                            </ul>
                            A cobrança é um preço público, isto é, uma compensação a ser paga pelos usuários de recursos hídricos visando a garantia dos padrões de quantidade, qualidade e regime
                            estabelecidos para corpos d’água.
                        </div>
                    </div>
                </div>

                <!--2-->
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2 - Quais são os objetivos da cobrança?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="item">
                                <li><b>Reconhecer a água como bem público de valor econômico, e dar ao usuário uma indicação de seu real valor</b></li>
                                <li>Incentivar o uso racional e sustentável da água</li>
                                <li><b>Obter recursos financeiros para o financiamento dos programas e intervenções contemplados nos planos de recursos hídricos e saneamento</b></li>
                                <li>Distribuir o custo socioambiental pelo uso degradador e indiscriminado da água</li>
                                <li><b>Utilizar a cobrança da água como instrumento de planejamento, gestão integrada e descentralizada do uso da água e seus conflitos</b></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--3-->
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3 - Quem paga?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Somente usuários diretos irão pagar:</p>
                            <ul class="item">
                                <li><b>Empresas de Saneamento</b></li>
                                <li>indústrias</li>
                                <li><b>Usuários Urbanos, pessoas físicas e jurídicas (hotéis, condomínios, etc.) que captarem mais de 5.000 litros por dia</b></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--4-->
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4 - O que é cobrado?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            A cobrança será calculada mediante a soma do volume de água captado (superficial e subterrânea), o volume de água não devolvido e a carga de poluente lançada no corpo
                            d’água. A somatória destes três componentes irá gerar o valor a ser cobrado anualmente, que poderá ser dividido em até 12 parcelas mensais.
                            <p>Os valores dos Preços Unitários Básicos são:</p>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Unidade</th>
                                        <th scope="col">Valor (R$)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Captação, extração e derivação</th>
                                        <td>m³</td>
                                        <td>0,009</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Consumo de água</th>
                                        <td>m³</td>
                                        <td>0,02</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lançamento de carga orgânica(DBO 5,20)</th>
                                        <td>Kg</td>
                                        <td>0,09</td>
                                    </tr>
                                </tbody>
                            </table>

                            * valores aprovados pelo decreto nº 63.263/2018

                        </div>
                    </div>
                </div>

                <!--5-->
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                5 - Quem está isento da cobrança?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Usuários isentos são:</p>
                            <ul class="item">
                                <li><b>usuários que se utilizam da água para uso doméstico de propriedades ou de pequenos núcleos populacionais distribuídos no meio rural quando independer de outorga de direito de uso</b></li>
                                <li>usuários com extração de água com volume inferior a 5.000 litros por dia</li>
                                <li><b>usuários agrícolas, que permanecerão isentos até que seja regulamentada a cobrança para o setor</b></li>
                                <li>usuários que se utilizam da água para uso doméstico de propriedades ou de pequenos núcleos populacionais distribuídos no meio rural quando independer de outorga de direito de uso</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--6-->
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                6 - Já não pagamos pelo uso da água?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            Não, o valor cobrado na conta de água refere-se ao serviço prestado pelas empresas de saneamento (distribuição e tratamento de água; coleta e tratamento de esgotos).
                        </div>
                    </div>
                </div>

                <!--7-->
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                7 - Quem define os valores da Cobrança?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                            O valor é definido pelos Comitês de Bacias Hidrográficas (CBHs), de acordo com as condições de quantidade e qualidade de água disponível na bacia hidrográfica. Este
                            processo considera o gerenciamento sustentável dos recursos hídricos da bacia em relação aos diversos usos com avaliação do impacto econômico para cada segmento de usuários. </div>
                    </div>
                </div>

                <!--8-->
                <div class="card">
                    <div class="card-header" id="headingEight">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                8 - Como os recursos financeiros arrecadados serão utilizados?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                        <div class="card-body">
                            A Lei da Cobrança pelo Uso da Água estabelece que os recursos financeiros sejam destinados à bacia hidrográfica onde foram arrecadados, portanto, serão aplicados na própria bacia hidrográfica do Alto
                            Paranapanema, conforme os programas, projetos e obras previstos no Plano de Bacia, com o objetivo de gerenciar, fiscalizar, preservar e recuperar os recursos hídricos. A aplicação dos recursos será acompanhada pelos
                            membros do CBH-ALPA e também há mecanismos de fiscalização do Tribunal de Contas do Estado
                        </div>
                    </div>
                </div>

                <!--9-->
                <div class="card">
                    <div class="card-header" id="headingNine">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                9 - Quais foram as etapas da implantação do processo da cobrança pelo uso da água?

                            </button>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="item">
                                <li><b>Elaboração da proposta de cobrança (estudos técnicos, simulações, negociações com os usuários e demais representantes da sociedade)</b></li>
                                <li>Aprovação da proposta de cobrança no âmbito do Comitê do Alto Paranapanema (1° etapa) e no Conselho Estadual de Recursos Hídricos (2° etapa) com a publicação do Decreto do governador</li>
                                <li><b>Realização de campanha de divulgação da cobrança junto aos usuários e sociedade</b></li>
                                <li>Formação do Cadastro específico de Cobrança do Comitê, com dados do DAEE e da CETESB, com as informações dos usuários outorgados (dados dos usos de cada usuário)</li>
                                <li><b>Edição do Ato Convocatório pelo DAEE e consolidação das informações</b></li>
                                <li>Emissão dos Boletos de Cobrança pelo Departamento de Águas e Energia Elétrica (DAEE)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--10-->
                <div class="card">
                    <div class="card-header" id="headingTen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                10 - O que é Ato Convocatório?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                        <div class="card-body">
                            É procedimento administrativo efetuado pelo DAEE que estabelece prazo de 90 dias para que os usuários de recursos hídricos possam conferir os dados para emissão dos boletos da cobrança, no Alto Paranapanema esse
                            processo se dará entre os dias 10/01/2019 e 10/04/2019.
                        </div>
                    </div>
                </div>

                <!--11-->
                <div class="card">
                    <div class="card-header" id="headingEleven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                11 - Quem faz a Cobrança?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                        <div class="card-body">
                            Alegislação determina que as Agência de Bacia operem a cobrança e na ausência desta, quem realiza todos os procedimentos é o Departamento de Águas e Energia Elétrica (DAEE), sendo este o caso Diretoria de bacia do
                            Peixe Paranapanema.
                        </div>
                    </div>
                </div>

                <!--12-->
                <div class="card">
                    <div class="card-header" id="headingTwoelve">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwoelve" aria-expanded="false" aria-controls="collapseTwoelve">
                                12 - Como o usuário sabe que valor ele deve pagar?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwoelve" class="collapse" aria-labelledby="headingTwoelve" data-parent="#accordionExample">
                        <div class="card-body">
                            Cada usuário receberá os demonstrativos emitidos pelo DAEE, de acordo com os critérios estabelecidos pelo CBH-ALPA e aprovado pelo Decreto nº 63.263 de 09/03/2018. Os cálculos são realizados de acordo com os
                            dados da(s) outorga(s) de cada usuário.
                        </div>
                    </div>
                </div>

                <!--13-->
                <div class="card">
                    <div class="card-header" id="headingThirteen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                13 - Quem não tem outorga também tem que pagar?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
                        <div class="card-body">
                            Sim, os usuários com usos não regularizados (outorgados) também estão sujeitos a cobrança, além de estarem sujeitos a sanções dos órgãos gestores e por isso devem se regularizar junto ao DAEE e CETESB
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>


<?php
require '../components/footer.php';
?>