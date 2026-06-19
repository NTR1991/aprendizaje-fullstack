# 🎢 puedeSubirMontanaRusa

## 📋 Description

Returns `true` if height is at least 120cm **AND** (has a companion **OR** height is at least 140cm).

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- The height is at least 120cm (`altura >= 120`)
- **AND** at least one of the following is true:
  - Has a companion (`tieneAcompanante == true`)
  - Height is at least 140cm (`altura >= 140`)

**Translation to Java:** `return altura >= 120 && (tieneAcompanante || altura >= 140);`

---

## 📝 Code

```java
public class PuedeSubirMontanaRusa {
    public static boolean puedeSubirMontanaRusa(int altura, boolean tieneAcompanante) {
        return altura >= 120 && (tieneAcompanante || altura >= 140);
    }
}
```

**Alternative (with if):**

```java
public static boolean puedeSubirMontanaRusa(int altura, boolean tieneAcompanante) {
    if (altura >= 120 && (tieneAcompanante || altura >= 140)) {
        return true;
    }
    return false;
}
```

---

## 📊 Examples

| Height | Companion | Height ≥ 120 | Companion OR Height ≥ 140 | Final Condition | Result |
| :--- | :--- | :--- | :--- | :--- | :--- |
| `150` | `false` | `true` | `true` | `true` | ✅ `true` |
| `130` | `true` | `true` | `true` | `true` | ✅ `true` |
| `130` | `false` | `true` | `false` | `false` | ❌ `false` |
| `110` | `true` | `false` | `true` | `false` | ❌ `false` |

---

## 🎯 Learning Objectives

- Working with logical operators (`&&`, `||`)
- Combining multiple conditions with parentheses for correct evaluation
- Understanding operator precedence (`&&` before `||`)
- Returning boolean values directly (without `if` when possible)

---

## ⚠️ Common Mistakes

- Missing parentheses: `(tieneAcompanante || altura >= 140)` is **mandatory**. Without them, the condition becomes `(altura >= 120 && tieneAcompanante) || altura >= 140`, which is different.
- Forgetting the `>=` threshold: The problem requires **at least** 120cm, not greater than.
- Using `&&` instead of `||` for the companion condition – The requirement is "has a companion OR is tall enough", not both.

---

## 🛠️ Technologies Used

- **Java** – Boolean logic, conditionals, return statements, integer comparison

---

## 📂 Folder Structure

```
03-puedeSubirMontanaRusa/
├── PuedeSubirMontanaRusa.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
