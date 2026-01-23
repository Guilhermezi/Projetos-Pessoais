/* There's a special value that's neither a string nor a number: true.

There are no quotes around it, and it's not a numeric value.*/

/* true is great for situations like checking if a switch is on or if a feature is enabled.

Display true in the console. */
console.log("Allow updates");
console.log(true);

/*We can store true in a variable just like a string or a number.

Store true in a variable and display it in the console.*/
const correct = true;
console.log(correct);

// false is another special value and the opposite of true. We can use it like true.

// Save the value false in the variable status and display status in the console.
console.log("Device charged");
const status = false;
console.log(status);


/* A ! sign in front of true makes the expression result in false. If something is not true, it has to be false.

The ! sign is the negation operator. It turns values into their opposite. */

/* When we change a value to its opposite with !, we negate it.

Put a ! sign before true to change its value. */
console.log(!true);
// Console output
false

// The ! operator before false changes its value, too. If a value is not false, it has to be true.
console.log(!false);
//Console output
true

// We can use the ! operator with variables to negate the values they store.
const isMorning = true;
console.log(!isMorning);
// Console output
false

/* We can save a whole negation in another variable, too.

Create the variable isEvening and use ! to change isMorning to false. */
const isMorning = true;
const isEvening = !isMorning;
console.log(isEvening);
// Console output
false

