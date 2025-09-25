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
        <h2>Questão 07: Fatorial </h2>
    </header>

    <main>

    <!-- implementação da solução -->
    <h1>Informe um número para calcular o fatorial</h1>
    <form action="" method="get">
        <label for="num">Número:</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Calcular">
    </form>
    
    <?php
        if (isset($_GET['num']) && $_GET['num']) {
            
            $num = (int)$_GET['num'];
            $fatorial = 1;
            $contador = 1;

            while ($contador <= $num) {
                $fatorial *= $contador; 
                $contador++; 
            }

            echo "<p>O fatorial de $num é: $fatorial</p>";
        }
    ?>
</body>
</html>
        
     
    </main>
</body>


</html>