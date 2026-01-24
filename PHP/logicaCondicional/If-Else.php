<!-- Às vezes, você precisa que seu código faça uma coisa quando uma condição é verdadeira, e algo diferente quando é falsa. A cláusula else permite que você lide com ambos os casos.

Adicione else após seu bloco if para especificar o que acontece quando a condição é falsa: -->
<?php
$age = 15;

if ($age >= 18) {
    echo "You can vote";
} else {
    echo "You cannot vote yet";
}
?>

<!-- Como $age é 15, a condição é falsa, então o PHP executa o bloco else e imprime "You cannot vote yet".

Para mais de duas possibilidades, encadeie condições usando elseif: -->

<?php
$score = 75;

if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 80) {
    echo "Grade: B";
} elseif ($score >= 70) {
    echo "Grade: C";
} else {
    echo "Grade: F";
}
?>
<!-- O PHP verifica cada condição de cima para baixo e executa o primeiro bloco que corresponde. Uma vez que uma correspondência é encontrada, ele pula todas as condições restantes. Aqui, 75 falha nos dois primeiros testes, mas passa em $score >= 70, então "Grade: C" é impresso. -->

<!-- 
Desafio

Fácil
Leia dois inteiros da entrada: uma temperature e uma hour (no formato de 24 horas, 0-23).

Determine a mensagem apropriada com base nas seguintes condições:

Se a temperatura estiver abaixo de 0, imprima Freezing conditions
Caso contrário, se a temperatura estiver abaixo de 15, imprima Cold weather
Caso contrário, se a temperatura estiver abaixo de 25, imprima Pleasant weather
Caso contrário, imprima Hot weather
Em seguida, em uma nova linha, imprima uma saudação baseada na hora:

Se a hora for menor que 12, imprima Good morning!
Caso contrário, se a hora for menor que 18, imprima Good afternoon!
Caso contrário, imprima Good evening!
Exemplo:

Se as entradas forem 20 e 9, a saída deve ser:

Pleasant weather
Good morning!
Se as entradas forem -5 e 14, a saída deve ser:

Freezing conditions
Good afternoon! -->
<?php
// Read input
$temperature = intval(fgets(STDIN));
$hour = intval(fgets(STDIN));

// TODO: Write your code below
// Determine the weather message based on temperature

if ($temperature < 0) {
    echo "Freezing conditions";
}
elseif ($temperature < 15) {
    echo "Cold weather";
}
elseif ($temperature < 25) {
    echo "Pleasant weather";
}
else {
    echo "Hot weather";
}

if ($hour < 12) {
    echo "\nGood morning!";
}
elseif ($hour < 18) {
    echo "\nGood afternoon!";
}
else {
    echo "\nGood evening!";
}
// Determine the greeting based on hour

?>