<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    $aluno = "Nome do Aluno";
    $disciplina = "Disciplina";
    $professor = "Nome do Professor";
    ?>
    <header>
        <img src="https://www.ifto.edu.br/paraiso/logo-home-campus-paraiso.png/@@images/07619964-1389-4188-91c0-c0f38508b3d4.png"
            alt="Logo IFTO Campus Paraíso">
        <h1><?php echo $aluno; ?></h1>
        <h2><?php echo $disciplina; ?></h2>
        <p>Professor: <?php echo $professor; ?></p>
    </header>

    <main>
        <h2>Lista de Exercícios</h2>
        <div style="display: flex; flex-direction: row; align-items: center; gap: 10px; ">
            <h4>Instruções: </h4>
            <p>Leia atentamente cada questão e implemente a solução em PHP.</p>
        </div>
        <ul>
            <li><a href="questoes/01/index.php">Questão 1:</a> Escreva um algoritmo para ler um valor e escrever na tela o seu antecessor.
            </li>
            <li><a href="questoes/02/index.php">Questão 2:</a> Faça um Programa que converta metros para centímetros.</li>
            <li><a href="questoes/03/index.php">Questão 3:</a> Faça um Programa que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês.</li>
            <li><a href="questoes/04/index.php">Questão 4:</a> Faça um programa para uma loja de tintas. O programa deverá pedir o tamanho em metros quadrados da área a ser pintada.</li>
            <li><a href="questoes/05/index.php">Questão 5:</a> Faça um Programa que leia três números e mostre o maior deles.</li>
            <li><a href="questoes/06/index.php">Questão 6:</a> Faça um Programa que leia três números e mostre-os em ordem decrescente.</li>
            <li><a href="questoes/07/index.php">Questão 7:</a> Faça um programa que calcule o fatorial de um número inteiro fornecido pelo usuário. Ex.: 5!=5.4.3.2.1=120</li>
            <li><a href="questoes/08/index.php">Questão 8:</a> Faça um programa que imprima na tela apenas os números ímpares entre 1 e 50.</li>
            <li><a href="questoes/09/index.php">Questão 9:</a> Escreva um algoritmo para ler o nome e a idade de uma pessoa, e exibir
                quantos dias de vida ela possui. Considere sempre anos completos, e que um ano possui 365 dias.</li>
            <li><a href="questoes/10/index.php">Questão 10:</a> Faça um algoritmo que leia o tempo de duração de um evento em uma fábrica
                expressa em segundos e mostre-o expresso em horas, minutos e segundos.</li>
        </ul>
    </main>

<?php
// --- CONFIGURAÇÃO E LÓGICA PRINCIPAL ---

// Define qual exercício está ativo. Se 'q' não estiver na URL, padrão é 0 (página inicial).
$exercicio_ativo = isset($_GET['q']) ? (int)$_GET['q'] : 0;
$resultado = null;
$titulo = 'Painel de Exercícios';
$descricao = 'Selecione um exercício no menu para começar.';
$campos_formulario = []; // Array para gerar o formulário dinamicamente

// O 'switch' funciona como um roteador, preparando os dados para o exercício selecionado.
switch ($exercicio_ativo) {
    case 1: // Antecessor
        $titulo = 'Questão 1: Antecessor';
        $descricao = 'Digite um número para descobrir o seu antecessor.';
        $campos_formulario = [
            ['label' => 'Número Base', 'type' => 'number', 'name' => 'num_base']
        ];
        if (isset($_GET['num_base'])) {
            $numero = (int)$_GET['num_base'];
            $resultado = "O antecessor de $numero é " . ($numero - 1);
        }
        break;

    case 2: // Metros para Centímetros
        $titulo = 'Questão 2: Metros para Centímetros';
        $descricao = 'Insira uma medida em metros para converter para centímetros.';
        $campos_formulario = [
            ['label' => 'Metros (m)', 'type' => 'number', 'name' => 'metros', 'step' => 'any']
        ];
        if (isset($_GET['metros'])) {
            $metros = (float)$_GET['metros'];
            $centimetros = $metros * 100;
            $resultado = "$metros m equivale(m) a $centimetros cm.";
        }
        break;
    
    case 3: // Cálculo de Salário
        $titulo = 'Questão 3: Calculadora de Salário';
        $descricao = 'Informe o valor por hora e as horas trabalhadas no mês.';
        $campos_formulario = [
            ['label' => 'Ganho por Hora (R$)', 'type' => 'number', 'name' => 'ganho_hora', 'step' => '0.01'],
            ['label' => 'Horas Mensais', 'type' => 'number', 'name' => 'horas_mes', 'step' => 'any']
        ];
        if (isset($_GET['ganho_hora'], $_GET['horas_mes'])) {
            $salario_bruto = (float)$_GET['ganho_hora'] * (float)$_GET['horas_mes'];
            $resultado = "Salário mensal: R$ " . number_format($salario_bruto, 2, ',', '.');
        }
        break;

    case 4: // Loja de Tintas
        $titulo = 'Questão 4: Calculadora de Tinta';
        $descricao = 'Calcule o custo para pintar uma área (1L pinta 6m², lata com 18L custa R$ 80,00).';
        $campos_formulario = [
            ['label' => 'Área a Pintar (m²)', 'type' => 'number', 'name' => 'area', 'step' => 'any']
        ];
        if (isset($_GET['area'])) {
            define('COBERTURA_LITRO', 6);
            define('LITROS_LATA', 18);
            define('PRECO_LATA', 80.00);
            $area = (float)$_GET['area'];
            $litros_necessarios = $area / COBERTURA_LITRO;
            $latas = ceil($litros_necessarios / LITROS_LATA);
            $custo = $latas * PRECO_LATA;
            $resultado = "Necessário: $latas lata(s). Custo total: R$ " . number_format($custo, 2, ',', '.');
        }
        break;

    case 5: // Maior de Três Números
        $titulo = 'Questão 5: Maior de Três';
        $descricao = 'Digite três números para descobrir qual é o maior.';
        $campos_formulario = [
            ['label' => 'Valor A', 'type' => 'number', 'name' => 'val1', 'step' => 'any'],
            ['label' => 'Valor B', 'type' => 'number', 'name' => 'val2', 'step' => 'any'],
            ['label' => 'Valor C', 'type' => 'number', 'name' => 'val3', 'step' => 'any']
        ];
        if (isset($_GET['val1'], $_GET['val2'], $_GET['val3'])) {
            $numeros = [(float)$_GET['val1'], (float)$_GET['val2'], (float)$_GET['val3']];
            $resultado = "O maior número é " . max($numeros);
        }
        break;

    case 6: // Ordem Decrescente
        $titulo = 'Questão 6: Ordem Decrescente';
        $descricao = 'Digite três números para exibi-los em ordem decrescente.';
        $campos_formulario = [
            ['label' => 'Valor A', 'type' => 'number', 'name' => 'val1', 'step' => 'any'],
            ['label' => 'Valor B', 'type' => 'number', 'name' => 'val2', 'step' => 'any'],
            ['label' => 'Valor C', 'type' => 'number', 'name' => 'val3', 'step' => 'any']
        ];
        if (isset($_GET['val1'], $_GET['val2'], $_GET['val3'])) {
            $numeros = [(float)$_GET['val1'], (float)$_GET['val2'], (float)$_GET['val3']];
            rsort($numeros); // Ordena o array em ordem decrescente
            $resultado = "Ordem: " . implode(", ", $numeros);
        }
        break;

    case 7: // Fatorial
        $titulo = 'Questão 7: Cálculo de Fatorial';
        $descricao = 'Calcule o fatorial de um número inteiro não negativo.';
        $campos_formulario = [
            ['label' => 'Número', 'type' => 'number', 'name' => 'fatorial_num', 'min' => '0']
        ];
        if (isset($_GET['fatorial_num'])) {
            $n = (int)$_GET['fatorial_num'];
            $fatorial = 1;
            for ($i = $n; $i > 1; $i--) {
                $fatorial *= $i;
            }
            $resultado = "$n! = " . number_format($fatorial);
        }
        break;

    case 8: // Ímpares em Intervalo
        $titulo = 'Questão 8: Ímpares em Intervalo';
        $descricao = 'Exibe todos os números ímpares dentro de um intervalo.';
        $campos_formulario = [
            ['label' => 'Início', 'type' => 'number', 'name' => 'inicio'],
            ['label' => 'Fim', 'type' => 'number', 'name' => 'fim']
        ];
        if (isset($_GET['inicio'], $_GET['fim'])) {
            $inicio = (int)$_GET['inicio'];
            $fim = (int)$_GET['fim'];
            $impares = [];
            // Lógica para achar o primeiro ímpar
            $primeiro_impar = ($inicio % 2 != 0) ? $inicio : $inicio + 1;
            for ($i = $primeiro_impar; $i <= $fim; $i += 2) {
                $impares[] = $i;
            }
            $resultado = implode(" | ", $impares);
        }
        break;

    case 9: // Dias de Vida
        $titulo = 'Questão 9: Dias de Vida';
        $descricao = 'Calcule os dias de vida com base na idade (1 ano = 365 dias).';
        $campos_formulario = [
            ['label' => 'Seu Nome', 'type' => 'text', 'name' => 'nome_paciente'],
            ['label' => 'Idade em Anos', 'type' => 'number', 'name' => 'idade_anos', 'min' => '0']
        ];
        if (isset($_GET['nome_paciente'], $_GET['idade_anos'])) {
            $nome = htmlspecialchars($_GET['nome_paciente']);
            $idade = (int)$_GET['idade_anos'];
            $dias = $idade * 365;
            $resultado = "$nome, você viveu aproximadamente " . number_format($dias) . " dias.";
        }
        break;
        
    case 10: // Conversor de Tempo
        $titulo = 'Questão 10: Conversor de Segundos';
        $descricao = 'Converta uma duração em segundos para o formato H:M:S.';
        $campos_formulario = [
            ['label' => 'Total em Segundos', 'type' => 'number', 'name' => 'total_segundos', 'min' => '0']
        ];
        if (isset($_GET['total_segundos'])) {
            $segundos = (int)$_GET['total_segundos'];
            $resultado = "Formato H:M:S => " . gmdate("H:i:s", $segundos);
        }
        break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Exercícios PHP</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; background-color: #f0f2f5; margin: 0; padding: 2rem; }
        .container { max-width: 800px; margin: auto; display: grid; grid-template-columns: 200px 1fr; gap: 2rem; }
        nav ul { list-style: none; padding: 0; margin: 0; }
        nav a { display: block; padding: 0.75rem 1rem; text-decoration: none; color: #333; border-radius: 5px; }
        nav a.active, nav a:hover { background-color: #007bff; color: white; }
        .card { background-color: white; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        .campo-form { margin-bottom: 1rem; }
        .campo-form label { display: block; margin-bottom: 0.25rem; }
        .campo-form input { width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 0.75rem; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 1rem; }
        .display-resultado { margin-top: 1.5rem; padding: 1rem; background-color: #e9ecef; border-radius: 5px; text-align: center; font-size: 1.1rem; word-wrap: break-word; }
    </style>
</head>
<body>

    <div class="container">
        <nav>
            <ul>
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <li>
                        <a href="?q=<?= $i ?>" class="<?= $exercicio_ativo == $i ? 'active' : '' ?>">
                            Questão <?= $i ?>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>

        <main class="card">
            <h2><?= $titulo ?></h2>
            <p><?= $descricao ?></p>
            
            <?php if (!empty($campos_formulario)): ?>
                <form method="get">
                    <input type="hidden" name="q" value="<?= $exercicio_ativo ?>">
                    
                    <?php foreach ($campos_formulario as $campo): ?>
                        <div class="campo-form">
                            <label for="<?= $campo['name'] ?>"><?= $campo['label'] ?>:</label>
                            <input 
                                type="<?= $campo['type'] ?>" 
                                id="<?= $campo['name'] ?>" 
                                name="<?= $campo['name'] ?>" 
                                step="<?= $campo['step'] ?? '1' ?>"
                                min="<?= $campo['min'] ?? '' ?>"
                                required>
                        </div>
                    <?php endforeach; ?>
                    
                    <button type="submit">Calcular</button>
                </form>
            <?php endif; ?>

            <?php if ($resultado !== null): ?>
                <div class="display-resultado">
                    <strong>Resultado:</strong><br>
                    <?= $resultado ?>
                </div>
            <?php endif; ?>
        </main>
    </div>

</body>
</html>