<!-- O operador NOT (!) inverte um valor booleano para o seu oposto. Se algo é true, ele se torna false, e vice-versa: -->
<?php
$isLoggedIn = false;

$showLoginButton = !$isLoggedIn;
var_dump($showLoginButton); // bool(true)

$isLoggedIn = true;
$showLoginButton = !$isLoggedIn;
var_dump($showLoginButton); // bool(false)
?>

<!-- Você pode combinar múltiplos operadores lógicos em uma única expressão. Quando fizer isso, use parênteses para tornar suas intenções claras: -->
<?php
$age = 25;
$hasTicket = true;
$isVIP = false;?>

<!-- Can enter if: has ticket AND (is adult OR is VIP) -->
<?php
$age = 25;
$hasTicket = true;
$isVIP = false;

// Can enter if: has ticket AND (is adult OR is VIP)
$canEnter = $hasTicket && ($age >= 18 || $isVIP);
var_dump($canEnter); // bool(true)
?>
 <!-- Sem parênteses, && é avaliado antes de ||. No entanto, usar parênteses torna seu código mais fácil de ler e previne erros. Ao combinar operadores, sempre agrupe as condições logicamente para expressar exatamente o que você quer dizer. -->

<!-- Desafio
Leia quatro valores da entrada: um inteiro temperature, uma string isRaining (seja "true" ou "false"), uma string hasUmbrella (seja "true" ou "false"), e uma string hasRaincoat (seja "true" ou "false").

Converta os valores de string para booleanos comparando-os com "true".

Avalie as seguintes três condições e imprima o resultado de cada uma usando var_dump(), cada uma em uma nova linha:

Verifique se NÃO está chovendo (use o operador !)
Verifique se a pessoa deve ficar dentro de casa: está chovendo E eles não têm nem guarda-chuva nem capa de chuva (use ! com ambos os itens)
Verifique se a pessoa pode sair confortavelmente: a temperatura é pelo menos 15 E (não está chovendo OU eles têm guarda-chuva ou capa de chuva)
Exemplo:

Se as entradas forem 20, true, false, e true, a saída deve ser:

bool(false)
bool(false)
bool(true)
Explicação:

!isRaining → !true → false
isRaining && !hasUmbrella && !hasRaincoat → true && true && false → false
temperature >= 15 && (!isRaining || hasUmbrella || hasRaincoat) → true && (false || false || true) → true && true → true -->
<?php
// Read input values
$temperature = intval(fgets(STDIN));
$isRainingStr = trim(fgets(STDIN));
$hasUmbrellaStr = trim(fgets(STDIN));
$hasRaincoatStr = trim(fgets(STDIN));

// TODO: Convert string values to booleans by comparing them to "true"
$isRaining = $isRainingStr === "true";
$hasUmbrella = $hasUmbrellaStr === "true";
var_dump($temperature >= 15 && (!$isRaining || $hasUmbrella || $hasRaincoat));

?>