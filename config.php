<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword ='91702487';
$dbname = 'formulariofacebook';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);


if($conexao->connect_errno)
{
    echo "erro";
}
else{
    echo "conexao efetuada com sucesso";
}
?>