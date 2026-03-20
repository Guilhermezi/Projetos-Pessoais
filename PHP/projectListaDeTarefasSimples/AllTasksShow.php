<!-- Desafio

Fácil
Na lição anterior, você adicionou uma nova tarefa ao array $todos. Agora, adicione a capacidade de exibir todas as tarefas em uma lista formatada.

Leia quatro linhas de entrada para descrições de tarefas (três tarefas iniciais mais uma nova tarefa, como na lição anterior).

Após construir o array $todos com todas as quatro tarefas, percorra o array e imprima cada tarefa no seguinte formato:

- [task description] (Pending)
Como todas as tarefas têm "completed" definido como false, cada tarefa deve exibir (Pending) após a descrição.

Imprima cada tarefa em uma linha separada.

Exemplo:

Se as entradas forem Buy groceries, Walk the dog, Finish homework e Call mom, a saída deve ser:

- Buy groceries (Pending)
- Walk the dog (Pending)
- Finish homework (Pending)
- Call mom (Pending)
Se as entradas forem Clean room, Read book, Exercise e Cook dinner, a saída deve ser:

- Clean room (Pending)
- Read book (Pending)
- Exercise (Pending)
- Cook dinner (Pending) -->
<?php
// Lê as 4 entradas
$task1 = trim(fgets(STDIN));
$task2 = trim(fgets(STDIN));
$task3 = trim(fgets(STDIN));
$task4 = trim(fgets(STDIN));

// Cria o array com as tarefas
$todos = [
    ["task" => $task1, "completed" => false],
    ["task" => $task2, "completed" => false],
    ["task" => $task3, "completed" => false],
    ["task" => $task4, "completed" => false]
];

// Percorre o array e imprime no formato solicitado
foreach ($todos as $todo) {
    echo "- " . $todo['task'] . " (Pending)\n";
}
?>
