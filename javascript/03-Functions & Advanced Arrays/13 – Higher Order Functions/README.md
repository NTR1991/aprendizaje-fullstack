# 📘 Topic 13 – Higher Order Functions

## 📋 Description

Practice with higher order functions: functions that receive other functions as parameters (callbacks) and functions that return other functions. Learn to build custom versions of `map`, `filter`, and function factories.

---

## 🎯 Learning Objectives

- Understand what higher order functions are
- Write functions that receive callbacks
- Write functions that return functions
- Build custom `map` and `filter` implementations
- Use arrow functions as callbacks

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Custom map function**

   Create a function `miMap(array, callback)` that:
   - Receives an array and a callback function
   - Iterates over the array
   - Applies the callback to each element
   - Returns a new array with the transformed elements

   **Test:**
   ```javascript
   const numeros = [2, 4, 6];
   const dobles = miMap(numeros, num => num * 2);
   console.log(dobles); // [4, 8, 12]
   ```

---

### 🟡 Intermediate Level (1 exercise)

1. **Custom filter function**

   Create a function `miFilter(array, callback)` that:
   - Receives an array and a callback function
   - Iterates over the array
   - Keeps only elements where callback returns `true`
   - Returns a new array with the filtered elements

   **Test:**
   ```javascript
   const edades = [15, 22, 18, 30, 12];
   const mayores = miFilter(edades, edad => edad >= 18);
   console.log(mayores); // [22, 18, 30]
   ```

---

### 🔴 Difficult Level (1 exercise)

1. **Function factory – multiplier**

   Create a function `crearMultiplicador(multiplicador)` that:
   - Receives a number as argument
   - Returns a new function
   - The returned function receives a number and multiplies it by the original multiplier

   **Test:**
   ```javascript
   const duplicar = crearMultiplicador(2);
   const triplicar = crearMultiplicador(3);
   console.log(duplicar(10)); // 20
   console.log(triplicar(10)); // 30
   ```

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What is a Higher Order Function? | B |
| 2 | Example of function that receives a callback | B |
| 3 | Example of function that returns a function | A |
| 4 | In `miMap`, what does the callback do? | B |
| 5 | In `miFilter`, what does the callback do? | B |
| 6 | What does `miMap` return? | A |
| 7 | What does `miFilter` return? | B |
| 8 | What is a callback? | B |
| 9 | In `crearMultiplicador`, what does the inner function remember? | B |
| 10 | Output of `crearMultiplicador(2)(5)`? | B |

---

## ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What is a Higher Order Function? | B | B | ✅ |
| 2 | Example of function that receives a callback | B | B | ✅ |
| 3 | Example of function that returns a function | A | A | ✅ |
| 4 | In `miMap`, what does the callback do? | B | B | ✅ |
| 5 | In `miFilter`, what does the callback do? | B | B | ✅ |
| 6 | What does `miMap` return? | A | A | ✅ |
| 7 | What does `miFilter` return? | B | B | ✅ |
| 8 | What is a callback? | B | B | ✅ |
| 9 | In `crearMultiplicador`, what does the inner function remember? | B | B | ✅ |
| 10 | Output of `crearMultiplicador(2)(5)`? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)** – Higher order functions, callbacks
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure

```
13-higher-order-functions/
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
