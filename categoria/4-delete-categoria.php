<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Removendo categoria...<br><br>';
$stmt = $conn->prepare("DELETE FROM tab_categoria WHERE titulo = :titulo");
$stmt->bindParam(':titulo', $titulo);
$titulo = "Manutenção";
if($stmt->execute()){
    echo 'Categoria removida com sucesso!';
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
