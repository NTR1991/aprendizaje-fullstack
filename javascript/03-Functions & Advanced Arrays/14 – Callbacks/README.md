# 📘 Topic 14 – Callbacks in JavaScript

## 📋 Description

Practice with callback functions: functions passed as arguments to other functions. Learn to use callbacks with arrays, asynchronous operations, and error handling patterns.

---

## 🎯 Learning Objectives

- Understand what callbacks are and why they are used
- Write functions that receive callbacks as parameters
- Use callbacks with arrays (`.forEach`)
- Implement error-first callback patterns
- Simulate asynchronous operations with `setTimeout`

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Greeting with Callback**

   Create a function `saludar(nombre, callback)` that:
   - Receives a name and a callback function
   - Logs `"Hola, [nombre]"` to the console
   - Then executes the callback

   **Test:**
   ```javascript
   saludar("Carlos", function() {
       console.log("¡Bienvenido!");
   });
   ```
   **Output:**
   ```
   Hola, Carlos
   ¡Bienvenido!
   ```

---

### 🟡 Intermediate Level (1 exercise)

1. **Process Array with Callback**

   Create a function `procesarArray(array, callback)` that:
   - Receives an array and a callback function
   - Iterates over the array using `.forEach()`
   - Executes the callback for each element

   **Test:**
   ```javascript
   procesarArray([1, 2, 3, 4], function(num) {
       console.log(num * 2);
   });
   ```
   **Output:**
   ```
   2
   4
   6
   8
   ```

---

### 🔴 Difficult Level (1 exercise)

1. **Safe Division with Error-First Callback**

   Create a function `operacionSegura(a, b, callback)` that:
   - Receives two numbers and a callback
   - If `b === 0`, calls the callback with an error
   - If `b !== 0`, calls the callback with `null` as error and the result

   **Test:**
   ```javascript
   operacionSegura(10, 2, function(error, resultado) {
       if (error) {
           console.log("Error:", error);
       } else {
           console.log("Resultado:", resultado);
       }
   });
   ```
   **Output:**
   ```
   Resultado: 5
   ```

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What is a callback? | B |
| 2 | In `saludar`, what does the callback do? | C |
| 3 | In `procesarArray`, how many times does the callback run? | B |
| 4 | In `operacionSegura`, what does `b === 0` cause? | B |
| 5 | In `operacionSegura`, what does `callback(null, a / b)` do? | A |
| 6 | In `procesarArray`, what method is used to iterate? | A |
| 7 | What is an error-first callback? | B |
| 8 | In an error-first callback, what is the first parameter? | A |
| 9 | In an error-first callback, what is the second parameter? | B |
| 10 | Why do we use callbacks? | C |

---

## ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What is a callback? | B | B | ✅ |
| 2 | In `saludar`, what does the callback do? | C | C | ✅ |
| 3 | In `procesarArray`, how many times does the callback run? | B | B | ✅ |
| 4 | In `operacionSegura`, what does `b === 0` cause? | B | B | ✅ |
| 5 | In `operacionSegura`, what does `callback(null, a / b)` do? | A | A | ✅ |
| 6 | In `procesarArray`, what method is used to iterate? | A | A | ✅ |
| 7 | What is an error-first callback? | B | B | ✅ |
| 8 | In an error-first callback, what is the first parameter? | A | A | ✅ |
| 9 | In an error-first callback, what is the second parameter? | B | B | ✅ |
| 10 | Why do we use callbacks? | C | C | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)**
- **HTML5**
- **CSS3**

---

## 📂 Folder Structure

```
14-callbacks/
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
