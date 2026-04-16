<!-- 



PHP é uma linguagem fracamente tipada, o que significa que variáveis podem conter qualquer tipo de dados. Embora essa flexibilidade seja conveniente, ela pode levar a bugs inesperados quando uma função recebe o tipo errado de argumento. Declarações de tipo permitem que você especifique exatamente quais tipos seus parâmetros devem aceitar.

Para adicionar uma declaração de tipo, coloque o nome do tipo antes do parâmetro:

<?php
function double(int $number) {
    return $number * 2;
}

echo double(5);
?>
Isso produz 10. O int antes de $number informa ao PHP que esta função espera um inteiro. Se alguém passar uma string como "hello", o PHP produzirá um erro em vez de causar problemas silenciosamente mais tarde.

Você pode usar declarações de tipo com múltiplos parâmetros:

<?php
function greetUser(string $name, int $age) {
    return "$name is $age years old.";
}

echo greetUser("Alice", 25);
?>
As declarações comuns de tipos incluem int, float, string, bool e array. Usá-los torna seu código mais previsível e ajuda a detectar erros precocemente, especialmente à medida que seus programas crescem.


Desafio

Fácil
Leia três linhas de entrada:

O primeiro nome de uma pessoa (ex.: Alice)
O sobrenome de uma pessoa (ex.: Smith)
Um ano de nascimento (ex.: 1995)
Crie uma função chamada createProfile que aceita três parâmetros com declarações de tipo:

$firstName como string
$lastName como string
$birthYear como int
A função deve calcular a idade da pessoa (assuma que o ano atual é 2024) e retornar uma string no seguinte formato:

[firstName] [lastName] is [age] years old.
Chame a função com os valores de entrada e imprima o resultado retornado.

Exemplo 1:

Se as entradas forem Alice, Smith e 1995, a saída deve ser:

Alice Smith is 29 years old.
Exemplo 2:

Se as entradas forem Bob, Johnson e 2000, a saída deve ser:

Bob Johnson is 24 years old.
Exemplo 3:

Se as entradas forem Emma, Davis e 1988, a saída deve ser:

Emma Davis is 36 years old.

-->
<?php
// Read input
$firstName = trim(fgets(STDIN));
$lastName = trim(fgets(STDIN));
$birthYear = intval(fgets(STDIN));

// Função com declarações de tipo (Type Declarations)
function createProfile(string $firstName, string $lastName, int $birthYear) {
    $age = 2024 - $birthYear;
    return "$firstName $lastName is $age years old.";
}

// Call the function and print the result
echo createProfile($firstName, $lastName, $birthYear);
?>
