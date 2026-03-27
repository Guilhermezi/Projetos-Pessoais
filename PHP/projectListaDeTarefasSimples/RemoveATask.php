<!-- Na lição anterior, você marcou uma tarefa como concluída. Agora, adicione a capacidade de remover uma tarefa da lista completamente.

Leia quatro linhas de entrada para descrições de tarefas (três tarefas iniciais mais uma nova tarefa). Em seguida, leia uma quinta entrada: um inteiro representando o índice da tarefa a ser marcada como concluída. Finalmente, leia uma sexta entrada: um inteiro representando o índice da tarefa a ser removida da lista.

Após construir o array $todos com todas as quatro tarefas e marcar a tarefa especificada como concluída, remova a tarefa no índice de remoção dado usando array_splice().

A função array_splice() remove elementos de um array:

<?php
array_splice($array, $index, 1); // Removes 1 element at $index
?>

Em seguida, percorra as tarefas restantes e imprima cada uma no mesmo formato de antes:

Se a tarefa estiver concluída: - [task description] (Done)
Se a tarefa estiver pendente: - [task description] (Pending)
Imprima cada tarefa em uma linha separada.

Exemplo:

Se as entradas forem Buy groceries, Walk the dog, Finish homework, Call mom, 1, e 2, a saída deve ser:

- Buy groceries (Pending)
- Walk the dog (Done)
- Call mom (Pending)
Se as entradas forem Clean room, Read book, Exercise, Cook dinner, 0, e 0, a saída deve ser:

- Read book (Pending)
- Exercise (Pending)
- Cook dinner (Pending) -->

<?php
// Lê as 4 descrições e o índice da tarefa concluída
$task1 = trim(fgets(STDIN));
$task2 = trim(fgets(STDIN));
$task3 = trim(fgets(STDIN));
$task4 = trim(fgets(STDIN));
$indexToComplete = (int)trim(fgets(STDIN)); // Quinta entrada: o índice

// Cria o array com as tarefas
$todos = [
    ["task" => $task1, "completed" => false],
    ["task" => $task2, "completed" => false],
    ["task" => $task3, "completed" => false],
    ["task" => $task4, "completed" => false]
];

// Marca a tarefa no índice recebido como concluída (true)
$todos[$indexToComplete]["completed"] = true;

// Percorre o array para exibir o status correto
foreach ($todos as $todo) {
    // Verifica se a tarefa está concluída para definir o sufixo
    $status = $todo['completed'] ? "(Done)" : "(Pending)";
    
    echo "- " . $todo['task'] . " " . $status . "\n";
}
?>