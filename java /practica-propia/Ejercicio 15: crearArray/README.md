# 1️⃣5️⃣ crearArray

## 📋 Description

Creates an array of integers with the values `{10, 20, 30, 40, 50}` and prints the first and last elements.

**Example output:**
```
Primero: 10
Último: 50
```

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Create an array of integers with specific values.
2. Print the first element (index `0`).
3. Print the last element (index `4`).

**Translation to Java:**
1. `int[] numeros = {10, 20, 30, 40, 50};`
2. `System.out.println("Primero: " + numeros[0]);`
3. `System.out.println("Último: " + numeros[4]);`

---

## 📝 Code

```java
public class CrearArray {
    public static void main(String[] args) {
        int[] numeros = {10, 20, 30, 40, 50};
        System.out.println("Primero: " + numeros[0]);
        System.out.println("Último: " + numeros[4]);
    }
}
```

---

## 📊 Example Output

| Output |
| :--- |
| `Primero: 10` |
| `Último: 50` |

---

## 🎯 Learning Objectives

- Creating arrays in Java with initial values
- Accessing array elements by index (`[0]`, `[4]`)
- Using `System.out.println()` for console output
- Understanding zero-based indexing
- Working with the `main` method

---

## ⚠️ Common Mistakes

- Forgetting that array indices start at `0` – The first element is at index `0`, not `1`.
- Using an index out of bounds – The last element is at index `length - 1` (in this case `4`).
- Forgetting the `{}` syntax for array initialization.
- Using `System.out.print` instead of `println` when line breaks are needed.

---

## 🛠️ Technologies Used

- **Java** – Arrays, `main` method, console output

---

## 📂 Folder Structure

```
15-crearArray/
├── CrearArray.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
