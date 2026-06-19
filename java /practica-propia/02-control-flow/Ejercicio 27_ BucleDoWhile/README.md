# 2️⃣7️⃣ BucleDoWhile

## 📋 Description

Write a program that displays the numbers from 1 to 5 using a `do-while` loop.

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
2. Use a `do-while` loop to iterate while `i <= 5`.
3. Print the current value of `i`.
4. Increment `i` by 1 (`i++`).

**Translation to Java:**
1. `int i = 1;`
2. `do {`
3. `System.out.println(i);`
4. `i++; } while (i <= 5);`

---

## 📝 Code

```java
public class BucleDoWhile {
    public static void main(String[] args) {
        int i = 1;
        do {
            System.out.println(i);
            i++;
        } while (i <= 5);
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

**Alternative (while loop):**

```java
public static void main(String[] args) {
    int i = 1;
    while (i <= 5) {
        System.out.println(i);
        i++;
    }
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

- Using the `do-while` loop in Java
- Understanding loop conditions (`i <= 5`)
- Using increment operators (`i++`)
- Understanding the difference between `do-while` and `while`
- Working with the `main` method

---

## ⚠️ Common Mistakes

- Forgetting to increment the counter (`i++`) – Would cause an infinite loop.
- Using `>` instead of `<=` – Would skip the value `5`.
- Forgetting the opening/closing braces `{}` – Would cause compilation errors.
- Using `System.out.print` instead of `println` – Would not put each number on a separate line.
- Confusing `do-while` with `while` – `do-while` always executes at least once, regardless of the condition.

---

## 🛠️ Technologies Used

- **Java** – `do-while` loop, `main` method, console output

---

## 📂 Folder Structure

```
27-BucleDoWhile/
├── BucleDoWhile.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
