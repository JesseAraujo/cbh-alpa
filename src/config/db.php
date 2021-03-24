<?php

$servidor = 'localhost';
$usuarioo = 'root';
$senhaa = '';


//$servidor = 'h50.servidorhh.com';
//$usuarioo = 'cbhalpac_jba';
//$senhaa = 'jb@280694K';


$banco = 'cbhalpac_noticias';

$con   = mysqli_connect($servidor, $usuarioo, $senhaa, $banco); //estabelecendo conexão
mysqli_set_charset($con, "utf8");


//verificando conexão
if (!$con) {
	die('não conseguiu conectar: ' . mysqli_error($con));
}
