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

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

July 2026
