<?php
require '../../components/header.php';
require '../../components/nav.php';
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
                    <li class="breadcrumb-item active" aria-current="page">Workshop - Dia Mundial da Água</li>
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
                <label>Workshop - Dia Mundial da Água</label> <strong> ------- CANCELADO</strong>
            </div>
        </div>
    </section>

    <!--------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!--
--------------------------------------------------------
CONTEUDO
--------------------------------------------------------
-->
    <section>
        <div class="container">

            <div class="not">
                <p><span>Data:</span> 24 de Março de 2020 </p>
                <p><span>Horário:</span> 09h</p>
                <p><span>Endereço:</span> Avenida Higino Marques, 193 - Centro - Itapeva/SP</p>
                <p><span>Local:</span> Sala Verde</p>
            </div>

            <b style="font-weight: bold; color: #0C394B;">OBSERVAÇÕES</b></p>
            <p>
                Os arquivos utilizados durante o evento como documentos apresentados, lista de presença e outros, estarão disponíveis em nosso site após o término juntamente com opção para retirar seu certificado de participação.
            </p>
            <p>
                Para participação no evento é necessário efetuar sua inscrição no formulário abaixo. Atenção ao preencher a inscrição para não gerar erros na emissão do certificado.
            </p>

        </div>
    </section>


    <!--------------------------------------------------------------------------------------------------------------------------------------------------------->
    <section>
        <div class="contact">
            <div class="container">
                <div class="rom">

                    <h3 style="margin-top:30px; font-size: 15px; background-color: #EFF1F2; text-align: center; padding:15px; font-family: LiberationSans-Regular; font-weight: bolder; margin: 50px 0 30px 0;">INSCRIÇÃO</h3>


                    <!----FURMULÁRIO PARA INSCRIÇÃO---->
                    <form>
                        <label style="font-weight: bold; color: red; margin-bottom:30px;">INSCRIÇÕES ENCERRADAS</label>
                        <div class="form-row">

                            <div class="col-md-6">
                                <div class="col">
                                    <label for="nome">NOME*</label>
                                    <input type="text" name="nome" id="campo1" required autocomplete="nope" placeholder="Nome Completo" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                                </div>

                                <div class="col">
                                    <label for="cpf">CPF*</label>
                                    <input type="text" name="cpf" id="campo2" maxlength="14" onkeypress="formatar('###.###.###-##', this);" required autocomplete="nope" placeholder="000.000.000-00" class="form-control" style="margin-bottom: 20px; width: 100%;" />
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
                                    <input type="text" name="telefone" id="campo5" maxlength="14" onkeypress="mascaratel(this)" autocomplete="nope" placeholder="(00) 0000-0000" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                                </div>
                                <div class="col">
                                    <label for="celular">CELULAR</label>
                                    <input type="text" name="celular" id="campo6" maxlength="15" onkeypress="mascaracel(this)" autocomplete="nope" placeholder="(00) 00000-0000" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                                </div>
                                <div class="col">
                                    <label for="email">E-MAIL*</label>
                                    <input type="email" name="email" id="campo7" required placeholder="exemplo@exemplo.com" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                                </div>
                            </div>

                        </div>
                        <!--FIM form-row-->
                    </form>

                    <section>
                        <button type="submit" class="btn btn-secondary btn-lg btn-block" onclick="alert('O evento foi cancelado devido a Covid-19. Impossível de realizar seu cadastro!')">CONCLUIR</button>
                        </section-->

                </div>
                <!--FIM ROW-->
                <section>
                    <div class="container">
                        <div class="sigrh">
                            * Campos Obrigatórios
                        </div>

                    </div>
                </section>
            </div>
            <!--FIM CONTAINER-->
        </div>
        <!--FIM CONTACT-->
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