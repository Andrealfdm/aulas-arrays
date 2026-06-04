<?php
/**
 * =============================================
 * EXERCÍCIO 03 - Enquete / Votação
 * =============================================
 *
 * INSTRUÇÕES:
 * 1. Crie um array com 4 opções de linguagens:
 *    $opcoes = ["PHP", "JavaScript", "Python", "Java"]
 * 2. Crie um array de contadores zerados:
 *    $votos = [0, 0, 0, 0]
 * 3. Peça o NÚMERO DE VOTANTES via readline()
 * 4. Use um LOOP para cada votante:
 *    a. Exiba as opções numeradas percorrendo $opcoes com loop:
 *       "[N] [LINGUAGEM]"
 *    b. Peça o voto via readline()
 *    c. Use IF para validar se o voto é válido (1 a 4)
 *       → Válido: incremente $votos[indice] e exiba "Voto computado!"
 *       → Inválido: "Voto inválido!" (não conta como votante, repita)
 * 5. Após a votação, exiba os resultados percorrendo ambos os arrays:
 *    "[LINGUAGEM]: [VOTOS] voto(s) | [BARRA] [PERCENTUAL]%"
 *    → $barra = str_repeat("█", $votos[$i]) para gráfico visual
 *    → $percentual = ($votos[$i] / $totalVotos) * 100
 * 6. Encontre o vencedor com loop (maior valor em $votos)
 *    Exiba: "Vencedora: [LINGUAGEM] com [VOTOS] votos!"
 * 7. Se houver empate (dois ou mais com mesmo valor máximo):
 *    "Empate entre: [LINGUAGEM1] e [LINGUAGEM2]!"
 *
 * EXEMPLO DE SAÍDA:
 * ---
 * === ENQUETE: MELHOR LINGUAGEM ===
 *
 * Quantos votantes? 5
 *
 * --- Votante 1 ---
 * [1] PHP  [2] JavaScript  [3] Python  [4] Java
 * Seu voto: 3
 * Voto computado!
 *
 * (... repete para cada votante ...)
 *
 * === RESULTADO ===
 * PHP:        1 voto(s)  | █         20.0%
 * JavaScript: 1 voto(s)  | █         20.0%
 * Python:     2 voto(s)  | ██        40.0%
 * Java:       1 voto(s)  | █         20.0%
 *
 * Vencedora: Python com 2 votos!
 * ---
 */

// Escreva seu código aqui:
