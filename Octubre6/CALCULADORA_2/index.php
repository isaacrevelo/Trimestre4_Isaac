<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <form action="calculadora2.php" method="POST">
        <input type="number" name="operador1" value="" placeholder="operando1">
        <input type="number" name="operador2" value="" placeholder="operando2">
        <select name="operacion" id="operacion">
            <option value="Sumar">Sumar</option>
            <option value="Restar">Restar</option>
            <option value="Multiplicar">Multiplicar</option>
            <option value="Dividir">Dividir</option>
        </select>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
</body>
</html>