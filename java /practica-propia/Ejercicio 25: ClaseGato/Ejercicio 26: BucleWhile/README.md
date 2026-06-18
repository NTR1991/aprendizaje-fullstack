# 2️⃣6️⃣ BucleWhile

## 📋 Description

Write a program that displays the numbers from 1 to 5 using a `while` loop.

**Expected output:**
```
1
2
3
4
5
```

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Initialize a counter variable `i` to `1`.
2. Use a `while` loop to iterate while `i <= 5`.
3. Print the current value of `i`.
4. Increment `i` by 1 (`i++`).

**Translation to Java:**
1. `int i = 1;`
2. `while (i <= 5) {`
3. `System.out.println(i);`
4. `i++; }`

---

## 📝 Code

```java
public class BucleWhile {
    public static void main(String[] args) {
        int i = 1;
        while (i <= 5) {
            System.out.println(i);
            i++;
        }
    }
}
```

**Alternative (for loop):**

```java
public static void main(String[] args) {
    for (int i = 1; i <= 5; i++) {
        System.out.println(i);
    }
}
```

**Alternative (do-while loop):**

```java
public static void main(String[] args) {
    int i = 1;
    do {
        System.out.println(i);
        i++;
    } while (i <= 5);
}
```

---

## 📊 Example Output

| Output |
| :--- |
| `1` |
| `2` |
| `3` |
| `4` |
| `5` |

---

## 🎯 Learning Objectives

- Using the `while` loop in Java
- Understanding loop conditions (`i <= 5`)
- Using increment operators (`i++`)
- Working with the `main` method
- Using `System.out.println()` for console output

---

## ⚠️ Common Mistakes

- Forgetting to increment the counter (`i++`) – Would cause an infinite loop.
- Using `<=` with `5` but starting at `1` – The condition must correctly include `5`.
- Using `>` instead of `<=` – Would skip the value `5`.
- Forgetting the opening/closing braces `{}` – Would cause compilation errors.
- Using `System.out.print` instead of `println` – Would not put each number on a separate line.

---

## 🛠️ Technologies Used

- **Java** – `while` loop, `main` method, console output

---

## 📂 Folder Structure

```
26-BucleWhile/
├── BucleWhile.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
