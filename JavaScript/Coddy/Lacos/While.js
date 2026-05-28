/*
Um loop while é diferente do loop for. Um loop for nos permite iterar sobre um intervalo específico, enquanto um loop while nos permite continuar iterando enquanto uma determinada condição for atendida.

Para usar um loop while, escreva:

while (condition) {
	code;
}
O código será executado apenas se a condição for true.

Existem muitos casos de uso onde um loop while é mais adequado do que um loop for — especialmente quando o número de iterações não é conhecido antecipadamente.

Por exemplo, considere este problema:

Encontre a menor potência de 2 que seja maior que um determinado número.

Para resolvê-lo, usaremos um loop while que multiplicará repetidamente a potência atual de 2 por 2 até que ela se torne maior que o número fornecido:

let number = 27;
let power_of_two = 1;

while (power_of_two <= number) {
    power_of_two *= 2;
}

console.log(power_of_two);
challenge icon
Desafio

Iniciante
Escreva um programa que receba uma entrada, um número float.

Use um loop while para dividir a entrada por 2 enquanto o número for maior ou igual a 3.5.

Imprima o primeiro número que for menor que 3.5.

*/
let number = parseFloat(inp); // Don't change this line
while (number > 3.5) {
    number = number / 2;
}
console.log(number)