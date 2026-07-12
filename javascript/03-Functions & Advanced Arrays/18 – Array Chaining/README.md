# 📘 Topic 18 – Array Chaining

## 📋 Description

Practice with array chaining: combining multiple array methods in a single chain (`filter`, `map`, `reduce`, `sort`). Learn to perform complex data transformations efficiently and cleanly.

---

## 🎯 Learning Objectives

- Understand the concept of array chaining
- Chain `filter`, `map`, `reduce`, and `sort` methods
- Apply correct order of operations in chains
- Transform arrays with multiple steps in a single expression

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Filter + Map**

   ```javascript
   const precios = [15, 25, 10, 40, 30, 20];
   ```
   - Filter prices greater than 20
   - Apply a 10% discount (multiply by 0.9)
   - Show the new array

---

### 🟡 Intermediate Level (1 exercise)

1. **Filter + Map + Reduce**

   ```javascript
   const precios = [15, 25, 10, 40, 30, 20];
   ```
   - Filter prices greater than 20
   - Apply a 10% discount
   - Calculate the total of the discounted prices

---

### 🔴 Difficult Level (1 exercise)

1. **Filter + Map + Sort**

   ```javascript
   const productos = [
       { nombre: "Laptop", precio: 1200 },
       { nombre: "Mouse", precio: 25 },
       { nombre: "Teclado", precio: 80 },
       { nombre: "Monitor", precio: 300 }
   ];
   ```
   - Filter products with price > 50
   - Add a `precioDescuento` property (15% discount)
   - Sort by `precioDescuento` (ascending)

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What is Array Chaining? | B |
| 2 | Correct order to filter then transform | B |
| 3 | Method to get a single value at the end | C |
| 4 | `filter(num > 2).map(num * 2)` on `[1, 2, 3, 4, 5]` | A |
| 5 | Method to sort in a chain | C |
| 6 | `filter` + `map` if only one element is found | A |
| 7 | Method to transform each element | B |
| 8 | Method to select only some elements | A |
| 9 | `filter + map + reduce` returns a number | B |
| 10 | `[5, 15, 25].filter(n > 10).map(n * 2)` | B |

---

## ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What is Array Chaining? | B | B | ✅ |
| 2 | Correct order to filter then transform | B | B | ✅ |
| 3 | Method to get a single value at the end | C | C | ✅ |
| 4 | `filter(num > 2).map(num * 2)` on `[1, 2, 3, 4, 5]` | A | A | ✅ |
| 5 | Method to sort in a chain | C | C | ✅ |
| 6 | `filter` + `map` if only one element is found | A | A | ✅ |
| 7 | Method to transform each element | B | B | ✅ |
| 8 | Method to select only some elements | A | A | ✅ |
| 9 | `filter + map + reduce` returns a number | B | B | ✅ |
| 10 | `[5, 15, 25].filter(n > 10).map(n * 2)` | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)**
- **HTML5**
- **CSS3**

---

## 📂 Folder Structure

```
18-array-chaining/
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