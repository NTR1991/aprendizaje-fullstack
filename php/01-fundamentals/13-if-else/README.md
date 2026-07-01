# 📘 PHP If...Else...Elseif

## 📋 Description

A PHP script demonstrating the use of conditional statements (`if`, `else`, `elseif`) in real-world business scenarios, including discount calculations, employee performance evaluations, and insurance policy cost calculations.

---

## 🎯 Learning Objectives

- Understanding the `if` statement for single conditions
- Using `else` for alternative outcomes
- Using `elseif` for multiple conditions
- Nesting `if` statements inside other `if` statements
- Using logical operators (`&&`, `||`, `!`) in conditions
- Using the ternary operator (`?:`) as a shorthand
- Using the null coalescing operator (`??`) for default values
- Applying conditional logic in real-world business scenarios

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Online Store Price Calculator**
   An online store needs to calculate the final price of a product applying discounts based on customer type.

   Input:
   ````
   $precioBase = 100;
   $tipoCliente = "vip";  // "vip", "regular", "nuevo"

   Business rules:
   - VIP customer: 20% discount
   - Regular customer: 10% discount
   - New customer: 5% discount
   - If the final price exceeds 100 €, apply an extra 5% discount

   Tasks to perform:
   - Use `if...elseif...else` to apply the discount based on customer type
   - Use `if` to apply the extra discount if the final price exceeds 100 €
   - Display the final price with all discounts applied
   ````

---

### 🟡 Intermediate Level (1 exercise)

1. **Employee Performance Evaluation**
   An HR company needs to classify employees based on performance and years of experience.

   Input:
   ````
   $puntuacion = 85;        // Performance score (0-100)
   $experiencia = 5;        // Years of experience
   $cumpleObjetivos = true; // Whether they meet objectives

   Business rules:
   - Classification by score: 90-100 "Excelente", 70-89 "Bueno", 50-69 "Regular", 0-49 "Insuficiente"
   - Bonus by experience: >= 5 years +10%, >= 3 years +5%, < 3 years 0%
   - Extra bonus: if $cumpleObjetivos is true +5%
   - Calculate total bonus and final salary (base salary: 1500 €)
   ````

---

### 🔴 Difficult Level (1 exercise)

1. **Insurance Policy Cost Calculator**
   An insurance company needs to calculate the cost of a car insurance policy based on multiple factors.

   Input:
   ````
   $edad = 25;
   $añosCarnet = 3;
   $tipoVehiculo = "deportivo";  // "deportivo", "sedan", "furgoneta"
   $siniestros = 1;
   $zona = "urbana";  // "urbana", "rural"

   Business rules:
   - Base cost: 500 €
   - Age surcharge: 18-25 +30%, 26-35 +15%, 36-50 +5%, 51+ 0%
   - License years surcharge: <2 +20%, 2-5 +10%, >5 0%
   - Vehicle type surcharge: deportivo +25%, sedan +10%, furgoneta +15%
   - Claims surcharge: 0 claims 0%, 1 claim +10%, 2+ +25%
   - Zone discount: rural -10%, urbana 0%
   - Good driver discount: if license >= 5 years and 0 claims → -5%
   ````

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What is the correct syntax for an `if` statement in PHP? | A) `if (condition) { // code }` |
| 2 | What does the following `if...else` structure do? | A) Displays based on age condition |
| 3 | What keyword is used to add multiple conditions in an `if` structure? | B) `elseif` |
| 4 | What is the output with `$nota = 75`? | B) Bueno |
| 5 | What logical operator checks that ALL conditions are true? | B) `&&` |
| 6 | What happens if no `else` is used in an `if` structure? | B) If false, nothing executes |
| 7 | What is the correct way to nest an `if` inside another `if`? | A) `if` inside `if` |
| 8 | What ternary operator is equivalent to the given `if...else`? | A) `? :` |
| 9 | What operator assigns a default value if a variable is `null`? | B) `??` |
| 10 | What is the output with `$x = 10`? | A) A |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | Correct syntax for `if`? | A | A | ✅ |
| 2 | What does `if...else` do? | A | A | ✅ |
| 3 | Keyword for multiple conditions? | B | B | ✅ |
| 4 | Output with `$nota = 75`? | B | B | ✅ |
| 5 | Logical operator for ALL true? | B | B | ✅ |
| 6 | What happens without `else`? | B | B | ✅ |
| 7 | Correct way to nest `if`? | A | A | ✅ |
| 8 | Ternary equivalent? | A | A | ✅ |
| 9 | Operator for default value if `null`? | B | B | ✅ |
| 10 | Output with `$x = 10`? | A | A | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `if`, `else`, `elseif`, `&&`, `||`, `!`, `?:`, `??`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
13-if-else/
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
