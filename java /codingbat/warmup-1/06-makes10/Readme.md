# 🔟 makes10

## 📋 Description

Return true if one of the numbers is 10 or if their sum is 10.

**Problem:** [CodingBat - makes10](https://codingbat.com/prob/p157733)

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- Either `a` is 10 (`a == 10`)
- OR `b` is 10 (`b == 10`)
- OR the sum of `a` and `b` is 10 (`a + b == 10`)

**Translation to Java:** `return a == 10 || b == 10 || a + b == 10;`

---

## 📝 Code

```java
public class Makes10 {
    public static boolean makes10(int a, int b) {
        return a == 10 || b == 10 || a + b == 10;
    }
}
````
Alternative (with if):

````java
public static boolean makes10(int a, int b) {
    if (a == 10 || b == 10 || a + b == 10) {
        return true;
    }
    return false;
}
````

---

## 📊 Examples

| a | b | `a == 10` | `b == 10` | `a + b == 10` | Result |
| :--- | :--- | :--- | :--- | :--- | :--- |
| `9` | `10` | `false` | `true` | `false` | ✅ `true` |
| `9` | `9` | `false` | `false` | `false` | ❌ `false` |
| `1` | `9` | `false` | `false` | `true` | ✅ `true` |
| `10` | `1` | `true` | `false` | `false` | ✅ `true` |
| `10` | `10` | `true` | `true` | `false` | ✅ `true` |
| `8` | `2` | `false` | `false` | `true` | ✅ `true` |

---

## 🎯 Learning Objectives

- Working with logical operators (`||`)
- Combining multiple conditions in a single return statement
- Returning boolean values directly (without `if` when possible)
- Understanding short-circuit evaluation (`||` stops when first condition is `true`)

---

## ⚠️ Common Mistakes

- Using `&&` (AND) instead of `||` (OR) – The condition is "at least one is true", not "all are true".
- Forgetting to check `a + b == 10` – The sum condition is required.
- Using `return true` and `return false` with `if` when a direct return is cleaner.

---

## 🛠️ Technologies Used

- **Java** – Boolean logic, conditionals, return statements, integer arithmetic

---

## 📂 Folder Structure

````
06-makes10/
├── Makes10.java
└── README.md
````

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
