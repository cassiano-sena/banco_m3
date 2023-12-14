<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Selecionando despesa...<br><br>';
$stmt = $conn->prepare("SELECT * FROM tab_despesa ");
// $stmt = $conn->prepare("SELECT * FROM tab_despesa WHERE titulo = :titulo");
$stmt->bindParam(':titulo', $titulo);
$titulo = "Nova Despesa";
if ($stmt->execute()) {
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($resultados) == 0) {
        echo "Não há nenhum registro com os parâmetros definidos!";
    } else {
        echo "Registros encontrados!<br>";

        foreach ($resultados as $resultado) {
            echo "ID: " . $resultado['despesa_id'] . '<br>';
            echo "ID do Usuario Responsável: " . $resultado['usuario_id'] . '<br>';
            echo "ID da Origem: " . $resultado['origem_id'] . '<br>';
            echo "ID da Categoria: " . $resultado['categoria_id'] . '<br>';
            echo "ID da Forma de Pagamento: " . $resultado['forma_id'] . '<br>';
            echo "Título: " . $resultado['titulo'] . '<br>';
            echo "Descrição: " . $resultado['descricao'] . '<br>';
            echo "Status: " . $resultado['despesa_status'] . '<br>';
            echo "<hr>";
        }
    }
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
