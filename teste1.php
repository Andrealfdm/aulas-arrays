<?php

$produtos = ["Cafe", "Pao", "Leite", "Queijo", "Manteiga", "Presunto", "Suco", "Biscoito"];
$precos   = [14.90,   7.50,  5.80,   22.00,    9.40,       18.75,     8.90,   6.50];
$estoque  = [10,      25,    15,     8,        12,          6,         20,     18];

$carrinho_produtos  = []; 
$carrinho_qtd       = []; 
$carrinho_precos    = []; 
 
$opcao = "";

do { 
    echo "\n===============================\n";
    echo "     CAIXA REGISTRADORA\n";
    echo "===============================\n";

    echo "[1] Ver Catálogo\n";
    echo "[2] Adicionar ao Carrinho\n";
    echo "[3] Ver Carrinho\n";
    echo "[4] Remover do Carrinho\n";
    echo "[5] Finalizar Compra\n";
    echo "[0] Fechar Caixa\n";

    echo "\n";
    // CORREÇÃO 4: Pedir a opção ANTES do switch para evitar loops fantasmas
    $opcao = readline("Opção: ");

    switch($opcao){
        case 1:
            echo "\n";
            printf("%-3s | %-12s | %-10s | %-7s\n", "ID", "Produto", "Preço", "Estoque");
            echo "------------------------------------------------\n";

            for ($i = 0; $i < count($produtos); $i++) {
                $preco_vitrine = "R$ " . number_format($precos[$i], 2, ',', '.');
                printf("%-3d | %-12s | %-10s | %-7d\n", ($i + 1), $produtos[$i], $preco_vitrine, $estoque[$i]);
            }
            break;

        case 2:
            echo "\n";
            $id_produto = (int)readline("ID do produto: ");
            $id_produto -= 1;
            $qt_estoque = readline("Quantidade: ");
            
            // Valida se a quantidade é estritamente numérica e maior que zero
            if(!is_numeric($qt_estoque) || (int)$qt_estoque <= 0){
                echo "Opção Inválida! Digite uma quantidade válida.\n";
                break;
            }
            $qt_estoque = (int)$qt_estoque;

            // Valida o ID do produto
            if($id_produto >= count($produtos) || $id_produto < 0){
                echo "Número inválido → Produto não encontrado!\n";
                break;
            }

            if($estoque[$id_produto] == 0){
                echo "Produto esgotado !\n";
                break;
            }

            if($qt_estoque > $estoque[$id_produto]){
                echo "Estoque insuficiente! Disponível: ". $estoque[$id_produto]. "\n";
                break;
            }

            // CORREÇÃO 2: Lógica unificada para Adicionar / Incrementar no carrinho
            $estoque[$id_produto] -= $qt_estoque;
            $calcula_precos = $precos[$id_produto] * $qt_estoque;

            if (array_key_exists($id_produto, $carrinho_produtos)) {
                echo "Esse produto já está no carrinho! Acumulando quantidade...\n";
                $carrinho_qtd[$id_produto] += $qt_estoque;
                $carrinho_precos[$id_produto] += $calcula_precos;
            } else {
                $carrinho_produtos[$id_produto] = $produtos[$id_produto];
                $carrinho_qtd[$id_produto] = $qt_estoque;
                $carrinho_precos[$id_produto] = $calcula_precos;
            }

            $preco_formatado = number_format($carrinho_precos[$id_produto], 2, ',', '.');
            echo $produtos[$id_produto]. " Und." . $qt_estoque . " adicionado! Subtotal do item: R$ " . $preco_formatado . "\n";
            break;

        case 3:
            echo "\n===================================================\n";
            echo "                   SEU CARRINHO                    \n";
            echo "===================================================\n";
            
            // CORREÇÃO 1: Removido os array_values que quebravam a estrutura.
            if(count($carrinho_produtos) == 0){
                echo "O carrinho está vazio!\n";
                echo "===================================================\n";
                break;
            }

            printf("%-12s | %-6s | %-11s | %-10s\n", "Produto", "Qtd", "Preço Un.", "Subtotal");
            echo "---------------------------------------------------\n";

            $total_itens = 0;
            $total_pagar = 0.0;

            // CORREÇÃO 3: Usando foreach mantendo as chaves ($id) originais corretas
            foreach($carrinho_produtos as $id => $nome_produto) {
                $qtd = $carrinho_qtd[$id];
                $subtotal = $carrinho_precos[$id];
                
                $total_pagar += $subtotal;
                $total_itens += $qtd;

                $print_un = "R$ " . number_format($precos[$id], 2, ',', '.');
                $print_sub = "R$ " . number_format($subtotal, 2, ',', '.');

                printf("%-12s | %-6d | %-11s | %-10s\n", $nome_produto, $qtd, $print_un, $print_sub);
            }

            echo "---------------------------------------------------\n";
            $print_total = "R$ " . number_format($total_pagar, 2, ',', '.');
            printf("Itens: %-5d | TOTAL A PAGAR: %s\n", $total_itens, $print_total);
            echo "===================================================\n";
            break;

        case 0:
            echo "Caixa fechado com sucesso. Até logo!\n";
            break;

        default:
            echo "Opção Inválida !\n";
            break;
    }

} while($opcao != "0");




