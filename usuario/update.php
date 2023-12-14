<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Atualizando usuário...<br><br>';
$stmt = $conn->prepare("UPDATE tab_usuario SET nome = :novo_nome WHERE nome = :nome");
$stmt->bindParam(':novo_nome', $novo_nome);
$stmt->bindParam(':nome', $nome);
$novo_nome = "Cassiano Sena";
$nome = "Cassiano";
if($stmt->execute()){
    echo 'Usuario atualizado com sucesso!';
    echo '<br>Nome: '.$nome;
    echo '<br>Novo Nome: '.$novo_nome;
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;