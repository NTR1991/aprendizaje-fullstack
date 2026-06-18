# 🔢 esNumeroEspecial

## 📋 Description

Returns `true` if the number is between 5 and 10 inclusive, except the number 7.

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- The number is **excluded** if it is 7 (`numero == 7`) → returns `false`
- Otherwise, the number must be between 5 and 10 inclusive (`numero >= 5 && numero <= 10`)

**Translation to Java:**
1. `if (numero == 7) { return false; }`
2. `return numero >= 5 && numero <= 10;`

---

## 📝 Code

```java
public class EsNumeroEspecial {
    public static boolean esNumeroEspecial(int numero) {
        if (numero == 7) {
            return false;
        }
        return numero >= 5 && numero <= 10;
    }
}
```

**Alternative (without if):**

```java
public static boolean esNumeroEspecial(int numero) {
    return numero != 7 && numero >= 5 && numero <= 10;
}
```

**Alternative (direct return with ternary):**

```java
public static boolean esNumeroEspecial(int numero) {
    return numero == 7 ? false : (numero >= 5 && numero <= 10);
}
```

---

## 📊 Examples

| numero | `numero == 7` | `numero >= 5 && numero <= 10` | Result |
| :--- | :--- | :--- | :--- |
| `5` | `false` | `true` | ✅ `true` |
| `7` | `true` | `true` | ❌ `false` |
| `8` | `false` | `true` | ✅ `true` |
| `11` | `false` | `false` | ❌ `false` |

---

## 🎯 Learning Objectives

- Working with logical operators (`&&`, `!`)
- Using early returns to handle exceptions
- Returning boolean values directly (without `if` when possible)
- Understanding the importance of exception handling before the main condition

---

## ⚠️ Common Mistakes

- Not handling `7` as an exception – The problem requires `7` to return `false`.
- Using `>=` incorrectly – The range is **inclusive** (`5` to `10`), not exclusive.
- Returning `true` for `7` – The problem explicitly excludes `7`.

---

## 🛠️ Technologies Used

- **Java** – Conditionals, logical operators, return statements, integer comparison

---

## 📂 Folder Structure

```
04-esNumeroEspecial/
├── EsNumeroEspecial.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
