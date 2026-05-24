/*
Desafio

Iniciante
Você recebe duas strings, length e width, que representam as dimensões de um retângulo.

Converta tanto length quanto width para floats usando a função de conversão de tipo apropriada.
Calcule a área do retângulo e armazene-a em uma variável area.
Calcule o perímetro do retângulo e armazene-o em uma variável perimeter.
Imprima tanto a área quanto o perímetro no seguinte formato:
"The area is: [area] and the perimeter is: [perimeter]".


*/
let length = inp[0] // Don't change this line
let width = inp[1] // Don't change this line

// Write code below
length = parseFloat(length);
width = parseFloat(width);

let area = length * width;
let perimeter = 2 * (length + width);

console.log("The area is: " + area + " and the perimeter is: " + perimeter);