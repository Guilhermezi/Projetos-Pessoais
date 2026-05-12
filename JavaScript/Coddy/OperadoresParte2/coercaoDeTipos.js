/*
A coerção de tipos (type coercion) no JavaScript é a conversão automática de valores de um tipo de dado para outro. Isso pode acontecer implicitamente em certas operações ou explicitamente quando você usa funções como String(), Number() ou Boolean().

A coerção implícita de tipos frequentemente ocorre quando você usa o operador de igualdade solta == ou quando realiza operações entre tipos diferentes, como adicionar um número a uma string.

Por exemplo:

let result = 5 + "5";
// Armazena "55", porque o número 5 é implicitamente convertido para a string "5" e então concatenado
let result = true == 1;
// Resulta em true, porque o booleano true é convertido implicitamente para o número 1
A coerção de tipo explícita pode ser feita usando funções integradas:

String(value) converte um valor para uma string
Number(value) converte um valor em um número
Boolean(value) converte um valor para um booleano
Por exemplo:

let num = "123";
let str = Number(num) + 7; // Armazena 130
console.log(str); 
let bool = true;
let numBool = Number(bool); // Contém 1
Compreender a coerção de tipos é crucial para escrever código JavaScript correto e evitar resultados inesperados.

challenge icon
Desafio

Iniciante
Você recebeu um código com várias variáveis de diferentes tipos.

Sua tarefa é realizar a coerção de tipos e imprimir os resultados:

Converta o número num para uma string e armazene-o em uma variável chamada a.
Converta o booleano bool para um número e armazene-o em uma variável chamada b.
Converta a string str para um número e armazene-a em uma variável chamada c.
Realize uma coerção de tipo implícita concatenando num com str e armazene o resultado em uma variável chamada d.
Use funções de coerção de tipo explícitas (String(), Number()) para as três primeiras tarefas e observe a coerção implícita na última tarefa.
*/

// Given variables
let num = 42
let bool = false
let str = "7"

// Type your code below
 var a = String(num)
 var b = Number(bool)
 var c = Number(str)
 var d = num + str

// Don't change the line below
console.log(`a = ${a}`)
console.log(`b = ${b}`)
console.log(`c = ${c}`)
console.log(`d = ${d}`)