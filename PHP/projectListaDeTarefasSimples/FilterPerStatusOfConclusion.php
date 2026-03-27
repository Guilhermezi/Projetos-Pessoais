<!-- 
Na lição anterior, você removeu uma tarefa da lista. Agora, adicione a capacidade de filtrar tarefas pelo status de conclusão.

Leia quatro linhas de entrada para descrições de tarefas (três tarefas iniciais mais uma nova tarefa). Em seguida, leia uma quinta entrada: um inteiro representando o índice da tarefa a ser marcada como concluída. Leia uma sexta entrada: um inteiro representando o índice da tarefa a ser removida. Finalmente, leia uma sétima entrada: uma string que é completed ou pending para filtrar as tarefas.

Após construir o array $todos, marcar a tarefa especificada como concluída e remover a tarefa no índice dado, filtre as tarefas restantes com base na entrada de filtro:

Se o filtro for completed, exiba apenas tarefas onde "completed" é true
Se o filtro for pending, exiba apenas tarefas onde "completed" é false
Percorra as tarefas restantes e imprima apenas as que correspondem ao filtro, usando o mesmo formato:

Se a tarefa estiver concluída: - [task description] (Done)
Se a tarefa estiver pendente: - [task description] (Pending)
Imprima cada tarefa correspondente em uma linha separada.

Exemplo:

Se as entradas forem Buy groceries, Walk the dog, Finish homework, Call mom, 1, 2 e completed, a saída deve ser:

- Walk the dog (Done)
Se as entradas forem Buy groceries, Walk the dog, Finish homework, Call mom, 1, 2 e pending, a saída deve ser:

- Buy groceries (Pending)
- Call mom (Pending) 
-->


<?php
// 1. Lê as 4 descrições de tarefas
$task1 = trim(fgets(STDIN));
$task2 = trim(fgets(STDIN));
$task3 = trim(fgets(STDIN));
$task4 = trim(fgets(STDIN));

// 2. Lê os índices e o filtro final
$indexToComplete = (int)trim(fgets(STDIN)); // 5ª entrada
$indexToRemove = (int)trim(fgets(STDIN));   // 6ª entrada
$filter = trim(fgets(STDIN));               // 7ª entrada

// Cria o array inicial
$todos = [
    ["task" => $task1, "completed" => false],
    ["task" => $task2, "completed" => false],
    ["task" => $task3, "completed" => false],
    ["task" => $task4, "completed" => false]
];

// 3. Marca como concluída
if (isset($todos[$indexToComplete])) {
    $todos[$indexToComplete]["completed"] = true;
}

// 4. Remove a tarefa pelo índice
array_splice($todos, $indexToRemove, 1);

// 5. Filtra e imprime os resultados
foreach ($todos as $todo) {
    // Define se o item atual corresponde ao filtro solicitado
    $isMatch = ($filter === "completed" && $todo['completed']) || 
               ($filter === "pending" && !$todo['completed']);

    if ($isMatch) {
        $status = $todo['completed'] ? "(Done)" : "(Pending)";
        echo "- " . $todo['task'] . " " . $status . "\n";
    }
}
?>
