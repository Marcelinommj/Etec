<?php
require_once 'Operacao.php';

$valor1 = isset($_POST['numero1']) ? floatval($_POST['numero1']) : 0;
$valor2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : 0;
$operacao = $_POST['operacao'] ?? '';

$resultado = "Nenhuma operação realizada.";

if (!empty($operacao)) {
    switch ($operacao) {
        case 'somar':
            $resultado = Operacao::somar($valor1, $valor2);
            break;
        case 'subtrair':
            $resultado = Operacao::subtrair($valor1, $valor2);
            break;
        case 'multiplicar':
            $resultado = Operacao::multiplicar($valor1, $valor2);
            break;
        case 'dividir':
            $resultado = Operacao::dividir($valor1, $valor2);
            break;
        default:
            $resultado = "Operação inválida!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

    <h2>Resultado da Operação</h2>
    <p><strong>O resultado é:</strong> <?php echo $resultado; ?></p>

    <a href="index.php">Voltar</a>

</body>
</html>
