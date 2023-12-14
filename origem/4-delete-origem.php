<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Removendo origem...<br><br>';
$stmt = $conn->prepare("DELETE FROM tab_origem WHERE titulo = :titulo");
$stmt->bindParam(':titulo', $titulo);
$titulo = "Seguradora X";
if($stmt->execute()){
    echo 'Origem removida com sucesso!';
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
