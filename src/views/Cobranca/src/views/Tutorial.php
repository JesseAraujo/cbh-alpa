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
                <li class="breadcrumb-item active" aria-current="page">Tutorial</li>
            </ol>
        </nav>
    </div>
</section>


<!-------------------------------------------------- CONTEUDO -->
<section>
    <div class="cobranca">
        <div class="container">


            <!------------ CBH -->
            <h3 style="margin-top:10px; 
                           font-size: 15px; 
                           background-color: #EFF1F2; 
                           text-align: center; 
                           padding:10px; 
                           font-family: LiberationSans-Regular;
                           font-weight: bolder;
                           margin: 50px 0 30px 0;">TUTORIAL</h3>

            <table class="table">
                <thead>
                    <tr>                        
                        <th scope="col"></th>
                        <th scope="col">Visualizar</th>
                        <th scope="col">Baixar</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row">Tutorial para uso do sistema da Cobrança</th>
                        <td><a class="icone" href="../Cobranca/public/pdf/TUTORIAL PARA ACESSO AO SISTEMA.pdf" target="new"></a></td>
                        <td><a class="download" href="../Cobranca/public/pdf/TUTORIAL PARA ACESSO AO SISTEMA.pdf" download></a></td>
                    </tr>

                </tbody>
            </table>


        </div>
    </div>
</section>



<?php
require '../components/footer.php';
?>