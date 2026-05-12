/*
Os operadores lógicos possuem uma tabela especial chamada "Tabela verdade" que mostra o que a combinação de operadores lógicos retorna.

Tabela verdade para o operador &&:

a	b	a && b
false	false	false
false	true	false
true	false	false
true	true	true
A única maneira de obter um true para o operador && é se ambos a e b forem true

Tabela verdade para o operador ||:

a	b	a || b
false	false	false
false	true	true
true	false	true
true	true	true
Neste caso, para obter um resultado true, a ou b deve ser true.

Tabela verdade para o operador !:

a	!a
false	true
true	false
Aqui o valor de a é invertido. Se a é false então !a é true

challenge icon
Desafio

Iniciante
Você recebeu um código, substitua os pontos de interrogação das variáveis b1 e b2 para que b3 seja avaliado como true.

Observe que b1 e b2 devem conter números. (ex: 3, 5, 11, …)
*/

// Type your code below
let b1 = 2
let b2 = 3
let b3 = !((b1 + b2) > (b1 * b2))

// Don't change the line below
console.log(`b3 = ${b3}`)