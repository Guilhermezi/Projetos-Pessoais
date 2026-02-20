<?php
// TODO: Write your code below to display the poem using four separate echo statements
// Remember to use \n to create new lines between each line of the poem
echo "hello";
echo "world";
# Saída: helloworld

#Se quisermos ter um espaço entre eles, precisamos adicionar um espaço antes do world ou após o hello:
echo "hello";
echo " world";
#Isso também produzirá a mesma saída:
echo "hello ";
echo "world";

#Agora, se quisermos imprimi-los em linhas diferentes, precisamos usar este símbolo: \n. Por exemplo:
echo "hello\n";
echo "world";
#ou poderíamos fazer assim: 
echo "hello";
echo "\n";
echo "world";


/**Crie um script PHP que exibe um poema com formatação de linha adequada usando o caractere de nova linha.

Escreva código que exibe o seguinte poema exatamente como mostrado, com cada linha aparecendo em uma linha separada:
Assim: 
Roses are red
Violets are blue
PHP is awesome
And so are you!
**/

echo "<h1>Roses are red</h1>\n";
echo "Violets are blue\n";
echo "PHP is awesome\n";
echo "And so are you!";

?>