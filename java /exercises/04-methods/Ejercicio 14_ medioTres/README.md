# 1️⃣4️⃣ medioTres

## 📋 Description

Returns the middle number (the one that is neither the maximum nor the minimum) of three integers.

**Problem:** Write a method `public static int medioTres(int a, int b, int c)` that returns the middle value among the three numbers.

---

## 🧠 Logic Breakdown

The problem asks us to find the number that is in the middle (not the smallest, not the largest).

**Approach:**
1. Find the minimum of the three numbers.
2. Find the maximum of the three numbers.
3. The middle value is the sum of all three numbers minus the minimum and maximum.

**Translation to Java:**
1. `int min = a; if (b < min) min = b; if (c < min) min = c;`
2. `int max = a; if (b > max) max = b; if (c > max) max = c;`
3. `return a + b + c - min - max;`

---

## 📝 Code

```java
public class MedioTres {
    public static int medioTres(int a, int b, int c) {
        int min = a;
        if (b < min) min = b;
        if (c < min) min = c;

        int max = a;
        if (b > max) max = b;
        if (c > max) max = c;

        return a + b + c - min - max;
    }
}
```

**Alternative (using Math.min/max):**

```java
public static int medioTres(int a, int b, int c) {
    int min = Math.min(a, Math.min(b, c));
    int max = Math.max(a, Math.max(b, c));
    return a + b + c - min - max;
}
```

**Alternative (with conditionals):**

```java
public static int medioTres(int a, int b, int c) {
    if ((a >= b && a <= c) || (a >= c && a <= b)) {
        return a;
    } else if ((b >= a && b <= c) || (b >= c && b <= a)) {
        return b;
    } else {
        return c;
    }
}
```

---

## 📊 Examples

| a | b | c | `a + b + c` | Min | Max | `a + b + c - min - max` | Result |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| `5` | `9` | `3` | `17` | `3` | `9` | `5` | ✅ `5` |
| `10` | `10` | `5` | `25` | `5` | `10` | `10` | ✅ `10` |
| `7` | `2` | `9` | `18` | `2` | `9` | `7` | ✅ `7` |

---

## 🎯 Learning Objectives

- Finding the minimum and maximum values
- Using the sum-minus-min-max technique to find the middle value
- Working with conditional logic
- Returning integer values from a method
- Exploring alternative solutions

---

## ⚠️ Common Mistakes

- Using incorrect comparison operators (`>` instead of `<` for min, or vice versa).
- Forgetting to handle duplicate values – The method must work correctly when numbers are equal.
- Trying to find the middle value with complex nested `if/else` instead of using the mathematical approach.
- Not accounting for negative numbers in the calculations.

---

## 🛠️ Technologies Used

- **Java** – Conditionals, comparison operators, integer arithmetic, return statements

---

## 📂 Folder Structure

```
14-medioTres/
├── MedioTres.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
