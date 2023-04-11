<?php
    require_once('../model/model.php');

    $nome = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $rendimento = floatval($_GET['rendimento']);

    $usuario = new Usuario($nome, $cpf, $rendimento);
    $usuario->calcularIR($usuario->getRendimento());
    print_r($usuario);

    header("Location: ../view/resultado.php?".
        "nome=".urlencode($usuario->getNome()).
        "&cpf=".$usuario->getCpf().
        "&rendimento=".$usuario->getRendimento().
        "&aliquota=".$usuario->getAliquota().
        "&imposto=".urlencode($usuario->getImposto())
    );
?>