# 📘 DivisionSegura

## 📋 Description

A simple Java program that demonstrates the use of `try-catch` to handle `NumberFormatException` and manual validation with `if` to prevent division by zero when working with decimal numbers.

---

## 📝 Exercise Statement

Write a program that asks the user for two numbers and divides the first by the second. The program must handle two types of errors:

1. If the user enters text instead of a number, catch `NumberFormatException` and display: `"Error: Introduce numeros validos"`.
2. If the user enters 0 as the second number, display: `"Error: No se puede dividir entre 0"` (using an `if` statement, not a `catch` block, because `ArithmeticException` does not apply to `double`).

**Requirements:**

- Use `Scanner` to read user input.
- Convert inputs to `double` with `Double.parseDouble()`.
- Perform the division only if the second number is not 0.
- Handle `NumberFormatException` with `try-catch`.
- Validate division by zero with `if`.

---

## 📊 Expected Output

| Input         | Output                              |
|---------------|-------------------------------------|
| `10` and `2`  | `El resultado es: 5.0`              |
| `10` and `0`  | `Error: No se puede dividir entre 0`|
| `hola` and `5`| `Error: Introduce numeros validos`  |

---

## 🎯 Learning Objectives

- Understanding `try-catch` for exception handling.
- Using `Double.parseDouble()` to convert `String` to `double`.
- Handling `NumberFormatException` gracefully.
- Validating user input with `if` to prevent logical errors (division by zero).

---

## 🛠️ Technologies Used

- Java – Core language, `Scanner`, `try-catch`, `if` validation

---

## 📂 Folder Structure
````
06-errors-files/
└── 43_DivisionSegura/
├── 43_DivisionSegura.java
└── README.md
````


---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

---

## 📅 Date

June 2026
