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



// Cabeçalho do programa
echo str_repeat("*", 25);
echo "\n ===LISTA DE COMPRAS===\n";
echo str_repeat("*", 25);
echo "\n\n";

$lista_compras = [];

// Lendo a primeira entrada, removendo espaços e convertendo para minúsculo
$entrada = strtolower(trim(readline("Digite um item (ou 'sair'): ")));

// Loop de inserção de itens
while ($entrada !== "sair") {
    
    // Validação: Garante que são letras/acentos e não está vazio
    if (preg_match('/^[a-zA-ZÀ-ÿ\s]+$/u', $entrada) && !empty($entrada)) {

        // Verifica se o item já está na lista
        if (in_array($entrada, $lista_compras)) {
            echo "\nEste item já está cadastrado!\nCadastre um novo item.\n\n";
        } else {
            echo "Item incluído!\n\n";
            $lista_compras[] = $entrada; 
        }

    } else {
        echo "Valor incorreto (Use apenas letras):\n\n";
    }

    // pega a entrada do uzuario 
    $entrada = strtolower(trim(readline("Digite um item (ou 'sair'): ")));}

// Menu de Opções
echo "\n   === MENU ===\n";
echo "[1] Ver lista completa\n";
echo "[2] Buscar item\n";
echo "[3] Remover item\n";
echo "[4] Contar itens\n\n";

$opcao_menu = readline("Escolha a Opção!: ");

switch ($opcao_menu) {
    case 1:
        echo "\n**MINHA LISTA**\n";
        if (empty($lista_compras)) {
            echo "A lista está vazia.\n";
        } else {
            // Usando o próprio índice do foreach (+1) para exibir a numeração
            foreach ($lista_compras as $index => $itens) {
                echo ($index + 1) . " => " . ucfirst($itens) . "\n";
            }
        }
        break;

    case 2:
        // Buscando o item (convertendo para minúsculo para bater com o banco)
        $item = mb_strtolower(trim(readline("Busque o item na lista: ")));
        if (in_array($item, $lista_compras)) {
            echo "O item existe na lista => " . ucfirst($item) . "\n";
        } else {
            echo "O item não existe na lista!\n";
        }
        break;

    case 3:
        echo "\nO item é removido de acordo com a sua posição na lista [1]...\n";
        $posicao = (int)readline("Remova um item da lista: ");
        $index_real = $posicao - 1; // Ajusta para o índice do array (que começa em 0)

        // Validação crucial: verifica se a posição digitada realmente existe no array
        if (isset($lista_compras[$index_real])) {
            echo "O item '" . ucfirst($lista_compras[$index_real]) . "' foi removido com sucesso!\n\n";
            
            unset($lista_compras[$index_real]);
            $lista_compras = array_values($lista_compras); // Reorganiza os índices (0, 1, 2...)

            // Exibe a lista atualizada
            echo "**LISTA ATUALIZADA**\n";
            foreach ($lista_compras as $index => $itens) {
                echo ($index + 1) . " => " . ucfirst($itens) . "\n";
            }
        } else {
            echo "Posição inválida ou inexistente!\n";
        }
        break;

    case 4:
        echo "Tamanho da lista é: " . count($lista_compras) . " item(ns).\n";
        break;

    default:
        echo "Opção inválida!\n";
}