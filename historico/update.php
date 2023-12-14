<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Atualizando registro no histórico...<br><br>';
$stmt = $conn->prepare("UPDATE tab_historico SET titulo = :novo_titulo WHERE titulo = :titulo");
$stmt->bindParam(':novo_titulo', $novo_titulo);
$stmt->bindParam(':titulo', $titulo);
$novo_titulo = "Historico_14-12-2023";
$titulo = "Historico_14-12-23";
if($stmt->execute()){
    echo 'Histórico atualizado com sucesso!';
    echo '<br>Titulo: '.$titulo;
    echo '<br>Novo Titulo: '.$novo_titulo;
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
