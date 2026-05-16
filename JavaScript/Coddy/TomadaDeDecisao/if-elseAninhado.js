/*
Podemos aninhar instruções if-else if-else umas dentro das outras. Isso nos permite criar estruturas hierárquicas de tomada de decisão.

Por exemplo:

let result;
if (age > 18) {
    if (has_license) {
        result = "You can drive";
    } else {
        result = "Get a license first";
    }
} else {
    result = "Too young to drive";
}
Pode ser aninhado infinitamente:

if (condition1) {
	// se condition1 for verdadeira
	if (condition2) {
		// se condition1 e condition2 forem verdadeiras
		if (condition3) {
		    // se condition1, condition2 e condition3 forem verdadeiras
		    ...
		}
	}
}
challenge icon
Desafio

Médio
Crie um programa que verifique se alguém pode entrar em uma piscina.

Regras:

Deve ter pelo menos 10 anos de idade
Se tiverem menos de 13 anos, devem estar acompanhados por um adulto
Imprima exatamente estas mensagens:

Se for muito jovem:
Sorry, you are too young
Se tiver menos de 13 anos e nenhum adulto:
Sorry, you need an adult with you
Se tiver menos de 13 anos com um adulto:
You can enter with adult supervision!
Se tiver 13 anos ou mais:
You can enter by yourself!


*/
let age = parseInt(inp[0]); // Don't change this line
let has_adult = inp[1] === "true"; // Don't change this line

// Write your code below
if (age < 10) {
    console.log("Sorry, you are too young");
} else if (age < 13) {
    if (has_adult) {
        console.log("You can enter with adult supervision!");
    } else {
        console.log("Sorry, you need an adult with you");
    }
} else {
    console.log("You can enter by yourself!");
}