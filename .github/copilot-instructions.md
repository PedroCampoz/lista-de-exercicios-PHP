# Copilot Instructions for lista-de-exercicios-PHP

## Visão Geral
Este repositório contém uma lista de exercícios de PHP, cada um implementado em um arquivo separado dentro da pasta `questoes/`. O objetivo é praticar conceitos fundamentais da linguagem PHP, como variáveis, estruturas de controle, funções e manipulação de dados.

## Estrutura do Projeto
- Cada exercício está em uma subpasta de `questoes/` (ex: `questoes/01/index.php`).
- O arquivo `index.php` na raiz serve como página inicial e lista todos os exercícios com links.
- O arquivo `styles.css` define o estilo visual comum para todas as páginas.
- O arquivo `README.md` traz instruções para clonar, rodar e contribuir com o projeto.

## Convenções e Padrões
- Cada exercício deve ser resolvido em seu respectivo arquivo `index.php` dentro da pasta da questão.
- O padrão para entrada de dados é via formulário HTML (`<form method="get">`).
- O processamento dos dados é feito no mesmo arquivo, usando PHP embutido após o formulário.
- Sempre utilize `isset($_GET['campo'])` para verificar se o dado foi enviado antes de processar.
- Não há separação entre lógica e apresentação: o PHP está misturado ao HTML.
- Use nomes de variáveis em português, preferencialmente descritivos.
- O charset correto é `UTF-8` (corrija se encontrar `UTF--8`).

## Fluxo de Trabalho
- Para testar, rode o Apache via XAMPP e acesse `http://localhost/lista-de-exercicios-PHP`.
- Não há scripts de build, testes automatizados ou dependências externas.
- O fluxo principal é editar o arquivo da questão, salvar e recarregar no navegador.

## Exemplos de Padrão
```php
if (isset($_GET['num'])) {
    $num = $_GET['num'];
    // processamento
}
```

## Pontos de Atenção
- Não há uso de frameworks ou bibliotecas externas.
- O projeto é didático e prioriza simplicidade e clareza.
- Não há integração entre as questões: cada uma é independente.
- Corrija eventuais erros de HTML (ex: charset, fechamento de tags).

## Arquivos Importantes
- `index.php` (raiz): página inicial e navegação.
- `questoes/XX/index.php`: solução de cada exercício.
- `styles.css`: estilos globais.
- `README.md`: instruções gerais.

---

Se adicionar novos exercícios, siga o padrão das pastas e arquivos existentes. Se encontrar instruções conflitantes, priorize clareza e simplicidade.