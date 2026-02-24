/*
Declaração de Tipo

Em C++, uma vez que uma variável é declarada com um certo tipo, ela só pode conter valores desse tipo. Por exemplo, uma variável int só pode conter valores inteiros, e uma variável std::string só pode conter texto.

Por exemplo:

int age = 25;          // Can only hold whole numbers
string str = "abc";  // Can only hold text
Isso causaria erros:

age = "defg";  // Error: can't put text in an int variable
str = 25;      // Error: can't put a number in a string variable
Estes são válidos:

age = 26;        // OK: assigning a new integer
str = "Jane";    // OK: assigning a new text string

Desafio

Iniciante
Declare as seguintes variáveis com seus tipos e valores correspondentes:

Uma variável int chamada count com o valor 10.
Uma variável double chamada total com o valor 150.75.
Uma variável char chamada grade com o valor 'A'.
Uma variável bool chamada isActive com o valor false.
Uma variável string chamada userName com o valor "Bob123".
Após declarar essas variáveis, exiba os valores das variáveis no console no seguinte formato:

Count: [value of count]
Total: [value of total]
Grade: [value of grade]
Active: [value of isActive]
User Name: [value of userName]
*/

#include <iostream>
#include <string>
using namespace std;

int main() {
    // Declaring variables
    int count = 10;
    double total = 150.75;
    char grade = 'A';
    bool isActive = false;
    std::string userName = "Bob123";

    // Printing values
    cout << "Count: " << count << endl;
    cout << "Total: " << total << endl;
    cout << "Grade: " << grade << endl;
    cout << "Active: " << isActive << endl;
    cout << "User Name: " << userName << endl;

    return 0;
}