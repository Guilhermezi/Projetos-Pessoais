<!-- 
Até agora, você tem escrito código que executa de cima para baixo. Mas à medida que seus programas crescem, você se verá repetindo o mesmo código em vários lugares. Funções resolvem esse problema permitindo que você agrupe código em blocos reutilizáveis.

Uma função é um bloco de código nomeado que executa uma tarefa específica. Você a define uma vez, depois a chama sempre que precisar que essa tarefa seja executada. No PHP, você declara uma função usando a palavra-chave function:

<?php
function sayHello() {
    echo "Hello, World!\n";
}
?>
Isso cria uma função chamada sayHello. O código dentro das chaves é o corpo da função — ele define o que acontece quando a função é executada. No entanto, declarar uma função não a executa. Para executar o código dentro dela, você precisa chamar a função usando seu nome seguido de parênteses:

<?php
function sayHello() {
    echo "Hello, World!\n";
}

sayHello();
sayHello();
?>
Isso produz a saída:

Hello, World!
Hello, World!
Cada vez que você chama sayHello(), o PHP executa o código dentro da função. Você pode chamar uma função quantas vezes precisar, o que torna as funções tão poderosas para evitar repetição.


Desafio

Fácil
Leia uma única linha de entrada contendo um número que indica quantas vezes exibir uma saudação (por exemplo, 3).

Declare uma função chamada printWelcome que imprime Welcome to PHP! (com uma nova linha no final).

Em seguida, chame a função o número especificado de vezes usando um loop.

Exemplo 1:

Se a entrada for 3, a saída deve ser:

Welcome to PHP!
Welcome to PHP!
Welcome to PHP!
Exemplo 2:

Se a entrada for 1, a saída deve ser:

Welcome to PHP!
Exemplo 3:

Se a entrada for 5, a saída deve ser:

Welcome to PHP!
Welcome to PHP!
Welcome to PHP!
Welcome to PHP!
Welcome to PHP! 
-->
<?php
// Read the number of times to display the greeting
$count = intval(fgets(STDIN));

// TODO: Declare a function called printWelcome that prints "Welcome to PHP!" with a newline
function printWelcome(){
    echo "Welcome to PHP!\n";
}
// TODO: Call the function the specified number of times using a loop
for ($i = 0; $i < $count; $i ++){
    printWelcome();
}
?>