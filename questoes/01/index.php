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


        </form>
    <!-- implementação da solução -->
             <h1>
            Informe um número abaixo
        </h1>
        <form action="valor.php">
        <label for="">Número</label>
        <input type="Number" name="num" id="numer">
        <input type="submit" value = calcular>
        </h1>

        <h1>Resultado Final</h1>
        <?php
        $num = $_GET['num'];
        $ant = $num - 1;
        $sucessor = $num + 1;
        echo "O seu número é $num";
        echo "O seu sucessor é $sucessor";
        echo "O seu antecessor é $ant";
        ?>
    </main>
</body>


</html>