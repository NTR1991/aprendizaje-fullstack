# 🏷️ tieneDescuento

## 📋 Description

Returns `true` if the purchase amount is greater than 100 **OR** the person is an employee.

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- The purchase amount is greater than 100 (`monto > 100`)
- **OR** the person is an employee (`esEmpleado == true`)

**Translation to Java:** `return monto > 100 || esEmpleado;`

---

## 📝 Code

```java
public class TieneDescuento {
    public static boolean tieneDescuento(int monto, boolean esEmpleado) {
        return monto > 100 || esEmpleado;
    }
}
```

**Alternative (with if):**

```java
public static boolean tieneDescuento(int monto, boolean esEmpleado) {
    if (monto > 100 || esEmpleado) {
        return true;
    }
    return false;
}
```

---

## 📊 Examples

| Amount | Employee | Amount > 100 | Employee? | Condition | Result |
| :--- | :--- | :--- | :--- | :--- | :--- |
| `150` | `false` | `true` | `false` | `true` | ✅ `true` |
| `50` | `true` | `false` | `true` | `true` | ✅ `true` |
| `50` | `false` | `false` | `false` | `false` | ❌ `false` |
---

## 🎯 Learning Objectives

- Working with logical operators (`||`)
- Combining conditions with boolean variables
- Returning boolean values directly (without `if` when possible)
- Understanding short-circuit evaluation (`||` stops when first condition is `true`)

---

## ⚠️ Common Mistakes

- Using `&&` (AND) instead of `||` (OR) – The condition is "at least one is true", not "both must be true".
- Forgetting the threshold: `monto > 100` (strictly greater than, not `>=`).
- Confusing `esEmpleado` as a string instead of a boolean.

---

## 🛠️ Technologies Used

- **Java** – Boolean logic, conditionals, return statements, integer comparison

---

## 📂 Folder Structure

```
02-tieneDescuento/
├── TieneDescuento.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
