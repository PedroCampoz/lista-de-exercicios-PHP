<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 1: Antecessor</title>
    <style>
        /* Estilos básicos para melhorar a aparência */
        body { 
            font-family: Arial, sans-serif; 
            max-width: 600px; 
            margin: 40px auto; 
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        h1 {
            color: #333;
        }
        .Rfinal {
            margin-top: 20px;
            padding: 15px;
            background-color: #eef7ff;
            border: 1px solid #bce8f1;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <h1>Questão 1: Descubra o Antecessor</h1>
    <p>Digite um número para descobrir qual é o seu antecessor.</p>

    <form action="index.php" method="get">
        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
        // Este bloco PHP só será executado se um valor for enviado pelo formulário.
        // A função isset() verifica se a variável 'valor' existe na URL.
        if (isset($_GET['valor'])) {
            
            // 1. LER O VALOR
            // Pegamos o valor enviado e o convertemos para um número inteiro com (int).
            $valor_informado = (int)$_GET['valor'];

            // 2. PROCESSAR O VALOR (ALGORITMO)
            // Calculamos o antecessor subtraindo 1.
            $antecessor = $valor_informado - 1;

            // 3. ESCREVER NA TELA
            // Exibimos o resultado dentro de uma div para destacá-lo.
            echo "<div class='resultado'>";
            echo "<h2>Resultado:</h2>";
            echo "O antecessor de <strong>$valor_informado</strong> é <strong>$antecessor</strong>.";
            echo "</div>";
        }
    ?>

</body>
</html>