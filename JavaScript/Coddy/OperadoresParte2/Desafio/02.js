/*
Você recebe um código com uma expressão lógica. Substitua os pontos de interrogação das variáveis x e y para que z avalie para true.

Note que x e y devem conter números inteiros positivos ou negativos.
*/
// Type your code below
let x = 4
let y = 3
let z = ((x * y) < (x + y) && (x + y) < (x - y))

// Don't change the line below
console.log(`z = ${z}`)