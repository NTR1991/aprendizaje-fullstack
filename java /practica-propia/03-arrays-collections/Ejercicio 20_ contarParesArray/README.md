# 2️⃣0️⃣ contarParesArray

## 📋 Description

Given the array `{10, 21, 32, 43, 54}`, count how many numbers are even (divisible by 2) and display the result.

**Expected output:** `Cantidad de pares: 3`

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Create an array with the values `{10, 21, 32, 43, 54}`.
2. Initialize a counter variable to `0`.
3. Iterate through the array.
4. For each element, check if it is even using the modulo operator (`% 2 == 0`).
5. If it is even, increment the counter.
6. Print the count.

**Translation to Java:**
1. `int[] numeros = {10, 21, 32, 43, 54};`
2. `int contador = 0;`
3. `for (int i = 0; i < numeros.length; i++)`
4. `if (numeros[i] % 2 == 0) { contador++; }`
5. `System.out.println("Cantidad de pares: " + contador);`

---

## 📝 Code

```java
public class ContarParesArray {
    public static void main(String[] args) {
        int[] numeros = {10, 21, 32, 43, 54};
        int contador = 0;
        for (int i = 0; i < numeros.length; i++) {
            if (numeros[i] % 2 == 0) {
                contador++;
            }
        }
        System.out.println("Cantidad de pares: " + contador);
    }
}
```

**Alternative (enhanced for loop):**

```java
public static void main(String[] args) {
    int[] numeros = {10, 21, 32, 43, 54};
    int contador = 0;
    for (int num : numeros) {
        if (num % 2 == 0) {
            contador++;
        }
    }
    System.out.println("Cantidad de pares: " + contador);
}
```

---

## 📊 Example Output

| Output |
| :--- |
| `Cantidad de pares: 3` |

---

## 🎯 Learning Objectives

- Using the modulo operator (`%`) to check parity
- Using a `for` loop to iterate through arrays
- Using a counter variable to count occurrences
- Using the `.length` property of arrays
- Working with integer variables

---

## ⚠️ Common Mistakes

- Using `% 2 == 1` for even numbers – This checks for odd numbers, not even.
- Forgetting to initialize `contador` to `0` – Would cause errors.
- Using `<=` instead of `<` in the loop condition – Would cause `ArrayIndexOutOfBoundsException`.
- Using `System.out.print` instead of `println` – Would not properly format the output.

---

## 🛠️ Technologies Used

- **Java** – Arrays, for loops, modulo operator, `main` method, console output

---

## 📂 Folder Structure

```
20-contarParesArray/
├── ContarParesArray.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
