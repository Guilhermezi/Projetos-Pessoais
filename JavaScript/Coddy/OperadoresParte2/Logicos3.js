/*
Ao trabalhar com expressões lógicas, às vezes precisamos simplificá-las ou reorganizá-las.

! (não) na frente de duas condições unidas por && (e), você pode dividi-lo em duas partes separadas. O && (e) torna-se || (ou), e cada parte recebe seu próprio ! (não):

!(A && B) é o mesmo que (!A) || (!B)

Por exemplo:

// Vamos verificar se um número NÃO está (entre 1 e 10)
let number = 15

// Estas duas expressões são equivalentes:
let result1 = !(number >= 1 && number <= 10)
let result2 = !(number >= 1) || !(number <= 10)

console.log(result1)  // True
console.log(result2)  // True
O oposto também é correto: !(A || B) é o mesmo que (!A) && (!B)

Por exemplo:

// Verificando se uma pessoa NÃO é (estudante ou empregada)
let is_student = false
let is_employed = false
// Estas duas expressões são equivalentes:
let result1 = !(is_student || is_employed)
let result2 = !is_student && !is_employed

console.log(result1)  // Verdadeiro
console.log(result2)  // Verdadeiro
challenge icon
Desafio

Iniciante
Você está ajudando um pet shop a criar um sistema para determinar se eles podem vender um animal de estimação para um cliente.

inicialize as seguintes variáveis:

has_license com o valor true
has_space com o valor false
has_experience com o valor true
Escreva as seguintes expressões lógicas para determinar se:

can_sell_regular_pet: O cliente precisa de uma licença OU experiência, E deve ter espaço
can_sell_exotic_pet: O cliente precisa de AMBOS, uma licença E experiência, E deve ter espaço
cannot_sell_any_pet: O cliente NÃO possui licença E NÃO possui experiência, OU NÃO possui espaço
*/
// Initialize variables
let has_license = true
let has_space = false
let has_experience = true

// Calculate conditions

// 1. Precisa agrupar (Licença OU Experiência) antes de verificar o espaço
let can_sell_regular_pet = (has_license || has_experience) && has_space

let can_sell_exotic_pet = has_license && has_experience && has_space

// 3. Precisa agrupar a falta de licença E experiência OU a falta de espaço
let cannot_sell_any_pet = (!has_license && !has_experience) || !has_space

// Don't delete the lines below
console.log("Can sell regular pet:", can_sell_regular_pet)
console.log("Can sell exotic pet:", can_sell_exotic_pet)
console.log("Cannot sell any pet:", cannot_sell_any_pet)
