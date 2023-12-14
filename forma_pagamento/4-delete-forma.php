<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Removendo forma de pagamento...<br><br>';
$stmt = $conn->prepare("DELETE FROM tab_forma_pagamento WHERE titulo = :titulo");
$stmt->bindParam(':titulo', $titulo);
$titulo = "Permuta";
if($stmt->execute()){
    echo 'Forma de Pagamento removida com sucesso!';
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
