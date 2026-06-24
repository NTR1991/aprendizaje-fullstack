# 📘 PHP Echo / Print

## 📋 Description

A PHP script demonstrating the use of `echo` and `print` statements to display data in real-world business scenarios, including order summaries, purchase tickets, and restaurant invoices.

---

## 🎯 Learning Objectives

- Understanding the difference between `echo` and `print`
- Using `echo` with multiple parameters
- Using `print` with a single parameter
- Understanding the return value of `print` (always 1)
- Using double quotes (`"`) to interpret variables
- Using single quotes (`'`) for literal strings
- Concatenating strings with the `.` operator
- Displaying formatted output with line breaks (`\n` and `<br>`)

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Online Order Summary**
   An online store needs to display an order summary to its customers. The summary must include:
   - Order number
   - Customer name
   - Purchased products (3 products)
   - Subtotal
   - VAT (21%)
   - Final total
   
   Create a PHP script that:
   - Declares variables for each order detail.
   - Uses `echo` to display the summary.
   - Uses `print` at least once (to practice the difference).
   - Displays the result with professional formatting.

---

### 🟡 Intermediate Level (1 exercise)

1. **Electronics Store Purchase Ticket**
   An electronics store needs a detailed purchase ticket for its customers. The ticket must include:
   - Store name
   - Date and time of purchase
   - Product list (4 products with prices)
   - Subtotal
   - Discount (if applicable)
   - VAT (21%)
   - Final total
   - Payment method
   
   Create a PHP script that:
   - Declares variables for each data point.
   - Calculates subtotal, discount (manual assignment, no `if/else`), VAT, and final total.
   - Uses `echo` to display the full ticket.
   - Uses `print` at least twice.

---

### 🔴 Difficult Level (1 exercise)

1. **Restaurant Invoice Generator**
   A restaurant chain needs a system to generate detailed invoices for its orders. Each invoice must include:
   - Restaurant name and address
   - Invoice number
   - Date and time of order
   - Customer name
   - Dish list (4 dishes with prices)
   - Subtotal
   - Frequent customer discount (if applicable)
   - VAT (10% for food)
   - Tip (optional)
   - Final total
   - Payment method
   
   Create a PHP script that:
   - Declares variables for each invoice data point.
   - Calculates subtotal, discount, VAT, tip, and final total.
   - Uses `echo` to display the complete invoice with professional formatting (separators, lines, etc.).
   - Uses `print` at least twice.

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What is the main difference between `echo` and `print`? | B) print returns a value, echo does not |
| 2 | What is the correct syntax for `echo` with multiple parameters? | D) echo "Hola", " ", "Mundo"; |
| 3 | What is the correct syntax for `print`? | A) print "Hola"; |
| 4 | What happens when you use single quotes in `echo`? | A) Does not interpret variables |
| 5 | What is the result of `print "Hola";`? | B) 1 |
| 6 | What is the correct way to display a variable with `echo`? | A) echo "Hola $nombre"; |
| 7 | What does `echo "Hola<br>";` do? | A) Displays "Hola" with HTML line break |
| 8 | What is missing in `echo "Hola mundo"`? | C) Semicolon |
| 9 | What is the main use of `print`? | A) Display a single value |
| 10 | What is the output of `echo "Hola" . "Mundo";`? | B) "HolaMundo" |

---

## 🛠️ Technologies Used

- **PHP** – Core language, echo, print, concatenation
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
04-echo-print/
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