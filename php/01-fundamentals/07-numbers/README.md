# 📘 PHP Numbers

## 📋 Description

A PHP script demonstrating the use of integers, floats, and mathematical functions in real-world business scenarios, including price calculations with taxes and discounts, shipping cost calculations, and compound interest calculations.

---

## 🎯 Learning Objectives

- Understanding integer and float data types
- Using `round()` to round numbers to a specified number of decimal places
- Using `ceil()` to round numbers up
- Using `floor()` to round numbers down
- Using `abs()` to get the absolute value of a number
- Using `number_format()` to format numbers with separators
- Using `pow()` to raise a number to a power
- Performing percentage calculations (taxes, discounts, interest rates)

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Online Store Price Calculator**
   An online store needs to calculate the final price of a product after applying taxes and discounts.
   
   Input:
   $precioBase = 150.75;
   $iva = 21;
   $descuento = 10;
   
   Tasks to perform:
   - Calculate price with VAT: $precioBase * (1 + $iva / 100)
   - Calculate final price with discount: $precioConIva * (1 - $descuento / 100)
   - Round the final price to 2 decimal places using `round()`
   - Format the final price using `number_format()` with separators
   - Display all results with formatted currency

---

### 🟡 Intermediate Level (1 exercise)

1. **Shipping Cost Calculator**
   A logistics company needs to calculate shipping costs based on distance and weight.
   
   Input:
   $distancia = 350;
   $peso = 4.5;
   $costoPorKm = 0.75;
   $costoPorKg = 1.25;
   $iva = 21;
   
   Tasks to perform:
   - Calculate base cost: ($distancia * $costoPorKm) + ($peso * $costoPorKg)
   - Calculate VAT: $costoBase * $iva / 100
   - Calculate total: $costoBase + $ivaAplicado
   - Round the total to 2 decimal places using `round()`
   - Format all amounts using `number_format()` with separators

---

### 🔴 Difficult Level (1 exercise)

1. **Compound Interest Calculator**
   A financial company needs to calculate compound interest for investments.
   
   Formula: M = P * (1 + r/n)^(n*t)
   - P = principal amount
   - r = annual interest rate (%)
   - n = number of times interest is compounded per year
   - t = number of years
   
   Input:
   $principal = 5000;
   $tasa = 5.5;
   $capitalizacion = 12;
   $tiempo = 3;
   
   Tasks to perform:
   - Convert rate to decimal: $tasa / 100
   - Calculate final amount: $principal * pow(1 + $tasaDecimal / $capitalizacion, $capitalizacion * $tiempo)
   - Calculate interest earned: $montoFinal - $principal
   - Round to 2 decimal places using `round()`
   - Format all amounts using `number_format()` with separators

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What data type is `42` in PHP? | B) `int` |
| 2 | What data type is `3.14` in PHP? | B) `float` |
| 3 | What function is used to round a number in PHP? | C) `round()` |
| 4 | What function is used to format a number with separators in PHP? | B) `number_format()` |
| 5 | What function rounds a number up in PHP? | A) `ceil()` |
| 6 | What function rounds a number down in PHP? | B) `floor()` |
| 7 | What function returns the absolute value of a number in PHP? | D) `abs()` |
| 8 | What is the result of `round(3.1416, 2)`? | C) 3.14 |
| 9 | What is the result of `ceil(3.14)`? | D) 4 |
| 10 | What is the result of `number_format(1234.56, 2, ',', '.')`? | C) 1.234,56 |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What data type is `42` in PHP? | B | B | ✅ |
| 2 | What data type is `3.14` in PHP? | B | B | ✅ |
| 3 | What function is used to round a number in PHP? | C | C | ✅ |
| 4 | What function formats numbers with separators? | B | B | ✅ |
| 5 | What function rounds a number up? | A | A | ✅ |
| 6 | What function rounds a number down? | B | B | ✅ |
| 7 | What function returns the absolute value? | D | D | ✅ |
| 8 | What is the result of `round(3.1416, 2)`? | C | C | ✅ |
| 9 | What is the result of `ceil(3.14)`? | D | D | ✅ |
| 10 | What is the result of `number_format(1234.56, 2, ',', '.')`? | C | C | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, integers, floats, `round()`, `ceil()`, `floor()`, `abs()`, `number_format()`, `pow()`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
07-numbers/
├── css/
│ └── style.css
├── php/
│ └── main.php
├── index.html
└── README.md
````

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026