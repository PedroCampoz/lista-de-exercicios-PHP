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
        <h2>Questão 1: Antecessor de um Valor</h2>
    </header>

    <main>

    <!-- implementação da solução -->
            <!-- <h1>
            Informe um número abaixo
        </h1>
        <form action="valor.php" method="get">
        <label for="num">Número</label>
        <input type="number" name="num" id="numer">
        <input type="submit" value = calcular>
        </h1>

        <h1>Resultado Final</h1>
        // <?php
        $num = $_GET['num'];
        $ant = $num - 1;
        $sucessor = $num + 1;
        echo "O seu número é $num";
        echo "O seu sucessor é $sucessor";
        echo "O seu antecessor é $ant";
        ?> -->

        <h1>Informe um número abaixo</h1>
        <form action="" method="get">
            <label for="numer">Número</label>
            <input type="number" name="num" id="numer">
            <input type="submit" value="Calcular">
        </form>

        <h1>Resultado Final</h1>
        <?php
        if (isset($_GET['num'])) {
            $num = $_GET['num'];
            $ant = $num - 1;
            $sucessor = $num + 1;
            echo "O seu número é $num<br>";
            echo "O seu sucessor é $sucessor<br>";
            echo "O seu antecessor é $ant<br>";
        }
        ?>
    </main>
</body>


</html>