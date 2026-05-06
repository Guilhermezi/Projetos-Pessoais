/*
O operador módulo % informa o que sobra após dividir um número por outro.

result = dividend % divisor
dividendo: O número que está sendo dividido.
divisor: O número que divide o dividendo.
resultado: O resto da divisão.
Por exemplo,

result = 10 % 3
Aqui, 10 é dividido por 3. 3 cabe em 10 três vezes, com um resto de 1. Portanto, result será 1.

Geralmente, o módulo é usado para verificar se um número é par ou ímpar:

Se um número for par, dividi-lo por 2 deixará um resto 0.
Se um número for ímpar, dividi-lo por 2 deixará um resto 1.
challenge icon
Desafio

Iniciante
Escreva um código que inicialize três variáveis, a, b e c com os valores 9, 2.6 e 11 (respectivamente).

Depois disso, inicialize as seguintes variáveis:

d que conterá o resultado de a módulo 2 
e que conterá o resultado de a módulo 3
f que conterá o resultado de c módulo 10
Confira o resultado e veja como diferentes dividendos e divisores afetam o resultado.
*/

// Type your code below
var a = 9
var b = 2.6
var c = 11

var d = a % 2
var e = a % 3
var f = c % 10

// Don't change the line below
console.log(`a = ${a}`)
console.log(`b = ${b}`)
console.log(`c = ${c}`)
console.log(`d = ${d}`)
console.log(`e = ${e}`)
console.log(`f = ${f}`)