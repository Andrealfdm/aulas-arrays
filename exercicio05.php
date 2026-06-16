<?php
/**
 * =============================================
 * EXERCÍCIO 05 - Jogo da Forca com Arrays
 * =============================================
 *
 * INSTRUÇÕES:
 * 1. Crie um array de palavras:
 *    $palavras = ["ABACAXI", "ELEFANTE", "PROGRAMAR", "TECLADO", "MONITOR"]
 * 2. Sorteie uma palavra: $palavraSecreta = $palavras[rand(0, count($palavras) - 1)]
 * 3. Crie um array $letrasDescobertas do mesmo tamanho, preenchido com "_"
 *    → Use loop: para cada caractere de $palavraSecreta, adicione "_"
 * 4. Crie um array $letrasUsadas vazio e defina $erros = 0, $maxErros = 6
 * 5. Use um LOOP principal (enquanto $erros < $maxErros E houver "_" em $letrasDescobertas):
 *    a. Exiba a palavra com loop: "Palavra: _ _ A _ _ _"
 *    b. Exiba: "Letras usadas: [percorra $letrasUsadas]"
 *    c. Exiba: "Erros: [N]/[MAX]"
 *    d. Peça uma letra via readline() e converta para maiúscula (strtoupper)
 *    e. Use IF + in_array() para verificar se já foi usada
 *       → "Você já tentou essa letra!"
 *       → Senão: adicione em $letrasUsadas[]
 *    f. Verifique se a letra existe na palavra com loop:
 *       → Percorra $palavraSecreta caractere a caractere ($palavraSecreta[$i])
 *       → Se encontrar: atualize $letrasDescobertas[$i] com a letra
 *       → Se NÃO encontrar nenhuma vez: $erros++ e "Letra não encontrada!"
 * 6. Após o loop, use IF/ELSE:
 *    - Se não tem mais "_" (use in_array("_", $letrasDescobertas)):
 *      "PARABÉNS! A palavra era: [PALAVRA]"
 *    - Senão: "ENFORCADO! A palavra era: [PALAVRA]"
 * 7. Exiba estatísticas: total de tentativas (count($letrasUsadas)) e erros
 *
 * EXEMPLO DE SAÍDA:
 * ---
 * === JOGO DA FORCA ===
 *
 * Palavra: _ _ _ _ _ _ _
 * Letras usadas:
 * Erros: 0/6
 * Digite uma letra: E
 * Boa! Letra encontrada!
 *
 * Palavra: E _ E _ _ _ _ E
 * Letras usadas: E
 * Erros: 0/6
 * Digite uma letra: X
 * Letra não encontrada!
 *
 * (... continua ...)
 *
 * Palavra: E L E F A N T E
 * PARABÉNS! A palavra era: ELEFANTE
 * Tentativas: 9 | Erros: 2
 * ---
 */

// Escreva seu código aqui:

$palavras = ["ABACAXI", "ELEFANTE", "PROGRAMAR", "TECLADO", "MONITOR"];
$palavra_secreta = $palavras[rand(0, count($palavras) - 1)];
$letras_descobertas = [];


$letra_usada = "";
$erros = 0;
$nome_completo = "";
$vitoria = 0;


echo "       \n=== JOGO DA FORCA ===\n";
echo "ABACAXI, ELEFANTE, PROGRAMAR, TECLADO, MONITOR\n\n";


for($f = 0; $f < strlen($palavra_secreta); $f++){
        $letras_descobertas[$f] = "-";
}

while(true){


    echo"palavra: ";
    for($f = 0; $f < strlen($palavra_secreta); $f++){
        echo $letras_descobertas[$f];  
    }
    echo"\n";

    echo"Letras usadas: ". $letra_usada. "\n";

    echo"Erros: ". $erros. "/6\n";

    $letra = strtoupper(readline("Digite uma letra: "));

    $trava = 0;
    for($j = 0; $j < strlen($palavra_secreta); $j++){
        if($letra == $palavra_secreta[$j]){
            $letras_descobertas[$j] = $letra;
            $trava = 1;
        }

    }if($palavra_secreta == implode("",$letras_descobertas)){
        echo"parabéns você venceu ";
        exit;

    }if($trava == 0){
        $erros += 1;
        echo"Letra não encontrada !";

        if($erros == 6){ # caso numero de tentativas chegue a 6 jogador perde
        echo"\nVocê perdeu , 0 tentativas !";
        echo"\n\n";

        exit;
       }
    }
    echo"\n\n";
}
    

#
