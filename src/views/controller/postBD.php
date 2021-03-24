<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';

//servidor = 'h50.servidorhh.com';
//$usuarioo = 'cbhalpac_jba';
//$senha = 'jb@280694K';

$banco = 'cbhalpac_inscrievent';

$con   = mysqli_connect($servidor, $usuario, $senha, $banco); //estabelecendo conexão
mysqli_set_charset($con, "utf8");


//verificando conexão
if (!$con) {
    die('não conseguiu conectar: ' . mysqli_error($con));
}


//recebe os parâmetros

$campo1 = $_REQUEST['campo1']; //nome
$campo2 = $_REQUEST['campo2']; //cpf
$campo3 = $_REQUEST['campo3']; //entidade
$campo4 = $_REQUEST['campo4']; //cidade
$campo5 = $_REQUEST['campo5']; //telefone
$campo6 = $_REQUEST['campo6']; //celular
$campo7 = $_REQUEST['campo7']; //e-mail

try {
    //insere no BD
    $sql = mysqli_query($con, "INSERT INTO cbhalpa_inscrito (cpf, nome, entidade, cidade, telefone, celular, email, validacao, curso_id) VALUES ('$campo2', '$campo1', '$campo3', '$campo4', '$campo5', '$campo6', '$campo7', '0', '1')");

    $result = mysqli_query($con, $sql) or die(mysqli_error($sql));

    //retorna 1 para no sucesso do ajax saber que foi com inserido sucesso
    echo "1";
} catch (Exception $ex) {
    //retorna 0 para no sucesso do ajax saber que foi um erro
    echo "0";
}
