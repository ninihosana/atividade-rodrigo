 <?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-aula';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)

if($conexao->connect_errno)
{
    echo "Erro";
}
else
{
    echo "Conexao Efetuada com Sucesso";
}
?>