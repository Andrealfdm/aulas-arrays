# Exercícios PHP - Arrays

## Objetivo
Praticar **arrays** e **loops** em PHP, resolvendo problemas práticos.

- `for` → quando sabemos quantas vezes repetir (índice numérico)
- `while` → quando repetimos enquanto uma condição for verdadeira
- `do while` → quando queremos executar pelo menos 1 vez antes de verificar
- `foreach` → quando queremos percorrer cada elemento de um array (sem precisar de índice manual)

## Conceitos praticados
- Criar e manipular arrays (`$arr = []`, `$arr[] = valor`)
- Acessar elementos por índice (`$arr[0]`, `$str[$i]`)
- Funções de array: `count()`, `in_array()`, `unset()`, `array_values()`, `str_repeat()`
- Arrays paralelos (mesmo índice = mesmo registro)
- Arrays como contadores e acumuladores
- Loops + arrays para busca, filtragem e cálculos

## Exercícios

| # | Exercício | Descrição | Funções de Array |
|---|-----------|-----------|------------------|
| 01 | Lista de Compras | Adicionar, buscar, remover e contar itens | `in_array()` `unset()` `array_values()` `count()` |
| 02 | Notas da Turma | Cadastrar alunos/notas e gerar boletim com estatísticas | Arrays paralelos, acumular com loop |
| 03 | Enquete / Votação | Sistema de votação com gráfico de barras e detecção de empate | Array de contadores, `str_repeat()` |
| 04 | Controle de Estoque | Menu CRUD: listar, vender, repor e gerar relatório | 3 arrays paralelos, operações por índice |
| 05 | Jogo da Forca | Adivinhar palavra letra por letra com controle de erros | `$str[$i]`, `in_array()`, arrays dinâmicos |


## Regras
- Usar `readline()` para entrada de dados
- Usar `switch`, `if/else/elseif` quando indicado
- Usar concatenação (`.`) para montar saídas
- Usar **arrays** para armazenar e manipular dados
- NÃO usar funções próprias (apenas as nativas indicadas no exercício)

## Como executar
```bash
git clone https://github.com/teagar/php-exercicios-arrays.git
cd php-exercicios-arrays

# Exemplo: rodar o exercício 01
php exercicio01.php
```
---

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php&logoColor=white)
![Terminal](https://img.shields.io/badge/Ambiente-Terminal%20(CLI)-black?logo=windowsterminal)
![Arrays](https://img.shields.io/badge/Tema-Arrays-blue)
