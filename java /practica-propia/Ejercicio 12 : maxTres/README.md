# 1️⃣2️⃣ maxTres

## 📋 Description

Returns the maximum of three integers.

---

## 🧠 Logic Breakdown

The problem asks us to find the largest of three integers.

**Translation to Java:**
- If `a` is greater than or equal to both `b` and `c`, return `a`.
- Otherwise, if `b` is greater than or equal to both `a` and `c`, return `b`.
- Otherwise, return `c`.

---

## 📝 Code

```java
public class MaxTres {
    public static int maxTres(int a, int b, int c) {
        if (a >= b && a >= c) {
            return a;
        }
        if (b >= a && b >= c) {
            return b;
        }
        return c;
    }
}
```

**Alternative (using Math.max):**

```java
public static int maxTres(int a, int b, int c) {
    return Math.max(a, Math.max(b, c));
}
```

**Alternative (using ternary operator):**

```java
public static int maxTres(int a, int b, int c) {
    int max = (a > b) ? a : b;
    return (max > c) ? max : c;
}
```

---

## 📊 Examples

| a | b | c | `a >= b && a >= c` | `b >= a && b >= c` | Max |
| :--- | :--- | :--- | :--- | :--- | :--- |
| `5` | `9` | `3` | `false` | `true` | ✅ `9` |
| `10` | `10` | `5` | `true` | `true` | ✅ `10` |
| `-1` | `-5` | `-2` | `true` | `false` | ✅ `-1` |

---

## 🎯 Learning Objectives

- Working with comparison operators (`>=`, `&&`)
- Using conditionals (`if/else if`) for decision-making
- Understanding nested conditions
- Returning integer values from a method
- Exploring alternative solutions (`Math.max`, ternary operator)

---

## ⚠️ Common Mistakes

- Using `>` instead of `>=` – When numbers are equal, both conditions should be true.
- Using `||` instead of `&&` – The condition is "a is greater than or equal to both", not "at least one".
- Forgetting the second condition in `if` statements – Both comparisons are required for each variable.
- Using `else` incorrectly – The third condition can be a simple `return c;` because all other cases are exhausted.

---

## 🛠️ Technologies Used

- **Java** – Conditionals, comparison operators, return statements, Math class

---

## 📂 Folder Structure

```
12-maxTres/
├── MaxTres.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
