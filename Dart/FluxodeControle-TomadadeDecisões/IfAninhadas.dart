/*
Instruções if aninhadas verificam condições dentro de outras condições, criando caminhos de decisão complexos. A condição interna só é avaliada quando a condição externa é verdadeira.

void main() {
  int age = 25;
  bool hasLicense = true;
  
  if (age >= 18) {
    print('You are an adult');
    
    if (hasLicense) {
      print('You can drive a car');
    }
  }
}
Saída:

You are an adult
You can drive a car

Desafio

Fácil
Crie um programa que determina a nota de um aluno com base na pontuação do exame e no registro de presença:

Declare uma variável inteira examScore com um valor de 78
Declare uma variável booleana hasGoodAttendance com um valor de true
Use instruções if aninhadas para determinar a nota do aluno de acordo com estas regras:
Se examScore for 90 ou acima, a nota é "A"
Se examScore estiver entre 80 e 89:
Se hasGoodAttendance for true, a nota é "B+"
Caso contrário, a nota é "B"
Se examScore estiver entre 70 e 79:
Se hasGoodAttendance for true, a nota é "C+"
Caso contrário, a nota é "C"
Se examScore for abaixo de 70, a nota é "F"
Imprima a nota final no formato exato: Student grade: X (onde X é a nota determinada)
*/
void main() {
  // Variáveis iniciais
  int examScore = 78;
  bool hasGoodAttendance = true;
  String grade = ""; // Inicializando a variável
  
  // Implementação dos if aninhados
  if (examScore >= 90) {
    grade = "A";
  } else if (examScore >= 80) {
    // Bloco aninhado para nota B
    if (hasGoodAttendance) {
      grade = "B+";
    } else {
      grade = "B";
    }
  } else if (examScore >= 70) {
    // Bloco aninhado para nota C
    if (hasGoodAttendance) {
      grade = "C+";
    } else {
      grade = "C";
    }
  } else {
    grade = "F";
  }
  
  // Impressão da nota final
  print("Student grade: " + grade);
}