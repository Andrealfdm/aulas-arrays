<?php
/**
 * =============================================
 * EXERCÍCIO 06 - Caixa Registradora
 * =============================================
 *
 * INSTRUÇÕES:
 * 1. Crie 3 arrays paralelos para o CATÁLOGO de produtos:
 *    $produtos = ["Café", "Pão", "Leite", "Queijo", "Manteiga", "Presunto", "Suco", "Biscoito"]
 *    $precos   = [14.90,   7.50,  5.80,   22.00,    9.40,       18.75,     8.90,   6.50]
 *    $estoque  = [10,      25,    15,     8,        12,          6,         20,     18]
 *
 * 2. Crie 2 arrays para o CARRINHO de compras (iniciam vazios):
 *    $carrinhoProdutos  = []   → nomes dos produtos adicionados
 *    $carrinhoQtd       = []   → quantidades de cada produto no carrinho
 *    $carrinhoPrecos    = []   → preço unitário de cada produto no carrinho
 *
 * 3. Use um LOOP principal (do-while) com menu via switch:
 *
 *    [1] Ver Catálogo
 *        → Exiba todos os produtos com for:
 *          "| [N]. [PRODUTO]  | R$ [PREÇO] | Estoque: [QTD] |"
 *        → Produtos com estoque 0 devem exibir: "(ESGOTADO)"
 *
 *    [2] Adicionar ao Carrinho
 *        → Peça o número do produto e a quantidade desejada
 *        → Valide com if/elseif:
 *          • Número inválido → "Produto não encontrado!"
 *          • Quantidade > estoque → "Estoque insuficiente! Disponível: [N]"
 *          • Estoque == 0 → "Produto esgotado!"
 *        → Verifique com in_array() se o produto JÁ ESTÁ no carrinho:
 *          • Se sim: apenas SOME a quantidade no $carrinhoQtd (no índice encontrado com loop)
 *          • Se não: adicione nos 3 arrays do carrinho
 *        → Reduza o estoque do catálogo
 *        → Exiba: "[PRODUTO] x[QTD] adicionado! Subtotal: R$ [VALOR]"
 *
 *    [3] Ver Carrinho
 *        → Se vazio: "Carrinho vazio!"
 *        → Se não, percorra com for exibindo:
 *          "[N]. [PRODUTO] x[QTD] = R$ [SUBTOTAL]"
 *        → Ao final, calcule e exiba o TOTAL com loop acumulador
 *        → Exiba a quantidade total de itens (soma de todas as quantidades)
 *
 *    [4] Remover do Carrinho
 *        → Mostre o carrinho atual (mesmo formato da opção 3)
 *        → Peça o número do item para remover
 *        → Valide o índice
 *        → DEVOLVA a quantidade ao estoque do catálogo
 *          (use loop para encontrar o índice do produto no array $produtos)
 *        → Use unset() nos 3 arrays do carrinho e array_values() para reindexar
 *        → Exiba: "[PRODUTO] removido do carrinho!"
 *
 *    [5] Finalizar Compra
 *        → Se carrinho vazio: "Nada para finalizar!"
 *        → Se não, exiba CUPOM FISCAL:
 *          ═══════════════════════════════
 *              CUPOM FISCAL
 *          ═══════════════════════════════
 *          [PRODUTO]   x[QTD]   R$ [SUBTOTAL]
 *          (... para cada item ...)
 *          ───────────────────────────────
 *          Itens: [TOTAL_ITENS]
 *          TOTAL: R$ [VALOR_TOTAL]
 *          ═══════════════════════════════
 *        → Calcule o desconto com if/elseif:
 *          • Total >= 100 → 10% de desconto
 *          • Total >= 50  → 5% de desconto
 *          • Senão        → sem desconto
 *        → Se houver desconto, exiba:
 *          "Desconto de [X]%: -R$ [VALOR]"d
 *          "TOTAL COM DESCONTO: R$ [NOVO_TOTAL]"
 *        → Esvazie os arrays do carrinho
 *        → Exiba: "Compra finalizada com sucesso!"
 *        → NÃO saia do loop (o caixa continua para o próximo cliente)
 *
 *    [0] Fechar Caixa
 *        → Saia do loop
 *        → Exiba: "Caixa fechado. Até logo!"
 *
 *    default: "Opção inválida!"
 *
 * FUNÇÕES PERMITIDAS:
 * in_array(), unset(), array_values(), count(), number_format(), strlen(), str_repeat()
 *
 * EXEMPLO DE SAÍDA:
 * ---
 * ==============================
 *   CAIXA REGISTRADORA
 * ==============================
 *
 * [1] Ver Catálogo
 * [2] Adicionar ao Carrinho
 * [3] Ver Carrinho
 * [4] Remover do Carrinho
 * [5] Finalizar Compra
 * [0] Fechar Caixa
 * Opção: 1
 *
 * === CATÁLOGO DE PRODUTOS ===
 * | 1. Café       | R$ 14.90 | Estoque: 10 |
 * | 2. Pão        | R$ 7.50  | Estoque: 25 |
 * | 3. Leite      | R$ 5.80  | Estoque: 15 |
 * | 4. Queijo     | R$ 22.00 | Estoque: 8  |
 * | 5. Manteiga   | R$ 9.40  | Estoque: 12 |
 * | 6. Presunto   | R$ 18.75 | Estoque: 6  |
 * | 7. Suco       | R$ 8.90  | Estoque: 20 |
 * | 8. Biscoito   | R$ 6.50  | Estoque: 18 |
 *
 * Opção: 2
 * Número do produto: 1
 * Quantidade: 3
 * Café x3 adicionado! Subtotal: R$ 44.70
 *
 * Opção: 2
 * Número do produto: 4
 * Quantidade: 2
 * Queijo x2 adicionado! Subtotal: R$ 44.00
 *
 * Opção: 2
 * Número do produto: 1
 * Quantidade: 1
 * Café x1 adicionado! (Total no carrinho: 4) Subtotal: R$ 59.60
 *
 * Opção: 3
 *
 * === SEU CARRINHO ===
 * 1. Café x4 = R$ 59.60
 * 2. Queijo x2 = R$ 44.00
 * ────────────────────
 * Itens: 6 | TOTAL: R$ 103.60
 *
 * Opção: 5
 *
 * ═══════════════════════════════
 *         CUPOM FISCAL
 * ═══════════════════════════════
 * Café          x4    R$ 59.60
 * Queijo        x2    R$ 44.00
 * ───────────────────────────────
 * Itens: 6
 * TOTAL: R$ 103.60
 * Desconto de 10%: -R$ 10.36
 * TOTAL COM DESCONTO: R$ 93.24
 * ═══════════════════════════════
 * Compra finalizada com sucesso!
 *
 * Opção: 0
 * Caixa fechado. Até logo!
 * ---
 */

// Escreva seu código aqui:

// criei 3 arrays para armazenas produtos , estoque , e valor de cara item
$produtos = ["Cafe", "Pao", "Leite", "Queijo", "Manteiga", "Presunto", "Suco", "Biscoito"];
$precos   = [14.90,   7.50,  5.80,   22.00,    9.40,       18.75,     8.90,   6.50];
$estoque  = [10,      25,    15,     8,        12,          6,         20,     18];


$carrinho_produtos  = [];   #→ nomes dos produtos adicionados
$carrinho_qtd       = [];   #→ quantidades de cada produto no carrinho
$carrinho_precos    = [];   #→ preço unitário de cada produto no carrinho
 
$opcao = "";

do{ 
    echo "\n\n==============================\n";
    echo "     CAIXA REGISTRADORA\n";
    echo "==============================\n";
    

    echo"[1] Ver Catálogo\n";
    echo"[2] Adicionar ao Carrinho\n";
    echo"[3] Ver Carrinho\n";
    echo"[4] Remover do Carrinho\n";
    echo"[5] Finalizar Compra\n";
    echo"[0] Fechar Caixa\n";

    $opcao = readline("Opção: ");

    switch($opcao){
        case 0:
            $opcao = 0;
            echo "  \nCaixa fechado. Até logo!\n";

            break;
        case 1:// 
            echo "\n";
            //CABEÇALHO 
            printf("%-3s | %-12s | %-11s | %-7s\n", "ID", "Produto", "Preço", "Estoque");
            echo "------------------------------------------------\n";

            for ($i = 0; $i < count($produtos); $i++) {
                // Formata o preço com duas casas decimais e vírgula (Ex: R$ 14,90)
                $preco_vitrine = "R$ " . number_format($precos[$i], 2, ',', '.');

                printf("%-3d | %-12s | %-10s | %-7d\n", ($i + 1), $produtos[$i], $preco_vitrine, $estoque[$i]);

            }
            echo "------------------------------------------------\n";

            break;

        case 2:
            echo"\n";
            // PEDE AO USUARIO PARA DIGITAR ID DO PRODUTO E QUANTIDADE DE ITENS A SER INSERIDOS NO CARRINHO
            $id_produto = (int)readline("ID do produto: ");
            $id_produto -= 1;
            $qt_estoque = (int)readline("Quantidade: ");
            

            
            //*****************************************
            // ESSA PARTES FAZ AS VERIFICAÇÕES DE TUDO
            //*****************************************

            // VALIDA O ID DO PRODUTO CASO ESTEJA INCORRETO, APRESENTA MENSAGEM DE ERRO
            if($id_produto >= count($produtos) || !is_numeric($id_produto) || $id_produto < 0){
                echo "Número inválido → Produto não encontrado!\n";
                break;
        
            }
            // VALIDA O ESTOQUE CASO USUARIO DIGITE ALGUMA OPÇÃO INVALIDA, APRESENTA MENSAGEM DE ERRO
            if($qt_estoque <= 0 || !is_numeric($qt_estoque)){
                echo"Opção Invalida !\n";
                break;
            }
            //VERIFICA SE ESTOQUE ESTA ESGOTADO
            if($estoque[$id_produto] == 0){
                echo"Produto escotado !\n";
                break;
            }
            //VERIFICA SE A QUANTIDA E MAIOR QUE ESTOQUE , EXIBE MENSAGEM ESTOQUE INSIFICIENTE
            if($qt_estoque > $estoque[$id_produto]){
                echo "Estoque insuficiente! Disponível: ". $estoque[$id_produto]. "\n";
                break;

            }
            //VERIFICA SE O ITEM JÁ FOI ADICIONADO NO CARRINHO
            if (array_key_exists($id_produto, $carrinho_produtos)) {
                echo "Esse produto já está no carrinho! ". $carrinho_produtos[$id_produto]."\n";

                //ADICIONA A QUANTIDADE NA LISTA DO CARRINHO_QTD 
                #$carrinho_qtd[$id_produto] += $qt_estoque;

                echo"Total no carrinho: ". $carrinho_qtd[$id_produto]."\n";       
            }



            //****************************************************************
            //ESSA PARTE ADICIONA E REMOVE OS ITENS DOS CARRINHOS E DAS LISTA
            //****************************************************************
        
            // REMOVE OS ITENS DO ESTOQUE  
            $estoque[$id_produto] -= $qt_estoque;

            //ADICIONA O PRODUTOS NA LISTA DO CARRINHO 
            $carrinho_produtos[$id_produto] = $produtos[$id_produto];



            //*******************************************
            // LISTA     CARRINHO QUANTIDADE DE PRODUTOS
            //*******************************************

            // ADICIONA A QUANTIDADE NA LISTA DO CARRINHO
            $carrinho_qtd[$id_produto] ??= 0;
            $carrinho_qtd[$id_produto] += $qt_estoque;



            //*******************************************
            // LISTA       CARRINHO PREÇOS
            //*******************************************

            // ADICIONA O PREÇO NA LISTA DE PREÇOS
            $calcula_precos = $precos[$id_produto] * $qt_estoque;

            // ADICIONANDO O TOTAL NA LISTA DE PREÇOS
            $carrinho_precos[$id_produto] ??= 0.0;

            //CALCULA O PREÇO A SER PAGO
            $carrinho_precos[$id_produto] += $calcula_precos;

            // FORMATANTO OS NUMEROS PARA SAIR COM PONTO E VIRGULA
            $preco_formatado = number_format($carrinho_precos[$id_produto], 2, ',', '.');


            echo $produtos[$id_produto]. " Und." . $qt_estoque . " adicionado! Subtotal: R$ " . $preco_formatado."\n";
            break;
        case 3:
            $total_itens = 0;
            $total_pagar = 0.0;
            

            echo "\n============================================\n";
            echo "              SEU CARRINHO                 \n";
            echo "=============================================\n";
            // Cabeçalho das colunas do carrinho
            printf("%-12s | %-6s | %-11s | %-10s\n", "Produto", "Qtd", "Preço Un.", "Subtotal");
            echo "--------------------------------------------\n";

            if(count($carrinho_produtos) == 0){
                echo "O carrinho está vazio!\n";
                echo "===================================================\n";
                break;
            }else{
                foreach($carrinho_produtos as $id => $nome_produtos){

                    $carrinho_produtos[$id];
                    printf("%-12s | %-6d | %-10s | %-10s\n",$carrinho_produtos[$id],$carrinho_qtd[$id],$precos[$id],$carrinho_precos[$id]);

                    $total_pagar += (float)$carrinho_precos[$id];
                    $total_itens += (int)$carrinho_qtd[$id];
                }
                echo "===========================================\n";
                printf("Itens: %-5d | TOTAL A PAGAR:      | %s\n", $total_itens, $total_pagar);
                echo "===========================================\n";
            }
            break;
        case 4:

            $total_itens = 0;
            $total_pagar = 0.0;

            echo "\n===============================================\n";
            echo "                 SEU CARRINHO                 \n";
            echo "===============================================\n";
            // Cabeçalho das colunas do carrinho
            printf("%-3s | %-10s | %-4s | %-8s | %-10s\n", "ID", "Produto", "Qtd", "Preço Un.", "Subtotal");
            echo "-----------------------------------------------\n";

            if(count($carrinho_produtos) == 0){
                echo "O carrinho está vazio!\n";
                echo "===================================================\n";
                break;
            }else{
                foreach($carrinho_produtos as $id => $nome_produtos){

                    $carrinho_produtos[$id];
                    printf("%-3d | %-10s | %-4d | %-8s | %-10s\n",$id, $carrinho_produtos[$id],$carrinho_qtd[$id],$precos[$id],$carrinho_precos[$id]);

                    $total_pagar += (float)$carrinho_precos[$id];
                    $total_itens += (int)$carrinho_qtd[$id];
                }
                echo "===============================================\n";
                printf("Itens: %-5d     | TOTAL A PAGAR:  | %s\n", $total_itens, $total_pagar);
                echo "===============================================\n";
            }

            $remover_id = (int)readline("Remover item, escolha ID: ");

            // VERIFICA O ID DO CARRINHO , SE ESTIVER ERRADO AVISA PARA USUARIO QUE ID E INVALIDO
            if(!is_numeric($remover_id) || $remover_id < 0 || !array_key_exists($remover_id , $carrinho_qtd)){
                echo"Este ID não existe! \n";
                break;
            }

            $remover_qtd = (int)readline("Quantidade a ser removida: ");

            if($carrinho_qtd[$remover_id] < $remover_qtd){
                echo"QT Ivanlida! disponivel : ". $carrinho_qtd[$remover_id]." ". $carrinho_produtos[$remover_id]. "\n";
                break;
            }

            $carrinho_qtd[$remover_id] -= $remover_qtd;
            $estoque[$remover_id] += $remover_qtd;

            $reduz_valor = $remover_qtd * $precos[$remover_id];

            $carrinho_precos[$remover_id] -= $reduz_valor ;

            echo"produto removido: ". $carrinho_produtos[$remover_id]. "\n";

            // Se zerou o item, limpa ele dos arrays do carrinho
            if ($carrinho_qtd[$remover_id] == 0) {
                unset($carrinho_produtos[$remover_id]);
                unset($carrinho_qtd[$remover_id]);
                unset($carrinho_precos[$remover_id]);
            }

            break;


        case 5:
            if(count($carrinho_produtos) == 0){
                echo "\n==========================\n";
                echo "O carrinho está vazio!\n";
                echo "==========================\n";
                break;
            }else{

                echo"\n\n═══════════════════════════════\n";
                echo"        CUPOM FISCAL\n";
                echo"═══════════════════════════════\n";

                printf("%-10s %-7s %-7s \n","produto", "Qdt", "Preço");
                echo "-----------------------------\n";

                $soma_qt_carrinho = 0;
                $total_a_pagar = 0.0;
            

                foreach($carrinho_produtos as $id => $nome_produtos){

                    $preco_formatado = number_format($carrinho_precos[$id], 2, ',', '.');

                    printf("%-10s x %-5s R$: %-5d\n", $carrinho_produtos[$id], $carrinho_qtd[$id], $preco_formatado. "\n");



                    $soma_qt_carrinho += $carrinho_qtd[$id];
                    $total_a_pagar    += $carrinho_precos[$id];

                }
                echo "-----------------------------\n";
                echo "Itens: ". $soma_qt_carrinho. "\n";
                echo"TOTAL: R$: ".$total_a_pagar. "\n";

                if($total_a_pagar >= 100){
                    
                    $desconto =  ($total_a_pagar / 100) * 10;
                    $total_pg_desconto = $total_a_pagar - $desconto;

                    echo"Desconto de 10%  -R$: " .$desconto. "\n";
                    echo"TOTAL COM DESCONTO R$: ". $total_pg_desconto,"\n";
                }

                elseif($total_a_pagar >= 50){

                    $desconto =  ($total_a_pagar / 100) * 5;
                    $total_pg_desconto = $total_a_pagar - $desconto;

                    echo"Desconto de 5%  -R$: " .$desconto. "\n";
                    echo"TOTAL COM DESCONTO R$: ". $total_pg_desconto,"\n";
                }   

                else{
                    echo"TOTAL A PAGAR R$: " . $total_a_pagar;
                }

                $carrinho_produtos  = []; 
                $carrinho_qtd       = [];
                $carrinho_precos    = [];

                echo"\n Compra finalizada com sucesso!\n";
                break;
            }   
        default:
            echo"Opção Invalida !\n";

        }

echo"\n";
}while($opcao != 0);