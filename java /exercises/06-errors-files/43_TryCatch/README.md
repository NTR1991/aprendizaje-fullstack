# 📘 TryCatch

## 📋 Description

A simple Java program that demonstrates the use of `try-catch` to handle `NumberFormatException` when converting user input to a number.

---

## 📝 Exercise Statement

Write a program that asks the user for an amount in euros and converts it to dollars. The program must handle the case where the user enters text instead of a number, displaying an error message instead of crashing.

**Requirements:**

- Use `Scanner` to read user input.
- Use `Double.parseDouble()` to convert the input.
- If the input is not a valid number, catch `NumberFormatException` and display: `"Error: Introduce un numero valido"`.
- If the input is valid, display the result in dollars (1 euro = 1.10 dollars).

---

## 📊 Expected Output

| Input  | Output |
|--------|--------|
| `10`   | `El valor en dolares es: 11.0` |
| `hola` | `Error: Introduce un numero valido` |

---

## 🎯 Learning Objectives

- Understanding `try-catch` for exception handling.
- Using `Double.parseDouble()` to convert `String` to `double`.
- Handling `NumberFormatException` gracefully.

---

## 🛠️ Technologies Used

- Java – Core language, `Scanner`, `try-catch`

---

## 📂 Folder Structure
````
06-errors-files/
└── 43_TryCatch/
├── 43_TryCatch.java
└── README.md
````


---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

---

## 📅 Date

June 2026
