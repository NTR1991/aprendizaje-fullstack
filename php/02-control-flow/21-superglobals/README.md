# 📘 PHP Loops

## 📋 Description

A PHP script demonstrating the use of different types of loops (`while`, `do-while`, `for`, `foreach`) in real-world business scenarios, including product listing, sales analysis, and inventory management.

---

## 🎯 Learning Objectives

- Understanding the `while` loop syntax
- Using `do-while` for at least one execution
- Using `for` loops with counters
- Using `foreach` to iterate over arrays
- Using `break` to exit loops early
- Using `continue` to skip iterations
- Nesting loops for multidimensional arrays
- Applying loops in real-world business scenarios

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Product List with Prices**
   A store needs to display a list of products with their prices using `foreach`.

   Input:
   ```
   $productos = [
       "Portatil" => 650,
       "Raton" => 25,
       "Teclado" => 45,
       "Monitor" => 180,
       "Auriculares" => 35
   ];
   ```

   Tasks to perform:
   - Use `foreach` to display each product with its price
   - Use `foreach` with key and value
   - Count total products and calculate total price

---

### 🟡 Intermediate Level (1 exercise)

1. **Sales Analysis by Seller**
   A sales company needs to calculate the total sales and average of each seller using `foreach`.

   Input:
   ```
   $ventas = [
       "Ana" => [1200, 1500, 1300, 1400],
       "Carlos" => [900, 1100, 1000, 1200],
       "Elena" => [1600, 1800, 1700, 1900]
   ];
   ```

   Tasks to perform:
   - Use `foreach` to iterate over each seller
   - Use nested `foreach` to iterate over each seller's sales
   - Calculate total sales for each seller
   - Calculate average sales for each seller
   - Display results with `echo`

---

### 🔴 Difficult Level (1 exercise)

1. **Inventory Management System**
   A company needs to analyze stock levels of products across different warehouses.

   Input:
   ```
   $almacenes = [
       "Madrid" => [
           "Portatil" => 15,
           "Raton" => 30,
           "Teclado" => 12
       ],
       "Barcelona" => [
           "Portatil" => 8,
           "Raton" => 25,
           "Teclado" => 20
       ],
       "Valencia" => [
           "Portatil" => 10,
           "Raton" => 18,
           "Teclado" => 5
       ]
   ];
   ```

   Tasks to perform:
   - Use nested `foreach` to iterate over each warehouse and its products
   - Calculate total stock of each product across all warehouses
   - Calculate total stock of each warehouse
   - Display a summary with all data

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | Which loop executes the code at least once before checking the condition? | B) `do-while` |
| 2 | Which loop is used to iterate over arrays in PHP? | D) `foreach` |
| 3 | What is the correct syntax for a `for` loop? | D) A and B are correct |
| 4 | Which keyword is used to exit a loop early? | B) `break` |
| 5 | Which keyword is used to skip to the next iteration? | A) `continue` |
| 6 | How many times will the `while` loop execute? | B) 5 |
| 7 | Which loop is best when you know the exact number of iterations? | C) `for` |
| 8 | What is the output of the `do-while` loop? | A) 012 |
| 9 | What function counts the number of elements in an array? | A) `count()` |
| 10 | What is the output with `continue`? | B) 13 |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | Which loop executes at least once? | B | B | ✅ |
| 2 | Which loop iterates over arrays? | D | D | ✅ |
| 3 | Correct syntax for `for` loop? | D | D | ✅ |
| 4 | Which keyword exits a loop? | B | B | ✅ |
| 5 | Which keyword skips to the next iteration? | A | A | ✅ |
| 6 | How many times does `while` execute? | B | B | ✅ |
| 7 | Which loop is best with known iterations? | C | C | ✅ |
| 8 | What is the output of `do-while`? | A | A | ✅ |
| 9 | What function counts array elements? | A | A | ✅ |
| 10 | What is the output with `continue`? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `while`, `do-while`, `for`, `foreach`, `break`, `continue`, `count()`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure

```
18-loops/
├── css/
│   └── style.css
├── php/
│   └── main.php
├── index.html
└── README.md
```

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

July 2026