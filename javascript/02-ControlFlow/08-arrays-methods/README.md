# 📘 Topic 7 – Objects in JavaScript

---

## 📋 Description

Working with objects: creation, properties, methods, destructuring, and real-world use cases.

---

## 🎯 Learning Objectives

- Create and manipulate objects
- Access and modify properties
- Use object methods and `this`
- Apply destructuring
- Iterate objects with `for...in`

---

## 📝 Exercises (Real-World Scenarios)

### 🟢 Normal Level

1. **User Profile**  
   Create an object `user` with properties `name`, `email`, and `age`. Log a welcome message using the object.

---

### 🟡 Intermediate Level

1. **Product Value**  
   Create an object `product` with `name`, `price`, and `stock`. Add a method `totalValue` that returns `price * stock`. Log the result.

---

### 🔴 Difficult Level

1. **Shopping Cart**  
   Create an object `cart` with:
   - `items` array
   - `addItem(name, price)` – adds a product
   - `removeItem(name)` – removes a product by name
   - `total()` – returns total price

   Add 3 products, remove one, and show the total.

---

## 🧪 Test (10 questions)

1. What is an object in JavaScript?
2. How do you access a property with dot notation?
3. How do you add a new property to an existing object?
4. What is a method inside an object?
5. What does `this` refer to inside an object method?
6. What is object destructuring?
7. How do you modify an existing property value?
8. What is the difference between `object.property` and `object["property"]`?
9. How do you iterate over an object's properties?
10. Write code to create a `person` object with `name` and `age`, and a `greet` method that returns `"Hello, I'm [name]"`.

---

## ✅ Test Answers

| # | Question | Answer |
|---|----------|--------|
| 1 | What is an object in JavaScript? | A collection of related data organized in key-value pairs. |
| 2 | How do you access a property with dot notation? | `object.propertyName` |
| 3 | How do you add a new property to an existing object? | `object.newProperty = value` |
| 4 | What is a method inside an object? | A function that belongs to the object and can access its properties with `this`. |
| 5 | What does `this` refer to inside an object method? | It refers to the object itself. |
| 6 | What is object destructuring? | A way to extract object properties into individual variables: `const { prop1, prop2 } = obj` |
| 7 | How do you modify an existing property value? | `object.property = newValue` |
| 8 | Difference between `object.property` and `object["property"]`? | Both access the same property. Dot notation is more common; bracket notation is used for dynamic keys or special characters. |
| 9 | How do you iterate over an object's properties? | Using `for...in` loop. |
| 10 | Write code for a `person` object with `name`, `age`, and `greet` method. | `const person = { name: "Ana", age: 28, greet() { return "Hello, I'm " + this.name; } };` |

---

## 🛠️ Technologies Used

- **JavaScript (ES6+)**
- **VS Code**
- **Git & GitHub**

---

## 📂 Folder Structure
````
07-objects/
├── index.html
├── css/
│ └── style.css
├── js/
│ └── main.js
└── README.md
````

---

## 👤 Author

**NTR1991** – Full Stack Developer in training | FP DAW Student

---

## 📅 Date

June 2026