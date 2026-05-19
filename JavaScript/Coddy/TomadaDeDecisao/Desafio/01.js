/*Crie uma variável chamada temperature e defina-a como 25.

Use instruções if para:

Se temperature for maior que 30, defina uma variável message como "Too hot!".
Se temperature for menor que 10, defina message como "Too cold!".
Se temperature estiver entre 10 e 30, defina message como "Just right!".
*/

let temperature = 25;
let message = ""; // Set the message based on temperature

// Add your if statements below
if (temperature > 30) {
    message = "Too hot!";
} else if (temperature < 10) {
    message = "Too cold!";
} else {
    message = "Just right!";
}

console.log(message); // This will show the result
