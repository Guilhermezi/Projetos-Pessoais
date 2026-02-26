/*
Em C++, comparar strings pode ser feito de várias maneiras. Como std::string é uma classe, ela possui operadores sobrecarregados que tornam a comparação de strings intuitiva e direta.

A maneira mais comum de comparar strings é usando os operadores de comparação (==, !=, <, >, <=, >=):

string str1 = "hello";
string str2 = "hello";
string str3 = "Hello";

bool result1 = (str1 == str2);  // true
bool result2 = (str1 == str3);  // false (case-sensitive)
bool result3 = (str1 != str3);  // true
Você também pode usar o método compare(), que retorna 0 se as strings forem iguais, <0 se a primeira string for lexicograficamente menor, e >0 se for maior:

string str1 = "a";
string str2 = "b";
string str2 = "c";

cout << str2.compare(str1) << endl; 
// Positive (b comes after a)

cout << str2.compare(str3) << endl;
// Negative (b comes before c)

cout << str2.compare(str2) << endl;
// 0 (equal strings)
*/