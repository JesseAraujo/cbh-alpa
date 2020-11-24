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
                    <li class="breadcrumb-item active" aria-current="page">Contato</li>
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
                <label> Contato </label>
            </div>
        </div>
    </section>


    <!--
--------------------------------------------------------
CONTEUDO
--------------------------------------------------------
-->
    <section>
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.138069224212!2d-49.378275513864864!3d-23.201638384862687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c1abdaa35ed2bd%3A0xab143f942715b246!2sCBH-ALPA+%7C+Comit%C3%AA+da+Bacia+Hidrogr%C3%A1fica+do+Alto+Paranapanema!5e0!3m2!1spt-BR!2sbr!4v1560951610555!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <div class="col-md-4">
                        <form action="controller/Contato/Envio-Contato" method="POST" name="contato_form">

                            <label for="name">NOME</label>
                            <input type="text" name="name" id="name" required placeholder="nome" class="required form-control" autocomplete="off" style="margin-bottom: 20px; width: 100%;" />

                            <label for="email">E-MAIL</label>
                            <input type="email" name="email" id="email" required placeholder="exemplo@exemplo.com" class="required email form-control" autocomplete="off" style="margin-bottom: 20px; width: 100%;" />

                            <label for="subject">ASSUNTO</label>
                            <input type="text" name="assunto" id="assunto" required placeholder="assunto" class="required form-control" autocomplete="off" style="margin-bottom: 20px; width: 100%;" />

                            <label for="message">MEMSAGEM</label>
                            <textarea name="message" id="message" cols="45%" rows="6" required placeholder="Escreva sua mensagem aqui!" class="required form-control" autocomplete="off" style=" margin-bottom: 20px; font-size: 1.6rem;"></textarea>

                            <section>
                                <button type="submit" class="btn btn-secondary btn-lg btn-block" name="enviar">ENVIAR</button>
                            </section>
                        </form>
                    </div>
                </div>
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