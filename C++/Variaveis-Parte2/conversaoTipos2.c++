/*
Em C++, podemos converter números em strings e vice-versa. Para converter um valor em string, podemos usar a função std::to_string():

int number = 789;
bool isValid = true;
string text1 = to_string(number);  // becomes "789"
string text2 = isValid ? "true" : "false";  // becomes "true"
Quando você converte um double para uma string usando to_string(), por padrão ele mostrará 6 casas decimais, mesmo se o número original não tiver tantas casas decimais.

Por exemplo:

double n1 = 789.0;
string text1 = to_string(n1);
// becomes "789.000000"

double n2 = 789.5;
string text2 = to_string(n2);
// becomes "789.500000"

double n3 = 789.123;
string text3 = to_string(n3);
// becomes "789.123000"

Para converter uma string para um tipo diferente, temos várias opções:

String to Integer:

string numberText = "123";
int number = stoi(numberText);  // becomes 123

String to Double:

string decimalText = "45.67";
double decimal = stod(decimalText);  // becomes 45.67

Nota: Ao converter strings para números, se a string contiver caracteres inválidos, essas funções lançarão um erro:

string invalidNumber = "abc";
int number = stoi(invalidNumber);  // This will throw an
*/