# 🎯 rangoEspecial

## 📋 Description

Returns `true` if the number is between 0 and 10 inclusive, **OR** exactly 20.

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- The number is greater than or equal to 0 AND less than or equal to 10 (`n >= 0 && n <= 10`)
- **OR** the number is exactly 20 (`n == 20`)

**Translation to Java:** `return (n >= 0 && n <= 10) || n == 20;`

---

## 📝 Code

```java
public class RangoEspecial {
    public static boolean rangoEspecial(int n) {
        return (n >= 0 && n <= 10) || n == 20;
    }
}
```

**Alternative (with if):**

```java
public static boolean rangoEspecial(int n) {
    if ((n >= 0 && n <= 10) || n == 20) {
        return true;
    }
    return false;
}
```

---

## 📊 Examples

| n  | n >= 0 && n <= 10 | n == 20 | (n >= 0 && n <= 10) \|\| n == 20 | Result |
|:--|:--|:--|:--|:--|
| 0  | true  | false | true  | ✅ true |
| 5  | true  | false | true  | ✅ true |
| 10 | true  | false | true  | ✅ true |
| 20 | false | true  | true  | ✅ true |
| 11 | false | false | false | ❌ false |
| 21 | false | false | false | ❌ false |
| -1 | false | false | false | ❌ false |
---

## 🎯 Learning Objectives

- Working with comparison operators (`>=`, `<=`, `==`)
- Using logical operators (`&&`, `||`)
- Combining range checking with exact value matching
- Understanding operator precedence (`&&` before `||`)
- Returning boolean values directly (without `if` when possible)

---

## ⚠️ Common Mistakes

- Using `||` instead of `&&` inside the range condition – The range is "between 0 AND 10", not "0 OR 10".
- Forgetting the parentheses: `(n >= 0 && n <= 10)` is mandatory for correct evaluation.
- Using `>` instead of `>=` – The range is **inclusive**, so `0` and `10` must return `true`.
- Returning `true` for `n == 20` incorrectly – The condition is exactly 20, not `>=` 20.

---

## 🛠️ Technologies Used

- **Java** – Comparison operators, logical operators, return statements

---

## 📂 Folder Structure

```
11-rangoEspecial/
├── RangoEspecial.java
└── README.md
```

----

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
