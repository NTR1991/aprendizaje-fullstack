# 2️⃣1️⃣ buscarElementoArray

## 📋 Description

In the array `{5, 10, 15, 20, 25}`, search for the number 15. If it exists, display `"Encontrado"`; if not, display `"No encontrado"`.

**Expected output:** `Encontrado`

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Create an array with the values `{5, 10, 15, 20, 25}`.
2. Define the target value to search for (`15`).
3. Iterate through the array.
4. If the current element matches the target, set a flag to `true` and break out of the loop.
5. After the loop, check the flag and print the appropriate message.

**Translation to Java:**
1. `int[] numeros = {5, 10, 15, 20, 25};`
2. `int buscar = 15;`
3. `boolean encontrado = false;`
4. `for (int i = 0; i < numeros.length; i++)`
5. `if (numeros[i] == buscar) { encontrado = true; break; }`
6. `if (encontrado) { System.out.println("Encontrado"); } else { System.out.println("No encontrado"); }`

---

## 📝 Code

```java
public class BuscarElementoArray {
    public static void main(String[] args) {
        int[] numeros = {5, 10, 15, 20, 25};
        int buscar = 15;
        boolean encontrado = false;
        for (int i = 0; i < numeros.length; i++) {
            if (numeros[i] == buscar) {
                encontrado = true;
                break;
            }
        }
        if (encontrado) {
            System.out.println("Encontrado");
        } else {
            System.out.println("No encontrado");
        }
    }
}
```

**Alternative (enhanced for loop):**

```java
public static void main(String[] args) {
    int[] numeros = {5, 10, 15, 20, 25};
    int buscar = 15;
    boolean encontrado = false;
    for (int num : numeros) {
        if (num == buscar) {
            encontrado = true;
            break;
        }
    }
    System.out.println(encontrado ? "Encontrado" : "No encontrado");
}
```

---

## 📊 Examples

| Array | Target | Found? | Result |
| :--- | :--- | :--- | :--- |
| `{5, 10, 15, 20, 25}` | `15` | `true` | ✅ `Encontrado` |
| `{5, 10, 15, 20, 25}` | `30` | `false` | ❌ `No encontrado` |

---

## 🎯 Learning Objectives

- Searching for a specific value in an array
- Using a boolean flag to track search results
- Using `break` to exit a loop early
- Using conditional statements for output
- Working with integer arrays

---

## ⚠️ Common Mistakes

- Forgetting the `break` statement – This would continue checking the rest of the array unnecessarily.
- Using `=` instead of `==` for comparison – This would assign the value instead of comparing it.
- Forgetting to initialize `encontrado` to `false` – Would cause compilation errors.
- Using `System.out.print` instead of `println` – Would not properly format the output.

---

## 🛠️ Technologies Used

- **Java** – Arrays, for loops, conditionals, boolean flags, `main` method, console output

---

## 📂 Folder Structure

```
21-buscarElementoArray/
├── BuscarElementoArray.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
