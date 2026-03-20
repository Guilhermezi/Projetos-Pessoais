<!-- Desafio

Fácil
Na aula anterior, você criou um $todos array com três tarefas iniciais. Agora, adicione a capacidade de inserir uma nova tarefa na lista.

Leia três linhas de entrada para as descrições das tarefas iniciais, em seguida, leia uma quarta linha contendo uma nova tarefa a ser adicionada.

Após criar o array inicial $todos com três tarefas (cada uma tendo as chaves "task" e "completed"), adicione a nova tarefa ao final do array. A nova tarefa também deve ter "completed" definido como false.

Em seguida, imprima:

O número total de tarefas após adicionar a nova
A descrição da tarefa da última tarefa na lista (a que você acabou de adicionar)
Imprima cada resultado em uma linha separada.

Exemplo:

Se as entradas forem Buy groceries, Walk the dog, Finish homework e Call mom, a saída deve ser:

4
Call mom
Se as entradas forem Clean room, Read book, Exercise e Cook dinner, a saída deve ser:

4
Cook dinner -->
<?php
// Lê as descrições (as 3 iniciais + a nova)
$task1 = trim(fgets(STDIN));
$task2 = trim(fgets(STDIN));
$task3 = trim(fgets(STDIN));
$task4 = trim(fgets(STDIN)); // Você precisa ler a 4ª aqui ou logo após as outras

// Cria o array inicial com as 3 tarefas
$todos = [
    ["task" => $task1, "completed" => false],
    ["task" => $task2, "completed" => false],
    ["task" => $task3, "completed" => false]
];

// Adiciona a 4ª tarefa ao final do array
$todos[] = ["task" => $task4, "completed" => false];

// Imprime APENAS o que o desafio pediu:
// 1. O total de tarefas (4)
echo count($todos) . "\n";

// 2. A descrição da última tarefa (índice 3)
echo $todos[3]["task"] . "\n";
?>
