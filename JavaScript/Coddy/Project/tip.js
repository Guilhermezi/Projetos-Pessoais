/*
Desafio

Iniciante
Calcule o total, incluindo a gorjeta, e exiba o resultado ao final.

*/

let billAmount = parseFloat(inp[0]); // Don't change this line
let tipPercentage = parseFloat(inp[1]); // Don't change this line
let numPeople = parseInt(inp[2]); // Don't change this line

// Type your code below
console.log("Bill Split Calculator");

// 1. Calcula o valor absoluto da gorjeta
let tipAmount = billAmount * (tipPercentage / 100);

// 2. Calcula o valor total da conta com a gorjeta inclusa
let totalAmount = billAmount + tipAmount;

// 3. Exibe o resultado total no console
console.log(totalAmount);
