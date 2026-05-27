/*
Desafio

Iniciante
Agora temos um programa funcional que calcula o valor total da conta! A parte que falta é o recurso de divisão.

Adicione ao programa um recurso de divisão:

Ele receberá um número adicional (int) do usuário que indica o número de pessoas dividindo a conta. (Este será o terceiro input)
Calcule o valor por pessoa dividindo o valor total pelo número de pessoas.
Ao final, adicione outra impressão do valor por pessoa.
*/
/* Desafio Iniciante
Agora temos um programa funcional que calcula o valor total da conta! A parte que falta é o recurso de divisão. */
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

// 4. Calcula o valor dividido por pessoa
let amountPerPerson = totalAmount / numPeople;

// 5. Exibe o valor por pessoa no console
console.log(amountPerPerson);
