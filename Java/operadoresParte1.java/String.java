/*
Em Java, comparar strings é diferente de comparar números. Embora você possa usar <, >, ==, etc., para números, strings requerem métodos diferentes porque são objetos, não primitivos.

A maneira mais comum e correta de comparar se duas strings têm o mesmo conteúdo é usando o método equals():

String str1 = "hello";
String str2 = "hello";
String str3 = "Hello";

boolean result1 = str1.equals(str2);  // true
boolean result2 = str1.equals(str3);  // false (case-sensitive)
Usando equalsIgnoreCase() Se você quiser comparar strings sem considerar maiúsculas/minúsculas:

String str1 = "Hello";
String str2 = "hello";

boolean result = str1.equalsIgnoreCase(str2);  // true
Muitos iniciantes tentam usar == para comparar strings, mas isso geralmente está errado:

String str1 = "hello";
String str2 = "hello";

boolean result = (str1 == str2); 
Não compare strings com o sinal ==!


*/
