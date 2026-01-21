/* We already saw that let variables, as opposed to const can change and update the values they store.

Use the = sign to change the value in status from "Watching Netflix" to "Relaxing at the beach".*/
let currentStatus = "Watching Netflix";
currentStatus = "Relaxing at the beach";
console.log(currentStatus);

/* We can update let variables as often as we want.

Try it yourself: change the value of currentStatus to "Reading". */
let currentStatus = "Watching Netflix";
currentStatus = "Relaxing at the Beach";
console.log(currentStatus);

currentStatus = "Reading";
console.log(currentStatus);

/* We can also give variables the values of other variables by setting one variable to the other.

Give the currentStatus variable the value of defaultStatus. */
let defaultStatus = "Hi there!";
let currentStatus = "Playing football";

currentStatus = defaultStatus;
console.log(currentStatus);

/* When we update a variable, it forgets its previous value.

Display the currentStatus variable when it's set to "Playing football" and when it's set to "Walking the dog". */
let currentStatus = "Playing football";
console.log(currentStatus);

currentStatus = "Walking the dog";
console.log(currentStatus);


/* We can add string values together with a + sign.

Add the values "Followers:" and "55" together.: */
"Followers:" + "55";

/* We call adding together string values an expression because it creates a single string value.

Add the expression between the parentheses of console.log().*/
console.log("Followers:" + "55");


/* When expressions contain variables, they use the values in the variables.

Create an expression that adds the value "Followers:" and the variable followers together.*/
const followers = "55";
console.log("Followers:" + followers);

/* We can use console.log() to see the results of expressions.

Add a console.log() instruction around the expression.*/
const numberOfFollowers = "55";
console.log("Followers:" + numberOfFollowers);

/* Since expressions become values, we can give them to variables just like values.

Store the expression "Posts:" + "13" in the variable label and display it in the console.*/
const label = "Posts:" + "13";
console.log(label);

// There are other kinds of values, too. Like numbers, which have no double quotes around them.
const numberOfLikes = 5;

/* Numbers make it easier to keep track of numeric values. For example, the number of likes on a Facebook post.

Create a numberOfLikes variable and set it to 5.*/
const numberOfLikes = 5;
console.log(numberOfLikes);

/* We can create expressions with numbers, too. We add numbers together with the + sign and subtract them from each other with the - sign.

Display 6 in the console by setting numberOfLikes to 5 + 1.*/
const numberOfLikes = 5 + 1;
console.log(numberOfLikes);

/* We use the * sign to multiply numbers and the / sign to divide numbers.

Turn 0.5 into its percent value by multiplying it by 100.*/
const percent = 0.5 * 100;
console.log(percent);

/* When we store numbers in variables, we can use the variables for calculations, too.

Add 1 to the numberOfSteps variable before displaying it in the console.*/
const numberOfSteps = 70;
console.log("You're on step:");
console.log(numberOfSteps + 1);

/* Since expressions become values, we can store calculation results in variables.

Store the calculation result in the total variable.*/

const private = 3;
const public = 10;
const total = private + public;
console.log("Total posts: " + total);