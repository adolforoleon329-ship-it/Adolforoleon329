<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="calculadora.php" method="POST">
        <h1>Calculadora básica PHP</h1>
        <label>Digite um número</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label>Digite Outro número</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <label>Selecione a operação</label>
        <select name="operacao" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
<form action="" method=""></form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    switch ($operacao){
        case '+':
            $resultado = $num1 + $num2;
            echo "<p> O resultado da soma é {$resultado} </p>";
            break;

        case '-':
            $resultado = $num1 - $num2;
            echo "<p> O resultado da subtração é {$resultado} </p>";
            break;
            
        case 'x':
            $resultado = $num1 * $num2;
            echo "<p> O resultado da multiplicação é {$resultado} </p>";
            break;

        case '/':
            if ($num2 == 0){
                echo "<p>ALERTA!!!!---> não pode dividir por 0";
                break;
            }else{
                $resultado = $num1 / $num2;
                echo "<p> O resultado da divisão é {$resultado} </p>";
                break;
            }
        
        }

    }
?>