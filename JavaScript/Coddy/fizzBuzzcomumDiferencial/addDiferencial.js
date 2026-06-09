/*
Desafio

Fácil
Adicione uma pequena reviravolta ao jogo:

Números que contêm o dígito "3" mas não são divisíveis por 3 ou 7 resultarão em Almost Fizz

Para verificar se uma string contém um caractere, use includes(). Por exemplo, word.includes('a') retorna true se ela incluir o caractere e false se não incluir.

*/
let num = parseInt(inp); // Don't change this line
// Type your code below

console.log("Welcome to FizzBuzz!");

function fizzbuzz(num) {
    // Converte o número para string para poder usar o método .includes()
    let numStr = num.toString();

    if (num % 3 === 0 && num % 7 === 0) {
        return "FizzBuzz";
    } else if (num % 3 === 0) {
        return "Fizz";
    } else if (num % 7 === 0) {
        return "Buzz";
    } else if (numStr.includes('3')) {
        // Nova regra: contém '3' mas não divide por 3 nem por 7
        return "Almost Fizz";
    } else {
        return numStr;
    }
}

for (let i = 1; i <= num; i++) {
    console.log(fizzbuzz(i));
}
