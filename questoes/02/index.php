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
        <h2>Questão 02: Metros para centimetros</h2>
    </header>

    <main>
        <h1>Informe um número em metros abaixo abaixo</h1>
        <form action="" method="get">
            <label for="numer">Valor em metros</label>
            <input type="number" name="metro" id="metros">
            <input type="submit" value="Calcular">
        </form>
        <?php
     if (isset($_GET['metro']))
        $metro = $_GET['metro'];
        $cm = ($metro * 100);
        echo "O valor em centimetros é $cm cm<br>";
        ?>
    </main>
</body>


</html>