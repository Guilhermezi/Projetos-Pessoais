/* Welcome! React is a JavaScript library for creating web apps called single-page applications.

Single-page applications load as a single web page and dynamically update parts as you interact with it.*/

/* React simplifies the development of web apps by allowing us to break code into reusable components.

In a music app, the song display cards can be a reusable component for each song in the playlist, making it easy to showcase a large number.*/

/* You can picture those components as reusable blocks of code like bricks that you can use to build your application.

Let's look at a simple example, which returns Welcome to React. */
function Welcome() {
  return "Welcome to React";
}
// A component in React is just a function that returns something you want to show on the screen, like the message Hello, world.
function Welcome() {
  return "Hello, world";
}

/* In React, we usually create components using the modern ES6 syntax for creating functions.

However, we can use any way of creating a function. */
const WelcomeToTheNewWorld = () => {
 return "Hello, new world";
};

function WelcomeToTheOldWorld() {
 return "Hello, old world";
}

/* From now on, we'll use the ES6 syntax for writing components. We’ll stick with the newer one because it’s shorter and more modern.

If you see the old style somewhere, it’s still perfectly fine to use. */
const Welcome = () => {
  return "Hello, world";
};

/* Think of a component like a recipe: it tells React what to "cook" (or display), and you can reuse that recipe whenever you need it.

Whatever we return will be displayed once the component is rendered. */
const Welcome = () => {
  return "I'll be displayed";
};

/* Another way to think about a component is as custom HTML tags with superpowers.

The function's name defines the component, allowing you to reuse it just like an HTML tag but with added functionality and flexibility. */
const myComponent = () => {
  return "I'm a component";
};

/* Typically components start with an uppercase letter so that we can tell them apart from regular HTML tags.

Unlike normal JavaScript functions, React components are capitalized. */
const MyComponent = () => {
  return "I'm a component";
};

/* In React, a component doesn’t just return plain text. It can return HTML, too.

We can create a component that returns an HTML heading with a certain text. */
const Welcome = () => {
  return <h1>Welcome to React</h1>;
};

/* What we see here is JSX, which looks like HTML but isn’t. JSX is a special syntax that React uses to write HTML-like code inside JavaScript.

Construct an h1 tag as you would in plain HTML. */

/* Despite JSX not being real HTML, JSX looks and feels like HTML. It works similarly, so if you know HTML, JSX will be familiar to you.

React converts JSX into real HTML, so your browser can understand and display it just like normal HTML. */