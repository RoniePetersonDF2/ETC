<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>Soma de valores usando função</h1>
    <?php
    # criando um função que recebe dois parâmentros x e y.
    # e retorna a soma dos dois valores.

    function somaDoisNumeros($x, $y)
    {
        return $x + $y;
    }

    # chamando uma função pelo seu nome.
    echo 'A soma dos 1 e 1 valores é: ' . somaDoisNumeros(1,1) . '<br>';
    echo 'A soma dos 2 e 2 valores é: ' . somaDoisNumeros(2,2) . '<br>';
    echo 'A soma dos 3 e 4 valores é: ' . somaDoisNumeros(3,4) . '<br>';
    echo 'A soma dos 5 e 7 valores é: ' . somaDoisNumeros(5,7) . '<br>';
?>
</body>
</html>