<?php
require_once "../conexao.php";
include_once "../menu.php";

try {
echo 'Atualizando origem...<br><br>';
    $stmt = $conn->prepare("UPDATE tab_origem SET titulo = :novo_titulo WHERE titulo = :titulo");
    $stmt->bindParam(':novo_titulo', $novo_titulo);
    $stmt->bindParam(':titulo', $titulo);
    $novo_titulo = "Seguradora X";
    $titulo = "Seguradora";
    if($stmt->execute()){
        echo 'Origem atualizada com sucesso!';
        echo '<br>Titulo Original: '.$titulo;
        echo '<br>Novo Titulo: '.$novo_titulo;
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
$conn = null;
