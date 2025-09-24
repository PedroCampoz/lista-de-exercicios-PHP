<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 06: Ordem Decrescente</h2>
    </header>

    <main>

    <!-- implementação da solução -->
     

        <h1>Informe três números abaixo</h1>
        <form action="" method="get">
            <label for="num1">Número 1</label>
            <input type="number" name="num1" id="num1">
            <label for="num2">Número 2</label>
            <input type="number" name="num2" id="num2">
            <label for="num3">Número 3</label>
            <input type="number" name="num3" id="num3">
            <input type="submit" value="Calcular">
        </form>
        <?php
        if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {

            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $num3 = $_GET['num3'];
             }

            if ($num1 <= $num2 && $num1 <= $num3) {
                $menor = $num1;
            }  elseif ($num2 <= $num1 && $num2 <= $num3) {
                $menor = $num2;
            } 
            else 
                $menor = $num3;

            echo "O menor número é : $menor <br>"

            ?>
        
        
    </main>
</body>


</html>