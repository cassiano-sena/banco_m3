<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Criando novo registro no histórico...<br><br>';
$stmt = $conn->prepare("INSERT INTO tab_historico (titulo, descricao, historico_status) VALUES (:titulo, :descricao, :historico_status)");
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':historico_status', $historico_status);
$titulo = "Historico_14-12-23";
$descricao = "";
$historico_status = "A";
if($stmt->execute()){
    echo 'Histórico registrado com sucesso!';
    echo '<br>Titulo: '.$titulo;
    echo '<br>Descricao: '.$descricao;
    echo '<br>Status: '.$historico_status;
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
