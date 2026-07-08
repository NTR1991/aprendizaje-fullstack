# 📘 Topic 9 – JSON in JavaScript

## 📋 Description

Working with JSON: converting objects to JSON strings and parsing JSON strings back to objects. Real-world scenarios include sending data to servers and receiving responses.

---

## 🎯 Learning Objectives

- Understand JSON structure and syntax
- Use `JSON.stringify()` to convert objects to JSON text
- Use `JSON.parse()` to convert JSON text to objects
- Combine JSON with array methods like `.filter()`

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level (1 exercise)

1. **Convert Object to JSON**

   Input:
   ```javascript
   const product = { name: "Keyboard", price: 45, inStock: true };
   ```

   Task:
   - Convert to JSON string using `JSON.stringify()`
   - Show the result in console

### 🟡 Intermediate Level (1 exercise)

1. **Parse JSON to Object**

   Input:
   ```javascript
   const userJSON = '{"name":"Maria","email":"maria@email.com","age":28}';
   ```

   Task:
   - Convert JSON string to object using `JSON.parse()`
   - Show the name in console

### 🔴 Difficult Level (1 exercise)

1. **Parse, Filter, and Stringify**

   Input:
   ```javascript
   const productsJSON = '[{"name":"Mouse","price":25},{"name":"Keyboard","price":80},{"name":"Monitor","price":300}]';
   ```

   Tasks:
   - Parse the JSON to an array
   - Filter products with price < 100
   - Convert the filtered array back to JSON
   - Show the result in console

---

## 🧪 Test (10 questions)

| # | Question | Correct Answer |
|---|----------|----------------|
| 1 | What does JSON stand for? | A |
| 2 | What method converts an object to JSON? | B |
| 3 | What method converts JSON to an object? | A |
| 4 | How are keys written in valid JSON? | C |
| 5 | Which is valid JSON? | C |
| 6 | What type does `JSON.parse()` return? | B |
| 7 | What type does `JSON.stringify()` return? | C |
| 8 | What happens if you parse invalid JSON? | B |
| 9 | Difference between JS object and JSON? | C |
| 10 | What method sends data to a server? | B |

---

## ✅ Test Results (NTR1991)

| # | Question | Your Answer | Correct Answer | Status |
|---|----------|-------------|----------------|--------|
| 1 | What does JSON stand for? | A | A | ✅ |
| 2 | What method converts an object to JSON? | B | B | ✅ |
| 3 | What method converts JSON to an object? | A | A | ✅ |
| 4 | How are keys written in valid JSON? | C | C | ✅ |
| 5 | Which is valid JSON? | C | C | ✅ |
| 6 | What type does `JSON.parse()` return? | B | B | ✅ |
| 7 | What type does `JSON.stringify()` return? | C | C | ✅ |
| 8 | What happens if you parse invalid JSON? | B | B | ✅ |
| 9 | Difference between JS object and JSON? | C | C | ✅ |
| 10 | What method sends data to a server? | B | B | ✅ |

**Result: 10/10 (100%)** ✅

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)**
- **HTML5**
- **CSS3**

---

## 📂 Folder Structure

```
09-json/
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