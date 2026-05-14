/*
Instruções if nos permitem executar código com condições.

Por exemplo, vejamos o seguinte código:

let age = 20;
let status = "Child";
if (age > 18) {
	status = "Adult";
}
age += 1;
O código acima verifica se a variável age é maior que 18. Se for, ele definirá status para conter a string "Adult".

No fim, o código incrementará age em 1, independentemente de a idade ser maior que 18 ou não.

 

Para usar uma instrução if, precisamos adicionar parênteses () que determinarão a condição, e tudo o que estiver dentro do if fica entre chaves {}:

if (condition) {
    code;
    code;
    code;
}
Se a condição for verdadeira, entraremos no bloco de código dentro do if (o código dentro das chaves)

challenge icon
Desafio

Iniciante
Você recebeu um código.

As variáveis a e b têm valores ausentes, preencha-os para que o código dentro da instrução if seja executado!

Bônus: tente encontrar mais de uma solução!
*/
let a = 100
let b = 50

// Don't change below this line
let c = 0;
if (a >= b && !(b < 10)) {
    c = 2;
}

c += 1;
console.log(`c = ${c}`);