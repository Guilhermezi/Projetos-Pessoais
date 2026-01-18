/*Variáveis são contêineres que armazenam valores de dados. Elas são usadas para armazenar, manipular e exibir informações dentro de um programa.

Em resumo, uma variável é como uma unidade de memória que podemos acessar digitando o nome da variável. 

Cada variável tem um nome único e um valor que pode ser de diferentes tipos. Rust possui vários tipos de dados incorporados que definem o tipo de valor que uma variável pode armazenar.

Para inicializar uma variável, usamos o seguinte formato:*/

let variable_name: variable_type = value;

/*Em Rust, os números são tipicamente representados usando dois principais tipos de dados: i32 e f64.

i32 é usado para armazenar números inteiros sem ponto decimal. Por exemplo:*/

let age: i32 = 30;
let temperature: i32 = -5;
let count: i32 = 100;

// f64 é usado para armazenar números com ponto decimal. Por exemplo:

let price: f64 = 99.99;
let pi: f64 = 3.14159;
let fraction: f64 = 0.5;

/*Ao declarar variáveis em Rust, você precisa especificar o tipo da variável após o nome da variável, seguido de dois pontos. Isso é conhecido como declaração de tipo. Uma vez que uma variável é declarada com um certo tipo, ela só pode conter valores desse tipo.*/

fn main() {
    // Declare and initialize variables here
    let quantity: i32 = 5;
    let item_price: f64 = 24.99;
    
    // Output the values, Don't change the lines below
    println!("Quantity: {}", quantity);
    println!("Price: {}", item_price);
    
}

/* Um char é um único caractere (Por exemplo: 1, 6, %, b, p, ., T, etc.)

O tipo char é um tipo especial que consiste em um único caractere.

Para inicializar um valor char em uma variável, envolva-o com aspas simples:*/

let c1: char = 'h';

fn main() {
    // Type your code below
    let initial: char = 'C';
    
    // Don't change the line below
    println!("initial = '{}'", initial);--
}