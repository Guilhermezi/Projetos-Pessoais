/*
Desafio

Fácil
Adicione uma função chamada fizzbuzz que recebe um número (int) como argumento e:

Se o número for divisível por 3, retorne "Fizz".
Se o número for divisível por 7, retorne "Buzz".
Se o número for divisível por ambos 3 e 7, retorne "FizzBuzz".
Se nenhuma das condições acima for atendida, retorne o próprio número em formato de string.
Finalmente, imprima a saída de fizzbuzz(num) onde num é a entrada fornecida.

*/
let num = parseInt(inp); // Don't change this line

// Type your code below
console.log("Welcome to FizzBuzz!");

function fizzbuzz(num){
    if (num % 3 == 0) {
        return("Fizz")
    }
    else if (num % 7 == 0) {
        return("Buzz")
    }
    else if (num % 3 == 0 && num % 7 == 0){
        return("FizzBuzz")
    }
    else {
        return(num.toString())
    }
}
console.log(fizzbuzz(num));
