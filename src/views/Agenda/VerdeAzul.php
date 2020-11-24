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
                <li class="breadcrumb-item active" aria-current="page">Oficina VerdeAzul </li>
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
            <label>OFICINA VERDEAZUL - CICLO 2020</label>
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
        <p>
            Durante o Ciclo PMVA 2020, as oficinas objetivarão o aperfeiçoamento e
            desenvolvimento das Ações VerdeAzul. Nessa etapa, trataremos apenas das Ações
            VerdeAzul, ou seja, um total de 16 tarefas.
        </p>

        <b style="font-weight: bold; color: #0C394B;">QUAIS OS BENEFÍCIOS DA PARTICIPAÇÃO MUNICIPAL NA OFICINA?</b></p>
        <p>
            Acessar novas ideias de projetos e políticas que já estão em desenvolvimento em outros municípios,
            trocar experiências com municípios de sua região, fortalecer e oportunizar articulações intermunicipais, e ainda,
            por acréscimo, aperfeiçoar a descrição das "Ações VerdeAzul".
        </p>

        <div class="not">
            <p><span>Data:</span> 05 de Novembro de 2019 </p>
            <p><span>Horário:</span> 17h</p>
            <p><span>Local:</span> Parque Pilão D'Água - Recanto Jorge Assumção Schimidt - Rua Octávio Lopes
                de Oliveira, nº 30 - Jardim Colina dos Pinheiros - Itapeva/SP </p>
        </div>

        <b style="font-weight: bold; color: #0C394B;">DINÂMICA DA ATIVIDADE</b></p>
        <p>
            Os arquivos utilizados durante a capacitação serão enviados para cada município participante antecipadamente.
            Para realização da dinâmica e melhor aproveitamento da atividade por todos, será imprescindivel que o participante
            faça uma leitura prévia da tarefa recebida para compartilharmos com os demais participantes.
        </p>
        <p>
            As tarefas serão distribuídas aleatoriamente por ordem de inscrição e enviadas para o e-mail inscrito no formulário abaixo.
        </p>

    </div>
</section>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------->
<section>
    <div class="container">
        <h3 style="margin-top:30px; 
                           font-size: 15px; 
                           background-color: #EFF1F2; 
                           text-align: center; 
                           padding:15px; 
                           font-family: LiberationSans-Regular;
                           font-weight: bolder;
                           margin: 50px 0 30px 0;">PROGRAMAÇÃO</h3>

        <a class="icone" href="../pdf/Ag/PROGRAMAÇÃO - ITAPEVA CICLO 2020X.pdf" target="new">OFICINA VERDEAZUL – CICLO 2020</a>

    </div>
</section>


<!--------------------------------------------------------------------------------------------------------------------------------------------------------->
<section>
    <div class="contact">
        <div class="container">
            <div class="rom">

                <h3 style="margin-top:30px; font-size: 15px; background-color: #EFF1F2; text-align: center; padding:15px; font-family: LiberationSans-Regular;font-weight: bolder;
                           margin: 50px 0 30px 0;">INSCRIÇÃO</h3>

                <label style="font-weight: bold; color: red; margin-bottom:30px;">INSCRIÇÕES ENCERRADAS</label>

                <!----FURMULÁRIO PARA INSCRIÇÃO---->

                <form> 
                    <div class="form-row">

                        <div class="col-md-6">
                            <div class="col">
                                <label for="nome">NOME*</label>
                                <input type="text" name="nome" id="campo1" required autocomplete="nope" placeholder="Nome" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                            </div>

                            <div class="col">
                                <label for="entidade">ENTIDADE*</label>
                                <input type="text" name="entidade" id="campo2" required autocomplete="nope" placeholder="DAEE, CETESB, Prefeitura, Meio Ambiente, etc..." class="form-control" style="margin-bottom: 20px; width: 100%;" />
                            </div>

                            <div class="col">
                                <label for="cidade">CIDADE*</label>
                                <input type="text" name="cidade" id="campo3" required autocomplete="nope" placeholder="Cidade" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col">
                                <label for="telefone">TELEFONE</label>
                                <input type="text" name="telefone" id="campo4" maxlength="14" onkeypress="mascaratel(this)" required autocomplete="nope" placeholder="(00)0000-0000" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                            </div>
                            <div class="col">
                                <label for="celular">CELULAR</label>
                                <input type="text" name="celular" id="campo5" maxlength="15" onkeypress="mascaracel(this)" required autocomplete="nope" placeholder="(00) 00000-0000" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                            </div>
                            <div class="col">
                                <label for="email">E-MAIL*</label>
                                <input type="email" name="email" id="campo6" required placeholder="exemplo@exemplo.com" class="form-control" style="margin-bottom: 20px; width: 100%;" />
                            </div>
                        </div>

                    </div-->
                    <!--FIM form-row-->
                </form>

                <section>
                    <button type="submit" class="btn btn-secondary btn-lg btn-block" onclick="alert('Impossível de realizar seu cadastro!')">CONCLUIR</button>
                </section>

            <div>
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