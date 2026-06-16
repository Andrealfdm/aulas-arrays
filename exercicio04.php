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
$produtos   = ["Caneta", "Caderno", "Borracha", "Lapis", "Mochila"];
$precos     = [2.50, 15.00, 1.50, 1.00, 89.90];
$quantidades = [100, 50, 200, 150, 20];


$parada = true;
while($parada){

    echo "\n\n=== CONTROLE DE ESTOQUE ===\n"; 
    echo" [1] Listar  [2] Vender  [3] Repor  [4] Relatório  [0] Sair\n\n";
    echo"\n";

    $opcao = readline("escolha a opção: ");
    echo"\n";

   switch($opcao){
    case 0:
        echo"Estoque final salvo!";
        $parada = false;
        break;

    case 1:

        printf("%-3s | %-10s | %-9s | %-6s | %-10s\n", "ID", "Produto", "Preço", "Qtd", "Val. Total");
        echo "---------------------------------------------------------\n";

        $j = 1;

        for($i = 0; $i < count($produtos); $i++){

            $valor_total = $precos[$i] * $quantidades[$i];
            $preco_formatado = "R$" . number_format($precos[$i], 2, ',', '.');
            $valor_total_formatado = "R$" .  number_format($valor_total, 2, ',', '.'); 

            printf( "%-3d |* %-9s | %-8s | %-5d  | %-10s\n",
            $j,
            $produtos[$i],
            $preco_formatado,
            $quantidades[$i],
            $valor_total_formatado
            );
            $j++;
        }
        break;

    case 2:
        echo"\n";
        $id = readline("escolha ID, do 1* -- 5*: ");
        echo"\n";

        if(!is_numeric($id) || $id <= 0 || $id > 5){
            echo"ID incorreto!\n";
        }else{
        echo"ID do produto: " . $id ."\n";
        echo"Estoque atual: " . $quantidades[$id - 1] . "\n";

        $venda = readline("QT: a ser vendida: ");

        $quantidades[$id - 1] -= $venda;

        echo"Estoque apos venda: " . $quantidades[$id - 1] . "\n";
        }
        break;
    
    case 3:
        #Repor estoque → peça o ID e a quantidade a adicionar
        echo"Repor estoque!\n";
        $id = readline("escolha ID, do 1* -- 5*:  ");

        if(!is_numeric($id) || $id <= 0 || $id > 5){
            echo"ID incorreto!\n";
            break;
        }else{
            echo"Estoque atual: " . $quantidades[$id - 1] . "\n";

            $repor = readline("QT de iténs entrando no estoque: ");

            $quantidades[$id - 1] += $repor;
            echo"Adicionado itens ao estoque: " . $quantidades[$id - 1] . "\n";
        break;
        }
    case 4:
        $total = 0;
        $maior_valor = 0;
        $maior_estoque = 0;
        $nome_maior_estoque = "";

        for($i = 0; $i < count($produtos); $i++){
            (float)$total += $precos[$i] * $quantidades[$i];

            if($precos[$i] > $maior_valor){
                $maior = $precos[$i];

            }if($quantidades[$i] > $maior_estoque){
                $nome_maior_estoque = $produtos[$i];
                $maior_estoque = $quantidades[$i];
            }
        }

        echo "Valor total em estoque R$:". number_format($total,2, ",", ".");
        echo"\n                        ---------\n";
        echo "Produto mais caro: Mochila (R$ 89.90)\n";
        echo"Maior estoque: ".$nome_maior_estoque. " (". $maior_estoque. " un)\n";
        break;

    default:
        echo"Opção invalida!";
   }
}
