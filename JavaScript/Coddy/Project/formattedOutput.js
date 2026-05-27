/*
Desafio

Iniciante
O último passo deste projeto é formatar a saída!

Por exemplo, para a seguinte entrada:

100
5
2
Saída no seguinte formato:

Bill Split Calculator
Total (including tip): $105
Each person pays: $52.5
Nota: a saída deve ser exatamente a mesma, portanto, observe todas as letras maiúsculas e símbolos adicionados!



*/
/* Desafio Iniciante
O último passo deste projeto é formatar a saída! */
let billAmount = parseFloat(inp[0]); // Don't change this line
let tipPercentage = parseFloat(inp[1]); // Don't change this line
let numPeople = parseInt(inp[2]); // Don't change this line

// Type your code below
console.log("Bill Split Calculator");

// 1. Calcula o valor absoluto da gorjeta
let tipAmount = billAmount * (tipPercentage / 100);

// 2. Calcula o valor total da conta com a gorjeta inclusa
let totalAmount = billAmount + tipAmount;

// 3. Exibe o resultado total formatado com o cifrão
console.log("Total (including tip): $" + totalAmount);

// 4. Calcula o valor dividido por pessoa
let amountPerPerson = totalAmount / numPeople;

// 5. Exibe o valor por pessoa formatado com o cifrão
console.log("Each person pays: $" + amountPerPerson);
