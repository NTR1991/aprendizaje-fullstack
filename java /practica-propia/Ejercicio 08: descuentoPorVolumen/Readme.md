# 📦 descuentoPorVolumen

## 📋 Description

Returns `true` if quantity is 10 or more **OR** is a frequent customer. If quantity is 0, returns `false`.

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- The quantity is **not** 0 (`cantidad != 0`)
- **AND** at least one of the following is true:
  - Quantity is 10 or more (`cantidad >= 10`)
  - Customer is frequent (`esClienteFrecuente == true`)

**Translation to Java:**
1. `if (cantidad == 0) { return false; }`
2. `return cantidad >= 10 || esClienteFrecuente;`

---

## 📝 Code

```java
public class DescuentoPorVolumen {
    public static boolean descuentoPorVolumen(int cantidad, boolean esClienteFrecuente) {
        if (cantidad == 0) {
            return false;
        }
        return cantidad >= 10 || esClienteFrecuente;
    }
}
```

**Alternative (without if):**

```java
public static boolean descuentoPorVolumen(int cantidad, boolean esClienteFrecuente) {
    return cantidad != 0 && (cantidad >= 10 || esClienteFrecuente);
}
```

---

## 📊 Examples

| cantidad | esClienteFrecuente | cantidad != 0 | cantidad >= 10 \|\| esClienteFrecuente | Resultado |
|:--|:--|:--|:--|:--|
| 15 | false | true | true | ✅ true |
| 5  | true  | true | true | ✅ true |
| 5  | false | true | false | ❌ false |
| 0  | true  | false | true | ❌ false |
---

## 🎯 Learning Objectives

- Working with logical operators (`||`)
- Combining comparison operators with boolean variables
- Handling edge cases (quantity = 0)
- Using early returns for exception handling
- Returning boolean values directly (without `if` when possible)

---

## ⚠️ Common Mistakes

- Forgetting the `cantidad == 0` exception – The problem explicitly requires `false` for quantity 0.
- Using `&&` instead of `||` – The requirement is "quantity >= 10 OR frequent customer", not both.
- Using `>` instead of `>=` – The threshold is 10 or more, not greater than 10.
- Returning `true` for `cantidad == 0` – The problem requires `false` for zero quantity.

---

## 🛠️ Technologies Used

- **Java** – Conditionals, logical operators, comparison operators, return statements

---

## 📂 Folder Structure

```
08-descuentoPorVolumen/
├── DescuentoPorVolumen.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
