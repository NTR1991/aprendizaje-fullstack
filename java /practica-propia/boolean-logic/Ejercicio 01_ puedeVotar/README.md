# 🗳️ puedeVotar

## 📋 Description

Returns `true` if the person is 18 or older **AND** is a citizen.

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- The age is greater than or equal to 18 (`edad >= 18`)
- **AND** the person is a citizen (`esCiudadano == true`)

**Translation to Java:** `return edad >= 18 && esCiudadano;`

---

## 📝 Code

```java
public class PuedeVotar {
    public static boolean puedeVotar(int edad, boolean esCiudadano) {
        return edad >= 18 && esCiudadano;
    }
}
```

**Alternative (with if):**

```java
public static boolean puedeVotar(int edad, boolean esCiudadano) {
    if (edad >= 18 && esCiudadano) {
        return true;
    }
    return false;
}
```

---

## 📊 Examples

| edad | esCiudadano | `edad >= 18 && esCiudadano` | Result |
| :--- | :--- | :--- | :--- |
| `20` | `true` | `true` | ✅ `true` |
| `16` | `true` | `false` | ❌ `false` |
| `20` | `false` | `false` | ❌ `false` |
| `16` | `false` | `false` | ❌ `false` |

---

## 🎯 Learning Objectives

- Working with logical operators (`&&`)
- Combining conditions with boolean variables
- Returning boolean values directly (without `if` when possible)
- Understanding short-circuit evaluation (`&&` stops when first condition is `false`)

---

## ⚠️ Common Mistakes

- Using `||` (OR) instead of `&&` (AND) – The person must meet **both** conditions, not just one.
- Forgetting to check `esCiudadano` – The problem explicitly requires citizenship.
- Returning `true` for `edad == 18` incorrectly – The condition is `>= 18`, not `> 18`.

---

## 🛠️ Technologies Used

- **Java** – Boolean logic, conditionals, return statements, integer comparison

---

## 📂 Folder Structure

```
01-puedeVotar/
├── PuedeVotar.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
