<?php
/**
 * =============================================
 * EXERCÍCIO 01 - Lista de Compras Inteligente
 * =============================================
 *
 * INSTRUÇÕES:
 * 1. Crie um array $listaCompras vazio
 * 2. Use um LOOP para pedir ao usuário itens via readline()
 *    - Digite "sair" para parar de adicionar
 *    - Antes de adicionar, verifique com in_array() se o item JÁ EXISTE
 *      → Se existir: "Item já está na lista!"
 *      → Se não: adicione com $listaCompras[] e exiba "Item adicionado!"
 * 3. Após sair do loop, exiba menu com switch:
 *    [1] Ver lista completa → percorra com loop exibindo: "[N]. [ITEM]"
 *    [2] Buscar item → peça o nome, use in_array() e exiba se encontrou ou não
 *    [3] Remover item → peça o índice, use unset() e array_values() para reindexar
 *    [4] Contar itens → use count() e exiba: "Você tem [N] itens na lista"
 *    default: "Opção inválida!"
 * 4. Exiba a lista final com loop e o total com count()
 *
 * EXEMPLO DE SAÍDA:
 * ---
 * === LISTA DE COMPRAS ===
 *
 * Digite um item (ou "sair"): Arroz
 * Item adicionado!
 * Digite um item (ou "sair"): Feijão
 * Item adicionado!
 * Digite um item (ou "sair"): Arroz
 * Item já está na lista!
 * Digite um item (ou "sair"): Leite
 * Item adicionado!
 * Digite um item (ou "sair"): sair
 *
 * O que deseja fazer?
 * [1] Ver lista  [2] Buscar  [3] Remover  [4] Contar
 * Opção: 1
 *
 * === SUA LISTA ===
 * 1. Arroz
 * 2. Feijão
 * 3. Leite
 *
 * === LISTA FINAL ===
 * Total de itens: 3
 * ---
 */

// Escreva seu código aqui:
