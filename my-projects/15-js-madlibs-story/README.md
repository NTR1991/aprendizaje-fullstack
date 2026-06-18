# 📖 Mad Libs Story Generator

## 📋 Description

A JavaScript program that generates two different "Mad Libs" style stories using variables and reassignment. The stories are printed to the browser console.

---

## 🎯 Project Objective

Create a fun word-game style program that demonstrates variable reassignment and string concatenation by generating two distinct stories from the same template.

---

## 🛠️ Technologies Used

- **HTML5**
- **JavaScript** (variables, reassignment, string concatenation, `console.log`)

---

## 📁 Folder Structure

```
15-js-madlibs-story/
├── index.html
└── README.md
```

---

## 🧮 How It Works

1. **Variables are declared** with initial values (adjective, noun, verb, etc.)
2. **First story** is constructed using string concatenation
3. **First story** is printed to the console
4. **Variables are reassigned** with new values
5. **Second story** is constructed using the same format but different words
6. **Second story** is printed to the console

---

## 📊 Example Output (Console)

```
First story: Once upon a time, there was a(n) brave knight who loved to eat dragon. The knight lived in a castle and had red nostrils that blew fire when it was fight.

Second story: Once upon a time, there was a(n) clumsy wizard who loved to eat frog. The wizard lived in a swamp and had blue nostrils that blew fire when it was sleep.
```

---

## 💡 How It Works

### Step 1: Declare variables

```javascript
let adjective = "brave";
let noun = "knight";
let verb = "fight";
let food = "dragon";
let place = "castle";
let bodyPart = "nostrils";
let color = "red";
```

### Step 2: Build and print the first story

```javascript
console.log("First story: Once upon a time, there was a(n) " + adjective + " " + noun + " who loved to eat " + food + ". The " + noun + " lived in a " + place + " and had " + color + " " + bodyPart + " that blew fire when it was " + verb + ".");
```

### Step 3: Reassign variables

```javascript
adjective = "clumsy";
noun = "wizard";
verb = "sleep";
food = "frog";
place = "swamp";
bodyPart = "nostrils";
color = "blue";
```

### Step 4: Build and print the second story

```javascript
console.log("Second story: Once upon a time, there was a(n) " + adjective + " " + noun + " who loved to eat " + food + ". The " + noun + " lived in a " + place + " and had " + color + " " + bodyPart + " that blew fire when it was " + verb + ".");
```

---

## 📚 Key Concepts Applied

| Concept | Description |
| :--- | :--- |
| `let` variables | For values that will change |
| Variable reassignment | Changing values to create a new story |
| String concatenation with `+` | Combining text and variables |
| `console.log()` | Outputting to the console |

---

## 🧪 Key Difference: `let` vs `const` in this context

| Feature | `let` (used here) | `const` (alternative) |
| :--- | :--- | :--- |
| Reassignment | ✅ Allowed (key feature) | ❌ Not allowed |
| Use case | Dynamic content | Fixed content |
| Why chosen | Variables change for each story | Would not work for this exercise |

---

## 📚 Learning Objectives

- ✅ Declaring variables with `let`
- ✅ Reassigning `let` variables
- ✅ String concatenation using `+`
- ✅ Using `console.log()` for output
- ✅ Creating dynamic text with variables

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

May 2026

---

*Mad Libs story generator created as a personal JavaScript project*
