# 1️⃣6️⃣ recorrerArray

## 📋 Description

Using the same array `{10, 20, 30, 40, 50}`, iterate through it with a `for` loop and print each element on a separate line.

**Expected output:**
```
10
20
30
40
50
```

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Create an array with the values `{10, 20, 30, 40, 50}`.
2. Use a `for` loop to iterate through the array.
3. Print each element on a separate line.

**Translation to Java:**
1. `int[] numeros = {10, 20, 30, 40, 50};`
2. `for (int i = 0; i < numeros.length; i++)`
3. `System.out.println(numeros[i]);`

---

## 📝 Code

```java
public class RecorrerArray {
    public static void main(String[] args) {
        int[] numeros = {10, 20, 30, 40, 50};
        for (int i = 0; i < numeros.length; i++) {
            System.out.println(numeros[i]);
        }
    }
}
```

**Alternative (enhanced for loop):**

```java
public static void main(String[] args) {
    int[] numeros = {10, 20, 30, 40, 50};
    for (int num : numeros) {
        System.out.println(num);
    }
}
```

---

## 📊 Example Output

| Output |
| :--- |
| `10` |
| `20` |
| `30` |
| `40` |
| `50` |

---

## 🎯 Learning Objectives

- Using a `for` loop to iterate through arrays
- Using the `.length` property of arrays
- Accessing array elements by index
- Using `System.out.println()` for console output
- Understanding loop control (`i < numeros.length`)

---

## ⚠️ Common Mistakes

- Forgetting to use `.length` – Using a fixed number instead of `numeros.length` limits reusability.
- Using `<=` instead of `<` – This would cause an `ArrayIndexOutOfBoundsException`.
- Using `System.out.print` instead of `println` – This would not put each element on a separate line.
- Forgetting the `i++` increment – Would cause an infinite loop.

---

## 🛠️ Technologies Used

- **Java** – Arrays, for loops, `main` method, console output

---

## 📂 Folder Structure

```
16-recorrerArray/
├── RecorrerArray.java
└── README.md
```

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
