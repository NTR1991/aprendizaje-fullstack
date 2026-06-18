# 1️⃣8️⃣ maximoArray

## 📋 Description

Finds the maximum value in the array `{10, 20, 30, 40, 50}` and displays it.

**Expected output:** `Máximo: 50`

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Create an array with the values `{10, 20, 30, 40, 50}`.
2. Initialize a variable `max` with the first element (`numeros[0]`).
3. Iterate through the array starting from index `1` (skipping the first element).
4. If the current element is greater than `max`, update `max`.
5. Print the maximum value.

**Translation to Java:**
1. `int[] numeros = {10, 20, 30, 40, 50};`
2. `int max = numeros[0];`
3. `for (int i = 1; i < numeros.length; i++)`
4. `if (numeros[i] > max) { max = numeros[i]; }`
5. `System.out.println("Máximo: " + max);`

---

## 📝 Code

```java
public class MaximoArray {
    public static void main(String[] args) {
        int[] numeros = {10, 20, 30, 40, 50};
        int max = numeros[0];
        for (int i = 1; i < numeros.length; i++) {
            if (numeros[i] > max) {
                max = numeros[i];
            }
        }
        System.out.println("Máximo: " + max);
    }
}
```

**Alternative (enhanced for loop):**

```java
public static void main(String[] args) {
    int[] numeros = {10, 20, 30, 40, 50};
    int max = Integer.MIN_VALUE;
    for (int num : numeros) {
        if (num > max) {
            max = num;
        }
    }
    System.out.println("Máximo: " + max);
}
```

---

## 📊 Example Output

| Output |
| :--- |
| `Máximo: 50` |

---

## 🎯 Learning Objectives

- Finding the maximum value in an array
- Initializing `max` with the first element
- Using `if` statements with arrays
- Using the `.length` property of arrays
- Working with integer variables

---

## ⚠️ Common Mistakes

- Starting the loop at `0` instead of `1` – This would compare `numeros[0]` with itself unnecessarily.
- Using `>=` instead of `>` – Not an error, but the current approach works with `>`.
- Forgetting to initialize `max` – Would cause compilation errors.
- Using `max` with a default value like `0` – Would fail if all numbers are negative.

---

## 🛠️ Technologies Used

- **Java** – Arrays, for loops, conditionals, `main` method, console output

---

## 📂 Folder Structure

```
18-maximoArray/
├── MaximoArray.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
