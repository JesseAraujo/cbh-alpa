<?php
require '../components/header.php';
require '../components/nav.php';
?>

<div class="content">

    <!--
--------------------------------------------------------
BREADCRUMB
--------------------------------------------------------
-->
    <section>
        <div class="mapaSite">
            <div class="container">
                <ol class="breadcrumb mapaSite">
                    <li class="breadcrumb-item"><a href="/">Início</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Documentos</li>
                </ol>
            </div>
        </div>
    </section>


    <!--
--------------------------------------------------------
TÍTULO DA PÁGINA
--------------------------------------------------------
-->
    <section>
        <div class="container">
            <div class="tituloPage">
                <label> Documentos </label>

            </div>
        </div>
    </section>


    <!--
--------------------------------------------------------
CONTEUDO
--------------------------------------------------------
-->
    <section>
        <div class="documentos space">
            <div class="container">
                <div class="row">

                    <!----------->
                    <div class="col-sm-4 table">
                        <div class="card">
                            <div class="card-top">
                                <h5 class="card-title">CBH-ALPA</h5>
                            </div>
                            <div class="card-body">
                                <a class="icone" href="../../public/pdf/Estatuto.pdf" style="margin-bottom: 8px;">Estatuto</a>
                                <hr />
                                <a class="icone" href="../../public/pdf/Plano da Bacia Hidrográfica do Alto Paranapanema.pdf" style="margin-bottom: 8px;">Plano da Bacia Hidrográfica do Alto Paranapanema (UGRHI 14) – 2016-2027</a>
                                <hr />
                                <a class="icone" href="../../public/pdf/RS_2020_ab_2019 v final.pdf" style="margin-bottom: 8px;">RELATÓRIO DE SITUAÇÃO – Ano Base 2019</a>
                            </div>
                        </div>
                    </div>

                    <!----- CARTAS IBGE ------>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-top">
                                <h5 class="card-title">CARTAS IBGE</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Cartas do IBGE escala de 1:50.000 disponíveis para visualização e download.</p>
                            </div>
                            <a href="http://geoftp.ibge.gov.br/cartas_e_mapas/folhas_topograficas/editoradas/escala_50mil/" class="btn" target="new">Consultar</a>
                        </div>
                    </div>

                    <!----- EMISSOR CERTIFICADO ------>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-top">
                                <h5 class="card-title">EMISSOR DE CERTIFICADOS</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Participou de algum curso, workshop ou seminário realizado pelo CBH-ALPA? Emita aqui seu certificado!</p>
                            </div>
                            <a href="Emitir-Certificados" class="btn">Emitir</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="documentos space">
            <div class="container">
                <div class="row">

                    <!----- DELIBERAÇÕES ------>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-top">
                                <h5 class="card-title">Deliberações</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Deliberações do Comitê de Bacia do Alto Paranapanema se encontram aqui para consulta.</p>
                            </div>
                            <a href="Documentos/Deliberacoes" class="btn">Consultar</a>
                        </div>
                    </div>

                    <!----- ATAS ------>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-top">
                                <h5 class="card-title">Atas</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Atas do Comitê de Bacia do Alto Paranapanema se encontram aqui para consulta.</p>
                            </div>
                            <a href="Documentos/Atas" class="btn">Consultar</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="documentos space">
            <div class="container">
                <div class="row">

                    <!----- OFÍCIOS ------>
                    <div class="col-sm-7">
                        <div class="card">
                            <div class="card-top">
                                <h5 class="card-title">Ofícios</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Ofícios emitidos pelo Comitê de Bacia do Alto Paranapanema se encontram aqui para consulta.</p>
                            </div>
                            <a href="Documentos/Oficios" class="btn">Consultar</a>
                        </div>
                    </div>

                    <!----- LISTA DE PRESENÇA ------>
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="card-top">
                                <h5 class="card-title">Listas de Presença</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Listas de Presença das reuniões do Comitê de Bacia do Alto Paranapanema se encontram aqui para consulta.</p>
                            </div>
                            <a href="Documentos/ListaPresenca" class="btn">Consultar</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="documentos table">
            <div class="container">
                <div class="row">

                    <!----- OUTROS ------>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-top">
                                <h5 class="card-title">Outros Documentos</h5>
                            </div>
                            <div class="card-body">
                                <?php
                                //caminho onde os arquivos se encontram
                                $files = glob("../../public/pdf/Outros/*.*");

                                require '../controller/listarDoc.php';
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------------------------------------------------------------------------->
    <section>
        <div class="container">
            <div class="sigrh">
                <a href="http://www.sigrh.sp.gov.br/cbhalpa/documentos" title="SIGRH - Sistema Integrado de Gerenciamento de Recursos Hídricos do Estado de São Paulo">SIGRH | CBH-ALPA</a>
            </div>
        </div>
    </section>

</div>
<!--content-->


<!--
--------------------------------------------------------
FOOTER
--------------------------------------------------------
-->
<?php
require '../components/footer.php';
?>