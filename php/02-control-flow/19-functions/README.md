# 📘 PHP Switch

## 📋 Description

A PHP script demonstrating the use of the `switch` statement as an alternative to multiple `if...elseif` conditions in real-world business scenarios, including video game genre pricing, international shipping cost calculation, and mobile phone plan billing.

---

## 🎯 Learning Objectives

- Understanding the `switch` statement syntax
- Using `case` to define different conditions
- Using `break` to exit a switch block
- Using `default` as a fallback option
- Comparing `switch` with `if...elseif` for multiple conditions
- Combining `switch` with `if...elseif...else` for complex logic
- Applying `switch` in real-world business scenarios

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Video Game Price by Genre**
   A video game store needs to display the price of games based on their genre.

   Input:
   ```
   $genero = "aventura";  // "aventura", "deportes", "estrategia", "rpg", "shooter"
   ```

   Business rules:
   - "aventura": 50 €
   - "deportes": 45 €
   - "estrategia": 55 €
   - "rpg": 60 €
   - "shooter": 40 €
   - Other genres: 30 €

   Tasks to perform:
   - Use `switch` to display the corresponding price
   - Use `default` for unknown genres
   - Display the genre and price

---

### 🟡 Intermediate Level (1 exercise)

1. **International Shipping Cost Calculator**
   A logistics company needs to calculate shipping costs based on zone and package weight.

   Input:
   ```
   $zona = "europa";  // "europa", "america", "asia", "oceania"
   $peso = 3.5;       // Weight in kg
   ```

   Business rules:
   - Base cost by zone: europe 10 €, america 25 €, asia 40 €, oceania 35 €, other 50 €
   - Weight surcharge: <= 2 kg 0%, <= 5 kg 10%, <= 10 kg 20%, > 10 kg 30%

   Tasks to perform:
   - Use `switch` to calculate base cost by zone
   - Use `if...elseif...else` to calculate weight surcharge
   - Calculate and display the final cost

---

### 🔴 Difficult Level (1 exercise)

1. **Mobile Phone Plan Billing System**
   A telecommunications company needs to calculate monthly bills for different phone plans.

   Input:
   ```
   $plan = "premium";     // "basico", "estandar", "premium", "familiar"
   $datos = 8;            // GB consumed
   $minutos = 300;        // Minutes consumed
   $lineas = 2;           // Number of lines (only for family plan)
   ```

   Business rules:
   - Base cost by plan: basico 15 €, estandar 25 €, premium 40 €, familiar 30 € × lines
   - Data surcharge: <= 2 GB 0%, <= 5 GB 10%, <= 10 GB 20%, > 10 GB 35%
   - Minutes surcharge: <= 100 min 0%, <= 200 min 5%, <= 500 min 10%, > 500 min 20%
   - Family discount: if plan = "familiar" and lines >= 3 → 10% discount

   Tasks to perform:
   - Use `switch` to calculate base cost by plan
   - Use `if...elseif...else` for data and minutes surcharges
   - Apply family discount when applicable
   - Calculate and display the final bill

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What keyword starts a switch statement? | B) `switch` |
| 2 | What keyword defines a case in a switch? | C) `case` |
| 3 | What keyword exits a switch block? | B) `break` |
| 4 | What keyword is used as a fallback in switch? | D) `default` |
| 5 | What happens if no `break` is used? | B) Continues to next case |
| 6 | What comparison does `switch` use? | B) Loose comparison (`==`) |
| 7 | Can `switch` evaluate strings? | A) Yes |
| 8 | Is `default` mandatory in switch? | B) No |
| 9 | What is the output without `break`? | B) Ejecuta el siguiente `case` |
| 10 | When is `switch` better than `if...elseif`? | B) Comparing same variable with many values |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What keyword starts a switch statement? | B | B | ✅ |
| 2 | What keyword defines a case? | C | C | ✅ |
| 3 | What keyword exits a switch block? | B | B | ✅ |
| 4 | What keyword is used as a fallback? | D | D | ✅ |
| 5 | What happens if no break is used? | B | B | ✅ |
| 6 | What comparison does `switch` use? | B | B | ✅ |
| 7 | Can `switch` evaluate strings? | A | A | ✅ |
| 8 | Is `default` mandatory in switch? | B | B | ✅ |
| 9 | What is the output without `break`? | B | B | ✅ |
| 10 | When is `switch` better than `if...elseif`? | B | B | ✅ |

**Result: 10/10 (90%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `switch`, `case`, `break`, `default`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure

```
16-switch/
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