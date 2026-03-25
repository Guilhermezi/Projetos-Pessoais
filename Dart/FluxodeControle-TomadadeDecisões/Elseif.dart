/*
A declaração else if em Dart estende a estrutura básica if-else permitindo que você verifique múltiplas condições em sequência. É útil quando você precisa lidar com mais de dois resultados possíveis no seu código.

Aqui está a sintaxe básica de uma declaração if-else if-else:

if (condition1) {
  // Código a ser executado quando condition1 for true
} else if (condition2) {
  // Código a ser executado quando condition1 for false e condition2 for true
} else {
  // Código a ser executado quando condition1 e condition2 forem false
}

Desafio

Iniciante
Crie um programa que determina a nota de um aluno com base na pontuação do exame:

Declare uma variável inteira chamada examScore com o valor de 78
Use uma estrutura if, else if e else para determinar a nota de letra:
Se a pontuação for 90 ou superior, a nota é 'A'
Se a pontuação for 80-89, a nota é 'B'
Se a pontuação for 70-79, a nota é 'C'
Se a pontuação for 60-69, a nota é 'D'
Se a pontuação for abaixo de 60, a nota é 'F'
Imprima o resultado com o seguinte formato:
Exam score: 78
Grade: C
Sua saída deve corresponder exatamente a este formato, mas com a nota apropriada para a pontuação.
*/
void main() {
  // Declare the examScore variable here
  int examScore = 78;
  
  // Write your if-else if-else structure here

  
  // Print the result
  print("Exam score: $examScore");
  print("Grade: $grade");
}