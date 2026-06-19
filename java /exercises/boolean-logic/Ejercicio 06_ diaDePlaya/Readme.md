# ☀️ diaDePlaya

## 📋 Description

Returns `true` if it's sunny **AND** there is no strong wind.

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- It is sunny (`haceSol == true`)
- **AND** there is no strong wind (`!hayVientoFuerte`)

**Translation to Java:** `return haceSol && !hayVientoFuerte;`

---

## 📝 Code

```java
public class DiaDePlaya {
    public static boolean diaDePlaya(boolean haceSol, boolean hayVientoFuerte) {
        return haceSol && !hayVientoFuerte;
    }
}
```

**Alternative (with if):**

```java
public static boolean diaDePlaya(boolean haceSol, boolean hayVientoFuerte) {
    if (haceSol && !hayVientoFuerte) {
        return true;
    }
    return false;
}
```

---

## 📊 Examples

| haceSol | hayVientoFuerte | `haceSol && !hayVientoFuerte` | Result |
| :--- | :--- | :--- | :--- |
| `true` | `false` | `true` | ✅ `true` |
| `true` | `true` | `false` | ❌ `false` |
| `false` | `false` | `false` | ❌ `false` |

---

## 🎯 Learning Objectives

- Working with logical operators (`&&`, `!`)
- Negating boolean values
- Returning boolean values directly (without `if` when possible)
- Understanding operator precedence (`!` before `&&`)

---

## ⚠️ Common Mistakes

- Forgetting the `!` operator – The condition requires **no strong wind**, not "has strong wind".
- Using `||` instead of `&&` – The requirement is "both conditions must be true", not "at least one".
- Returning `true` when `hayVientoFuerte` is `true` – The requirement excludes strong wind.

---

## 🛠️ Technologies Used

- **Java** – Boolean logic, negation, return statements

---

## 📂 Folder Structure

```
06-diaDePlaya/
├── DiaDePlaya.java
└── README.md
```

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
