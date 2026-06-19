# 2️⃣3️⃣ ArrayListConEnteros

## 📋 Description

Creates an `ArrayList<Integer>` with the numbers `10, 20, 30`. Removes the element at index 1 (which is `20`). Then displays all remaining elements using a for-each loop.

**Expected output:**
```
10
30
```

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Import the `ArrayList` class from `java.util`.
2. Create an `ArrayList` that stores `Integer` values.
3. Add three numbers to the list using the `.add()` method.
4. Remove the element at index `1` using the `.remove()` method.
5. Iterate through the `ArrayList` using a for-each loop.
6. Print each remaining number on a separate line.

**Translation to Java:**
1. `import java.util.ArrayList;`
2. `ArrayList<Integer> numeros = new ArrayList<>();`
3. `numeros.add(10); numeros.add(20); numeros.add(30);`
4. `numeros.remove(1);`
5. `for (int n : numeros) { System.out.println(n); }`

---

## 📝 Code

```java
import java.util.ArrayList;

public class ArrayListConEnteros {
    public static void main(String[] args) {
        ArrayList<Integer> numeros = new ArrayList<>();
        numeros.add(10);
        numeros.add(20);
        numeros.add(30);
        numeros.remove(1);
        for (int n : numeros) {
            System.out.println(n);
        }
    }
}
```

**Alternative (traditional for loop):**

```java
public static void main(String[] args) {
    ArrayList<Integer> numeros = new ArrayList<>();
    numeros.add(10);
    numeros.add(20);
    numeros.add(30);
    numeros.remove(1);
    for (int i = 0; i < numeros.size(); i++) {
        System.out.println(numeros.get(i));
    }
}
```

---

## 📊 Example Output

| Output |
| :--- |
| `10` |
| `30` |

---

## 🧪 Additional Tests

| Action | List Before | List After |
| :--- | :--- | :--- |
| Add `10, 20, 30` | `[]` | `[10, 20, 30]` |
| Remove `index 1` | `[10, 20, 30]` | `[10, 30]` |
| Print elements | `[10, 30]` | Output: `10` `30` |

---

## 🎯 Learning Objectives

- Using `ArrayList` with `Integer` wrapper class
- Using the `.remove(int index)` method to delete elements
- Understanding that `ArrayList` elements shift after removal
- Using for-each loops with collections
- Using the `.size()` method for traditional loops

---

## ⚠️ Common Mistakes

- Using `int` instead of `Integer` – This works due to autoboxing, but must be consistent.
- Removing an element by value instead of index – `remove(1)` removes by index, while `remove(Integer.valueOf(20))` removes by value.
- Removing an index that doesn't exist – Would cause `IndexOutOfBoundsException`.
- Forgetting to import `ArrayList` – Would cause compilation errors.
- Using `System.out.print` instead of `println` – Would not put each element on a separate line.

---

## 🛠️ Technologies Used

- **Java** – `ArrayList`, `Integer`, `remove()` method, for-each loops, `main` method, console output

---

## 📂 Folder Structure

```
23-ArrayListConEnteros/
├── ArrayListConEnteros.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
