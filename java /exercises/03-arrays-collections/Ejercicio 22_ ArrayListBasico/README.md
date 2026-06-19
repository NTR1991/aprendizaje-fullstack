# 2️⃣2️⃣ ArrayListBasico

## 📋 Description

Creates an `ArrayList<String>` called `nombres`. Adds `"Ana"`, `"Luis"`, `"Elena"`. Iterates through the `ArrayList` using a for-each loop and displays each name.

**Expected output:**
```
Ana
Luis
Elena
```

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Import the `ArrayList` class from `java.util`.
2. Create an `ArrayList` that stores `String` values.
3. Add three names to the list using the `.add()` method.
4. Iterate through the `ArrayList` using a for-each loop.
5. Print each name on a separate line.

**Translation to Java:**
1. `import java.util.ArrayList;`
2. `ArrayList<String> nombres = new ArrayList<>();`
3. `nombres.add("Ana"); nombres.add("Luis"); nombres.add("Elena");`
4. `for (String n : nombres) { System.out.println(n); }`

---

## 📝 Code

```java
import java.util.ArrayList;

public class ArrayListBasico {
    public static void main(String[] args) {
        ArrayList<String> nombres = new ArrayList<>();
        nombres.add("Ana");
        nombres.add("Luis");
        nombres.add("Elena");
        for (String n : nombres) {
            System.out.println(n);
        }
    }
}
```

**Alternative (traditional for loop):**

```java
public static void main(String[] args) {
    ArrayList<String> nombres = new ArrayList<>();
    nombres.add("Ana");
    nombres.add("Luis");
    nombres.add("Elena");
    for (int i = 0; i < nombres.size(); i++) {
        System.out.println(nombres.get(i));
    }
}
```

---

## 📊 Example Output

| Output |
| :--- |
| `Ana` |
| `Luis` |
| `Elena` |

---

## 🎯 Learning Objectives

- Importing classes from `java.util`
- Using `ArrayList` to store objects
- Using the `.add()` method to add elements
- Using the `.size()` method to get the list length
- Using the `.get()` method to access elements
- Using for-each loops with collections

---

## ⚠️ Common Mistakes

- Forgetting to import `ArrayList` – Would cause compilation errors.
- Using `new ArrayList()` without specifying the type – Would create a raw type, which is not recommended.
- Using `int` instead of `String` for the type parameter – Would cause type mismatch errors.
- Using a standard `for` loop without `.size()` – Would cause `IndexOutOfBoundsException`.
- Forgetting the parentheses in `.add()` – Would cause compilation errors.

---

## 🛠️ Technologies Used

- **Java** – `ArrayList`, for-each loops, `main` method, console output

---

## 📂 Folder Structure

```
22-ArrayListBasico/
├── ArrayListBasico.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
