<?php 

$dbHost = 'Localhost';
$dbUsermane = 'root';
$dbPassword = '';
$dbName = 'programacao-em-casa';

$conexao = new mysqli($dbHost,$dbUsermane,$dbPassword,$dbName);

//if($conexao->connect_errno)
//{
 //   echo "Erro";
//}
//else
//{
//    echo "Conexao efetuada com sucesso!";
//}
?>