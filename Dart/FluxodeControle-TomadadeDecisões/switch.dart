/*
A instrução switch no Dart oferece uma alternativa mais limpa a múltiplas instruções if-else quando se verifica uma variável contra diferentes valores.

void main() {
  String grade = 'B';
  
  switch (grade) {
    case 'A':
      print('Excellent performance!');
      break;
    case 'B':
      print('Good performance!');
      break;
    case 'C':
      print('Average performance.');
      break;
    case 'D':
      print('Below average performance.');
      break;
    default:
      print('Invalid grade.');
      break;
  }
}
Quando executado, produz: Good performance!


Desafio

Fácil
Crie um programa que determina a nota de um aluno com base na pontuação do exame usando uma switch instrução:

Declare uma variável inteira chamada examScore com um valor de 85
Crie uma variável string chamada grade para armazenar a letra da nota
Use uma switch instrução com as seguintes regras:
Se examScore estiver entre 90 e 100 (inclusivo), defina grade para "A"
Se examScore estiver entre 80 e 89 (inclusivo), defina grade para "B"
Se examScore estiver entre 70 e 79 (inclusivo), defina grade para "C"
Se examScore estiver entre 60 e 69 (inclusivo), defina grade para "D"
Para qualquer outra pontuação, defina grade para "F"
Imprima o resultado neste formato exato: Score: 85, Grade: B
Nota: Você precisará usar divisão inteira para converter a pontuação para um intervalo que funcione com switch.
*/
void main() {
  // Declare the examScore variable here
  int examScore = 85;
  
  // Declare the grade variable here
  String grade;
  
  // Use a switch statement to determine the grade
  // A divisão inteira (examScore ~/ 10) simplifica os intervalos
  switch (examScore ~/ 10) {
    case 10:
    case 9:
      grade = "A";
      break;
    case 8:
      grade = "B";
      break;
    case 7:
      grade = "C";
      break;
    case 6:
      grade = "D";
      break;
    default:
      grade = "F";
      break;
  }
  
  // Print the result
  print("Score: $examScore, Grade: $grade");
}
