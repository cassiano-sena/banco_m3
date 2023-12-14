<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Selecionando forma de pagamento...<br><br>';
$stmt = $conn->prepare("SELECT * FROM tab_forma_pagamento ");
// $stmt = $conn->prepare("SELECT * FROM tab_forma_pagamento WHERE titulo = :titulo");
$stmt->bindParam(':titulo', $titulo);
$titulo = "Permuta";
if ($stmt->execute()) {
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($resultados) == 0) {
        echo "Não há nenhum registro com os parâmetros definidos!";
    } else {
        echo "Registros encontrados!<br>";

        foreach ($resultados as $resultado) {
            echo "ID: " . $resultado['forma_id'] . '<br>';
            echo "Título: " . $resultado['titulo'] . '<br>';
            echo "Descrição: " . $resultado['descricao'] . '<br>';
            echo "Status: " . $resultado['forma_status'] . '<br>';
            echo "<hr>";
        }
    }
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
