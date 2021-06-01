<?php
require '../../components/header.php';
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
                    <li class="breadcrumb-item"><a href="../Agenda-CBH-ALPA">Agenda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bate-papo: Dinamismo do Uso e Cobertura do Solo na Bacia do Alto Paranapanema: Implicações nos Recursos Hídricos</li>
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
        <div class="tituloPage">
            <div class="container">
                <label>Bate-papo: Dinamismo do Uso e Cobertura do Solo na Bacia do Alto Paranapanema: Implicações nos Recursos Hídricos</strong>
            </div>
        </div>
    </section>


    <!--
--------------------------------------------------------
CONTEUDO
--------------------------------------------------------
-->
    <section>

        <div class="container">

            <p>O Comitê da Bacia Hidrográfica do Alto Paranapanema (CBH-ALPA) e a Universidade Federal de São Carlos - Campus Lagoa do Sino (UFSCAR) promoverá em
                Comemoração ao Dia Mundial da Água, o Bate-papo: "Dinamismo do Uso e Cobertura do Solo na Bacia do Alto Paranapanema: Implicações nos Recursos Hídricos".
            </p>


            <div class="data-evento">
                <p><span>Data:</span> 23 de março de 2021 </p>
                <p><span>Horário:</span> 10h</p>
                <p><span>Local:</span> Videoconferência <a href="https://meet.google.com/wso-jkjk-uxx" target="_blanck">PARTICIPAR ON-LINE</a> </p>
            </div>


            <h3 style="margin-top:50px; margin-bottom:20px; font-size: 15px; background-color: #dddddd; text-align: center; padding:15px;">
                ASSUNTO TRATADO
            </h3>

            <p>
                A demanda por alimentos, biocombustíveis e fibras não para de crescer
                e a necessidade de maximizar as produções agrícolas, ao mesmo
                tempo em que preservamos o meio ambiente é urgente. A intensificação
                do uso do solo tem sido utilizada como estratégia para se evitar a
                expansão agrícola sobre áreas ainda conservadas, contudo, essa
                intensificação também causa impactos, dentre eles o elevado uso de
                insumos externos com potencial poluente e o aumento do uso dos
                recursos hídricos. A Bacia do Alto Paranapanema assistiu nas últimas
                décadas um forte processo de intensificação do uso do solo, com o
                crescimento acentuado da agricultura intensificada (150%) e da
                silvicultura (85%), enquanto as pastagens sofreram uma redução de
                quase 60%. Todas essas mudanças levam a impactos diretos nos
                recursos hídricos que já começam a dar sinais de escassez. Nessa
                palestra irei discutir um pouco o histórico recente da bacia, seus
                potenciais impactos diretos e indiretos nos recursos hídricos, bem como
                potenciais ações de manejo que possam amenizar tais impactos
            </p>


            <!-- DOCUMENTOS -->
            <h3 style="margin-top:50px; margin-bottom:20px; font-size: 15px; background-color: #dddddd; text-align: center; padding:15px;">
                DOCUMENTOS
            </h3>
            <a class="icone" href="src/assets/images/Live.png" target="new">Folder</a>
            <a class="icone" href="public/pdf/Outros/Palestra com Profº Dr. Alexandre Camargo Martensen - CBH-ALPA 23-03-2021.pdf" target="new">Apresentação</a>



            <!---->
            <h3 style="margin-top:50px; margin-bottom:20px; font-size: 15px; background-color: #dddddd; text-align: center; padding:15px;">
                INSCRIÇÃO
            </h3>

            <!--------------------------------------------------------------------------------------------------------------------------------------------------------->
            <section>

                <div class="rom">

                    <!----FURMULÁRIO PARA INSCRIÇÃO---->
                    <form>
                        <label style="font-weight: bold; color: red; margin-bottom:30px;">INSCRIÇÕES ENCERRADAS</label>

                        <div class="form-row">

                            <div class="col-md-6">
                                <div class="col">
                                    <label for="nome">NOME*</label>
                                    <input type="text" name="nome" id="campo1" required autocomplete="nope" placeholder="Nome Completo" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col">
                                    <label for="cpf">CPF*</label>
                                    <input type="text" name="cpf" id="campo2" maxlength="14" onkeypress="formatar('###.###.###-##', this);" required autocomplete="nope" placeholder="000.000.000-00" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                                </div>
                            </div>



                        </div>
                        <!--FIM form-row-->
                    </form>

                    <button style="margin-top: 30px;" type="submit" onclick="alert('Impossível de realizar seu cadastro!')">CONCLUIR</button>
                </div>

                <hr style="margin: 30px;">

                <button type="submit" class="emitir" onclick="window.location.href='Emitir-Certificados'">
                    Emitir certificado
                </button>


            </section>


            <!-- VIDEO DA GRAVAÇÃO DA REUNIÃO -->
            <h3 style="margin-top:50px; margin-bottom:20px; font-size: 15px; background-color: #dddddd; text-align: center; padding:15px;">
                GRAVAÇÃO
            </h3>

            <video width="100%" controls>
                <source src="src/assets/videos/Palestra com Profº Dr. Alexandre Camargo Martensen.mp4" type="video/mp4">
                Your browser does not support HTML video.
            </video>



        </div>
        <!--FIM CONTAINER-->
    </section>

</div>
<!--content-->


<!--
--------------------------------------------------------
FOOTER
--------------------------------------------------------
-->
<?php
require '../../components/footer.php';
?>