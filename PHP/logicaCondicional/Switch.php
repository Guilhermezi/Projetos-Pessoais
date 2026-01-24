<!-- Quando você precisa comparar uma única variável contra muitos valores específicos, a instrução switch oferece uma alternativa mais limpa para longas cadeias de if-elseif.

A instrução switch verifica uma variável uma vez e depois a compara contra diferentes valores case: -->
<?php
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Start of the week";
        break;
    case "Friday":
        echo "Almost weekend";
        break;
    case "Saturday":
    case "Sunday":
        echo "Weekend!";
        break;
    default:
        echo "Regular day";
}
?>
<!-- O PHP compara $day contra cada case. Quando encontra uma correspondência, executa o código desse bloco. A instrução break é crucial — ela diz ao PHP para sair do switch após executar o case correspondente. Sem ela, o PHP continuaria executando todo o código abaixo, mesmo de outros cases.

Observe como sábado e domingo compartilham o mesmo código ao empilhar cases juntos. O case default age como um else — ele executa quando nenhum outro case corresponde. -->
<?php
$grade = "B";

switch ($grade) {
    case "A":
        echo "Excellent!";
        break;
    case "B":
        echo "Good job!";
        break;
    default:
        echo "Keep trying!";
}
?>
<!-- Use switch ao comparar uma variável contra múltiplos valores exatos. Para condições complexas ou intervalos, fique com instruções if-elseif. -->

<!--
Desafio

Fácil
Leia uma string command da entrada representando a cor de um semáforo.

Use uma instrução switch para determinar a ação apropriada com base na cor:

Se o comando for red, imprima Stop
Se o comando for yellow, imprima Slow down
Se o comando for green, imprima Go
Se o comando for flashing red ou flashing yellow, imprima Proceed with caution
Para qualquer outro valor, imprima Invalid signal
Exemplo:

Se a entrada for green, a saída deve ser:

Go
Se a entrada for flashing red, a saída deve ser:

Proceed with caution
Se a entrada for blue, a saída deve ser:

Invalid signal -->
<?php
// Read input
$command = trim(fgets(STDIN));

// TODO: Write your code below using a switch statement
// Determine the appropriate action based on the traffic light color
switch ($command) {
    case "red":
        echo "Stop";
        break;  
    case "yellow":
        echo "Slow down";
        break;
    case "green":
        echo "Go";
        break;
    case "flashing red":
    case "flashing yellow":
        echo "Proceed with caution";
        break;
    default:
        echo "Invalid signal";
}

?>