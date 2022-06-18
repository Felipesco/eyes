<?php
include("conexao.php");

$nomeUser = $_POST['nomeUser'];
$emailUser = $_POST['emailUser'];
$senhaUser = MD5($_POST['senhaUser']);
$telefoneUser = $_POST['telefoneUser']; 

# Mensagem de Erro
# Error: SQLSTATE[21S01]: Insert value list does not match column list: 1136 Column count doesn't match value count at row 1

try{
    $stmt = $pdo->prepare("insert into tbUser values(
        null,'$nomeUser','$emailUser','$senhaUser','$telefoneUser', null, null
    )");
    $stmt->execute();
}
catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}	

?>