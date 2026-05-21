/*
Conversão de Booleano
// Convertendo para Booleano
console.log(Boolean(1));      // Saída: true
console.log(Boolean(0));      // Saída: false
console.log(Boolean(""));     // Saída: false
console.log(Boolean("hello")); // Saída: true
Conversão de String
// Convertendo para String
let num = 42;
let bool = true;
let str1 = String(num);   // Converte número para string
let str2 = String(bool);  // Converte booleano para string

console.log(str1);  // Saída: "42"
console.log(str2);  // Saída: "true"
challenge icon
Desafio

Fácil
Neste desafio, você praticará a conversão entre diferentes tipos de dados em JavaScript, focando em conversões de Boolean e String.

Você recebeu várias variáveis com valores diferentes. Sua tarefa é substituir cada marcador null no código inicial pela chamada de conversão correta:

Converta a string '42' para um booleano usando Boolean()
Converta o número 0 para um booleano usando Boolean()
Converta o número 7 para um booleano usando Boolean()
Converta a string vazia '' para um booleano usando Boolean()
Converta o booleano true para uma string usando String()
Converta o número 123 para uma string usando String()
Por exemplo, para converter stringValue para um booleano, substitua null por Boolean(stringValue) para que a linha fique:
console.log("Boolean('42'): ", Boolean(stringValue));

Cada null é simplesmente um marcador — não é um conceito que você precisa aprender. Seu trabalho é substituir cada null pela chamada de conversão apropriada usando a variável fornecida.
*/
// Values to convert
const stringValue = '42';
const zeroNumber = 0;
const positiveNumber = 7;
const emptyString = '';
const boolValue = true;
const numValue = 123;

// TODO: Replace null with the correct Boolean() conversion of stringValue
console.log("Boolean('42'): ", Boolean(stringValue));

// TODO: Replace null with the correct Boolean() conversion of zeroNumber
console.log("Boolean(0): ", Boolean(zeroNumber));

// TODO: Replace null with the correct Boolean() conversion of positiveNumber
console.log("Boolean(7): ", Boolean(positiveNumber));

// TODO: Replace null with the correct Boolean() conversion of emptyString
console.log("Boolean(''): ", Boolean(emptyString));

// TODO: Replace null with the correct String() conversion of boolValue
console.log("String(true): ", String(boolValue));

// TODO: Replace null with the correct String() conversion of numValue
console.log("String(123): ", String(numValue));