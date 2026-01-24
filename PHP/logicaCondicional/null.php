<!-- O operador de coalescência nula (??) fornece uma maneira conveniente de usar um valor padrão quando uma variável é null ou não existe. Isso é especialmente útil ao trabalhar com dados que podem estar ausentes.

A sintaxe coloca ?? entre a variável a ser verificada e o valor de fallback: -->
<?php
$username = null;

$displayName = $username ?? "Guest";
echo $displayName; // Guest
?>
<!-- O PHP verifica se $username é null. Como é, o operador retorna "Guest" em vez disso. Se $username tivesse um valor, esse valor seria usado. -->
<?php
$username = "Alice";

$displayName = $username ?? "Guest";
echo $displayName; // Alice
?>
<!-- O operador de coalescência nula também funciona quando uma variável não foi definida de forma alguma, sem acionar um erro: -->
<?php
// $color is not defined anywhere
$selectedColor = $color ?? "blue";
echo $selectedColor; // blue
?>
<!-- Isso torna ?? mais limpo do que usar um operador ternário com verificações isset(). É perfeito para fornecer padrões sensatos quando os dados podem estar ausentes. -->

<!-- 
Desafio

Fácil
Leia dois valores da entrada: uma string nickname e uma string theme.

Use o operador de coalescência nula para lidar com valores potencialmente ausentes:

Crie uma variável $userNickname que é definida como null. Em seguida, use o operador de coalescência nula para atribuir a $displayNickname o valor de $userNickname se ele existir e não for null, caso contrário, use o valor de entrada nickname.
Crie uma variável $userTheme e atribua a ela o valor de entrada theme. Use o operador de coalescência nula para atribuir a $selectedTheme o valor de $userTheme se ele existir e não for null, caso contrário, use dark como padrão.
 -->
<?php
// Read input
$nickname = trim(fgets(STDIN));
$theme = trim(fgets(STDIN));

// TODO: Write your code below
// 1. Create $userNickname set to null, then use ?? to assign $displayNickname
$displayNickname = $userNickname ?? $nickname; 
// 2. Create $userTheme with the theme input, then use ?? to assign $selectedTheme (default: 'dark')
$userTheme = $theme;
$selectedTheme = $userTheme ?? "dark";
// 3. Use ?? with undefined $language to assign $displayLanguage (default: 'English')
$displayLanguage = $language ?? "English";

// Output the results (each on a new line)
echo $displayNickname . "\n";
echo $selectedTheme . "\n";
echo $displayLanguage . "\n";
?>