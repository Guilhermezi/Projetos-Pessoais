/*
Até agora, aprendemos como imprimir strings simples, mas às vezes precisamos inserir valores de variáveis na string.

Por exemplo:

let age = 10;
console.log("His age is: age");
Isso imprimirá "His age is: age" em vez de "His age is: 10"

Para fazer funcionar, usaremos template literals:

let age = 10;
console.log(`His age is: ${age}`);
Isso exibe "His age is: 10"

Usamos crases `` em vez de aspas "" e, dentro da string, onde quer que coloquemos chaves {} com um sinal de cifrão $ antes delas, ele inserirá o valor do que está escrito dentro delas.

challenge icon
Desafio

Iniciante
Você recebeu um código que armazena uma string aleatória como entrada em uma variável chamada rnd.

Imprima no console "The input is: " e a string aleatória que está dentro da variável rnd.

Verifique os casos de teste para exemplos!
*/
let rnd = inp; // Don't change this line
console.log("The input is:", rnd)