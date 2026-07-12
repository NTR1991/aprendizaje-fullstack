# 📘 Topic 16 – Recursion in JavaScript

## 📋 Description

Practice with recursion: functions that call themselves to solve problems. Learn to identify base cases and recursive cases, and apply recursion to mathematical problems (factorial, Fibonacci) and data structures (sum of arrays).

---

## 🎯 Learning Objectives

- Understand what recursion is and how it works
- Identify the base case and recursive case in a recursive function
- Implement recursive functions for factorial, array sum, and Fibonacci
- Understand when to use recursion vs iteration

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Factorial Calculator**

   Create a recursive function `factorial(n)` that:
   - Receives a number `n`
   - Returns the factorial of `n` (`n! = n * (n-1) * ... * 1`)
   - Base case: `n === 0` returns `1`

   **Test:**
   ```javascript
   console.log(factorial(5)); // 120
   ```

---

### 🟡 Intermediate Level (1 exercise)

1. **Sum of Array (Recursive)**

   Create a recursive function `sumaArray(array)` that:
   - Receives an array of numbers
   - Returns the sum of all elements
   - Base case: empty array returns `0`
   - Recursive case: `array[0] + sumaArray(array.slice(1))`

   **Test:**
   ```javascript
   console.log(sumaArray([1, 2, 3, 4, 5])); // 15
   ```

---

### 🔴 Difficult Level (1 exercise)

1. **Fibonacci Sequence (Recursive)**

   Create a recursive function `fibonacci(n)` that:
   - Receives a position `n` in the Fibonacci sequence
   - Returns the value at that position
   - Base cases: `n === 0` returns `0`, `n === 1` returns `1`
   - Recursive case: `fibonacci(n-1) + fibonacci(n-2)`

   **Test:**
   ```javascript
   console.log(fibonacci(6)); // 8
   ```

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What is recursion? | B |
| 2 | What is the base case in a recursive function? | A |
| 3 | What is the recursive case in a recursive function? | B |
| 4 | What does `factorial(4)` return? | B |
| 5 | What does `sumaArray([1, 2, 3, 4])` return? | C |
| 6 | What does `fibonacci(5)` return? | B |
| 7 | What happens if a recursive function has no base case? | B |
| 8 | In `factorial`, what is the base case? | B |
| 9 | In `fibonacci`, what are the base cases? | A |
| 10 | What is the output of `fibonacci(7)`? | B |

---

## ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What is recursion? | B | B | ✅ |
| 2 | What is the base case? | A | A | ✅ |
| 3 | What is the recursive case? | B | B | ✅ |
| 4 | `factorial(4)` | B | B | ✅ |
| 5 | `sumaArray([1, 2, 3, 4])` | C | C | ✅ |
| 6 | `fibonacci(5)` | B | B | ✅ |
| 7 | What happens if no base case? | B | B | ✅ |
| 8 | Base case of `factorial` | B | B | ✅ |
| 9 | Base cases of `fibonacci` | A | A | ✅ |
| 10 | `fibonacci(7)` | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)**
- **HTML5**
- **CSS3**

---

## 📂 Folder Structure

```
16-recursion/
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