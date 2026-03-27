<!-- Na lição anterior, você filtrou tarefas pelo status de conclusão. Agora, adicione tratamento para cenários onde o resultado filtrado está vazio.

Leia quatro linhas de entrada para descrições de tarefas (três tarefas iniciais mais uma nova tarefa). Em seguida, leia uma quinta entrada: um inteiro representando o índice da tarefa a marcar como completa. Leia uma sexta entrada: um inteiro representando o índice da tarefa a remover. Finalmente, leia uma sétima entrada: uma string que é completed ou pending para filtrar as tarefas.

Após construir o array $todos, marcar a tarefa especificada como completa e remover a tarefa no índice dado, filtre as tarefas restantes com base na entrada de filtro.

Antes de exibir as tarefas filtradas, verifique se alguma tarefa corresponde ao filtro:

Se nenhuma tarefa corresponder ao filtro, imprima: No [filter] tasks found. (onde [filter] é completed ou pending)
Se tarefas corresponderem ao filtro, exiba-as usando o mesmo formato de antes
Formato de saída para tarefas correspondentes:

Se a tarefa estiver completa: - [task description] (Done)
Se a tarefa estiver pendente: - [task description] (Pending)
Exemplo 1:

Se as entradas forem Buy groceries, Walk the dog, Finish homework, Call mom, 1, 1 e completed, a saída deve ser:

No completed tasks found.
Exemplo 2:

Se as entradas forem Buy groceries, Walk the dog, Finish homework, Call mom, 0, 2 e completed, a saída deve ser:

- Buy groceries (Done)
Exemplo 3:

Se as entradas forem Buy groceries, Walk the dog, Finish homework, Call mom, 0, 1 e pending, a saída deve ser:

- Finish homework (Pending)
- Call mom (Pending) -->

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
