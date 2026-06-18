# 7️⃣ nearHundred

## 📋 Description

Given an integer n, return `true` if it is within 10 of 100 or within 10 of 200.

**Problem:** [CodingBat - nearHundred](https://codingbat.com/prob/p184004)

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- The absolute difference between `n` and 100 is less than or equal to 10 (`Math.abs(100 - n) <= 10`)
- OR the absolute difference between `n` and 200 is less than or equal to 10 (`Math.abs(200 - n) <= 10`)

**Translation to Java:** `return (Math.abs(100 - n) <= 10) || (Math.abs(200 - n) <= 10);`

---

## 📝 Code

```java
public class NearHundred {
    public static boolean nearHundred(int n) {
        return Math.abs(100 - n) <= 10 || Math.abs(200 - n) <= 10;
    }
}
```

**Alternative (with if):**

```java
public static boolean nearHundred(int n) {
    if (Math.abs(100 - n) <= 10) {
        return true;
    }
    if (Math.abs(200 - n) <= 10) {
        return true;
    }
    return false;
}
```

---

## 📊 Examples

| n | `Math.abs(100 - n) <= 10` | `Math.abs(200 - n) <= 10` | Result |
| :--- | :--- | :--- | :--- |
| `93` | `true` | `false` | ✅ `true` |
| `90` | `true` | `false` | ✅ `true` |
| `89` | `false` | `false` | ❌ `false` |
| `110` | `true` | `false` | ✅ `true` |
| `111` | `false` | `false` | ❌ `false` |
| `190` | `false` | `true` | ✅ `true` |
| `200` | `false` | `true` | ✅ `true` |
| `210` | `false` | `true` | ✅ `true` |
| `211` | `false` | `false` | ❌ `false` |

---

## 🎯 Learning Objectives

- Working with absolute values (`Math.abs()`)
- Using logical operators (`||`) to combine conditions
- Understanding range checking (within 10 of a target)
- Returning boolean values directly (without `if` when possible)

---

## ⚠️ Common Mistakes

- Using `<=` instead of `<` or vice versa – The problem requires **within 10 (inclusive)**, so `<= 10` is correct.
- Forgetting the absolute value – Using `100 - n` without `Math.abs()` fails when `n > 100`.
- Checking only one target – Both 100 and 200 must be checked.
- Using `&&` instead of `||` – The condition is "within 10 of 100 OR within 10 of 200".

---

## 🛠️ Technologies Used

- **Java** – Absolute values, logical operators, conditionals, return statements

---

## 📂 Folder Structure

```
07-nearHundred/
├── NearHundred.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
