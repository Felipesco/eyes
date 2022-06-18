<?php
include("conexao.php");

$nomeUser = $_POST['nomeUser'];
$emailUser = $_POST['emailUser'];
$senhaUser = MD5($_POST['senhaUser']);
$telefoneUser = $_POST['telefoneUser']; 


header("Location:index.php");
?>