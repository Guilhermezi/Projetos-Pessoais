/*
A instrução switch é outra maneira de controlar o fluxo do seu programa com base em diferentes condições. É semelhante ao uso de if-else if-else, mas pode ser mais conciso e legível em certas situações.

Veja como a instrução switch funciona:

switch (expression) {
    case value1:
        // Código a ser executado se a expressão corresponder a value1
        break;
    case value2:
        // Código a ser executado se a expressão corresponder a value2
        break;
    // ... mais casos ...
    default:
        // Código a ser executado se nenhum caso corresponder
}
A expression é avaliada uma vez.
O valor da expressão é comparado com os valores de cada case.
Se houver uma correspondência, o bloco de código associado é executado.
A instrução break é usada para sair da instrução switch. Sem ela, a execução continuaria para o próximo caso.
O caso default é opcional. Ele é executado se nenhum outro caso corresponder.
Aqui está um exemplo:

let day = 3;
let dayName;

switch (day) {
    case 1:
        dayName = "Sunday";
        break;
    case 2:
        dayName = "Monday";
        break;
    case 3:
        dayName = "Tuesday";
        break;
    // ... casos para outros dias ...
    default:
        dayName = "Invalid day";
}

console.log(dayName); // Saída: Tuesday
Neste exemplo, a instrução switch verifica o valor de day. Como day é 3, o caso para 3 é executado, definindo dayName como "Tuesday".

challenge icon
Desafio

Iniciante
Você receberá um comando do usuário.
Use uma instrução switch para definir o valor da variável message com base no comando.

Defina message para:

"System starting" → se o comando for "start"
"System stopping" → se o comando for "stop"
"System paused" → se o comando for "pause"
"System resuming" → se o comando for "resume"
Se o comando não corresponder a nenhuma opção conhecida, defina:

"Unknown command"
Ao final, o programa imprimirá o valor de message.
Seu trabalho é definir corretamente o valor de message usando uma instrução switch.
*/
// Get the command from the user
let command = inp;

// Create a variable to store the message
let message;

switch (command) {
    case "start":
        message = "System starting";
        break;
    case "stop":
        message = "System stopping";
        break;
    case "pause":
        message = "System paused";
        break;
    case "resume":
        message = "System resuming";
        break;
    default:
        message = "Unknown command";
}
    // Write your code here


// Print the message
console.log(message);