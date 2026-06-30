# 📘 PHP Magic Constants

## 📋 Description

A PHP script demonstrating the use of predefined magic constants in real-world business scenarios, including debugging, logging, and application monitoring. Magic constants automatically change their value depending on where they are used.

---

## 🎯 Learning Objectives

- Understanding the concept of magic constants in PHP
- Using `__LINE__` to get the current line number
- Using `__FILE__` to get the full file path
- Using `__DIR__` to get the current directory
- Using `__FUNCTION__` to get the current function name
- Using `__CLASS__` to get the current class name
- Using `__METHOD__` to get the current class and method name
- Using `__NAMESPACE__` to get the current namespace
- Creating logging and debugging systems using magic constants

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Debugging Information Display**
   A development company needs to display debugging information to understand where code is being executed. You must use magic constants to show this information.

   Tasks to perform:

   ````
   - Display the current line number using `__LINE__`
   - Display the full file path using `__FILE__`
   - Display the current directory using `__DIR__`
   - Display the current function name using `__FUNCTION__` (inside a function)
   - Display the current class name using `__CLASS__` (inside a class)
   - Display the current method name using `__METHOD__` (inside a class)
   - Display the current namespace using `__NAMESPACE__`
   ````

---

### 🟡 Intermediate Level (1 exercise)

1. **Simple Logger System**
   A logging and monitoring company needs a system that automatically records debugging information. You must create a simple system that shows where each part of the code is executed.

   Tasks to perform:

   ````
   - Create a function `logger($mensaje)` that receives a message and displays:
     - The message
     - The current file (`__FILE__`)
     - The current line (`__LINE__`)
     - The current function (`__FUNCTION__`)
   - Create a class `Logger` with:
     - An `info($mensaje)` method that displays the message with `__CLASS__` and `__METHOD__`
     - An `error($mensaje)` method that displays the message with `__CLASS__` and `__METHOD__`
   - Test the function and class with different messages
   ````

---

### 🔴 Difficult Level (1 exercise)

1. **Advanced Debugger System**
   An advanced debugging company needs a logging system that automatically records:

   - The file where the code is executed (`__FILE__`)
   - The line where it is executed (`__LINE__`)
   - The function or method where it is executed (`__FUNCTION__`, `__METHOD__`)
   - The class where it is executed (`__CLASS__`)
   - The current date and time (using `date()`)

   Tasks to perform:
   ````
   - Create a function `debug($mensaje, $nivel)` that:
     - Receives a message and a debug level (`INFO`, `WARNING`, `ERROR`)
     - Displays: `[DATE] [LEVEL] Message - File: [file] - Line: [line] - Function: [function]`
     - Uses `date('Y-m-d H:i:s')` for the date
   - Create a class `Debugger` with:
     - A `log($mensaje, $nivel)` method that does the same as the function but with `__CLASS__` and `__METHOD__`
     - An `info($mensaje)` method that calls `log()` with level `INFO`
     - A `warning($mensaje)` method that calls `log()` with level `WARNING`
     - An `error($mensaje)` method that calls `log()` with level `ERROR`
   - Test the function and class with different messages and levels

  ````

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What magic constant shows the current line number? | B) `__LINE__` |
| 2 | What magic constant shows the full file path? | A) `__FILE__` |
| 3 | What magic constant shows the current directory? | C) `__DIR__` |
| 4 | What magic constant shows the current function name? | D) `__FUNCTION__` |
| 5 | What magic constant shows the current class name? | A) `__CLASS__` |
| 6 | What magic constant shows the current class and method name? | B) `__METHOD__` |
| 7 | What magic constant shows the current namespace? | D) `__NAMESPACE__` |
| 8 | What is the correct syntax for a magic constant? | C) `__LINE__` |
| 9 | Are magic constants defined by the programmer or by PHP? | B) By PHP automatically |
| 10 | Where can magic constants be used? | C) Anywhere in the code |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What magic constant shows the current line number? | B | B | ✅ |
| 2 | What magic constant shows the full file path? | A | A | ✅ |
| 3 | What magic constant shows the current directory? | C | C | ✅ |
| 4 | What magic constant shows the current function name? | D | D | ✅ |
| 5 | What magic constant shows the current class name? | A | A | ✅ |
| 6 | What magic constant shows the current class and method name? | B | B | ✅ |
| 7 | What magic constant shows the current namespace? | D | D | ✅ |
| 8 | What is the correct syntax for a magic constant? | C | C | ✅ |
| 9 | Are magic constants defined by the programmer or by PHP? | B | B | ✅ |
| 10 | Where can magic constants be used? | C | C | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `__LINE__`, `__FILE__`, `__DIR__`, `__FUNCTION__`, `__CLASS__`, `__METHOD__`, `__NAMESPACE__`, `date()`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure
````
11-magic-constants/
├── css/
│ └── style.css
├── php/
│ └── main.php
├── index.html
└── README.md
`````


---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026