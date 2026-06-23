# 📘 PHP Variables

## 📋 Description

A PHP script demonstrating the declaration, assignment, and usage of variables with different data types in real-world business scenarios, including shipping cost calculations and event management systems.

---

## 🎯 Learning Objectives

- Declaring variables using the `$` symbol
- Assigning values to variables with the assignment operator (`=`)
- Understanding different data types: `string`, `int`, `float`
- Using variables in arithmetic operations (`+`, `-`, `*`, `/`, `%`)
- Concatenating variables with strings using the `.` operator
- Displaying formatted output with `echo`
- Using `date()` to display the current date
- Writing single-line (`//`) and multi-line (`/* */`) comments
- Avoiding variable name repetition in exercises

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Shipping Information System**
   A logistics company needs a system to register shipping information. Each shipment has the following data:
   - Tracking number (e.g., "LOG-2026-001")
   - Recipient name
   - Delivery address
   - City
   - Postal code (integer)
   - Package weight in kg (decimal)
   - Shipping cost (decimal)
   
   Create a PHP script that:
   - Declares variables for each data point with descriptive names.
   - Assigns real values to each variable.
   - Displays a complete shipping summary using `echo` and concatenation.

---

### 🟡 Intermediate Level (1 exercise)

1. **International Shipping Cost Calculator**
   The logistics company needs to calculate the total cost of an international shipment. In addition to weight and cost per kilo, consider:
   - **Insurance:** 5% of the shipping cost
   - **Management fees:** 2.50 € fixed
   - **Discount:** If the shipping cost is greater than 50 €, apply a 10% discount
   
   Create a PHP script that:
   - Uses variables from Exercise 1 (or creates new ones with unique names).
   - Calculates insurance, subtotal, discount (manual assignment, no `if/else`).
   - Calculates the final total.
   - Displays a complete summary with all calculations.

---

### 🔴 Difficult Level (1 exercise)

1. **Event and Banquet Cost Calculator**
   A hospitality company needs a system to calculate the cost of events and banquets. Each event has different factors that influence the final price:
   - Event name, number of guests, menu price per person
   - Event type: "wedding", "corporate", or "birthday"
   - Duration in hours
   
   Factors to consider:
   - **Base cost:** guests × menu price
   - **Event type surcharge:** wedding (+20%), corporate (+10%), birthday (+5%)
   - **Staff cost:** 15 € per hour (fixed)
   - **VAT:** 21% of the total
   
   Create a PHP script that:
   - Declares all variables with fixed values.
   - Calculates base cost, surcharges, staff cost, VAT, and final total.
   - Uses manual assignment for surcharges (no `if/else`).
   - Displays a complete breakdown with all concepts.

---

### 🧪 Test (10 questions)

1. **Variable declaration** – What is the correct way to declare a variable in PHP?
2. **Data types** – What data type is `45.50` in PHP?
3. **Concatenation** – What is the correct way to concatenate a variable in an `echo`?
4. **Assignment operator** – What symbol is used to assign a value to a variable in PHP?
5. **Operator precedence** – What is the result of `$total = 10 + 5 * 2;`?
6. **Date function** – What function is used to display the current date in PHP?
7. **Single-line comments** – What is the correct way to write a single-line comment in PHP?
8. **Multiplication operator** – What operator is used for multiplication in PHP?
9. **Semicolon** – What is missing from `echo "Hello world"`?
10. **Percentage calculation** – How do you calculate 21% of an amount in PHP?

---

## 🛠️ Technologies Used

- **PHP** – Core language, variables, arithmetic operations, date functions
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
03-variables/
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