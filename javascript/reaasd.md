# Topic 2: Variables in JavaScript

---

## 📋 Description

Practice with let (reassign), const (reassign error), const with objects (modify properties), undefined, and naming rules.

---

## 📁 Folder Structure

02-variables/
├── index.html
├── css/
│   └── style.css
├── js/
│   └── main.js
└── README.md

---

## 📊 Exercises & Results

**Exercise 1 (let and reassign):**

let edad = 25;
console.log(edad);
edad = 30;
console.log(edad);

Output: 25, 30

**Exercise 2 (const error):**

const nacimiento = 1991;
console.log(nacimiento);
// nacimiento = 1992; // Error

Output: 1991

**Exercise 3 (const with object):**

const persona = { nombre: "Luis" };
console.log(persona.nombre);
persona.nombre = "Ana";
console.log(persona.nombre);

Output: Luis, Ana

---

## 🧪 Key Learnings

- let allows reassignment.
- const does NOT allow reassignment.
- const with objects allows modifying properties.
- Variable without value is undefined.
- Strings need quotes: "rojo".
- Comments: // and /* */.

---

## ✅ Test Answers

1. let allows reassign; const does not.
2. Error: Assignment to constant variable.
3. let color = "rojo";
4. Yes, because const protects the variable, not the object content.
5. undefined

---

## 👨‍💻 Author

NTRJ1991 – Full Stack Development (in training)

---

## 📅 Date

June 2026
