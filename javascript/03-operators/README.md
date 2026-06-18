# 3️⃣ Operators in JavaScript

## 📋 Description

Practice with arithmetic operators (`+`, `-`, `*`, `/`, `%`), comparison operators (`==`, `===`, `!=`, `!==`, `>`, `<`, `>=`, `<=`), and logical operators (`&&`, `||`, `!`).

---

## 📂 Folder Structure

```
03-operators/
├── index.html
├── css/
│   └── style.css
├── js/
│   └── main.js
└── README.md
```

---

## 📊 Exercises & Results

### Exercise 1: Arithmetic Operators

```javascript
let a = 15;
let b = 4;

console.log(a + b);
console.log(a - b);
console.log(a * b);
console.log(a / b);
console.log(a % b);
```

| Operation | Output |
| :--- | :--- |
| `a + b` | `19` |
| `a - b` | `11` |
| `a * b` | `60` |
| `a / b` | `3.75` |
| `a % b` | `3` |

---

### Exercise 2: Comparison Operators

```javascript
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
```

| Operation | Output |
| :--- | :--- |
| `p == q` | `true` |
| `p === q` | `false` |
| `p != q` | `false` |
| `p !== q` | `true` |
| `p > q` | `false` |
| `p < q` | `false` |
| `p >= q` | `true` |
| `p <= q` | `true` |

---

### Exercise 3: Logical Operators

```javascript
let verdadero = true;
let falso = false;

console.log(verdadero && verdadero);
console.log(verdadero && falso);
console.log(verdadero || falso);
console.log(falso || falso);
console.log(!verdadero);
console.log(!falso);
```

| Operation | Output |
| :--- | :--- |
| `verdadero && verdadero` | `true` |
| `verdadero && falso` | `false` |
| `verdadero || falso` | `true` |
| `falso || falso` | `false` |
| `!verdadero` | `false` |
| `!falso` | `true` |

---

## 🧪 Key Learnings

- **`%`** – Returns the remainder of a division.
- **`==`** – Compares only value (type conversion).
- **`===`** – Compares value AND type (safer).
- **`&&`** – Returns `true` only if both conditions are `true`.
- **`||`** – Returns `true` if at least one condition is `true`.
- **`!`** – Inverts the value: `!true` → `false`, `!false` → `true`.

---

## ✅ Self-Assessment Test (Answers)

| Question | Answer |
| :--- | :--- |
| 1. What operator returns the remainder of a division? | `%` |
| 2. Difference between `==` and `===`? | `==` compares only value; `===` compares value and type. |
| 3. What is the value of `(10 > 5) && (3 < 1)`? | `false` |
| 4. What is the logical operator for "OR"? | `||` |
| 5. What is the value of `!(10 === 10)`? | `false` |

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
