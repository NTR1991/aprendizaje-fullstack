# 💰 PHP Personal Finance

## 📋 Description

A personal finance management application built with PHP. It calculates total income, total expenses, net balance, and the percentage of each expense relative to the total. It also displays an alert based on the net balance.

---

## 🎯 Features

- Display total income
- Display total expenses
- Calculate net balance (income - expenses)
- Show each income and expense with formatted numbers
- Calculate and display percentage of each expense
- Show alert based on net balance:
  - Positive: "Buen trabajo: Tus ingresos superan tus gastos."
  - Negative: "ALERTA: Tus gastos superan tus ingresos."
  - Zero: "Estas en equilibrio: Gastos igual a ingresos."

---

## 🛠️ Technologies Used

- **PHP** – Core logic and calculations
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
17-php-personal-finance/
├── css/
│ └── style.css
├── php/
│ └── main.php
├── index.html
└── README.md
````


---

## 🚀 How to Run

1. Clone the repository or download the files.
2. Place the project folder in your local server (e.g., `htdocs` for XAMPP).
3. Open `index.html` in your browser.
4. The PHP script will execute and display the budget summary.

---

## 📊 Example Output
````
========= RESUMEN DEL PRESUPUESTO =========
Total ingresos: 2.650 €
Total gastos: 810 €
Saldo neto: 1.840 €
--- INGRESOS ---
salario: 1.800 €
freelance: 350 €
alquiler: 500 €
--- GASTOS ---
comida: 400 €
transporte: 120 €
ocio: 80 €
servicios: 150 €
seguro: 60 €
--- PORCENTAJE DE GASTOS ---
comida: 49.4%
transporte: 14.8%
ocio: 9.9%
servicios: 18.5%
seguro: 7.4%
--- ALERTA ---
Buen trabajo: Tus ingresos superan tus gastos.
`````



---

## 📝 Code Structure

### Data Input
````
php
$ingresos = [
    "salario" => 1800,
    "freelance" => 350,
    "alquiler" => 500
];

$gastos = [
    "comida" => 400,
    "transporte" => 120,
    "ocio" => 80,
    "servicios" => 150,
    "seguro" => 60
];
`````

---
### Key Functions Used

| Function | Purpose |
|----------|---------|
| `array_sum()` | Sum all values in an array |
| `foreach` | Loop through each element of an array |
| `number_format()` | Format numbers with thousands separator |
| `round()` | Round a number to a specified number of decimals |

---

## 📚 Concepts Learned

- PHP arrays (associative)
- Array functions (`array_sum`)
- Loops (`foreach`)
- Conditional statements (`if...elseif...else`)
- String concatenation
- Number formatting
- PHP variables and data types

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

July 2026