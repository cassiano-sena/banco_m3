<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Atualizando despesa...<br><br>';
$stmt = $conn->prepare("UPDATE tab_despesa SET titulo = :novo_titulo WHERE titulo = :titulo");
$stmt->bindParam(':novo_titulo', $novo_titulo);
$stmt->bindParam(':titulo', $titulo);
$novo_titulo = "Nova Despesa";
$titulo = "Despesa";
if($stmt->execute()){
    echo 'Despesa atualizada com sucesso!';
    echo '<br>Titulo: '.$titulo;
    echo '<br>Novo Titulo: '.$novo_titulo;
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
