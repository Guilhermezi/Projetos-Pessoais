<?php
/**Variáveis são contêineres que armazenam valores de dados. Elas são usadas para armazenar, manipular e exibir informações dentro de um programa.

Em resumo, uma variável é como uma unidade de memória que podemos acessar digitando o nome da variável.

Cada variável tem um nome único e um valor que pode ser de diferentes tipos.

No PHP, todos os nomes de variáveis devem começar com um sinal de dólar ($). Para inicializar uma variável, usamos o seguinte formato:

$variable_name = value;
Vamos dar uma olhada nos diferentes tipos de números:

int - um inteiro, como 1 ou -2.

float - um número real, como 1.32 ou 0.98.

Por exemplo:

Para inicializar uma variável do tipo int com o nome a e o valor 3:

$a = 3;
Para inicializar uma variável do tipo float com o nome b e o valor 13.2:

$b = 13.2;**/
# Write your code below
$var = 5;


echo "var = " . $var . "\n";
?>

<!-- Uma string é simplesmente uma sequência de caracteres, como letras, números, símbolos ou espaços. Em PHP, você pode criar strings usando aspas simples ('') ou aspas duplas (""): -->

<!-- $message1 = 'Hello World!';
$message2 = "Welcome to PHP!";
Ambas as abordagens criam strings válidas, mas há uma diferença importante entre elas.

As aspas duplas têm um recurso especial chamado interpolação de variáveis - elas podem incluir variáveis diretamente dentro da string usando o sinal de dólar $: -->

<?php
$name = "Alice";
$greeting = "Hello, $name!";
echo $greeting; // Outputs: Hello, Alice!
?>

<!-- As aspas simples, no entanto, tratam tudo literalmente e não processam variáveis dentro delas. Por exemplo: -->
 <?php
$name = "Alice";
$greeting = 'Hello, $name!';
echo $greeting; // Outputs: Hello, $name!
?>

<!-- Booleanos -->

<!-- Variáveis booleanas só podem conter um de dois valores possíveis: true ou false.

Observe que esses valores são sensíveis a maiúsculas e minúsculas, o que significa que devem ser em minúsculas.

Aqui está um exemplo de atribuição de um valor booleano a uma variável: -->

$variable_true = true;
$variable_false = false;

<!-- Convenções de Nomenclatura -->

<!-- Convenções de nomenclatura são um conjunto de diretrizes que os desenvolvedores seguem para tornar seu código mais legível e manutenível. Diferentes linguagens de programação frequentemente têm diferentes convenções de nomenclatura. No PHP, as variáveis são escritas em camelCase - a primeira palavra começa com uma letra minúscula, e as palavras subsequentes são capitalizadas sem espaços ou separadores.

Ao escrever um nome de variável, seja descritivo e use palavras significativas. Além disso, lembre-se de que todas as variáveis PHP devem começar com um sinal de dólar $. -->
<!-- Por exemplo  -->

// Bad Naming
$user_name = "John";
$a = 10;
$b = "Hello";
$x = true;

// Good Naming
$age = 10;
$greeting = "Hello";
$isActive = true;
$userName = "John";

<!-- Variáveis Vazias -->
 <!-- Em PHP, o null é um valor especial que representa "nada" ou "sem valor". É como uma caixa vazia - ela existe, mas não há nada dentro dela. Por exemplo: -->
  $userPreference = null;

  <!-- Em um cenário real, você poderia usar null para indicar que algo ainda não foi inicializado.

Por exemplo: -->

$score = null // A pontuação ainda não foi calculada
$name = null  // O nome ainda não foi inserido

<!-- Concatenação de Strings -->
 <!-- A concatenação de strings é o processo de juntar duas ou mais strings para criar uma única string mais longa.

Use o operador de ponto (.) para concatenar strings. Este operador pega as strings em seus lados esquerdo e direito e as combina em uma única string contínua: -->

$firstName = "John";
$lastName = "Smith";
$fullName = $firstName . $lastName;
echo $fullName; // Outputs: JohnSmith

<!-- Observe que a concatenação não adiciona automaticamente espaços entre as strings. Se você quiser espaços ou outros caracteres entre suas strings, precisa incluí-los explicitamente: -->

$fullName = $firstName . " " . $lastName;
echo $fullName; // Outputs: John Smith

<?php
$firstName = "Jhon";
$lastName = "Smith";

// Write your code below
$fullName = $firstName . ' ' . $lastName;
$greeting = "Hello, $fullName";

echo $fullName . "\n";
echo $greeting . "\n";

?>

<!-- Obtendo Entrada do Usuário -->

<!-- Até agora, armazenamos valores que pensamos em variáveis. Programas geralmente não funcionam dessa maneira. Recebemos valores de uma fonte externa, um usuário por exemplo.

Para obter entrada de um usuário ou do sistema, precisamos escrever: -->

$var = trim(fgets(STDIN));

<!-- Isso armazenará a entrada na variável $var.

fgets(STDIN) lê a entrada
trim() remove espaços em branco extras e quebras de linha -->

<!-- A entrada é sempre do tipo string. Por exemplo, se a entrada for 56 então var conterá a string "56". -->

<?php
// Read input using trim(fgets(STDIN));
$userName = trim(fgets(STDIN));
$userAge = trim(fgets(STDIN));

echo "Hey " . $userName . "\n";
echo "You are " . $userAge . " years old.";
?>

<!-- Conversão para Diferentes Tipos -->
 <!-- Para converter a entrada para um tipo diferente, precisamos fazer um cast. Para fazer cast de uma string para um int (um número inteiro), escreveremos: -->
    $var = trim(fgets(STDIN));
    $var = (int)$var;

<!-- Ou em uma linha: -->
    $var = (int)trim(fgets(STDIN));

<!-- Se a entrada for um número, ou seja, 5, 4, 54, então $var conterá um número. Se a entrada contiver um número inválido: 5ab, bb, akt, etc., então o PHP converterá o que puder (ex.: "5ab" se torna 5, "bb" se torna 0).

Aqui está uma tabela que mostra como fazer cast para diferentes tipos: -->

    Cast	Explicação
    (int)	Converter para um número inteiro
    (float)	Converter para um número real
    (bool)	Converter para um booleano
    (string)	Converter para uma string

<?php
// Read input
$firstNumnber = trim(fgets(STDIN));
$secondNumber = trim(fgets(STDIN));

// Convert to int
$secondNumber = (int)$secondNumber;

$result = $firstNumnber * $secondNumber;

// Print the result
echo $result;

?>