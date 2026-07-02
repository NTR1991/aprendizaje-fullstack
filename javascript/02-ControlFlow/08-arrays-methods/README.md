# 📘 JavaScript Arrays Methods

## 📋 Description

Practice with advanced array methods: `map`, `filter`, `reduce`, `find`, `sort`, `some`, and `every`. All exercises are based on real-world scenarios such as product filtering, cart total calculation, and data transformation.

---

## 🎯 Learning Objectives

- Use `.map()` to transform all elements of an array
- Use `.filter()` to select elements that meet a condition
- Use `.reduce()` to accumulate values into a single result
- Use `.find()` to locate the first matching element
- Use `.sort()` to order elements
- Use `.some()` and `.every()` to test conditions
- Combine multiple array methods in a single chain

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Temperature Converter**

   ```javascript
   const celsius = [0, 10, 20, 30];
   ```

   Tasks:
   - Use `.map()` to convert each temperature to Fahrenheit
   - Formula: (celsius * 9/5) + 32
   - Show the new array in console

### 🟡 Intermediate Level (1 exercise)

1. **Product Filter with Discount**

   ```javascript
   const precios = [15, 25, 10, 40, 30, 20];
   ```

   Business rules:
   - Keep only prices greater than 20
   - Apply 10% discount to remaining products

   Tasks:
   - Use `.filter()` to keep prices > 20
   - Use `.map()` to apply discount (multiply by 0.9)
   - Show final result in console

### 🔴 Difficult Level (1 exercise)

1. **Shopping Cart Manager**

   ```javascript
   const products = [
       { name: "Laptop", price: 1200 },
       { name: "Mouse", price: 25 },
       { name: "Keyboard", price: 80 },
       { name: "Monitor", price: 300 }
   ];
   ```

   Business rules:
   - Only products under 100 are eligible for discount
   - Discount is 15%
   - Final list must be sorted by discounted price

   Tasks:
   - Use `.filter()` to keep products with price < 100
   - Use `.map()` to add discountPrice (price * 0.85)
   - Use `.sort()` to order by discountPrice (lowest to highest)
   - Use `.reduce()` to calculate total discountPrice

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What method transforms all elements of an array? | B (`.map()`) |
| 2 | What method keeps only elements that meet a condition? | C (`.filter()`) |
| 3 | What method reduces an array to a single value? | C (`.reduce()`) |
| 4 | What method returns the first element that meets a condition? | D (`.find()`) |
| 5 | What method sorts an array? | A (`.sort()`) |
| 6 | What method returns `true` if at least one element meets a condition? | B (`.some()`) |
| 7 | What method returns `true` if all elements meet a condition? | B (`.every()`) |
| 8 | What is the difference between `.map()` and `.filter()`? | B |
| 9 | What parameters does `.reduce()` receive? | B (`(accumulator, currentElement)`) |
| 10 | Correct way to chain filter and map? | B (`array.filter().map()`) |

---

## ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What method transforms all elements? | B | B | ✅ |
| 2 | What method keeps only elements that meet a condition? | C | C | ✅ |
| 3 | What method reduces an array to a single value? | C | C | ✅ |
| 4 | What method returns the first element that meets a condition? | D | D | ✅ |
| 5 | What method sorts an array? | A | A | ✅ |
| 6 | What method returns `true` if at least one element meets a condition? | B | B | ✅ |
| 7 | What method returns `true` if all elements meet a condition? | B | B | ✅ |
| 8 | What is the difference between `.map()` and `.filter()`? | B | B | ✅ |
| 9 | What parameters does `.reduce()` receive? | B | B | ✅ |
| 10 | Correct way to chain filter and map? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)** – Core language
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure

```
08-arrays-methods/
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
