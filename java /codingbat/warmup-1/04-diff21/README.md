# 🔢 diff21

## 📋 Description

Return the absolute difference between n and 21.  
If n is greater than 21, return double the absolute difference.

**Problem:** [CodingBat - diff21](https://codingbat.com/prob/p116624)

---

## 🧠 Logic Breakdown

1. Calculate the absolute difference between `n` and 21 (`|n - 21|`).
2. If `n > 21`, return double the absolute difference (`(|n - 21| * 2)`).
3. Otherwise, return the absolute difference.

**Translation to Java:** `if (n > 21) { return (n - 21) * 2; } else { return 21 - n; }`

---

## 📝 Code

`````
java
public class Diff21 {
    public static int diff21(int n) {
        if (n > 21) {
            return (n - 21) * 2;
        }
        return 21 - n;
    }
}
````

**Alternative (with Math.abs):**

````java
public static int diff21(int n) {
    int diff = Math.abs(n - 21);
    if (n > 21) {
        return diff * 2;
    }
    return diff;
}
````

---

## 📊 Examples
````
| n | `Math.abs(n - 21)` | `n > 21` | Result |
| :--- | :--- | :--- | :--- |
| `19` | `2` | `false` | `2` |
| `21` | `0` | `false` | `0` |
| `22` | `1` | `true` | `2` |
| `25` | `4` | `true` | `8` |
| `0` | `21` | `false` | `21` |
````

---

## 🎯 Learning Objectives

- Working with absolute values (`Math.abs()`)
- Using conditionals (`if/else`)
- Returning integer values from a method
- Understanding the difference between `n > 21` and `n < 21`

---

## ⚠️ Common Mistakes

- Forgetting to return the absolute difference (using `n - 21` instead of `21 - n` when `n < 21`)
- Returning `diff * 2` when `n > 21` but forgetting to return `diff` when `n <= 21`
- Using `Math.abs(n - 21) * 2` for all cases without checking if `n > 21`

---

## 🛠️ Technologies Used

- **Java** – Conditionals, integer arithmetic, absolute values, return statements

---

## 📂 Folder Structure

````
04-diff21/
├── Diff21.java
└── README.md
````

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
