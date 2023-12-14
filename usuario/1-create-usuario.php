<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Criando novo usuário...<br><br>';
$stmt = $conn->prepare("INSERT INTO tab_usuario (nome, email, telefone, senha, usuario_status) VALUES (:nome, :email, :telefone, :senha, :usuario_status)");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':usuario_status', $usuario_status);
$nome = "Cassiano";
$email = "cassiano@email.com";
$telefone = "1111-1111";
$senha = "cassiano";
$usuario_status = "A";
if($stmt->execute()){
    echo 'Usuario criado com sucesso!';
    echo '<br>Nome: '.$nome;
    echo '<br>Email: '.$email;
    echo '<br>Telefone: '.$telefone;
    echo '<br>Senha: '.$senha;
    echo '<br>Status: '.$usuario_status;
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
