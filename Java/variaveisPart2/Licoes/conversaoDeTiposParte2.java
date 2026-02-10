/*Também é possível converter números e booleanos para string e vice-versa. Para converter um valor para string, podemos usar a função String.valueOf():*/
int number1 = 789;
double number2 = 789;
boolean isValid = true;
String text1 = String.valueOf(number1); // torna-se "789"
String text2 = String.valueOf(number2); // torna-se "789.0"
String text3 = String.valueOf(isValid); // torna-se "true"

/*Converter uma string para um tipo diferente é um pouco mais complicado:

String to Integer:*/
String numberText = "123";
int number = Integer.parseInt(numberText);    // torna-se 123

//String to Double:
String decimalText = "45.67";
double decimal = Double.parseDouble(decimalText);    // torna-se 45.67

/*O parseBoolean converterá qualquer string insensível a maiúsculas e minúsculas que tenha o valor “true”. Por exemplo, True, tRue, TRUE se tornarão true

Tentar converter uma string para um tipo inválido resultará em um erro:*/
String invalidNumber = "abc";
int number = Integer.parseInt(invalidNumber); // Isso causará uma NumberFormatException