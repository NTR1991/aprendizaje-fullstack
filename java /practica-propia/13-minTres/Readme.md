# MinTres 🔢

## 📋 Description

Escribe un método `public static int minTres(int a, int b, int c)` que devuelva el menor de los tres números.

**Examples:**
- `minTres(5, 9, 3) → 3`
- `minTres(10, 10, 5) → 5`
- `minTres(-1, -5, -2) → -5`

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

13-minTres/  
MinTres.java  
README.md

---

## 🧮 Code

```java
public class MinTres {
    public static int minTres(int a, int b, int c) {
        if (a <= b && a <= c) {
            return a;
        }
        if (b <= a && b <= c) {
            return b;
        }
        return c;
    }
}
```

## 📊 Examples

| a | b | c | Result |
|---|---|---|---|
| 5 | 9 | 3 | 3 |
| 10 | 10 | 5 | 5 |
| -1 | -5 | -2 | -5 |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
