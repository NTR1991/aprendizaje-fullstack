# 🔢 entre10y20

## 📋 Description

Returns `true` if the number is between 10 and 20 inclusive.

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- The number is greater than or equal to 10 (`n >= 10`)
- **AND** the number is less than or equal to 20 (`n <= 20`)

**Translation to Java:** `return n >= 10 && n <= 20;`

---

## 📝 Code

```java
public class Entre10y20 {
    public static boolean entre10y20(int n) {
        return n >= 10 && n <= 20;
    }
}
```

**Alternative (with if):**

```java
public static boolean entre10y20(int n) {
    if (n >= 10 && n <= 20) {
        return true;
    }
    return false;
}
```

---

## 📊 Examples

| n | `n >= 10` | `n <= 20` | `n >= 10 && n <= 20` | Result |
| :--- | :--- | :--- | :--- | :--- |
| `10` | `true` | `true` | `true` | ✅ `true` |
| `15` | `true` | `true` | `true` | ✅ `true` |
| `20` | `true` | `true` | `true` | ✅ `true` |
| `9` | `false` | `true` | `false` | ❌ `false` |
| `21` | `true` | `false` | `false` | ❌ `false` |

---

## 🎯 Learning Objectives

- Working with comparison operators (`>=`, `<=`)
- Using logical operators (`&&`)
- Understanding inclusive ranges
- Returning boolean values directly (without `if` when possible)

---

## ⚠️ Common Mistakes

- Using `>` instead of `>=` – The range is **inclusive**, so `10` and `20` should return `true`.
- Using `||` instead of `&&` – The condition is "between 10 AND 20", not "either".
- Forgetting the second condition – Both conditions must be true for the number to be in range.

---

## 🛠️ Technologies Used

- **Java** – Comparison operators, logical operators, return statements

---

## 📂 Folder Structure

```
09-entre10y20/
├── Entre10y20.java
└── README.md
```

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026

