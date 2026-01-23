/* We learned how to create and store values, but how do we compare them?

We need to compare numbers in situations like checking a user's entered PIN matches their saved PIN.*/
const enteredPin = 5448;
const expectedPin = 5440;

//To compare if two numbers are the same, we use the equality operator, ===.
5 === 5

//When comparing, there are only two results: true or false.

//When we compare the same numbers with the equality operator, the result is true.
console.log(10 === 10); // true

/* When we compare two different numbers with the equality operator, the result is false.

Pick the option that compares 9 to 10.*/
console.log(9 === 10); // false


//To check if a number isn't equal to another number, we use the inequality operator, !==.
console.log(9 !== 10); // true

/* We can store the result of a comparison with the inequality operator in a variable.

Save the comparison between 1 and 2 into the variable result. */
const result = 1 !== 2;
console.log(result);

//Variables can store the result of equality comparisons, too.
const result = 1 === 2;
console.log(result);

/* We can compare values with variables and variables with other variables.

Type === to compare the contents of the variables. */
const one = 1;
const two = 2;
console.log(one === two);
console.log(one !== two);
// Console output
false
true

