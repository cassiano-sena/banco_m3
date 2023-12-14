<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Removendo despesa...<br><br>';
$stmt = $conn->prepare("DELETE FROM tab_despesa WHERE titulo = :titulo");
$stmt->bindParam(':titulo', $titulo);
$titulo = "Nova Despesa";
if($stmt->execute()){
    echo 'Despesa removida com sucesso!';
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
