# 📝 Registration Form

## 📋 Description

A JavaScript program that asks the user for their name, age, country, and hobby using `prompt()`, and displays a summary along with the current date and time in an `alert()` and in the console.

---

## 🎯 Project Objective

Create a simple interactive registration program that collects user data and displays a formatted summary with timestamp, demonstrating key JavaScript concepts: user input, date handling, and output methods.

---

## 🛠️ Technologies Used

- **HTML5**
- **JavaScript** (`prompt`, `Date`, `alert`, `console.log`)

---

## 📁 Folder Structure

```
14-js-registration-form/
├── index.html
└── README.md
```

---

## 🧮 How It Works

1. The program asks the user for:
   - **Name**
   - **Age**
   - **Country**
   - **Hobby**
2. It retrieves the current date and time from the device using the `Date` object.
3. It builds a personalized message with the entered data and the timestamp.
4. The message is displayed in an `alert()` popup and also logged to the console.

---

## 📊 Example Output (alert)

```
Gracias Pepe
Has registrado los siguientes datos:
Tienes 45 años, eres de España. Tu Hobby es: Cocinar.
Fecha de Registro:
Madrid 21, Mayo, 2026
Hora: 19:30:38
```

**Console Output (same content):**
```
Gracias Pepe
Has registrado los siguientes datos:
Tienes 45 años, eres de España. Tu Hobby es: Cocinar.
Fecha de Registro:
Madrid 21, Mayo, 2026
Hora: 19:30:38
```

---

## 💡 Code Breakdown

### Date Handling

```javascript
const now = new Date();
const day = now.getDate();
const month = months[now.getMonth()];
const year = now.getFullYear();
const hours = now.getHours();
const minutes = now.getMinutes();
const seconds = now.getSeconds();
```

### String Concatenation

```javascript
const message = 
    "Gracias " + name + "\n" +
    "Has registrado los siguientes datos:\n" +
    "Tienes " + age + " años, eres de " + country + ". Tu Hobby es: " + hobby + ".\n" +
    "Fecha de Registro:\n" +
    city + " " + day + ", " + month + ", " + year + "\n" +
    "Hora: " + hours + ":" + minutes + ":" + seconds;
```

---

## 📚 Concepts Applied

| Concept | Usage |
| :--- | :--- |
| `prompt()` | User input collection |
| `Date()` object | Getting current date and time |
| `getDate()`, `getMonth()`, `getFullYear()` | Extracting date components |
| `getHours()`, `getMinutes()`, `getSeconds()` | Extracting time components |
| Array for month names | Converting month number to name |
| String concatenation with `+` | Building the message |
| `\n` | Newline characters for formatting |
| `alert()` | Displaying popup message |
| `console.log()` | Output to console |

---

## 📚 Learning Objectives

- ✅ Using `prompt()` for user input
- ✅ Working with the `Date` object and its methods
- ✅ Using arrays for month names
- ✅ String concatenation with `+` and newline (`\n`)
- ✅ Displaying output with `alert()` and `console.log()`

---

## 🧪 Key Difference: `alert()` vs `console.log()`

| Method | Behavior | Best for |
| :--- | :--- | :--- |
| `alert()` | Blocks execution, shows popup | User-facing messages |
| `console.log()` | Non-blocking, outputs to developer console | Debugging and logging |

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

May 2026

---

*Registration form created as a personal JavaScript project*
