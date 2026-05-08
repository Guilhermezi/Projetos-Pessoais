/*
No JavaScript, existem dois tipos de operadores de igualdade: igualdade solta (==) e igualdade estrita (===).

A igualdade solta (==) verifica se dois valores são iguais após realizar a coerção de tipos. Isso significa que, se os operandos tiverem tipos diferentes, o JavaScript tentará convertê-los para um tipo comum antes de realizar a comparação.

Por exemplo:

let b = 5 == "5";   // Retorna true, porque a string "5" é convertida para o número 5 antes da comparação
let b = 0 == false; // Contém true, porque o booleano false é convertido para o número 0 antes da comparação
A igualdade estrita (===), por outro lado, verifica se dois valores são iguais sem realizar qualquer conversão de tipo. Se os operandos tiverem tipos diferentes, eles são considerados diferentes.

Por exemplo:

let b = 5 === "5";   // Contém false, porque nenhuma conversão de tipo é realizada, e um número não é igual a uma string
let b = 0 === false; // Contém false, porque nenhuma conversão de tipo é realizada, e o número 0 não é igual ao booleano false
Em geral, recomenda-se usar a igualdade estrita (===) na maioria dos casos para evitar resultados inesperados devido à coerção de tipos.

Da mesma forma, também existem os operadores de desigualdade não estrita (!=) e desigualdade estrita (!==) que funcionam de maneira semelhante, mas verificam a desigualdade em vez da igualdade.

A desigualdade não estrita (!=) verifica se dois valores não são iguais após realizar a coerção de tipo, enquanto a desigualdade estrita (!==) verifica se dois valores não são iguais sem realizar a conversão de tipo.

challenge icon
Desafio

Iniciante
Você recebeu um código com três variáveis: a, b e c.

Sua tarefa é realizar as seguintes comparações e imprimir os resultados:

Verifique se a é fracamente igual a b e armazene o resultado em d.
Verifique se a é estritamente igual a c e armazene o resultado em e.
Verifique se b é fracamente diferente de c e armazene o resultado em f.
Verifique se a é estritamente diferente de b e armazene o resultado em g.
Use as variáveis fornecidas e os operadores de comparação para completar a tarefa.

*/
// Given variables
let a = 10
let b = "10"
let c = true

// Type your code below
let d = a == b;
let e = a === c;
let f = b != c;
let g = a !== b;

// Don't change the line below
console.log(`d = ${d}`)
console.log(`e = ${e}`)
console.log(`f = ${f}`)
console.log(`g = ${g}`)