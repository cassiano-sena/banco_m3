<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Criando nova categoria...<br><br>';
$stmt = $conn->prepare("INSERT INTO tab_categoria (titulo, descricao, categoria_status) VALUES (:titulo, :descricao, :categoria_status)");
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':categoria_status', $categoria_status);
$titulo = "Gastos Empresariais";
$descricao = "";
$categoria_status = "A";
if($stmt->execute()){
    echo 'Categoria criada com sucesso!';
    echo '<br>Titulo: '.$titulo;
    echo '<br>Descricao: '.$descricao;
    echo '<br>Status: '.$categoria_status;
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;

