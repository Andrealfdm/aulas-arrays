<?php
/**
 * =============================================
 * EXERCÍCIO 02 - Registro de Notas da Turma
 * =============================================
 *
 * INSTRUÇÕES:
 * 1. Peça a QUANTIDADE DE ALUNOS via readline()
 * 2. Crie dois arrays vazios: $nomes e $notas
 * 3. Use um LOOP para pedir o nome e a nota (0 a 10) de cada aluno
 *    - Armazene nos arrays usando índice correspondente
 * 4. Após o cadastro, calcule com loop:
 *    - $soma → soma de todas as notas
 *    - $media → média da turma ($soma / count($notas))
 *    - $maior → maior nota (compare com IF a cada iteração)
 *    - $menor → menor nota (compare com IF a cada iteração)
 * 5. Exiba o boletim percorrendo os arrays com loop:
 *    "[NOME] - Nota: [NOTA] - [SITUAÇÃO]"
 *    → Use IF: nota >= 7 "Aprovado" | nota >= 5 "Recuperação" | abaixo "Reprovado"
 * 6. Exiba as estatísticas:
 *    "Média da turma: [MEDIA]"
 *    "Maior nota: [MAIOR]"
 *    "Menor nota: [MENOR]"
 * 7. Use switch(true) para classificar a turma pela média:
 *    - >= 8: "Turma EXCELENTE!"
 *    - >= 6: "Turma BOA"
 *    - >= 4: "Turma REGULAR"
 *    - Abaixo: "Turma PRECISA MELHORAR"
 *
 * EXEMPLO DE SAÍDA:
 * ---
 * === REGISTRO DE NOTAS ===
 *
 * Quantos alunos? 3
 *
 * Aluno 1 - Nome: Ana
 * Aluno 1 - Nota: 8.5
 * Aluno 2 - Nome: Bruno
 * Aluno 2 - Nota: 4.0
 * Aluno 3 - Nome: Carla
 * Aluno 3 - Nota: 6.5
 *
 * === BOLETIM ===
 * Ana - Nota: 8.5 - Aprovado
 * Bruno - Nota: 4.0 - Reprovado
 * Carla - Nota: 6.5 - Recuperação
 *
 * === ESTATÍSTICAS ===
 * Média da turma: 6.33
 * Maior nota: 8.5
 * Menor nota: 4.0
 * Classificação: Turma BOA
 * ---
 */

// Escreva seu código aqui:
