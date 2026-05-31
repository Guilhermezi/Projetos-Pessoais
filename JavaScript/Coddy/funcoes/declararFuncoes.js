/*
Declarar uma Função



Uma função é uma sequência de código que possui um nome. O propósito de uma função é reutilizar um trecho de código várias vezes.

Por exemplo, veja este código:

console.log("Welcome to Coddy");
console.log("New session...");
console.log("Welcome to Coddy");
console.log("Another session...");
console.log("Welcome to Coddy");
Usamos o mesmo código console.log("Welcome to Coddy") repetidamente. Outro problema com este código é que, se quiséssemos alterar a mensagem: Welcome to Coddy para algo diferente, como "Welcome aboard", teríamos que alterar 3 linhas de código diferentes. Para resolver esse problema, usaremos funções.

Para declarar uma função, usamos a seguinte sintaxe:

function functionName() {
    code;
}
Para o nosso exemplo, criaremos uma função chamada greet e ela será assim:

function greet() {
    console.log("Welcome to Coddy");
}
Para usar/chamar/executar a função, escrevemos greet():

greet();
console.log("New session...");
greet();
console.log("Another session...");
greet();
Isso resultará na mesma saída que acima.

Nota: É uma boa prática escrever o código da função antes de chamá-la, para que seu código seja mais fácil de ler e entender.

challenge icon
Desafio

Fácil
Escreva um programa que receba uma entrada, um número (fornecido). O número de entrada indica quantas vezes a função abaixo deve ser executada. 

Crie uma função que calcule a soma de todos os números entre 1 e 10000 (inclusive) e a imprima, nomeie a função como desejar.

Nota! Em seu código, escreva a função antes de suas instruções de chamada/execução.



*/
// Write the function below
function sum() {
    let total = 0;
    for (let i = 1; i <= 10000; i++) {
        total += i;
    }
    console.log(total);
}

let n = parseInt(inp); // Don't change this line

// Execute your function n times with a loop
for (let i = 0; i < n; i++) {
    sum();
}