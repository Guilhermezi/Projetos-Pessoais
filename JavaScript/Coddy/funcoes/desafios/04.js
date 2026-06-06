/*
Desafio

Fácil
Crie uma expressão de função chamada calculateVolume que recebe três argumentos, length, width e height, e retorna o volume de um prisma retangular. A função deve ser atribuída a uma variável chamada calculateVolume.

Por exemplo:

console.log(calculateVolume(3, 4, 5)); // Output: 60
console.log(calculateVolume(2, 2, 2));  // Output: 8

*/
const calculateVolume = function(length, width, height) {
    return length * width * height;
}
