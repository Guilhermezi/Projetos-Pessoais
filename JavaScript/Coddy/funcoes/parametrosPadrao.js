/*
Na programação, é comum ter funções onde alguns parâmetros possuem valores padrão. Estes são valores que o parâmetro assumirá se nenhum argumento for fornecido durante a chamada da função. Parâmetros padrão tornam as funções mais flexíveis e fáceis de usar.

Para definir uma função com parâmetros padrão em JavaScript, você atribui um valor ao parâmetro na definição da função usando o operador =. Aqui está a sintaxe básica:

function functionName(param1, param2 = defaultValue2, param3 = defaultValue3) {
	// Function body
	// ...
}
Nesta sintaxe, param2 e param3 têm valores padrão. Se a função for chamada sem fornecer argumentos para esses parâmetros, eles assumirão automaticamente seus valores padrão.

Aqui está um exemplo:

function greet(name, greeting = "Hello") {
	console.log(`${greeting}, ${name}!`);
}

greet("Alice"); // Saída: Hello, Alice!
greet("Bob", "Hi"); // Saída: Hi, Bob!
Neste exemplo, a função greet tem dois parâmetros: name e greeting. O parâmetro greeting tem um valor padrão de "Hello". Quando a função é chamada com apenas um argumento, greeting assume seu valor padrão. Quando chamada com dois argumentos, o segundo argumento substitui o valor padrão.

Parâmetros padrão podem ser qualquer expressão válida, incluindo números, strings, booleanos, arrays, objetos ou até mesmo os resultados de outras chamadas de função.

*/
