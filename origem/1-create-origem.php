<?php
require_once "../conexao.php";
include_once "../menu.php";

try {
echo 'Criando nova origem...<br><br>';
    $stmt = $conn->prepare("INSERT INTO tab_origem (titulo, email, telefone, origem_status) VALUES (:titulo, :email, :telefone, :origem_status)");
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':origem_status', $origem_status);
    $titulo = "Seguradora";
    $email = "seguradora@email.com";
    $telefone = "1111-1111";
    $origem_status = "A";

    if($stmt->execute()){
        echo 'Origem criada com sucesso!';
        echo '<br>Titulo: '.$titulo;
        echo '<br>Email: '.$email;
        echo '<br>Telefone: '.$telefone;
        echo '<br>Status: '.$origem_status;
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
$conn = null;
