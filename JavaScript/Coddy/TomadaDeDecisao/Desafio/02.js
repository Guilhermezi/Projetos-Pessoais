/*
Você recebe um código que obtém como entrada um número indicando a precipitação em milímetros e o armazena em uma variável chamada rainfall.

Sua tarefa é inicializar uma variável chamada rainCondition com base nestas condições:

"Dry" se rainfall for menor que 1.
"Light Rain" se rainfall estiver entre 1 e 10 (incluindo 1 e 10).
"Moderate Rain" se rainfall estiver entre 11 e 50 (incluindo 11 e 50).
"Heavy Rain" se rainfall for maior que 50.

*/
let rainfall = parseInt(inp); // Don't change this line
let rainCondition = "unset";
// Type your code below

if (rainfall < 1) {
    rainCondition = "Dry";
} else if (rainfall >= 1 && rainfall <= 10) {
    rainCondition = "Light Rain";
} else if (rainfall >= 11 && rainfall <= 50) {
    rainCondition = "Moderate Rain";
} else if (rainfall > 50) {
    rainCondition = "Heavy Rain";
}
// Don't change the line below
console.log(rainCondition);