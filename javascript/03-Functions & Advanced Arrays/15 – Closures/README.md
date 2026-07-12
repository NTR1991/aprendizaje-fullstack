# 📘 Topic 15 – Closures in JavaScript

## 📋 Description

Practice with closures: functions that remember the scope in which they were created. Learn to create private variables, function factories, and closures in real-world scenarios.

---

## 🎯 Learning Objectives

- Understand what a closure is and how it works
- Create functions that remember their scope
- Use closures to create private variables
- Implement function factories with closures
- Apply closures in real-world patterns (bank accounts, counters, etc.)

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Greeting Factory**

   Create a function `crearSaludo(saludo)` that:
   - Receives a greeting string (e.g., `"Hola"`)
   - Returns a function that receives a name and returns the full greeting

   **Test:**
   ```javascript
   const saludoHola = crearSaludo("Hola");
   console.log(saludoHola("Carlos")); // "Hola Carlos"
   ```

---

### 🟡 Intermediate Level (1 exercise)

1. **Counter Factory**

   Create a function `crearContador(inicio)` that:
   - Receives a starting number
   - Returns a function that increments the counter by 1 each time it is called

   **Test:**
   ```javascript
   const contador = crearContador(5);
   console.log(contador()); // 6
   console.log(contador()); // 7
   ```

---

### 🔴 Difficult Level (1 exercise)

1. **Bank Account with Private Balance**

   Create a function `crearBanco()` that:
   - Has a private `saldo` variable (starting at 0)
   - Returns an object with two methods:
     - `depositar(cantidad)` – adds money to the balance
     - `consultar()` – returns the current balance

   **Test:**
   ```javascript
   const miBanco = crearBanco();
   miBanco.depositar(100);
   miBanco.depositar(50);
   console.log(miBanco.consultar()); // 150
   console.log(miBanco.saldo); // undefined (private)
   ```

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What is a closure? | B |
| 2 | In `crearSaludo`, what does the inner function remember? | B |
| 3 | In `crearContador`, what does the inner function do? | B |
| 4 | In `crearBanco`, why can't you access `saldo` directly? | A |
| 5 | What does `crearContador(3)` return? | B |
| 6 | In `crearBanco`, what does `consultar()` return? | A |
| 7 | Third call to `contador()` starting at 5 | D |
| 8 | What does `crearBanco()` return? | C |
| 9 | What makes `saldo` private? | B |
| 10 | Do two banks share the same balance? | B |

---

## ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What is a closure? | B | B | ✅ |
| 2 | In `crearSaludo`, what does the inner function remember? | B | B | ✅ |
| 3 | In `crearContador`, what does the inner function do? | B | B | ✅ |
| 4 | In `crearBanco`, why can't you access `saldo` directly? | A | A | ✅ |
| 5 | What does `crearContador(3)` return? | B | B | ✅ |
| 6 | In `crearBanco`, what does `consultar()` return? | A | A | ✅ |
| 7 | Third call to `contador()` starting at 5 | D | D | ✅ |
| 8 | What does `crearBanco()` return? | C | C | ✅ |
| 9 | What makes `saldo` private? | B | B | ✅ |
| 10 | Do two banks share the same balance? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)**
- **HTML5**
- **CSS3**

---

## 📂 Folder Structure

```
15-closures/
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
