<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Removendo registro no histórico...<br><br>';
$stmt = $conn->prepare("DELETE FROM tab_historico WHERE titulo = :titulo");
$stmt->bindParam(':titulo', $titulo);
$titulo = "Historico_14-12-2023";
if($stmt->execute()){
    echo 'Histórico removido com sucesso!';
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
