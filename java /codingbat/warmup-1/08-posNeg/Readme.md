# 8️⃣ posNeg

## 📋 Description

Given two integers a and b, return `true` if one is negative and the other is positive, except if the parameter `negative` is `true`, then return `true` only if both are negative.

**Problem:** [CodingBat - posNeg](https://codingbat.com/prob/p159227)

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- `negative` is `false` → one is negative and the other is positive (`a < 0 && b > 0` OR `a > 0 && b < 0`).
- `negative` is `true` → both are negative (`a < 0 && b < 0`).

**Translation to Java:** `if (negative) { return a < 0 && b < 0; } else { return (a < 0 && b > 0) || (a > 0 && b < 0); }`

---

## 📝 Code

```java
public class PosNeg {
    public static boolean posNeg(int a, int b, boolean negative) {
        if (negative) {
            return a < 0 && b < 0;
        } else {
            return (a < 0 && b > 0) || (a > 0 && b < 0);
        }
    }
}
```

**Alternative (direct return with ternary):**

```java
public static boolean posNeg(int a, int b, boolean negative) {
    return negative ? (a < 0 && b < 0) : ((a < 0 && b > 0) || (a > 0 && b < 0));
}
```

---

## 📊 Examples

| a | b | negative | `negative ? (a < 0 && b < 0) : ((a < 0 && b > 0) || (a > 0 && b < 0))` | Result |
| :--- | :--- | :--- | :--- | :--- |
| `1` | `-1` | `false` | `true` | ✅ `true` |
| `-1` | `1` | `false` | `true` | ✅ `true` |
| `-4` | `-5` | `true` | `true` | ✅ `true` |
| `-4` | `5` | `true` | `false` | ❌ `false` |
| `1` | `2` | `false` | `false` | ❌ `false` |
| `-1` | `-2` | `false` | `false` | ❌ `false` |

---

## 🎯 Learning Objectives

- Working with logical operators (`&&`, `||`, ternary operator)
- Using conditionals (`if/else`) to handle different cases
- Understanding the difference between `negative == true` and `negative == false`
- Using the ternary operator (`? :`) for concise code

---

## ⚠️ Common Mistakes

- Using `||` instead of `&&` when `negative` is `true` – Both must be negative (`a < 0 && b < 0`), not one or the other.
- Forgetting to check both cases when `negative` is `false` – One must be negative and the other positive.
- Confusing `negative` value: if `negative` is `true`, both are negative; if `false`, one is negative and the other positive.
- Returning `true` for `a == 0` or `b == 0` – The problem states one negative and one positive (zero is neither).

---

## 🛠️ Technologies Used

- **Java** – Conditionals, logical operators, return statements, ternary operator

---

## 📂 Folder Structure

```
08-posNeg/
├── PosNeg.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
