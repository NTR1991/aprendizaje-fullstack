# 📘 Topic 11 – Spread & Rest Operators

## 📋 Description

Practice with spread and rest operators: expand arrays and objects, collect remaining elements, copy and merge data structures, and use rest parameters in functions.

---

## 🎯 Learning Objectives

- Use spread (`...`) to expand arrays and objects
- Use rest (`...`) to collect remaining elements
- Copy arrays and objects using spread
- Merge arrays and objects using spread
- Use rest parameters in functions

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Copy Array with Spread**

   Input:
   ```javascript
   const nums = [1, 2, 3];
   ```

   Task:
   - Create a copy of the array using spread
   - Add the number 4 at the end
   - Show the new array in console

### 🟡 Intermediate Level (1 exercise)

1. **Merge Objects with Spread**

   Input:
   ```javascript
   const user = { name: "Luis", age: 30 };
   const address = { city: "Barcelona", country: "Spain" };
   ```

   Task:
   - Merge both objects into one using spread
   - Show the result in console

### 🔴 Difficult Level (1 exercise)

1. **Rest Parameters in Function**

   Input:
   ```javascript
   sumarTodos(5, 10, 15, 20)
   ```

   Task:
   - Create a function `sumarTodos(...numeros)` that accepts any number of arguments
   - Return the sum of all numbers
   - Show the result in console

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What does the spread operator (`...`) do in an array? | B |
| 2 | What does the rest operator (`...`) do in a function? | B |
| 3 | How to copy an array and add 4 at the end? | B |
| 4 | How to combine two objects into one? | B |
| 5 | What symbol is used for spread and rest? | A |
| 6 | How to extract first two and store the rest? | A |
| 7 | What does `...numeros` do in `function sumar(...numeros)`? | A |
| 8 | Result of `console.log([...[1, 2], [3, 4]])`? | A |
| 9 | Result of `{ ...{ a: 1, b: 2 }, c: 3 }`? | A |
| 10 | Main difference between spread and rest? | A |

---

## ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What does the spread operator do? | B | B | ✅ |
| 2 | What does the rest operator do? | B | B | ✅ |
| 3 | How to copy array and add 4? | B | B | ✅ |
| 4 | How to combine two objects? | B | B | ✅ |
| 5 | What symbol is used? | A | A | ✅ |
| 6 | How to extract first two and store rest? | A | A | ✅ |
| 7 | What does `...numeros` do? | A | A | ✅ |
| 8 | Result of `console.log([...[1, 2], [3, 4]])`? | A | A | ✅ |
| 9 | Result of `{ ...{ a: 1, b: 2 }, c: 3 }`? | A | A | ✅ |
| 10 | Main difference between spread and rest? | A | A | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)**
- **HTML5**
- **CSS3**

---

## 📂 Folder Structure

```
11-spread-rest/
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