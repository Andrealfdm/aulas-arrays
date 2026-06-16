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


$opcoes = ["PHP", "JavaScript", "Python", "Java"];
$votos = [0, 0, 0, 0];

$cont_votos = readline("Quantidade de votos: ");
echo"\n";

echo "=== ENQUETE: MELHOR LINGUAGEM ===\n";

for($i = 1; $i <= $cont_votos; $i++){
    for($j = 1; $j <= 4; $j++){
        echo "[".$j."]".$opcoes[$j + -1]."\n";

    }
    $escolha_voto = readline("escolha a opção 1 a 4: ");
    $votos[$escolha_voto -1] += 1;
    echo"Voto computado!\n\n";
}


$vencedor = 0;
$linguagem = "";

echo"===RESULTADO===\n";
for($i = 0; $i < 4; $i++){
    echo $opcoes[$i]. "    ". $votos[$i]."  Voto(s)  |   ";
    echo (($votos[$i] / $cont_votos) * 100)."%\n";

    if($votos[$i] > $vencedor){
        $vencedor = $votos[$i];
        $linguagem = $opcoes[$i];
    }
}
echo"\n\n";
echo "Vencedor: ". $linguagem. "Com ".$vencedor." Votos!";


