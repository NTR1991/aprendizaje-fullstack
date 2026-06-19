# 1️⃣9️⃣ minimoArray

## 📋 Description

Finds the minimum value in the array `{10, 20, 30, 40, 50}` and displays it.

**Expected output:** `Mínimo: 10`

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Create an array with the values `{10, 20, 30, 40, 50}`.
2. Initialize a variable `min` with the first element (`numeros[0]`).
3. Iterate through the array starting from index `1` (skipping the first element).
4. If the current element is less than `min`, update `min`.
5. Print the minimum value.

**Translation to Java:**
1. `int[] numeros = {10, 20, 30, 40, 50};`
2. `int min = numeros[0];`
3. `for (int i = 1; i < numeros.length; i++)`
4. `if (numeros[i] < min) { min = numeros[i]; }`
5. `System.out.println("Mínimo: " + min);`

---

## 📝 Code

```java
public class MinimoArray {
    public static void main(String[] args) {
        int[] numeros = {10, 20, 30, 40, 50};
        int min = numeros[0];
        for (int i = 1; i < numeros.length; i++) {
            if (numeros[i] < min) {
                min = numeros[i];
            }
        }
        System.out.println("Mínimo: " + min);
    }
}
```

**Alternative (enhanced for loop):**

```java
public static void main(String[] args) {
    int[] numeros = {10, 20, 30, 40, 50};
    int min = Integer.MAX_VALUE;
    for (int num : numeros) {
        if (num < min) {
            min = num;
        }
    }
    System.out.println("Mínimo: " + min);
}
```

---

## 📊 Example Output

| Output |
| :--- |
| `Mínimo: 10` |

---

## 🎯 Learning Objectives

- Finding the minimum value in an array
- Initializing `min` with the first element
- Using `if` statements with arrays
- Using the `.length` property of arrays
- Working with integer variables

---

## ⚠️ Common Mistakes

- Starting the loop at `0` instead of `1` – This would compare `numeros[0]` with itself unnecessarily.
- Using `<=` instead of `<` – Not an error, but the current approach works with `<`.
- Forgetting to initialize `min` – Would cause compilation errors.
- Using `min` with a default value like `0` – Would fail if all numbers are positive.

---

## 🛠️ Technologies Used

- **Java** – Arrays, for loops, conditionals, `main` method, console output

---

## 📂 Folder Structure

```
19-minimoArray/
├── MinimoArray.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
