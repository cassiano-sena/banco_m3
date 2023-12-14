<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Removendo usuário...<br><br>';
$stmt = $conn->prepare("DELETE FROM tab_usuario WHERE nome = :nome");
$stmt->bindParam(':nome', $nome);
$nome = "Cassiano Sena";
if($stmt->execute()){
    echo 'Usuario removido com sucesso!';
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;