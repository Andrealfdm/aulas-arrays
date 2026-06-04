<?php
/**
 * =============================================
 * EXERCÍCIO 04 - Controle de Estoque Simples
 * =============================================
 *
 * INSTRUÇÕES:
 * 1. Crie 3 arrays paralelos pré-preenchidos:
 *    $produtos   = ["Caneta", "Caderno", "Borracha", "Lápis", "Mochila"]
 *    $precos     = [2.50, 15.00, 1.50, 1.00, 89.90]
 *    $quantidades = [100, 50, 200, 150, 20]
 * 2. Exiba um menu em LOOP (sai ao escolher 0) com switch:
 *    [1] Listar estoque → percorra os 3 arrays exibindo:
 *        "[ID] [PRODUTO] | R$ [PRECO] | Qtd: [QTD] | Valor total: R$ [PRECO*QTD]"
 *    [2] Vender item → peça o ID e a quantidade:
 *        - IF quantidade disponível: subtraia e exiba "Venda realizada! Total: R$ [VALOR]"
 *        - ELSE: "Estoque insuficiente! Disponível: [QTD]"
 *    [3] Repor estoque → peça o ID e a quantidade a adicionar
 *    [4] Relatório → calcule com loop:
 *        - Valor total do estoque (soma de preço * quantidade de cada item)
 *        - Produto mais caro (maior preço)
 *        - Produto com mais unidades (maior quantidade)
 *    [0] Sair
 *    default: "Opção inválida!"
 * 3. Ao sair, exiba "Estoque final salvo!" e a listagem final
 *
 * EXEMPLO DE SAÍDA:
 * ---
 * === CONTROLE DE ESTOQUE ===
 *
 * [1] Listar  [2] Vender  [3] Repor  [4] Relatório  [0] Sair
 * Opção: 1
 *
 * ID | Produto   | Preço    | Qtd | Valor Total
 * 0  | Caneta    | R$ 2.50  | 100 | R$ 250.00
 * 1  | Caderno   | R$ 15.00 | 50  | R$ 750.00
 * (...)
 *
 * Opção: 2
 * ID do produto: 0
 * Quantidade: 10
 * Venda realizada! Total: R$ 25.00
 *
 * Opção: 4
 * === RELATÓRIO ===
 * Valor total em estoque: R$ 3,173.00
 * Produto mais caro: Mochila (R$ 89.90)
 * Maior estoque: Borracha (200 un.)
 *
 * Opção: 0
 * Estoque final salvo!
 * ---
 */

// Escreva seu código aqui:
