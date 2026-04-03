<!-- 
 A função sayHello da aula anterior sempre faz a mesma coisa. Mas e se você quiser saudar pessoas diferentes? Parâmetros permitem que você passe dados para uma função, tornando-a flexível e dinâmica.

Parâmetros são variáveis listadas dentro dos parênteses quando você declara uma função. Quando você chama a função, você fornece valores (chamados argumentos) que são atribuídos a esses parâmetros:

<?php
function greet($name) {
    echo "Hello, $name!\n";
}

greet("Alice");
greet("Bob");
?>
Isso produz:

Hello, Alice!
Hello, Bob!
O parâmetro $name atua como um espaço reservado. Cada vez que você chama greet(), o argumento que você passa substitui esse espaço reservado dentro da função.

Funções podem aceitar múltiplos parâmetros, separados por vírgulas:

<?php
function introduce($name, $age) {
    echo "$name is $age years old.\n";
}

introduce("Alice", 25);
introduce("Bob", 30);
?>
Isso produz:

Alice is 25 years old.
Bob is 30 years old.
Ao chamar uma função com múltiplos parâmetros, a ordem importa — o primeiro argumento vai para o primeiro parâmetro, o segundo para o segundo, e assim por diante.


Desafio

Fácil
Leia três linhas de entrada:

O nome de uma pessoa (p. ex., Alice)
O nome de uma cidade (p. ex., Paris)
Um ano (p. ex., 2020)
Crie uma função chamada describePerson que aceita três parâmetros: $name, $city e $year. A função deve imprimir uma mensagem no seguinte formato:

[name] moved to [city] in [year].
Chame a função com os valores de entrada.

Exemplo 1:

Se as entradas forem Alice, Paris e 2020, a saída deve ser:

Alice moved to Paris in 2020.
Exemplo 2:

Se as entradas forem Bob, Tokyo e 2018, a saída deve ser:

Bob moved to Tokyo in 2018.
Exemplo 3:

Se as entradas forem Emma, New York e 2015, a saída deve ser:

Emma moved to New York in 2015.

-->
<?php
// Read input
$name = trim(fgets(STDIN));
$city = trim(fgets(STDIN));
$year = trim(fgets(STDIN));

// TODO: Create a function called describePerson that accepts three parameters
// ($name, $city, $year) and prints the message in the required format
function describePerson($name, $city, $year){
    echo "$name moved to $city in $year.\n";
}

// Call the function with the input values
describePerson($name, $city, $year);
?>