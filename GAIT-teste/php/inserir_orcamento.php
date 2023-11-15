<?php
include('./phpghost/conexao.php');

    if($_POST['nome'], $_POST['data_nascimento'], $_POST['cpf'], $_POST['cnpj'], $_POST['telefone'], $_POST['email'], $_POST['cep'], $_POST['endereco'], $_POST['n_endereco'], $_POST['forma_pagamento'], $_POST['tipo_pessoa'], $_POST['valor'], $_POST['status_venda'], $_POST['status_orcamento'], $_POST['pedido'], $_POST['descricao'] && $_POST['nome']!='' && $_POST['data_nascimento']!='' && $_POST['cpf']!='' && $_POST['cnpj']!='' && $_POST['telefone']!='' && $_POST['email']!='' && $_POST['cep']!='' && $_POST['endereco']!='' && $_POST['n_endereco']!='' && $_POST['forma_pagamento']!='' && $_POST['tipo_pessoa']!='' && $_POST['valor']!='' && $_POST['status_venda']!='' && $_POST['status_orcamento']!='' && $_POST['pedido']!='' && $_POST['descricao']!=''){
        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $cnpj = $_POST['cnpj'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
    }
?>