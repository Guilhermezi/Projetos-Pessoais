<!-- Desafio

Fácil
Na lição anterior, você exibiu todas as tarefas com seu status. Agora, adicione a capacidade de marcar uma tarefa específica como concluída.

Leia quatro linhas de entrada para descrições de tarefas (três tarefas iniciais mais uma nova tarefa, como antes). Em seguida, leia uma quinta entrada: um inteiro representando o índice da tarefa a ser marcada como concluída (baseado em 0).

Após construir o array $todos com todas as quatro tarefas, atualize o valor "completed" para true para a tarefa no índice especificado.

Em seguida, percorra o array e imprima cada tarefa no seguinte formato:

Se a tarefa estiver concluída: - [task description] (Done)
Se a tarefa estiver pendente: - [task description] (Pending)
Imprima cada tarefa em uma linha separada.

Exemplo:

Se as entradas forem Buy groceries, Walk the dog, Finish homework, Call mom e 1, a saída deve ser:

- Buy groceries (Pending)
- Walk the dog (Done)
- Finish homework (Pending)
- Call mom (Pending)
Se as entradas forem Clean room, Read book, Exercise, Cook dinner e 3, a saída deve ser:

- Clean room (Pending)
- Read book (Pending)
- Exercise (Pending)
- Cook dinner (Done) -->
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

