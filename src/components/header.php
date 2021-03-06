<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" type="image/png" href="src/assets/images/favi.png" />


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

  <!--base href="https://cbhalpa.com.br/">
  <!--Raiz do teu site-->
  <base href="http://localhost/">
  <!--Raiz do teu site-->

  <link rel="stylesheet" href="public/styles/style.css">
  <link rel="stylesheet" href="public/styles/styleMobile.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <title>CBH-ALPA | Comitê da Bacia Hidrográfica do Alto Paranapanema</title>

</head>

<body>

  <a id="subirTopo">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
  </a>

  <header>
    <div class="container">

      <div class="acessibilidade">
        <div class="container">
          <div class="acessibilidade-button">
            <button onClick="fonte('reset');"><i class="fa fa-refresh" aria-hidden="true"></i></button>
            <button onClick="fonte('a');">A+</button>
            <button onClick="fonte('d');">A-</button>
          </div>
        </div>
      </div>

      <div class="header">
        <a href="/">
          <img src="src/assets/images/logonav.png" width="90" height="60" alt="">
        </a>

        <?php
        require $_SERVER['DOCUMENT_ROOT'] . '/src/components/pesquisa.php';
        ?>
      </div>


    </div>

    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/src/components/nav.php';
    ?>

  </header>