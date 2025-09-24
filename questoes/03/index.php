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
        <h2>Questão 03: Horas trabalhadas</h2>
    </header>

    <main>

    <!-- implementação da solução -->
        <h1>Informe o número de horas trabalhadas e o valor da hora abaixo</h1>
        <form action="" method="get">
            <label for="horas">Horas trabalhadas</label>
            <input type="number" name="horas" id="horas">
            <label for="valor">Valor da hora</label>
            <input type="number" name="valor" id="valor">
            <input type="submit" value="Calcular">
        </form>
        <?php
     if (isset($_GET['horas']) && isset($_GET['valor'])) { //verifica se as variaveis estao definidas
        $horas = $_GET['horas'];
        $valor = $_GET['valor'];
        $salario = ($horas * $valor);
        echo "O salário total é R$ $salario<br>";
     }
        ?> 


    </main>
</body>


</html>