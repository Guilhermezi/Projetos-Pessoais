/*
Você está ajudando uma autoescola a criar um sistema para determinar se uma pessoa pode dirigir diferentes tipos de veículos.

Inicialize as seguintes variáveis:

has_license com o valor true
has_insurance com o valor false
has_experience com o valor true
Escreva as seguintes expressões lógicas para determinar se:

can_drive_car: A pessoa precisa OU (carteira E seguro) OU (carteira E experiência)
can_drive_motorcycle: A pessoa precisa de TODOS os três: carteira, seguro E experiência
cannot_drive_any: A pessoa NÃO tem carteira OU (NÃO tem seguro E NÃO tem experiência)
*/
// Initialize variables
let has_license = true
let has_insurance = false
let has_experience = true

// Calculate conditions
// A pessoa precisa de (carteira E seguro) OU (carteira E experiência)
let can_drive_car = (has_license && has_insurance) || (has_license && has_experience)

// A pessoa precisa de TODOS os três
let can_drive_motorcycle = has_license && has_insurance && has_experience

// A pessoa NÃO tem carteira OU (NÃO tem seguro E NÃO tem experiência)
let cannot_drive_any = !has_license || (!has_insurance && !has_experience)

// Don't delete the lines below
console.log("Can drive car:", can_drive_car)            // true
console.log("Can drive motorcycle:", can_drive_motorcycle) // false
console.log("Cannot drive any:", cannot_drive_any)       // false
