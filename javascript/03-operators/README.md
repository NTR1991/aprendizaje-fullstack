# Topic 3: Operators in JavaScript

---

## 📋 Description

Practice with arithmetic operators (+, -, *, /, %), comparison operators (==, ===, !=, !==, >, <, >=, <=), and logical operators (&&, ||, !).

---

## 📁 Folder Structure
````
03-operators/
├── index.html
├── css/
│ └── style.css
├── js/
│ └── main.js
└── README.md

````

---

## 📊 Exercises & Results

```javascript
# Exercise 1 (Arithmetic operators):

let a = 15;
let b = 4;

console.log(a + b);
console.log(a - b);
console.log(a * b);
console.log(a / b);
console.log(a % b);

Output: 19, 11, 60, 3.75, 3

# Exercise 2 (Comparison operators):

let p = 20;
let q = "20";

console.log(p == q);
console.log(p === q);
console.log(p != q);
console.log(p !== q);
console.log(p > q);
console.log(p < q);
console.log(p >= q);
console.log(p <= q);

Output: true, false, false, true, false, false, true, true

# Exercise 3 (Logical operators):

let verdadero = true;
let falso = false;

console.log(verdadero && verdadero);
console.log(verdadero && falso);
console.log(verdadero || falso);
console.log(falso || falso);
console.log(!verdadero);
console.log(!falso);

Output: true, false, true, false, false, true
````

🧪 Key Learnings
% returns the remainder of a division.

== compares only value (converts types).

=== compares value AND type (safer).

&& returns true only if both are true.

|| returns true if at least one is true.

! inverts the value: !true → false, !false → true.

✅ Test Answers
%

== compares only value; === compares value and type.

false

||

false

👨‍💻 Author
NTRJ1991 – Full Stack Development (in training)

📅 Date
June 2026