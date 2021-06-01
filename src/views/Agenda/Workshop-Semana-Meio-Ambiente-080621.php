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
                    <li class="breadcrumb-item active" aria-current="page">Workshop: A Água do mundo vai acabar?</li>
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
                <label>Workshop: A Água do mundo vai acabar?</strong>
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

            <h3 style="margin-top:50px; margin-bottom:20px; font-size: 15px; background-color: #dddddd; text-align: center; padding:15px;">
                ASSUNTO TRATADO
            </h3>

            <p>
                A Água do mundo vai acabar?
            </p>

            <div class="data-evento">
                <p><span>Data:</span> 08 de JUnho de 2021 </p>
                <p><span>Horário:</span> 10h</p>
                <p><span>Local:</span> Live <a href="" target="_blanck">ASSISTIR ON-LINE</a> </p>
            </div>


            <!---->
            <h3 style="margin-top:50px; margin-bottom:20px; font-size: 15px; background-color: #dddddd; text-align: center; padding:15px;">
                INSCRIÇÃO
            </h3>

            <!--------------------------------------------------------------------------------------------------------------------------------------------------------->
            <section>

                <div class="rom">

                    <!----FURMULÁRIO PARA INSCRIÇÃO---->
                    <form>
                        <!--label style="font-weight: bold; color: red; margin-bottom:30px;">INSCRIÇÕES ENCERRADAS</label-->

                        <div class="form-row">

                            <div class="col-md-6">
                                <div class="col">
                                    <label for="nome">NOME*</label>
                                    <input type="text" name="nome" id="campo1" required autocomplete="nope" placeholder="Nome Completo" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                                </div>

                                <div class="col">
                                    <label for="cpf">CPF*</label>
                                    <input type="text" name="cpf" id="campo2" maxlength="14" placeholder="000.000.000-00" onkeydown="formatar('###.###.###-##', this)" onkeypress='return SomenteNumero(event)' required autocomplete="nope" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                                </div>

                                <div class="col">
                                    <label for="entidade">ENTIDADE*</label>
                                    <input type="text" name="entidade" id="campo3" required autocomplete="nope" placeholder="DAEE, CETESB, Prefeitura, Meio Ambiente, etc..." class="form-control" style="margin-bottom: 20px; width: 100%;" />
                                </div>

                                <div class="col">
                                    <label for="cidade">CIDADE*</label>
                                    <input type="text" name="cidade" id="campo4" required autocomplete="nope" placeholder="Cidade" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="col">
                                    <label for="telefone">TELEFONE</label>
                                    <input type="text" name="telefone" id="campo5" maxlength="12" placeholder="00 0000-0000" onkeydown="formatar('## ####-####', this)" onkeypress='return SomenteNumero(event)' autocomplete="nope" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                                </div>
                                <div class="col">
                                    <label for="celular">CELULAR</label>
                                    <input type="text" name="celular" id="campo6" maxlength="14" placeholder="00 0 0000-0000" onkeydown="formatar('## # ####-####', this)" onkeypress='return SomenteNumero(event)' autocomplete="nope" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                                </div>
                                <div class="col">
                                    <label for="email">E-MAIL*</label>
                                    <input type="email" name="email" id="campo7" required placeholder="exemplo@exemplo.com" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                                </div>
                            </div>



                        </div>
                        <!--FIM form-row-->
                    </form>

                    <button style="margin-top: 30px;" type="submit" onclick="userWokshop02()">CONCLUIR</button>
                </div>

                <hr style="margin: 30px;">

                <button type="submit" class="emitir" onclick="window.location.href='Emitir-Certificados'">
                    Emitir certificado
                </button>


            </section>


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