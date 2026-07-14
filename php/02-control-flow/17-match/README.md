# 📘 PHP Match

## 📋 Description

A PHP script demonstrating the use of the `match` expression introduced in PHP 8.0 as a more powerful and secure alternative to `switch` in real-world business scenarios, including shipping cost calculation, retail discounts, and insurance policy pricing.

---

## 🎯 Learning Objectives

- Understanding the `match` expression syntax
- Using `match` for strict comparison (`===`)
- Returning values directly with `match`
- Using `default` as a fallback option
- Using `match (true)` for boolean conditions
- Comparing `match` with `switch` and `if...elseif`
- Understanding `UnhandledMatchError` when no `default` is provided
- Applying `match` in real-world business scenarios

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Shipping Cost by Zone**
   An online store needs to display the shipping cost based on the delivery zone using `match`.

   Input:
   ```
   $zona = "europa";  // "europa", "america", "asia", "oceania"
   ```

   Business rules:
   - "europa": 10 €
   - "america": 25 €
   - "asia": 40 €
   - "oceania": 35 €
   - Other zones: 50 €

   Tasks to perform:
   - Use `match` to assign the shipping cost
   - Use `default` for zones not listed
   - Display the zone and cost

---

### 🟡 Intermediate Level (1 exercise)

1. **Retail Discount System**
   A retail store needs to apply discounts based on customer type and purchase amount using `match` and `if`.

   Input:
   ```
   $tipoCliente = "vip";  // "regular", "premium", "vip"
   $monto = 250;
   ```

   Business rules:
   - Base discount by customer type (using `match`):
     - Regular: 0%
     - Premium: 10%
     - VIP: 20%
   - Extra discount by amount (using `if`):
     - If amount > 200 € → 5% extra
   - Calculate final price applying both discounts

---

### 🔴 Difficult Level (1 exercise)

1. **Insurance Policy Calculator**
   An insurance company needs to calculate the cost of a policy based on coverage type, age, and good driver history using `match` and `if`.

   Input:
   ```
   $tipoCobertura = "completa";  // "basica", "completa", "premium"
   $edad = 35;
   $buenHistorial = true;
   ```

   Business rules:
   - Base cost by coverage (using `match`):
     - Basic: 300 €
     - Complete: 500 €
     - Premium: 800 €
   - Age surcharge (using `if...elseif...else`):
     - Age < 25: +20%
     - Age 25-40: +10%
     - Age > 40: +5%
   - Good driver discount (using `if`):
     - If `$buenHistorial` is true → 10% discount
   - Calculate final cost applying surcharge and discount

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What PHP 8.0 structure evaluates an expression and returns a value? | B) `match` |
| 2 | What type of comparison does `match` use? | B) Strict comparison (`===`) |
| 3 | What keyword is used as a fallback in `match`? | A) `default` |
| 4 | What is the correct syntax for `match`? | D) A and B are correct |
| 5 | What happens without `default` and no `case` matches? | B) Throws an error |
| 6 | What is the key difference between `match` and `switch`? | B) `match` returns a value directly |
| 7 | Can `match` be used with boolean conditions? | A) Yes, using `match (true)` |
| 8 | What is the output with `$valor = "5"`? | B) String |
| 9 | When is `match` better than `switch`? | A) When strict comparison and returning value are needed |
| 10 | What structure is safer to avoid type errors? | B) `match` |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What PHP 8.0 structure evaluates and returns a value? | B | B | ✅ |
| 2 | What type of comparison does `match` use? | B | B | ✅ |
| 3 | What keyword is used as a fallback in `match`? | A | A | ✅ |
| 4 | What is the correct syntax for `match`? | D | D | ✅ |
| 5 | What happens without `default` and no `case` matches? | B | B | ✅ |
| 6 | What is the key difference between `match` and `switch`? | B | B | ✅ |
| 7 | Can `match` be used with boolean conditions? | A | A | ✅ |
| 8 | What is the output with `$valor = "5"`? | B | B | ✅ |
| 9 | When is `match` better than `switch`? | A | A | ✅ |
| 10 | What structure is safer to avoid type errors? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `match`, `default`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure

```
17-match/
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