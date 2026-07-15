# 📘 PHP Functions

## 📋 Description

A PHP script demonstrating the use of functions to create reusable code blocks in real-world business scenarios, including price calculations, salary calculations, and product pricing with multiple discount rules.

---

## 🎯 Learning Objectives

- Understanding function declaration and syntax
- Using parameters to pass data to functions
- Returning values from functions
- Using default parameter values
- Understanding variable scope inside functions
- Using `match` inside functions
- Using conditional logic inside functions
- Applying functions in real-world business scenarios

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Product Price Calculator**
   A store needs a function to calculate the final price of a product applying discount and VAT.

   Input:
   ````
   $precio = 150;
   $descuento = 20;
   $iva = 21;
   ````

   Tasks to perform:
   - Create a function `calcularPrecioFinal($precio, $descuento, $iva)`
   - Calculate price with discount: `$precio * (1 - $descuento / 100)`
   - Calculate price with VAT: `$precioConDescuento * (1 + $iva / 100)`
   - Return the final price
   - Call the function and display the result

---

### 🟡 Intermediate Level (1 exercise)

1. **Net Salary Calculator**
   An HR company needs a function to calculate the net salary of an employee after applying tax withholdings.

   Input:
   ````
   $salarioBruto = 2500;
   $retencionIRPF = 15;
   $seguridadSocial = 6.35;
   ````

   Tasks to perform:
   - Create a function `calcularSalarioNeto($salarioBruto, $irpf, $ss)`
   - Calculate IRPF deduction: `$salarioBruto * $irpf / 100`
   - Calculate Social Security deduction: `$salarioBruto * $ss / 100`
   - Calculate net salary: `$salarioBruto - $irpfAplicado - $ssAplicado`
   - Return the net salary
   - Call the function and display all results

---

### 🔴 Difficult Level (1 exercise)

1. **Product Pricing System**
   A product management company needs a function to calculate the final price applying discounts based on customer type and payment method.

   Input:
   ````
   $precioBase = 200;
   $tipoCliente = "premium";  // "regular", "premium", "vip"
   $metodoPago = "tarjeta";   // "tarjeta", "paypal", "transferencia"
   ````

   Business rules:
   - Customer discount: regular 0%, premium 10%, vip 20%
   - Payment surcharge: tarjeta +2%, paypal +3%, transferencia 0%
   - Special discount: if vip AND transferencia → +5% extra

   Tasks to perform:
   - Create a function `calcularPrecioFinal($precio, $cliente, $pago)`
   - Use `match` for customer discount
   - Use `match` for payment surcharge
   - Use `if` for special discount
   - Return the final price
   - Call the function and display results

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What keyword is used to create a function in PHP? | A) `function` |
| 2 | What keyword is used to return a value from a function? | C) `return` |
| 3 | What are the values passed to a function called? | B) Parameters |
| 4 | Can a function return multiple values? | B) No, only one |
| 5 | What happens if a function doesn't use `return`? | A) Returns `null` |
| 6 | Can a function have default parameter values? | A) Yes |
| 7 | What is the scope of a variable declared inside a function? | B) Local scope |
| 8 | How do you call a function in PHP? | A) `functionName()` |
| 9 | What is the output with `$precio = 100`? | B) 121 |
| 10 | What is a function? | B) Reusable block of code |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What keyword creates a function? | | A | ✅ |
| 2 | What keyword returns a value? | | C | ✅ |
| 3 | What are values passed to a function called? | | B | ✅ |
| 4 | Can a function return multiple values? | | B | ✅ |
| 5 | What happens without `return`? | | A | ✅ |
| 6 | Can a function have default parameter values? | | A | ✅ |
| 7 | What is the scope inside a function? | | B | ✅ |
| 8 | How to call a function? | | A | ✅ |
| 9 | What is the output with `$precio = 100`? | | B | ✅ |
| 10 | What is a function? | | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, functions, parameters, return, `match`, conditional logic
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure

```
19-functions/
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
