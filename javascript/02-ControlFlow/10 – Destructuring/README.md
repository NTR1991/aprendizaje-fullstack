# 📘 Topic 10 – Destructuring in JavaScript

## 📋 Description

Practice extracting values from objects and arrays using destructuring syntax. Learn how to use default values, rename variables, and destructure nested objects.

---

## 🎯 Learning Objectives

- Use object destructuring to extract properties
- Use array destructuring to extract elements
- Set default values in destructuring
- Rename variables during destructuring
- Destructure nested objects and arrays

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **User Data Extraction**

   Input:
   ```javascript
   const user = { name: "Carlos", email: "carlos@email.com", age: 30 };
   ```

   Task:
   - Extract `name` and `email` using destructuring
   - Show the name in console

### 🟡 Intermediate Level (1 exercise)

1. **Color List with Default Value**

   Input:
   ```javascript
   const colors = ["red", "green"];
   ```

   Task:
   - Extract first and second colors
   - Set a default value `"blue"` for the third color
   - Show all three colors in console

### 🔴 Difficult Level (1 exercise)

1. **Nested Product Data**

   Input:
   ```javascript
   const product = {
       title: "Monitor",
       price: 300,
       specs: { size: "27 inch", resolution: "4K" }
   };
   ```

   Task:
   - Extract `title` as `nombre`
   - Extract `price` as `precio`
   - Extract `size` as `tamano`
   - Extract `resolution` as `resolucion`
   - Show all variables in console

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What symbol is used for object destructuring? | B (`{ }`) |
| 2 | What symbol is used for array destructuring? | A (`[ ]`) |
| 3 | Correct syntax to extract `name` and `age` from `user`? | B |
| 4 | How to assign a default value in destructuring? | A |
| 5 | How to rename a variable in destructuring? | A |
| 6 | How to extract the first color from an array? | B |
| 7 | Correct syntax to extract `name` and `age` from `user`? | B |
| 8 | What is nested destructuring? | D |
| 9 | What if `user` has no `age` and you use `age = 30`? | B |
| 10 | What variable holds the name when renaming? | B |

---

## ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What symbol is used for object destructuring? | B | B | ✅ |
| 2 | What symbol is used for array destructuring? | A | A | ✅ |
| 3 | Correct syntax to extract `name` and `age` from `user`? | B | B | ✅ |
| 4 | How to assign a default value in destructuring? | A | A | ✅ |
| 5 | How to rename a variable in destructuring? | A | A | ✅ |
| 6 | How to extract the first color from an array? | B | B | ✅ |
| 7 | Correct syntax to extract `name` and `age` from `user`? | B | B | ✅ |
| 8 | What is nested destructuring? | D | D | ✅ |
| 9 | What if `user` has no `age` and you use `age = 30`? | B | B | ✅ |
| 10 | What variable holds the name when renaming? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)**
- **HTML5**
- **CSS3**

---

## 📂 Folder Structure

```
10-destructuring/
├── css/
│   └── style.css
├── js/
│   └── main.js
├── index.html
└── README.md
```

---

## 👤 Author

*NTR1991 – Full Stack Developer in training | FP DAW Student*

## 📅 Date

July 2026