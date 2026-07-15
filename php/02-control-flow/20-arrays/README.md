# 📘 PHP Arrays

## 📋 Description

A PHP script demonstrating the use of indexed, associative, and multidimensional arrays in real-world business scenarios, including product management, employee data management, and sales commission calculations.

---

## 🎯 Learning Objectives

- Understanding indexed arrays
- Understanding associative arrays
- Understanding multidimensional arrays
- Accessing and modifying array elements
- Using array functions like `print_r()`, `count()`, `array_push()`, `array_pop()`
- Iterating arrays with `foreach`
- Nested loops with multidimensional arrays
- Applying arrays in real-world business scenarios

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Product Management System**
   A store needs to manage its product list using arrays.

   Input:
   ````
   $productos = ["Portatil", "Raton", "Teclado", "Monitor", "Auriculares"];
   ````

Tasks to perform:
- Display the original array using `print_r()`
- Add a new product "Camara Web" to the end using `array_push()`
- Remove the last product using `array_pop()`
- Display the product at position 2 (Teclado)
- Display the total number of products using `count()`
- Iterate the array with `foreach` and display each product

---

### 🟡 Intermediate Level (1 exercise)

1. **Employee Management System**
A company needs to manage employee data using associative arrays.

Input:
````
$empleados = [
["nombre" => "Ana", "edad" => 28, "salario" => 2500],
["nombre" => "Carlos", "edad" => 35, "salario" => 3200],
["nombre" => "Elena", "edad" => 42, "salario" => 3800]
];
````

Tasks to perform:
- Display the original array using `print_r()`
- Add a new employee: "Luis", 30 years old, salary 2800
- Display Ana's salary
- Find the youngest employee using a loop
- Calculate the average salary
- Display all employees with their name and salary using `foreach`

---

### 🔴 Difficult Level (1 exercise)

1. **Sales Commission System**
A sales company needs to manage sales data and calculate commissions for each seller.

Input:
````
$vendedores = [
"Ana" => ["ventas" => [1200, 1500, 1300, 1400], "comision" => 10],
"Carlos" => ["ventas" => [900, 1100, 1000, 1200], "comision" => 12],
"Elena" => ["ventas" => [1600, 1800, 1700, 1900], "comision" => 15]
];
````


Tasks to perform:
- Display the original array using `print_r()`
- Calculate the total sales for each seller
- Calculate the commission for each seller (total sales * commission / 100)
- Display a summary with:
  - Seller name
  - Total sales
  - Commission earned

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What type of array uses numbers as indexes? | B) Indexed array |
| 2 | What type of array uses custom keys (strings)? | B) Associative array |
| 3 | What is the correct way to create an indexed array? | D) A and B are correct |
| 4 | How to access the first element of an indexed array? | B) `$colores[0]` |
| 5 | What function adds an element to the end of an array? | B) `array_push()` |
| 6 | What function removes the last element of an array? | A) `array_pop()` |
| 7 | What function returns the number of elements in an array? | D) A and B are correct |
| 8 | What is the correct way to create an associative array? | D) A and B are correct |
| 9 | What is the output with `array_push()` and `count()`? | B) 4 |
| 10 | What is the output of `$colores[1]`? | B) azul |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What type of array uses numbers as indexes? | B | B | ✅ |
| 2 | What type of array uses custom keys? | B | B | ✅ |
| 3 | Correct way to create an indexed array? | D | D | ✅ |
| 4 | How to access the first element? | B | B | ✅ |
| 5 | What function adds to the end? | B | B | ✅ |
| 6 | What function removes the last element? | A | A | ✅ |
| 7 | What function counts elements? | D | D | ✅ |
| 8 | Correct way to create an associative array? | D | D | ✅ |
| 9 | Output with `array_push()` and `count()`? | B | B | ✅ |
| 10 | What is the output of `$colores[1]`? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `print_r()`, `count()`, `array_push()`, `array_pop()`, `foreach`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure

```
20-arrays/
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



