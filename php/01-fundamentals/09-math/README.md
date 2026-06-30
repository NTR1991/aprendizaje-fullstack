# 📘 PHP Math

## 📋 Description

A PHP script demonstrating the use of mathematical functions in real-world business scenarios, including geometry calculations, statistical analysis of sales data, and financial investment analysis.

---

## 🎯 Learning Objectives

- Using `pi()` to get the value of PI
- Using `min()` and `max()` to find smallest and largest values
- Using `abs()` to get the absolute value of a number
- Using `sqrt()` to calculate square roots
- Using `pow()` to raise a number to a power
- Using `ceil()` to round numbers up
- Using `floor()` to round numbers down
- Using `round()` to round numbers to a specified number of decimal places
- Using `rand()` to generate random numbers
- Using `array_sum()` to sum array elements
- Using `count()` to get array length

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Construction Company - Geometry Calculations**
   A construction company needs to calculate different measurements for their projects. You must use PHP mathematical functions to perform the calculations.

   Input:
   ````
   $lado1 = 15;
   $lado2 = 8;
   $lado3 = 12;
   $radio = 5;
   $temperaturas = [-3, 5, 12, -1, 8, 0, -5];
   $precios = [99.99, 45.50, 12.75, 89.30, 25.00];
   ````

   Tasks to perform:
   - Calculate the area of a rectangle: $lado1 * $lado2
   - Calculate the perimeter of a rectangle: 2 * ($lado1 + $lado2)
   - Calculate the area of a circle: pi() * pow($radio, 2)
   - Calculate the circumference of a circle: 2 * pi() * $radio
   - Find the maximum number among $lado1, $lado2, $lado3 using max()
   - Find the minimum number among $lado1, $lado2, $lado3 using min()
   - Calculate the absolute value of the first temperature using abs()
   - Calculate the square root of $lado1 using sqrt()
   - Round the first price to 2 decimal places using round()
   - Generate a random number between 1 and 100 using rand()

---

### 🟡 Intermediate Level (1 exercise)

1. **Statistics Company - Sales Data Analysis**
   A statistics company needs to calculate measures of central tendency and dispersion for monthly sales data.

   Input:
   ````
   $ventas = [1250, 980, 2100, 750, 1650, 1900, 850, 2200, 1400, 1750, 1100, 1950];
   ````

   Tasks to perform:
   - Calculate the total number of months using count()
   - Calculate the total annual sales using array_sum()
   - Calculate the average sales (total / number of months)
   - Round the average to 2 decimal places using round()
   - Find the maximum sales using max()
   - Find the minimum sales using min()
   - Calculate the range (maximum - minimum)
   - Calculate the square root of the total sales using sqrt()
   - Round the square root to 2 decimal places

---

### 🔴 Difficult Level (1 exercise)

1. **Investment Company - Fund Performance Analysis**
   An investment company needs to analyze the performance of different investment funds. You must calculate various financial metrics using PHP mathematical functions.

   Input:
   ````
   $fondo1 = [1200, 1350, 1100, 1450, 1600, 1300, 1500, 1700, 1400, 1550, 1250, 1650];
   $fondo2 = [900, 850, 1100, 950, 1200, 1050, 1300, 1150, 1400, 1250, 1500, 1350];
   $fondo3 = [1800, 1650, 1900, 1750, 2000, 1850, 2100, 1950, 2200, 2050, 2300, 2150];
   ````

   Tasks to perform:
   - Calculate the total return of each fund using array_sum()
   - Calculate the average return of each fund (total / number of months)
   - Round the averages to 2 decimal places
   - Find the maximum return of each fund using max()
   - Find the minimum return of each fund using min()
   - Calculate the deviation (maximum - minimum) of each fund
   - Calculate the square root of each fund's total return
   - Find the highest total return among the 3 funds using max()
   - Find the lowest total return among the 3 funds using min()

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What function returns the value of PI in PHP? | B) `pi()` |
| 2 | What function returns the smallest number from a list or array? | A) `min()` |
| 3 | What function returns the absolute value of a number? | A) `abs()` |
| 4 | What function calculates the square root of a number? | B) `sqrt()` |
| 5 | What function raises a number to a power? | B) `pow()` |
| 6 | What function rounds a number up? | B) `ceil()` |
| 7 | What function rounds a number down? | C) `floor()` |
| 8 | What function rounds a number to a specified number of decimal places? | A) `round()` |
| 9 | What function generates a random number between 1 and 10? | A) `rand(1, 10)` |
| 10 | What is the result of `ceil(3.14)`? | C) 4 |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What function returns the value of PI? | B | B | ✅ |
| 2 | What function returns the smallest number? | A | A | ✅ |
| 3 | What function returns the absolute value? | A | A | ✅ |
| 4 | What function calculates the square root? | B | B | ✅ |
| 5 | What function raises a number to a power? | B | B | ✅ |
| 6 | What function rounds a number up? | B | B | ✅ |
| 7 | What function rounds a number down? | C | C | ✅ |
| 8 | What function rounds to a specified decimal? | A | A | ✅ |
| 9 | What function generates a random number? | A | A | ✅ |
| 10 | What is the result of `ceil(3.14)`? | C | C | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `pi()`, `min()`, `max()`, `abs()`, `sqrt()`, `pow()`, `ceil()`, `floor()`, `round()`, `rand()`, `array_sum()`, `count()`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
09-math/
├── css/
│ └── style.css
├── php/
│ └── main.php
├── index.html
└── README.md
`````


---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
