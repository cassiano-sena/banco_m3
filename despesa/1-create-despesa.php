<?php
require_once "../conexao.php";
include_once "../menu.php";

try{
echo 'Criando nova despesa...<br><br>';
$stmt = $conn->prepare("INSERT INTO tab_despesa (usuario_id, origem_id, categoria_id, forma_id, titulo, descricao, despesa_status) VALUES (:usuario_id, :origem_id, :categoria_id, :forma_id, :titulo, :descricao, :despesa_status)");
$stmt->bindParam(':usuario_id', $usuario_id);
$stmt->bindParam(':origem_id', $origem_id);
$stmt->bindParam(':categoria_id', $categoria_id);
$stmt->bindParam(':forma_id', $forma_id);
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':despesa_status', $despesa_status);
$usuario_id = "1";
$origem_id = "1";
$categoria_id = "1";
$forma_id = "1";
$titulo = "Despesa";
$descricao = "14-12-23";
$despesa_status = "A";
if($stmt->execute()){
    echo 'Despesa criada com sucesso!';
    echo '<br>ID do Usuario responsável: '.$usuario_id;
    echo '<br>ID da Origem: '.$origem_id;
    echo '<br>ID da Categoria: '.$categoria_id;
    echo '<br>ID da Forma de Pagamento: '.$forma_id;
    echo '<br>Titulo: '.$titulo;
    echo '<br>Descricao: '.$descricao;
    echo '<br>Status: '.$despesa_status;
}
} catch (PDOException $e) {
echo 'Error: ' . $e->getMessage();
}
$conn = null;
