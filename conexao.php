<?php

$host = "localhost";
$usuario = "root";
$senha = "123456";
$banco = "banco_oficina";

$conexao = mysqli_connect($host,$usuario,$senha,$banco);

if($conexao -> connect_error){
    die("Erro de conexão com o banco " . $conexao -> connect_error);
}

echo "Conexão Realizada com sucesso!";

$conexao->set_charset("utf8");


?>