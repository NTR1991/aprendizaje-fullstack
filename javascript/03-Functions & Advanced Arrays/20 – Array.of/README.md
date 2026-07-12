# 📘 Topic 20 – Array.of

## 📋 Description

Practice with `Array.of`: creating arrays from multiple arguments, understanding the difference between `Array.of` and the `Array` constructor, and combining with other array methods.

---

## 🎯 Learning Objectives

- Create arrays using `Array.of()`
- Understand the difference between `Array.of(N)` and `Array(N)`
- Use `Array.of` with other array methods like `.map()`
- Avoid common pitfalls with the Array constructor

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Create Array with Array.of**

   ```javascript
   const numeros = Array.of(10, 20, 30, 40, 50);
   console.log(numeros); // [10, 20, 30, 40, 50]
   ```

---

### 🟡 Intermediate Level (1 exercise)

1. **Compare Array.of and Array Constructor**

   ```javascript
   const conOf = Array.of(7);
   const conConstructor = Array(7);
   console.log(conOf); // [7]
   console.log(conConstructor); // [empty x 7]
   ```

---

### 🔴 Difficult Level (1 exercise)

1. **Array.of with map**

   ```javascript
   const numeros = Array.of(2, 4, 6, 8, 10);
   const multiplicados = numeros.map(num => num * 3);
   console.log(multiplicados); // [6, 12, 18, 24, 30]
   ```

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | `Array.of(5)` | B |
| 2 | `Array(5)` | A |
| 3 | Difference between `Array.of(3)` and `Array(3)` | A |
| 4 | `Array.of(1, 2, 3)` | A |
| 5 | `Array.of("hola", 42, true)` | A |
| 6 | Best method for creating array with a single number | B |
| 7 | `Array.of(-1, -2, -3)` | A |
| 8 | `Array.of(0)` | A |
| 9 | Create array with `10, 20, 30` using `Array.of` | B |
| 10 | `Array.of(5).map(num => num * 2)` | A |

---

## ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | `Array.of(5)` | B | B | ✅ |
| 2 | `Array(5)` | A | A | ✅ |
| 3 | Difference between `Array.of(3)` and `Array(3)` | A | A | ✅ |
| 4 | `Array.of(1, 2, 3)` | A | A | ✅ |
| 5 | `Array.of("hola", 42, true)` | A | A | ✅ |
| 6 | Best method for creating array with a single number | B | B | ✅ |
| 7 | `Array.of(-1, -2, -3)` | A | A | ✅ |
| 8 | `Array.of(0)` | A | A | ✅ |
| 9 | Create array with `10, 20, 30` using `Array.of` | B | B | ✅ |
| 10 | `Array.of(5).map(num => num * 2)` | A | A | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)**
- **HTML5**
- **CSS3**

---

## 📂 Folder Structure

```
20-array-of/
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