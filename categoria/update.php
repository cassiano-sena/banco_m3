<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Atualizando categoria...<br><br>';
$stmt = $conn->prepare("UPDATE tab_categoria SET titulo = :novo_titulo WHERE titulo = :titulo");
$stmt->bindParam(':novo_titulo', $novo_titulo);
$stmt->bindParam(':titulo', $titulo);
$novo_titulo = "Manutenção";
$titulo = "Gastos Empresariais";
if($stmt->execute()){
    echo 'Categoria atualizada com sucesso!';
    echo '<br>Titulo: '.$titulo;
    echo '<br>Novo Titulo: '.$novo_titulo;
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
