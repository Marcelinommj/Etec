<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
</head>
<body>

    <form action="calcular.php" method="POST">

        <input type="number" id="numero1" name="numero1" ><br/><br/>
        <input type="number" id="numero2" name="numero2" ><br/><br/>
        
        <button type="submit" name="operacao" id="somar" value="somar">Somar</button>
        <button type="submit" name="operacao" id="subtrair" value="subtrair">Subtrair</button>
        <button type="submit" name="operacao" id="dividir" value="dividir">Dividir</button>
        <button type="submit" name="operacao" id="multiplicar" value="multiplicar">Multiplicar</button>

    </form>
</body>
</html>