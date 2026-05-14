/*
if nos permite executar um código específico se uma condição for atendida, mas e se quisermos executar outra coisa se a condição não for atendida?

Para isso, temos a instrução else:

let age = 15;
let status = "None";
if (age >= 18) {
	status = "Adult";
} else {
	status = "Young";
}
No exemplo acima, age é menor que 18, o que significa que ele entra no código else e status conterá "Young".

Podemos até torná-lo mais profundo usando a instrução else if:

let age = 68;
let status = "None";
if (age < 18) {
	status = "Young";
} else if (age >= 18 && age <= 65) {
	status = "Adult";
} else {
	status = "Old";
}
Aqui ele verifica se age é menor que 18, caso contrário, continuará para a próxima condição e verificará se age está entre 18 e 65. Se essa condição também não for atendida, ele definirá status como "Old".

Podemos adicionar quantas instruções else if quisermos:

if (condition1) {
	code;
} else if (condition2) {
	code;
} else if (condition3) {
	code;
	...
challenge icon
Desafio

Iniciante
Você recebeu um código que recebe como entrada um número que indica a velocidade do vento e o armazena em uma variável chamada wind.

Nota: a entrada é processada nos bastidores. Em JavaScript, é problemático obter entrada do usuário, então não tocaremos nisso nesta seção.

 

Sua tarefa é inicializar a variável condition com base nas condições:

"Calm" se wind for menor que 8,
"Breeze" se wind estiver entre 8 e 31 (incluindo 8 e 31).
"Gale" se wind estiver entre 32 e 63 (incluindo 32 e 63)
"Storm" caso contrário
Verifique os casos de teste para ver todas as entradas e as saídas esperadas
*/

let wind = parseInt(inp); // Don't change this line
let condition = "unset"; // Type your code below

if (wind < 8) {
    condition = "Calm";
} else if (wind >= 8 && wind <= 31) {
    condition = "Breeze";
} else if (wind >= 32 && wind <= 63) {
    condition = "Gale";
} else {
    condition = "Storm";
}

// Don't change the line below
console.log(`condition = ${condition}`);
