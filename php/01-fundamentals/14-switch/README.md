# 📘 PHP Switch

## 📋 Description

A PHP script demonstrating the use of the `switch` statement for handling multiple conditions in real-world business scenarios, including price calculations, shipping cost calculations, and telecommunications plan pricing.

---

## 🎯 Learning Objectives

- Understanding the `switch` statement syntax
- Using `case` to define different conditions
- Using `break` to prevent fall-through
- Using `default` for unmatched values
- Comparing `switch` with `if...elseif`
- Using `switch` with integer values
- Using `switch` with string values
- Applying `switch` in real-world business scenarios

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Video Game Store Price Calculator**
   A video game store needs to display the price of a game based on its genre.

   Input:
   ````
   $genero = "aventura";  // "aventura", "deportes", "estrategia", "rpg", "shooter"

   Prices:
   - Adventure: 50 €
   - Sports: 45 €
   - Strategy: 55 €
   - RPG: 60 €
   - Shooter: 40 €
   - Other: 30 €

   Tasks to perform:
   - Use `switch` to assign the price based on the genre
   - Display the price with `echo`
   - Include `default` for unlisted genres
   - Use `break` correctly
   ````

---

### 🟡 Intermediate Level (1 exercise)

1. **Logistics Shipping Calculator**
   A logistics company needs to calculate shipping costs based on zone and package weight.

   Input:
   ````
   $zona = "europa";       // "europa", "america", "asia", "oceania"
   $peso = 3.5;            // Weight in kg

   Business rules:
   - Base cost by zone: Europa: 10 €, America: 25 €, Asia: 40 €, Oceania: 35 €
   - Weight surcharge: <= 2 kg: 0%, 2-5 kg: 10%, 5-10 kg: 20%, > 10 kg: 30%
   - Use `switch` for base cost by zone
   - Use `if...elseif` for weight surcharge
   - Display the final cost
   ````

---

### 🔴 Difficult Level (1 exercise)

1. **Telecommunications Plan Calculator**
   A telecommunications company needs to calculate the cost of a mobile phone plan based on plan type, data usage, minutes used, and number of lines.

   Input:
   ````
   $plan = "premium";      // "basico", "estandar", "premium", "familiar"
   $datos = 8;            // GB of data consumed
   $minutos = 300;        // Minutes consumed
   $lineas = 2;           // Number of lines (only for family plan)

   Business rules:
   - Base cost by plan: Basic: 15 €, Standard: 25 €, Premium: 40 €, Family: 30 € per line
   - Data surcharge: <= 2 GB: 0%, 2-5 GB: 10%, 5-10 GB: 20%, > 10 GB: 35%
   - Minutes surcharge: <= 100 min: 0%, 100-200 min: 5%, 200-500 min: 10%, > 500 min: 20%
   - Family plan discount: If family plan and 3 or more lines: 10% discount
   - Calculate final cost applying all surcharges and discounts
   ````

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What keyword starts a `switch` structure in PHP? | A) `switch` |
| 2 | What keyword is used to exit a `switch` and prevent further `case` execution? | B) `break` |
| 3 | What keyword defines a default value when no `case` matches? | C) `default` |
| 4 | What is the output with `$dia = 3`? | C) Miércoles |
| 5 | What happens if you don't use `break` in a `case`? | B) Execution continues to the next `case` |
| 6 | What is the output without `break`? | B) RojoAzulVerdeOtro |
| 7 | What is the correct way to use `switch` with strings? | D) A and C are correct |
| 8 | What structure is equivalent to a `switch`? | A) Multiple `if...elseif` |
| 9 | What is the output with `$opcion = 2`? | B) Dos |
| 10 | When is it better to use `switch` instead of `if...elseif`? | A) When many conditions compare the same value |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What keyword starts a `switch`? | A | A | ✅ |
| 2 | What keyword exits a `switch`? | B | B | ✅ |
| 3 | What keyword defines a default value? | C | C | ✅ |
| 4 | Output with `$dia = 3`? | C | C | ✅ |
| 5 | What happens without `break`? | B | B | ✅ |
| 6 | What is the output without `break`? | B | B | ✅ |
| 7 | Correct way to use `switch` with strings? | D | D | ✅ |
| 8 | What is equivalent to a `switch`? | A | A | ✅ |
| 9 | Output with `$opcion = 2`? | B | B | ✅ |
| 10 | When to use `switch`? | A | A | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `switch`, `case`, `break`, `default`, `if...elseif`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
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