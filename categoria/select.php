<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Selecionando categoria...<br><br>';
$stmt = $conn->prepare("SELECT * FROM tab_categoria ");
// $stmt = $conn->prepare("SELECT * FROM tab_categoria WHERE titulo = :titulo");
$stmt->bindParam(':titulo', $titulo);
$titulo = "Manutenção";
if ($stmt->execute()) {
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($resultados) == 0) {
        echo "Não há nenhum registro com os parâmetros definidos!";
    } else {
        echo "Registros encontrados!<br>";

        foreach ($resultados as $resultado) {
            echo "ID: " . $resultado['categoria_id'] . '<br>';
            echo "Título: " . $resultado['titulo'] . '<br>';
            echo "Descrição: " . $resultado['descricao'] . '<br>';
            echo "Status: " . $resultado['categoria_status'] . '<br>';
            echo "<hr>";
        }
    }
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
