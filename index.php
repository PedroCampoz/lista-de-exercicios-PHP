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
</body>
</html>