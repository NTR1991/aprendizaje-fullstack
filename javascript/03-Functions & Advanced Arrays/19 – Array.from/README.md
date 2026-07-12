# 📘 Topic 19 – Array.from

## 📋 Description

Practice with `Array.from`: creating arrays from strings, array-like objects, NodeLists, and using the map function to transform elements during creation.

---

## 🎯 Learning Objectives

- Create arrays from strings (`Array.from("texto")`)
- Create arrays from array-like objects using `{ length: N }`
- Convert NodeLists to arrays for using array methods
- Use the map function inside `Array.from`

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Convert String to Array**

   ```javascript
   const texto = "JavaScript";
   const letras = Array.from(texto);
   console.log(letras); // ["J", "a", "v", ...]
   ```

---

### 🟡 Intermediate Level (1 exercise)

1. **Generate and Transform Array**

   ```javascript
   const numeros = Array.from({ length: 10 }, (_, i) => (i + 1) * 3);
   console.log(numeros); // [3, 6, 9, ... 30]
   ```

---

### 🔴 Difficult Level (1 exercise)

1. **Convert NodeList to Array**

   ```javascript
   const nodos = document.querySelectorAll('li');
   const listaItems = Array.from(nodos);
   listaItems.forEach(item => console.log(item.textContent));
   ```

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | `Array.from("Hola")` | B |
| 2 | `Array.from({ length: 3 }, (_, i) => i)` | B |
| 3 | `Array.from({ length: 5 }, (_, i) => i + 1)` | B |
| 4 | What is a NodeList? | B |
| 5 | Why use `Array.from` with a NodeList? | A |
| 6 | `Array.from("JS")` | A |
| 7 | `Array.from({ length: 4 }, (_, i) => (i + 1) * 2)` | A |
| 8 | Method to convert NodeList to array | B |
| 9 | What does the second parameter of `Array.from` do? | B |
| 10 | `Array.from({ length: 0 })` | B |

---

## ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | `Array.from("Hola")` | B | B | ✅ |
| 2 | `Array.from({ length: 3 }, (_, i) => i)` | B | B | ✅ |
| 3 | `Array.from({ length: 5 }, (_, i) => i + 1)` | B | B | ✅ |
| 4 | What is a NodeList? | B | B | ✅ |
| 5 | Why use `Array.from` with a NodeList? | A | A | ✅ |
| 6 | `Array.from("JS")` | A | A | ✅ |
| 7 | `Array.from({ length: 4 }, (_, i) => (i + 1) * 2)` | A | A | ✅ |
| 8 | Method to convert NodeList to array | B | B | ✅ |
| 9 | What does the second parameter of `Array.from` do? | B | B | ✅ |
| 10 | `Array.from({ length: 0 })` | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)**
- **HTML5**
- **CSS3**

---

## 📂 Folder Structure

```
19-array-from/
├── css/
│   └── style.css
├── js/
│   └── main.js
├── index.html
└── README.md
```

---

## 👤 Author

*NTR1991 – Full Stack Developer in training | FP DAW Student*

## 📅 Date

July 2026