# 🔢 esPositivoYPar

## 📋 Description

Returns `true` if the number is positive **AND** even.

---

## 🧠 Logic Breakdown

The problem asks us to return `true` if:
- The number is positive (`numero > 0`)
- **AND** the number is even (`numero % 2 == 0`)

**Translation to Java:** `return numero > 0 && numero % 2 == 0;`

---

## 📝 Code

```java
public class EsPositivoYPar {
    public static boolean esPositivoYPar(int numero) {
        return numero > 0 && numero % 2 == 0;
    }
}
```

**Alternative (with if):**

```java
public static boolean esPositivoYPar(int numero) {
    if (numero > 0 && numero % 2 == 0) {
        return true;
    }
    return false;
}
```

---

## 📊 Examples

| numero | `numero > 0` | `numero % 2 == 0` | `numero > 0 && numero % 2 == 0` | Result |
| :--- | :--- | :--- | :--- | :--- |
| `4` | `true` | `true` | `true` | ✅ `true` |
| `5` | `true` | `false` | `false` | ❌ `false` |
| `-2` | `false` | `true` | `false` | ❌ `false` |
| `0` | `false` | `true` | `false` | ❌ `false` |

---

## 🎯 Learning Objectives

- Working with logical operators (`&&`)
- Using the modulo operator (`%`) for parity checks
- Combining comparison and arithmetic operators
- Returning boolean values directly (without `if` when possible)

---

## ⚠️ Common Mistakes

- Forgetting `0` is even but not positive – The condition requires **positive** and **even**, so `0` returns `false`.
- Using `numero % 2 == 1` for odd numbers – The problem asks for even, so it must be `== 0`.
- Using `||` instead of `&&` – Both conditions must be true, not just one.
- Forgetting the `> 0` condition – Positive means strictly greater than zero.

---

## 🛠️ Technologies Used

- **Java** – Conditionals, logical operators, modulo operator, return statements

---

## 📂 Folder Structure

```
07-esPositivoYPar/
├── EsPositivoYPar.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
