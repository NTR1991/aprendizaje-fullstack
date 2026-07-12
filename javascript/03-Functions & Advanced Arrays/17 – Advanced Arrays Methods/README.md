# 📘 Topic 17 – Advanced Arrays Methods

## 📋 Description

Practice with advanced array methods: `find`, `findIndex`, `some`, `every`, and `includes`. Learn to search, test conditions, and verify the existence of elements in arrays.

---

## 🎯 Learning Objectives

- Use `.find()` to locate the first element that matches a condition
- Use `.findIndex()` to find the position of the first matching element
- Use `.some()` to check if at least one element matches
- Use `.every()` to check if all elements match
- Use `.includes()` to check if a value exists in an array

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Find first match and check existence**

   **Part 1:**
   ```javascript
   const precios = [15, 25, 10, 40, 30, 20];
   // Find the first price greater than 25
   ```

   **Part 2:**
   ```javascript
   const colores = ["rojo", "verde", "azul", "amarillo"];
   // Check if "azul" exists
   ```

---

### 🟡 Intermediate Level (1 exercise)

1. **Test conditions with some and every**

   **Part 1:**
   ```javascript
   const edades = [15, 22, 18, 30, 12];
   // Check if there is anyone older than 25
   ```

   **Part 2:**
   ```javascript
   const precios = [15, 25, 10, 40, 30, 20];
   // Check if all prices are less than 50
   ```

---

### 🔴 Difficult Level (1 exercise)

1. **Find index and remove element**

   ```javascript
   const productos = [
       { nombre: "Laptop", precio: 1200 },
       { nombre: "Mouse", precio: 25 },
       { nombre: "Teclado", precio: 80 },
       { nombre: "Monitor", precio: 300 }
   ];
   // Find the index of the first product with price > 100
   // Remove it using .splice()
   ```

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | Method that returns the first element matching a condition | B |
| 2 | Method that returns `true` if at least one element matches | C |
| 3 | Method that returns `true` if all elements match | B |
| 4 | Method that returns the index of the first match | C |
| 5 | Method that checks if a value exists in an array | A |
| 6 | `find(num > 25)` on `[10, 20, 30, 40]` | C |
| 7 | `some(num > 35)` on `[10, 20, 30, 40]` | A |
| 8 | `every(num < 50)` on `[10, 20, 30, 40]` | A |
| 9 | Method to remove an element by index | C |
| 10 | `includes("verde")` on `["rojo", "verde", "azul"]` | A |

---

## ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | Method that returns the first element matching a condition | B | B | ✅ |
| 2 | Method that returns `true` if at least one element matches | C | C | ✅ |
| 3 | Method that returns `true` if all elements match | B | B | ✅ |
| 4 | Method that returns the index of the first match | C | C | ✅ |
| 5 | Method that checks if a value exists in an array | A | A | ✅ |
| 6 | `find(num > 25)` on `[10, 20, 30, 40]` | C | C | ✅ |
| 7 | `some(num > 35)` on `[10, 20, 30, 40]` | A | A | ✅ |
| 8 | `every(num < 50)` on `[10, 20, 30, 40]` | A | A | ✅ |
| 9 | Method to remove an element by index | C | C | ✅ |
| 10 | `includes("verde")` on `["rojo", "verde", "azul"]` | A | A | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)**
- **HTML5**
- **CSS3**

---

## 📂 Folder Structure

```
17-advanced-arrays/
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