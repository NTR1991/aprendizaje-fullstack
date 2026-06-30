# 📘 PHP Operators

## 📋 Description

A PHP script demonstrating the use of different types of operators in real-world business scenarios, including arithmetic operations for price calculations, comparison operators for validations, logical operators for conditions, and assignment operators for modifying values.

---

## 🎯 Learning Objectives

- Understanding arithmetic operators: `+`, `-`, `*`, `/`, `%`, `**`
- Using assignment operators: `=`, `+=`, `-=`, `*=`, `/=`, `%=`
- Using comparison operators: `==`, `===`, `!=`, `!==`, `>`, `<`, `>=`, `<=`
- Using logical operators: `&&`, `||`, `!`, `and`, `or`, `xor`
- Using increment/decrement operators: `++`, `--`
- Using string operators: `.`, `.=`
- Using the ternary operator: `?:`
- Using the null coalescing operator: `??`
- Applying operators in real-world scenarios (price calculations, validations, conditions)

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Online Store Price Calculator**
   An online store needs to calculate the final price of a product after applying discounts and taxes. You must use arithmetic, assignment, and comparison operators.

   Input:
   ````
   $precioBase = 100;
   $descuento = 15;
   $iva = 21;

   Tasks to perform:
   - Calculate price with discount: `$precioBase * (1 - $descuento / 100)`
   - Calculate price with VAT: `$precioConDescuento * (1 + $iva / 100)`
   - Use compound assignment operators (`+=`, `-=`)
   - Compare if the final price is greater than 100 €
   - Use the ternary operator (`?:`) to show "Caro" or "Barato"
   - Use the null coalescing operator (`??`) to assign a default value`
   ````

---

### 🟡 Intermediate Level (1 exercise)

1. **Employee Performance Evaluation**
   An HR company needs to calculate the final rating of an employee based on three criteria: performance, punctuality, and teamwork. Each criterion is rated from 0 to 10.

   Input:
   ````
   $rendimiento = 7;
   $puntualidad = 9;
   $trabajoEquipo = 6;

   Tasks to perform:
   - Calculate the average of the three ratings
   - Use comparison operators to determine:
     - If average >= 8 → "Excelente"
     - If average >= 6 → "Bueno"
     - If average >= 5 → "Suficiente"
     - If average < 5 → "Insuficiente"
   - Use logical operators to check:
     - If performance > 7 AND punctuality > 8 → "Candidato a promocion"
     - If teamwork < 5 → "Necesita mejorar en equipo"
   - Use increment/decrement operators to simulate an improvement in performance
   - Use the ternary operator to assign "Aprobado" or "Reprobado"
   - Use the null coalescing operator to assign a default comment
   ````
   

---

### 🔴 Difficult Level (1 exercise)

1. **International Logistics Shipping Calculator**
   An international logistics company needs to calculate shipping costs based on multiple factors: weight, distance, package type, and shipping zone.

   Input:
   ````
   $peso = 8.5;
   $distancia = 350;
   $tipoPaquete = "urgente";
   $zona = "europa";
   

   Business rules:
   - Base cost: `$peso * 1.50`
   - Distance cost: `$distancia * 0.10`
   - Package type surcharge: "urgente" = +25%, "normal" = 0%
   - Zone surcharge: "europa" = +10%, "america" = +25%, "asia" = +40%
   - Discount: If total > 100 €, apply 10% discount

   Tasks to perform:
   - Calculate subtotal (base cost + distance cost)
   - Calculate package type surcharge using ternary operator
   - Calculate zone surcharge using ternary operator
   - Calculate total cost
   - Apply discount if total > 100 €
   - Use comparison and logical operators
   - Use null coalescing operator for a default value
   ````

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What operator is used to concatenate strings in PHP? | B) `.` |
| 2 | What operator compares both value and type in PHP? | B) `===` |
| 3 | What logical operator means "AND" in PHP? | B) `&&` |
| 4 | What operator increments a variable by 1? | B) `++` |
| 5 | What operator assigns a default value in PHP? | B) `??` |
| 6 | What operator is used for division in PHP? | B) `/` |
| 7 | What operator is used for modulus (remainder) in PHP? | C) `%` |
| 8 | What compound assignment operator is equivalent to `$x = $x + 5`? | A) `$x += 5` |
| 9 | What operator is used for exponentiation in PHP? | B) `**` |
| 10 | What is the result of `(5 > 3) && (10 < 20)`? | A) true |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What operator concatenates strings? | B | B | ✅ |
| 2 | What operator compares value and type? | B | B | ✅ |
| 3 | What logical operator means "AND"? | B | B | ✅ |
| 4 | What operator increments a variable by 1? | B | B | ✅ |
| 5 | What operator assigns a default value? | B | B | ✅ |
| 6 | What operator is used for division? | B | B | ✅ |
| 7 | What operator is used for modulus? | C | C | ✅ |
| 8 | What operator is equivalent to `$x = $x + 5`? | A | A | ✅ |
| 9 | What operator is used for exponentiation? | B | B | ✅ |
| 10 | What is the result of `(5 > 3) && (10 < 20)`? | A | A | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, arithmetic operators, assignment operators, comparison operators, logical operators, increment/decrement operators, string operators, ternary operator, null coalescing operator
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
12-operators/
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