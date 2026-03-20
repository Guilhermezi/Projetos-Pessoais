<!-- Desafio

Fácil
Neste capítulo, você construirá um gerenciador simples de lista de tarefas usando arrays.

Leia três linhas de entrada, cada uma contendo uma descrição de tarefa (por exemplo, Buy groceries).

Crie um array $todos contendo três arrays de tarefas. Cada tarefa deve ser um array associativo com:

"task" - a descrição da tarefa da entrada
"completed" - definido como false para todas as tarefas
Em seguida, imprima:

A descrição da tarefa da primeira tarefa
A descrição da tarefa da segunda tarefa
O número total de tarefas na lista
Imprima cada resultado em uma linha separada.

Exemplo:

Se as entradas forem Buy groceries, Walk the dog, e Finish homework, a saída deve ser:

Buy groceries
Walk the dog
3
Se as entradas forem Clean room, Call mom, e Read book, a saída deve ser:

Clean room
Call mom
3 -->
<?php
// Read three task descriptions
$task1 = trim(fgets(STDIN));
$task2 = trim(fgets(STDIN));
$task3 = trim(fgets(STDIN));

// TODO: Write your code below
$todos = [
    ["task" => $task1, "completed" => false],
    ["task" => $task2, "completed" => false],
    ["task" => $task3, "completed" => false]
];

// Imprime a descrição da primeira tarefa
echo $todos[0]["task"] . "\n";

// Imprime a descrição da segunda tarefa
echo $todos[1]["task"] . "\n";

// Imprime o número total de tarefas usando a função count()
echo count($todos) . "\n";
?>