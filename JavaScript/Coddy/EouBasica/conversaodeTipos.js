/*
Para converter entre diferentes tipos de dados em JavaScript, precisamos usar conversão de tipos.

O JavaScript suporta tanto a conversão de tipos implícita quanto a explícita. Vamos focar nos métodos de conversão explícita mais comuns parte 1:

parseInt e parseFloat
// Conversão de String para Number usando parseInt e parseFloat
let str = "42";
let num1 = parseInt(str);    // Converte para inteiro
let num2 = parseFloat("42.5");  // Converte para ponto flutuante

console.log(num1);  // Saída: 42
console.log(num2);  // Saída: 42.5
Se a string contiver um número inválido, essas funções se comportam de forma diferente:

console.log(parseInt("5ab"));   // Saída: 5 (analisa até o caractere inválido)
console.log(parseFloat("5.2xyz")); // Saída: 5.2 (analisa até o caractere inválido)
É importante usar o tipo correto porque isso pode afetar o resultado.

Concatenando duas strings: "5" + "5" == "55"

Somando dois números: 5 + 5 == 10

Compreender a conversão de tipos é essencial para escrever código JavaScript confiável e evitar resultados inesperados em seus programas.

challenge icon
Desafio

Iniciante
Dadas duas strings var1 e var2.

Converta-as para float e imprima a multiplicação das duas.
*/
let var1 = inp[0] // Don't change this line
let var2 = inp[1] // Don't change this line

// Write code below
let num1 = parseFloat(var1)
let num2 = parseFloat(var2)
let resultado = num1 * num2
console.log(resultado)