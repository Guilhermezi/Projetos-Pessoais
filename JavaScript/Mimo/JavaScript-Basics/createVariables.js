// English beacause use the app mimo to learn coding in JavaScript
/*Welcome to JavaScript, a versatile coding language.

We'll take an in depth look into Javascript, a programming language that powers dynamic websites and apps.

Dynamic websites need to remember information to display or change. For that, JavaScript has variables.

Like moving boxes, variables have content and names that tell us what's inside.*/

// We use let, and const to create variables. We'll use both for now and cover the difference between them later.
let 
const


// Every variable needs a name. Variable names need to be single words and, therefore, have no spaces.
let city

// To create variable names with multiple words, we use camel case. We start with a lowercase letter and capitalize the additional words.
let homeCity
 
// To help us understand what's inside a variable we pick descriptive names.
const windyCity

// What's wrong with this variable name?
let high Score 
// It contains a space

// Why do we give variables descriptive names like city or country instead of x or y?
// To help us understand what's inside them

// What words can we use to declare variables?
let and const

// Variable names can contain numbers, too. Adding numbers is useful with multiple similar variables. Let's create the variable car1 here.
const car1

// After creating and naming a variable, we use the = sign to store a value inside it. Like const city = "Chicago".
const city = "Chicago"

// To finish creating a variable, we put a semicolon, ;, at the end of the line.
const city = "Chicago";
// The values we've been storing like "Chicago" are strings. Strings are words in double quotes.
// Strings can contain all sorts of letters and symbols, including spaces. For example, "Winter is coming.".

// We already know we can declare variables with let and const. Let's find out the difference between them!

// We use const to declare variables whose values are not supposed to change. const is short for "constant".
const norwayCapital = "Oslo";

// If we try to update a value stored in a const variable. We will get an error.
const age = 90;
age = 91;
TypeError: Assignment to constant variable.
// This error tells us we can't change the value of a const variable.

// However, we can update let variables with the assign = operator.
let age = 90;
age = 91;

/*To make it obvious that a variable is of type const and shouldn't change, we can optionally name it with uppercase letters.

Create an uppercase birthday constant. */
const BIRTHDAY = "25/02/1882";

/*We cannot use camelCase if we use this uppercase standard, so we use an uppercase snake_case to name variables with more than one word.

Create an uppercase "speed of light" const using snake_case.*/
const SPEED_OF_LIGHT = "3*10⁸ m/s";

// Both let and const are useful variables and we could use them interchangeably. However, we should try to use const as default.

/*Lines of code are instructions for the computer to follow.

When we run code, we tell the computer to follow the instructions we put together.*/

/*The order of the instructions matters because the computer follows the instructions line by line.

Create step1 first, step2 second, and step3 third. */

const step1 = "Collect pants";

const step2 = "?";

const step3 = "Profit";


// With the special instruction console.log(), we tell the computer to display a value in an area called the console.
console.log("Hello, World!");

// We can use the console.log() instruction as often as we want. The computer displays every value on a line in the console.
console.log("3, 2, 1");
console.log("GO!");

// We can use console.log() to display variables like greeting, too.
const greeting = "Hello, World!";
console.log(greeting);

// When we display variables in the console, their values appear instead of their names. If we log name here, it'll show its value.
const name = "Daenerys";
console.log(name);
