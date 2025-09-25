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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>

    <!-- implementação da solução -->
     
        <h1>Informe as horas abaixo</h1>
        <form action="" method="get">
            <label for="segundos">Número de segundos</label>
            <input type="number" name="segundos" id="segundos">
            <input type="submit" value="Calcular">
        </form>
        <?php
        if (isset($_GET['segundos'])) {
            $segundos = $_GET['segundos'];
            $min = $segundos / 60;
            $horas = number_format
            ($segundos / 3600, 2, ',', '');
            echo "O número de horas é: $horas<br>";
            echo "O número de minutos é: $min <br>";

        }
            ?>

    </main>
</body>


</html>