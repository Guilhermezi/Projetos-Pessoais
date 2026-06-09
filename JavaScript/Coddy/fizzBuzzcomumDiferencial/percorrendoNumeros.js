/*
Tudo está pronto, vamos jogar!

challenge icon
Desafio

Fácil
Percorra os números de 1 a num (a entrada fornecida) e, a cada vez, use a função que você criou para calcular o resultado FizzBuzz e exibi-lo.

Por exemplo, para a entrada 7 a saída é:

Welcome to FizzBuzz!
1
2
Fizz
4
5
Fizz
Buzz

*/
/* Desafio Fácil Adicione uma função chamada fizzbuzz que recebe um número... */ 
let num = parseInt(inp); // Don't change this line 
// Type your code below
console.log("Welcome to FizzBuzz!");

function fizzbuzz(num) {
    if (num % 3 === 0 && num % 7 === 0) {
        return "FizzBuzz";
    } else if (num % 3 === 0) {
        return "Fizz";
    } else if (num % 7 === 0) {
        return "Buzz";
    } else {
        return num.toString();
    }
}

for (let i = 1; i <= num; i++) {
    console.log(fizzbuzz(i));
}