<?php
$resultado = 0;
if (isset($_GET['botaoEnviar'])) {
    $operacao = $_GET['operacao'];
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $resultado = 0;
    if ($operacao == 'subtracao') {
        $resultado = $valor1 - $valor2;
    } elseif ($operacao == 'multiplicacao') {
        $resultado = $valor1 * $valor2;
    } elseif ($operacao == 'divisao') {
        $resultado = $valor1 / $valor2;
    } else {
        $resultado = $valor1 + $valor2;
    }
}
