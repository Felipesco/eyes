<?php
include("conexao.php");

$nomeUser = $_POST['nomeUser'];
$emailUser = $_POST['emailUser'];
$senhaUser = MD5($_POST['senhaUser']);
$telefoneUser = $_POST['telefoneUser']; 

try{
    $stmt = $pdo->prepare("
        insert into tbUser(nomeUser, emailUser, senhaUser, telefoneUser)
        values(
        '$nomeUser','$emailUser','$senhaUser','$telefoneUser'
    )");
    $stmt->execute();
}
catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}	

header("location:index.php");

?>