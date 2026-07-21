# 📘 PHP Superglobals

## 📋 Description

A PHP script demonstrating the use of predefined global variables (superglobals) in real-world business scenarios, including server information retrieval, URL parameter handling, form data processing, session management, and cookie handling.

---

## 🎯 Learning Objectives

- Understanding PHP superglobals
- Using `$_SERVER` to get server information
- Using `$_GET` to retrieve URL parameters
- Using `$_POST` to retrieve form data
- Using `isset()` and `empty()` for validation
- Using null coalescing operator (`??`) for default values
- Applying superglobals in real-world scenarios

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Server Information Display**
   An administration system needs to display server and user information using `$_SERVER`.

   Tasks to perform:
   - Display the user's IP address (`REMOTE_ADDR`)
   - Display the user's browser (`HTTP_USER_AGENT`)
   - Display the current script name (`SCRIPT_NAME`)
   - Display the request method (`REQUEST_METHOD`)
   - Display the server name (`SERVER_NAME`)

---

### 🟡 Intermediate Level (1 exercise)

1. **URL Parameter Processing**
   An administration system needs to process data sent via URL using `$_GET`.

   Input:
   ````
   $_GET['id'] = 15;
   $_GET['categoria'] = "electronica";
   $_GET['activo'] = "true";
   ````

   
Tasks to perform:
- Retrieve ID from URL using `$_GET`
- Retrieve category from URL using `$_GET`
- Retrieve active status from URL using `$_GET`
- Verify if ID exists using `isset()`
- Assign a default value using `??` (null coalescing)
- Display all values

---

### 🔴 Difficult Level (1 exercise)

1. **User Registration Form Processing**
A company needs to process user registration form data using `$_POST`, validate it, and display a summary.

Input:
````
$_POST['nombre'] = "Ana Perez";
$_POST['email'] = "ana@email.com";
$_POST['edad'] = "28";
$_POST['telefono'] = "612345678";
$_POST['acepta_terminos'] = "on";
````



Tasks to perform:
- Retrieve form data using `$_POST`
- Validate required fields are not empty:
  - Name
  - Email
  - Age (must be over 18)
  - Accept terms
- Display a summary with all user data
- Use `isset()` and `empty()` for validations

---

### 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What superglobal is used to get data sent via URL? | B) `$_GET` |
| 2 | What superglobal is used to get form data with POST method? | A) `$_POST` |
| 3 | What superglobal contains server and environment information? | D) `$_SERVER` |
| 4 | What superglobal is used to maintain data between pages? | C) `$_SESSION` |
| 5 | What function checks if a variable exists in PHP? | B) `isset()` |
| 6 | What function checks if a variable is empty in PHP? | A) `empty()` |
| 7 | How to get the value of a GET parameter called `"id"`? | A) `$_GET['id']` |
| 8 | How to check if a GET parameter called `"nombre"` exists? | A) `isset($_GET['nombre'])` |
| 9 | What superglobal is used to store preferences in the user's browser? | B) `$_COOKIE` |
| 10 | What is the output with `?nombre=Ana`? | B) Ana |

---

### ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What superglobal is used to get data sent via URL? | B | B | ✅ |
| 2 | What superglobal is used to get form data with POST method? | A | A | ✅ |
| 3 | What superglobal contains server information? | D | D | ✅ |
| 4 | What superglobal maintains data between pages? | C | C | ✅ |
| 5 | What function checks if a variable exists? | B | B | ✅ |
| 6 | What function checks if a variable is empty? | A | A | ✅ |
| 7 | How to get the value of a GET parameter called `"id"`? | A | A | ✅ |
| 8 | How to check if a GET parameter called `"nombre"` exists? | A | A | ✅ |
| 9 | What superglobal stores preferences in the user's browser? | B | B | ✅ |
| 10 | What is the output with `?nombre=Ana`? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **PHP** – Core language, `$_SERVER`, `$_GET`, `$_POST`, `isset()`, `empty()`, `??`
- **HTML5** – Structure
- **CSS3** – Styling

---

## 📂 Folder Structure

```
21-superglobals/
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
```

