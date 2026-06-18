# 1️⃣7️⃣ sumarArray

## 📋 Description

Calculates the sum of all elements in the array `{10, 20, 30, 40, 50}` and displays the result.

**Expected output:** `Suma: 150`

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Create an array with the values `{10, 20, 30, 40, 50}`.
2. Initialize a variable `suma` to `0`.
3. Iterate through the array, adding each element to `suma`.
4. Print the total.

**Translation to Java:**
1. `int[] numeros = {10, 20, 30, 40, 50};`
2. `int suma = 0;`
3. `for (int i = 0; i < numeros.length; i++) { suma += numeros[i]; }`
4. `System.out.println("Suma: " + suma);`

---

## 📝 Code

```java
public class SumarArray {
    public static void main(String[] args) {
        int[] numeros = {10, 20, 30, 40, 50};
        int suma = 0;
        for (int i = 0; i < numeros.length; i++) {
            suma += numeros[i];
        }
        System.out.println("Suma: " + suma);
    }
}
```

**Alternative (enhanced for loop):**

```java
public static void main(String[] args) {
    int[] numeros = {10, 20, 30, 40, 50};
    int suma = 0;
    for (int num : numeros) {
        suma += num;
    }
    System.out.println("Suma: " + suma);
}
```

---

## 📊 Example Output

| Output |
| :--- |
| `Suma: 150` |

---

## 🎯 Learning Objectives

- Using a `for` loop to iterate through arrays
- Accumulating values using the `+=` operator
- Using the `.length` property of arrays
- Working with integer variables
- Using `System.out.println()` for console output

---

## ⚠️ Common Mistakes

- Forgetting to initialize `suma` to `0` – It starts with a default value that could cause errors.
- Using `=` instead of `+=` – Would overwrite `suma` with each element instead of adding it.
- Forgetting the `i++` increment – Would cause an infinite loop.
- Using `System.out.print` instead of `println` – Would not properly format the output.

---

## 🛠️ Technologies Used

- **Java** – Arrays, for loops, `main` method, console output

---

## 📂 Folder Structure

```
17-sumarArray/
├── SumarArray.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
