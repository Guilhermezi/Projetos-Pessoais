<!-- Operadores lógicos permitem combinar múltiplas expressões booleanas em uma só. Isso é essencial quando você precisa verificar várias condições ao mesmo tempo.

O operador AND (&&) retorna true apenas quando ambas as condições são verdadeiras: -->
<?php
$age = 25;
$hasLicense = true;

$canDrive = $age >= 18 && $hasLicense;
var_dump($canDrive); // bool(true)

$age = 16;
$canDrive = $age >= 18 && $hasLicense;
var_dump($canDrive); // bool(false) - age condition fails
?>

<!--  operador OR (||) retorna true quando pelo menos uma condição é verdadeira: -->
<?php
$isWeekend = true;
$isHoliday = false;

$dayOff = $isWeekend || $isHoliday;
var_dump($dayOff); // bool(true) - weekend is true

$isWeekend = false;
$dayOff = $isWeekend || $isHoliday;
var_dump($dayOff); // bool(false) - both are false
?>

<!-- Pense no && como "ambas devem ser verdadeiras" e no || como "pelo menos uma deve ser verdadeira". Na próxima lição, você aprenderá sobre o operador NOT e como combinar múltiplos operadores lógicos. -->

<!-- Desafio
Leia quatro valores da entrada: um inteiro age, uma string hasTicket (seja "true" ou "false"), uma string isMember (seja "true" ou "false"), e uma string hasInvitation (seja "true" ou "false").

Converta os valores de string para booleanos comparando-os com "true".

Avalie as seguintes duas condições e imprima o resultado de cada uma usando var_dump(), cada uma em uma nova linha:

Verifique se a pessoa pode entrar no evento: eles devem ter pelo menos 18 anos E ter um ingresso
Verifique se a pessoa obtém entrada gratuita: eles devem ser um membro OU ter um convite
Exemplo:

Se as entradas forem 25, true, false, e true, a saída deve ser:

bool(true)
bool(true)
Explicação:

25 >= 18 E hasTicket é true → true
isMember é false OU hasInvitation é true → true -->
<?php
// Read input values
$age = intval(fgets(STDIN));
$hasTicket = trim(fgets(STDIN));
$isMember = trim(fgets(STDIN));
$hasInvitation = trim(fgets(STDIN));

// TODO: Convert string values to booleans by comparing them to "true"
$hasTicket = $hasTicket == "true";
$isMember = $isMember == "true";
$hasInvitation = $hasInvitation == "true";

// TODO: Check if the person can enter the event (at least 18 AND has ticket)
$canEnter = $age >= 18 && $hasTicket;

// TODO: Check if the person gets free entry (is member OR has invitation)
$freeEntry = $isMember || $hasInvitation;

// Output the results using var_dump()
var_dump($canEnter);
var_dump($freeEntry);
?>