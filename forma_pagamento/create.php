<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Criando nova forma de pagamento...<br><br>';
$stmt = $conn->prepare("INSERT INTO tab_forma_pagamento (titulo, descricao, forma_status) VALUES (:titulo, :descricao, :forma_status)");
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':forma_status', $forma_status);
$titulo = "Dinheiro";
$descricao = "";
$forma_status = "A";
if($stmt->execute()){
    echo 'Forma de Pagamento criada com sucesso!';
    echo '<br>Titulo: '.$titulo;
    echo '<br>Descricao: '.$descricao;
    echo '<br>Status: '.$forma_status;
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
