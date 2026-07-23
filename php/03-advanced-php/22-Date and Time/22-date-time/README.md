# 📘 PHP Date and Time

## 📋 Description

A PHP script demonstrating the use of date and time functions in real-world business scenarios, including order date formatting, employee seniority calculation, and shipping date calculation with business days.

---

## 🎯 Learning Objectives

- Using `date()` to format dates and times
- Using `time()` to get the current timestamp
- Using `strtotime()` to convert strings to timestamps
- Using `date_default_timezone_set()` to set timezone
- Using `DateTime` and `DateInterval` for date calculations
- Using `diff()` to calculate differences between dates
- Calculating business days (skipping weekends)
- Applying date functions in real-world business scenarios

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Order Date Management**
   An online store needs to display order dates in different formats and calculate delivery dates.

   Input:
   ````
   $fechaPedido = "2026-07-22";
   ````
   
Tasks to perform:
- Display the order date in Spanish format (`d/m/Y`)
- Display the order date in ISO format (`Y-m-d`)
- Display the day of the week of the order date
- Calculate the delivery date (adding 5 days)
- Calculate the payment date (adding 15 days)
- Display the remaining delivery time in days

---

### 🟡 Intermediate Level (1 exercise)

1. **Employee Seniority Calculator**
A company needs to calculate employee seniority and days until their next birthday.

Input:
````
$fechaContratacion = "2020-03-15";
$fechaNacimiento = "1995-06-15";
$fechaActual = "2026-07-23";
````


Tasks to perform:
- Calculate employee seniority in years, months, and days
- Calculate total days since hiring
- Calculate days until the next birthday
- Calculate current age of the employee
- Display all results with `echo`

---

### 🔴 Difficult Level (1 exercise)

1. **Shipping Date Calculator**
A shipping company needs to calculate delivery dates, payment deadlines, and business days for orders.

Input:
````
$fechaPedido = "2026-07-23";
$diasEntrega = 5;
$diasPago = 15;
$diasHabiles = true;
````


Business rules:
- Delivery is calculated using business days (Monday to Friday)
- Payment is calculated using calendar days (all days)
- Business days exclude Saturdays and Sundays
- Display delivery and payment dates in Spanish format

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What function is used to format a date in PHP? | B) `date()` |
| 2 | What function returns the current timestamp? | B) `time()` |
| 3 | What function converts a string to a timestamp? | C) `strtotime()` |
| 4 | What function sets the timezone in PHP? | A) `date_default_timezone_set()` |
| 5 | What date format shows the year with 4 digits? | B) `Y` |
| 6 | What is the result of `date('d/m/Y', strtotime('2026-07-22'))`? | B) `22/07/2026` |
| 7 | How to add 5 days using `strtotime()`? | A) `strtotime('+5 days')` |
| 8 | What class is used for advanced date calculations? | B) `DateTime` |
| 9 | What method calculates the difference between two dates? | A) `diff()` |
| 10 | What is the result of `date('l', strtotime('2026-07-22'))`? | C) `Wednesday` |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What function formats a date? | B | B | ✅ |
| 2 | What function returns the current timestamp? | B | B | ✅ |
| 3 | What function converts text to timestamp? | C | C | ✅ |
| 4 | What function sets the timezone? | A | A | ✅ |
| 5 | What format shows year with 4 digits? | B | B | ✅ |
| 6 | Result of `date('d/m/Y', strtotime('2026-07-22'))`? | B | B | ✅ |
| 7 | How to add 5 days with `strtotime()`? | A | A | ✅ |
| 8 | What class is for advanced calculations? | B | B | ✅ |
| 9 | What method calculates difference? | A | A | ✅ |
| 10 | Result of `date('l', strtotime('2026-07-22'))`? | C | C | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `date()`, `time()`, `strtotime()`, `date_default_timezone_set()`, `DateTime`, `DateInterval`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure

```
22-date-time/
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

