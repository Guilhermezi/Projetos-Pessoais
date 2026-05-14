/*
Desafio

Iniciante
Você recebeu um código que recebe como entrada dois números n1 e n2 e um caractere op (fornecido).

Os valores possíveis para op são '+', '-', '/' e '*'

Sua tarefa é definir a variável result com base nas condições:

se op for '+', defina result com n1 + n2.
se op for '-', defina result com n1 - n2.
se op for '/', defina result com n1 / n2.
se op for '*', defina result com n1 * n2.
*/

let n1 = parseInt(inp[0]) // Don't change this line
let n2 = parseInt(inp[1]) // Don't change this line
let op = inp[2] // Don't change this line
let result = 0

if (op === '+') {
    result = n1 + n2;
} else if (op === '-') {
    result = n1 - n2;
} else if (op === '/') {
    result = n1 / n2;
} else if (op === '*') {
    result = n1 * n2;
}

// Don't change the line below
console.log(`result = ${result}`)
