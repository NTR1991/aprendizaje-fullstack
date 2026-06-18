# 1️⃣3️⃣ minTres

## 📋 Description

Returns the minimum of three integers.

**Problem:** Write a method `public static int minTres(int a, int b, int c)` that returns the smallest of the three numbers.

---

## 🧠 Logic Breakdown

The problem asks us to find the smallest of three integers.

**Translation to Java:**
- If `a` is less than or equal to both `b` and `c`, return `a`.
- Otherwise, if `b` is less than or equal to both `a` and `c`, return `b`.
- Otherwise, return `c`.

---

## 📝 Code

```java
public class MinTres {
    public static int minTres(int a, int b, int c) {
        if (a <= b && a <= c) {
            return a;
        }
        if (b <= a && b <= c) {
            return b;
        }
        return c;
    }
}
```

**Alternative (using Math.min):**

```java
public static int minTres(int a, int b, int c) {
    return Math.min(a, Math.min(b, c));
}
```

**Alternative (using ternary operator):**

```java
public static int minTres(int a, int b, int c) {
    int min = (a < b) ? a : b;
    return (min < c) ? min : c;
}
```

---

## 📊 Examples

| a | b | c | `a <= b && a <= c` | `b <= a && b <= c` | Min |
| :--- | :--- | :--- | :--- | :--- | :--- |
| `5` | `9` | `3` | `false` | `false` | ✅ `3` |
| `10` | `10` | `5` | `false` | `false` | ✅ `5` |
| `-1` | `-5` | `-2` | `false` | `true` | ✅ `-5` |

---

## 🎯 Learning Objectives

- Working with comparison operators (`<=`, `&&`)
- Using conditionals (`if/else if`) for decision-making
- Understanding nested conditions
- Returning integer values from a method
- Exploring alternative solutions (`Math.min`, ternary operator)

---

## ⚠️ Common Mistakes

- Using `<` instead of `<=` – When numbers are equal, both conditions should be true.
- Using `||` instead of `&&` – The condition is "a is less than or equal to both", not "at least one".
- Forgetting the second condition in `if` statements – Both comparisons are required for each variable.
- Using `else` incorrectly – The third condition can be a simple `return c;` because all other cases are exhausted.

---

## 🛠️ Technologies Used

- **Java** – Conditionals, comparison operators, return statements, Math class

---

## 📂 Folder Structure

```
13-minTres/
├── MinTres.java
└── README.md
```

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
