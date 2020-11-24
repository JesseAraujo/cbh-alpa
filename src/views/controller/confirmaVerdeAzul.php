<?php

	//recebe os parâmetros

    $campo1 = $_REQUEST['campo1'];
    $campo2 = $_REQUEST['campo2'];
    $campo3 = $_REQUEST['campo3'];
    $campo4 = $_REQUEST['campo4'];
    $campo5 = $_REQUEST['campo5'];
    $campo6 = $_REQUEST['campo6'];


//1 – Definimos Para quem vai ser enviado o email
	$para = $campo6;

//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
	$nome = $campo1;

// 3 - resgatar o assunto digitado no formulário e  grava na variavel 
	$assunto = 'Confirmação da Inscrição - OFICINA VERDEAZUL - CICLO 2020';

// 5 - resgatar o email digitado no formulário e  grava na variavel 
	$email = "cbhalpa@gmail.com";

	//título da mensagem no corpo do e-mail onde recebe o assunto
	$mensagem = "<div style='	background-color: #EFF1F2; 
								width: 100%; 
								font-size: 15px; 
								padding: 10px; 
								text-align: center; 
								color: #363D40; 
								margin-top: 20px; 
								text-transform: uppercase; 
								font-weight: bold;'>
				 	".$assunto.
				"</div>";

				//mensagem no corpo do e-mail
    $mensagem .= "
                    Incrição na OFICINA VERDEAZUL - CICLO 2020 realizada com sucesso! <br>
                    Anote em sua agenda e não perca o evento!

                    <b>Data: </b>05 de Novembro de 2019 <br>
                    <b>Horário: </b>17h<br>
                    <b>Local: </b> Parque Pilão D'Água - Recanto Jorge Assumção Schimidt - Rua Octávio Lopes de Oliveira, nº 30 - Jardim Colina dos Pinheiros - Itapeva/SP 
                ";

				//icones rede social
	$mensagem .= "<br>
				<div style='	text-align: center;'>
					<a href='https://www.facebook.com/CBHALPA' target='new' style='text-decoration: none;'>
						<img src='http://cbhalpa.com.br/c/face.jpg' width='60' height='60'> 
					</a>
					<br>
					<a href='http://cbhalpa.com.br/' target='new' style='text-decoration: none;'>
						<img src='http://cbhalpa.com.br/c/logo.png' width='100' height='60'> 
              		</a>  				
				</div>";

	$mensagem .= "<div style='	background-color: #0C394B; 
								width: 100%; 
								font-size: 12px; 
								padding: 5px; 
								text-align: center; 
								color: #ffffff; 
								margin-top: 60px;'> 					

				</div>";

	$mensagem .= "<br>
					<img src='http://cbhalpa.com.br/c/rodapeemail.png' style='margin-top: 20px; margin-bottom: 20px;'>"; //imagem assinatura
	

//6 – agora inserimos as codificações corretas e  tudo mais.

	$headers =  "Content-Type:text/html; charset=UTF-8\n";
	$headers .= "From:  ".$nome."<".$email.">\n"; 
	//Vai ser mostrado que  o email partiu deste email e seguido do nome
	$headers .= "X-Sender:  <cbhalpac@h27.servidorhh.com>\n"; 
	//email do servidor que enviou
	$headers .= "X-Mailer: PHP  v".phpversion()."\n";
	$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
	$headers .= "Return-Path:  <cbhalpac@h27.servidorhh.com>\n"; 
	//caso a msg seja respondida vai para  este email.
	$headers .= "MIME-Version: 1.0\n";


 
mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.


?>