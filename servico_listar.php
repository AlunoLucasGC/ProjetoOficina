<?php

require 'conexao.php';

//Se o formulário não foi usado, $busca fica vazia
$busca = '';

if(isset($_GET['busca'])){
    $busca = trim($_GET['busca']);
}

$curinga = '%' . $busca . '%';

$sql = "SELECT id, nome, preco, categoria, status, descricao FROM servicos WHERE nome LIKE = ? 
ORDER BY nome";

$stmt = mysqli_prepare($conexao, $sql);//Prepara a busca no banco
mysqli_stmt_bind_param($stmt, 's', $curinga);//Coleta os resultados
mysqli_stmt_execute($stmt);//Executa
$resultado = mysqli_stmt_get_result($stmt);//Faz a leitura


//Lista os serviços digitados
$servicosDigitados = mysqli_num_rows($resultado);


?>