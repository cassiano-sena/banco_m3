<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Selecionando origem...<br><br>';
    $stmt = $conn->prepare("SELECT * FROM tab_origem ");
    // $stmt = $conn->prepare("SELECT * FROM tab_origem WHERE titulo = :titulo");
    $stmt->bindParam(':titulo', $titulo);
    $titulo = "Seguradora X";
    if ($stmt->execute()) {
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($resultados) == 0) {
            echo "Não há nenhum registro com os parâmetros definidos!";
        } else {
            echo "Registros encontrados!<br>";

            foreach ($resultados as $resultado) {
                echo "ID: " . $resultado['origem_id'] . '<br>';
                echo "Título: " . $resultado['titulo'] . '<br>';
                echo "Email: " . $resultado['email'] . '<br>';
                echo "Telefone: " . $resultado['telefone'] . '<br>';
                echo "Status: " . $resultado['origem_status'] . '<br>';
                echo "<hr>";
            }
        }
    }
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
