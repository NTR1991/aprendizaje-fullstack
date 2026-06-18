# 2️⃣ Variables in JavaScript

## 📋 Description

Practice with `let` (reassign), `const` (reassign error), `const` with objects (modify properties), `undefined`, and naming rules.

---

## 📂 Folder Structure

```
02-variables/
├── index.html
├── css/
│   └── style.css
├── js/
│   └── main.js
└── README.md
```

---

## 📊 Exercises & Results

| Exercise | Code | Output / Effect |
| :--- | :--- | :--- |
| 1: `let` and reassign | `let edad = 25;`<br>`console.log(edad);`<br>`edad = 30;`<br>`console.log(edad);` | `25`<br>`30` |
| 2: `const` error | `const nacimiento = 1991;`<br>`console.log(nacimiento);`<br>`// nacimiento = 1992; // Error` | `1991`<br>(Error if uncommented) |
| 3: `const` with object | `const persona = { nombre: "Luis" };`<br>`console.log(persona.nombre);`<br>`persona.nombre = "Ana";`<br>`console.log(persona.nombre);` | `Luis`<br>`Ana` |

---

## 🧪 Key Learnings

- `let` allows reassignment.
- `const` does **NOT** allow reassignment.
- `const` with objects allows modifying properties.
- Variable without value is `undefined`.
- Strings need quotes: `"rojo"`.
- Comments: `//` (single-line) and `/* */` (multi-line).

---

## ✅ Self-Assessment Test (Answers)

| Question | Answer |
| :--- | :--- |
| 1. Difference between `let` and `const`? | `let` allows reassign; `const` does not. |
| 2. What error occurs when reassigning a `const`? | `TypeError: Assignment to constant variable` |
| 3. Declare a variable `color` with value `"rojo"` using `let`. | `let color = "rojo";` |
| 4. Can you modify a property of a `const` object? | Yes, because `const` protects the variable, not the object content. |
| 5. What is the value of a variable declared without initialization? | `undefined` |

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
