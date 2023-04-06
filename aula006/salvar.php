<?php




$nome = $_POST['nome'];

$telefone = $_POST['telefone'];

$cidade = $_POST['cidade'];




$arquivo = fopen("clientes.csv","a");




fwrite($arquivo, $nome . ",");

fwrite($arquivo, $telefone . ",");

fwrite($arquivo, $cidade . "\n");




fclose($arquivo);




header("location:index.php?menssagem=salvo");







?>