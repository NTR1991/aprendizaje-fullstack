# ➕ sumDouble

## 📋 Description

Return the sum of two integers. If they are the same, return double their sum.

**Problem:** [CodingBat - sumDouble](https://codingbat.com/prob/p154485)

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Sum two integers (`a + b`).
2. If `a == b`, return `(a + b) * 2` (double the sum).
3. Otherwise, return `a + b`.

**Translation to Java:** `if (a == b) { return (a + b) * 2; } else { return a + b; }`

---

## 📝 Code

````
java
public class SumDouble {
    public static int sumDouble(int a, int b) {
        if (a == b) {
            return (a + b) * 2;
        }
        return a + b;
    }
}
````
````
public static int sumDouble(int a, int b) {
    return (a == b) ? (a + b) * 2 : a + b;
}
````

---

## 📊 Examples

| a | b | `a == b` | Sum | Double? | Result |
| :--- | :--- | :--- | :--- | :--- | :--- |
| `1` | `2` | `false` | `3` | ❌ | `3` |
| `3` | `3` | `true` | `6` | ✅ (×2) | `12` |
| `2` | `2` | `true` | `4` | ✅ (×2) | `8` |

---

## 🎯 Learning Objectives
Working with conditionals (if/else)

Returning integer values from a method

Using the ternary operator (? :) for concise code

Understanding when to use if vs ternary

---

## ⚠️ Common Mistakes
Forgetting to return (a + b) * 2 – Some people return a * 2 or b * 2 instead of the doubled sum.

Using || (OR) instead of == – The condition is equality, not "at least one".

Not considering the case where a and b are equal – The problem explicitly requires doubling the sum in that case.

---

## 🛠️ Technologies Used
Java – Conditionals, integer arithmetic, return statements, ternary operator

---

## 📂 Folder Structure
````
03-sumDouble/
├── SumDouble.java
└── README.md
````

👤 Author
*NTR1991 – Full Stack in training | FP DAW Student*

📅 Date
June 2026
