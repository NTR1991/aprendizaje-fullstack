# 📘 PHP If...Else

## 📋 Description

A PHP script demonstrating advanced conditional logic using `if`, `else`, and `elseif` statements in real-world business scenarios, including retail discounts, employee performance evaluations, and insurance policy calculations.

---

## 🎯 Learning Objectives

- Understanding advanced `if...elseif...else` structures
- Using logical operators (`&&`, `||`, `!`) in conditions
- Nesting `if` statements for complex logic
- Combining multiple conditions with `&&` and `||`
- Using `isset()` and `empty()` for form validation
- Applying conditional logic in real-world business scenarios
- Comparing `if...else` with `switch` for different use cases

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Retail Store Discount System**
   A retail store needs to apply discounts based on customer category and purchase amount.

   Input:
   ```
   $monto = 250;
   $categoriaCliente = "vip";  // "regular", "premium", "vip"
   ```

   Business rules:
   - Regular customer: 0% discount
   - Premium customer: 10% discount
   - VIP customer: 20% discount
   - Extra discount: If amount > 200 and customer is VIP or Premium → 5% extra

   Tasks to perform:
   - Use `if...elseif...else` to assign base discount
   - Use nested `if` for extra discount
   - Calculate and display final price

---

### 🟡 Intermediate Level (1 exercise)

1. **Employee Performance Evaluation System**
   An HR company needs to classify employees based on performance score, years of experience, and goal completion.

   Input:
   ```
   $puntuacion = 85;
   $experiencia = 5;
   $cumpleObjetivos = true;
   ```

   Business rules:
   - Classification by score: 90-100 "Excelente", 70-89 "Bueno", 50-69 "Regular", 0-49 "Insuficiente"
   - Experience bonus: >= 5 years +10%, >= 3 years +5%, < 3 years 0%
   - Goal bonus: If goals met +5%
   - Calculate total bonus and final salary (base salary: 1500 €)

---

### 🔴 Difficult Level (1 exercise)

1. **Auto Insurance Policy Calculator**
   An insurance company needs to calculate the cost of a car insurance policy based on multiple factors.

   Input:
   ```
   $edad = 25;
   $anosCarnet = 3;
   $tipoVehiculo = "deportivo";  // "deportivo", "sedan", "furgoneta"
   $siniestros = 1;
   $zona = "urbana";  // "urbana", "rural"
   ```

   Business rules:
   - Base cost: 500 €
   - Age surcharge: 18-25 +30%, 26-35 +15%, 36-50 +5%, 51+ 0%
   - License years surcharge: <2 +20%, 2-5 +10%, >5 0%
   - Vehicle type surcharge: deportivo +25%, sedan +10%, furgoneta +15%
   - Claims surcharge: 0 claims 0%, 1 claim +10%, 2+ +25%
   - Zone discount: rural -10%, urbana 0%
   - Good driver discount: if license >= 5 years and 0 claims → -5%
   - Calculate final policy cost

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What keyword is used to start an `if` statement in PHP? | A) `if` |
| 2 | What keyword is used to add an alternative condition? | B) `elseif` |
| 3 | What keyword is used for the fallback option? | C) `else` |
| 4 | What logical operator means "AND"? | B) `&&` |
| 5 | What logical operator means "OR"? | A) `||` |
| 6 | What operator checks if a variable exists? | B) `isset()` |
| 7 | What operator checks if a variable is empty? | D) `empty()` |
| 8 | Is it possible to nest `if` statements inside other `if` statements? | A) Yes |
| 9 | What is the output with `$edad = 25`? | B) 30% |
| 10 | When is `switch` better than `if...elseif`? | B) When comparing a single variable against many values |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What keyword starts an `if` statement? | | A | ✅ |
| 2 | What keyword adds an alternative condition? | | B | ✅ |
| 3 | What keyword is the fallback option? | | C | ✅ |
| 4 | What logical operator means "AND"? | | B | ✅ |
| 5 | What logical operator means "OR"? | | A | ✅ |
| 6 | What operator checks if a variable exists? | | B | ✅ |
| 7 | What operator checks if a variable is empty? | | D | ✅ |
| 8 | Can you nest `if` statements? | | A | ✅ |
| 9 | What is the output with `$edad = 25`? | | B | ✅ |
| 10 | When is `switch` better than `if...elseif`? | | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `if`, `else`, `elseif`, `&&`, `||`, `!`, `isset()`, `empty()`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure

```
15-if-else/
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