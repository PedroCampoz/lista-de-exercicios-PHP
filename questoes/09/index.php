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
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>

    <!-- implementação da solução -->
                <h1>Informe o nome e a idade abaixo</h1>
        <form action="" method="get">
            <label for="segundos">Qual seu nome?</label>
            <input type="text" name="nome" id="nome">
            <label for="segundos">Qual sua idadde?</label>
            <input type="number" name="idade" id="idade">
            <input type="submit" value="Calcular">
        </form>
        <?php
        if (isset($_GET['idade']) && isset($_GET['nome']))
        {
            $nome = $_GET['nome'];
            $idade = $_GET['idade'];
            $dias = $idade * 365;
            echo "Olá, $nome! Você já viveu aproximadamente $dias dias.<br>";
        }
            ?>
     
    </main>
</body>


</html>