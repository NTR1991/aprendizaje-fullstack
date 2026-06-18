# 🚫 fueraDeRango5a15

## 📋 Description

Returns `true` if the number is less than 5 **OR** greater than 15.

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- The number is less than 5 (`n < 5`)
- **OR** the number is greater than 15 (`n > 15`)

**Translation to Java:** `return n < 5 || n > 15;`

---

## 📝 Code

```java
public class FueraDeRango5a15 {
    public static boolean fueraDeRango5a15(int n) {
        return n < 5 || n > 15;
    }
}
```

**Alternative (with if):**

```java
public static boolean fueraDeRango5a15(int n) {
    if (n < 5 || n > 15) {
        return true;
    }
    return false;
}
```

---

## 📊 Examples

| n | `n < 5` | `n > 15` | `n < 5 || n > 15` | Result |
| :--- | :--- | :--- | :--- | :--- |
| `4` | `true` | `false` | `true` | ✅ `true` |
| `5` | `false` | `false` | `false` | ❌ `false` |
| `10` | `false` | `false` | `false` | ❌ `false` |
| `15` | `false` | `false` | `false` | ❌ `false` |
| `16` | `false` | `true` | `true` | ✅ `true` |

---

## 🎯 Learning Objectives

- Working with comparison operators (`<`, `>`)
- Using logical operators (`||`)
- Understanding exclusive ranges (outside a range)
- Returning boolean values directly (without `if` when possible)

---

## ⚠️ Common Mistakes

- Using `&&` instead of `||` – The condition is "less than 5 OR greater than 15", not both.
- Forgetting the `>` for greater than 15 – The range excludes 15, so `n == 15` returns `false`.
- Forgetting the `<` for less than 5 – The range excludes 5, so `n == 5` returns `false`.
- Using `<=` instead of `<` – The condition is strictly less than 5, not 5 or less.

---

## 🛠️ Technologies Used

- **Java** – Comparison operators, logical operators, return statements

---

## 📂 Folder Structure

```
10-fueraDeRango5a15/
├── FueraDeRango5a15.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
