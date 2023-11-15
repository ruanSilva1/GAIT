<?php
    include('./conexao/conexao.php');

    $id_fornecedor = $_GET['cod_fornecedor'];
    $query = $dbh->prepare('DELETE FROM fornecedor WHERE cod_fornecedor=:cod_fornecedor');
    $query->execute(array(
        ':cod_fornecedor' => $id_fornecedor
    ));
?>