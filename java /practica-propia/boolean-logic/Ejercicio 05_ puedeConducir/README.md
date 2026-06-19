# 🚗 puedeConducir

## 📋 Description

Returns `true` if:
- Practice driving and age >= 16, OR
- Age >= 65, OR
- Age >= 18 and has license

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if any of the following conditions are met:
1. **Practice driving** AND **age is at least 16** (`esPractica && edad >= 16`)
2. **Age is at least 65** (`edad >= 65`)
3. **Age is at least 18** AND **has a license** (`edad >= 18 && tieneLicencia`)

**Translation to Java:**
- `if (esPractica && edad >= 16) return true;`
- `if (edad >= 65) return true;`
- `return edad >= 18 && tieneLicencia;`

---

## 📝 Code

```java
public class PuedeConducir {
    public static boolean puedeConducir(int edad, boolean tieneLicencia, boolean esPractica) {
        if (esPractica && edad >= 16) {
            return true;
        }
        if (edad >= 65) {
            return true;
        }
        return edad >= 18 && tieneLicencia;
    }
}
```

**Alternative (direct return with OR):**

```java
public static boolean puedeConducir(int edad, boolean tieneLicencia, boolean esPractica) {
    return (esPractica && edad >= 16) || edad >= 65 || (edad >= 18 && tieneLicencia);
}
```

---

## 📊 Examples

| Age | License | Practice Mode | Practice Allowed | Senior (65+) | Licensed Adult | Final Condition | Result |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| `17` | `true` | `false` | `false` | `false` | `false` | `false` | ❌ `false` |
| `16` | `false` | `true` | `true` | `false` | `false` | `true` | ✅ `true` |
| `65` | `false` | `false` | `false` | `true` | `false` | `true` | ✅ `true` |
| `18` | `true` | `false` | `false` | `false` | `true` | `true` | ✅ `true` |
---

## 🎯 Learning Objectives

- Working with multiple conditions (`&&`, `||`)
- Using early returns for different cases
- Combining logical operators with comparison operators
- Understanding operator precedence (`&&` before `||`)

---

## ⚠️ Common Mistakes

- Using `&&` instead of `||` between different conditions – The requirement is "one or more", not "all".
- Forgetting the age thresholds: `16` for practice, `65` for senior, `18` for regular license.
- Confusing `esPractica` with `tieneLicencia` – They serve different purposes.
- Returning `false` when `edad == 65` incorrectly – The condition is `>= 65`, not `> 65`.

---

## 🛠️ Technologies Used

- **Java** – Conditionals, logical operators, return statements, integer comparison

---

## 📂 Folder Structure

```
05-puedeConducir/
├── PuedeConducir.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
