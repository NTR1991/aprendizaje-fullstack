# 📘 MultipleExceptions

## 📋 Description

A simple Java program that demonstrates handling multiple exceptions using multiple `catch` blocks.

---

## 📝 Exercise Statement

Write a program that asks the user for two integer numbers and divides the first by the second. The program must handle the following errors:

1. If the user enters text instead of a number, catch `NumberFormatException` and display: `"Error: Introduce numeros validos"`.
2. If the user enters 0 as the second number, catch `ArithmeticException` and display: `"Error: No se puede dividir entre 0"`.

**Requirements:**

- Use `Scanner` to read user input.
- Convert inputs to `int` using `Integer.parseInt()`.
- Perform the division.
- Handle `NumberFormatException` and `ArithmeticException` with separate `catch` blocks.
- Use `Integer.parseInt()` (not `Double`).

---

## 📊 Expected Output

| Input         | Output                              |
|---------------|-------------------------------------|
| `10` and `2`  | `Resultado: 5`                      |
| `10` and `0`  | `Error: No se puede dividir entre 0`|
| `hola` and `5`| `Error: Introduce numeros validos`  |

---

## 🎯 Learning Objectives

- Understanding multiple `catch` blocks for different exceptions.
- Using `Integer.parseInt()` to convert `String` to `int`.
- Handling `NumberFormatException` and `ArithmeticException` separately.
- Understanding the order of `catch` blocks (specific to general).

---

## 🛠️ Technologies Used

- Java – Core language, `Scanner`, `try-catch`, `Integer.parseInt()`

---

## 📂 Folder Structure
````
06-errors-files/
└── 44_MultipleExceptions/
├── 44_MultipleExceptions.java
└── README.md
````

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

---

## 📅 Date

June 2026


