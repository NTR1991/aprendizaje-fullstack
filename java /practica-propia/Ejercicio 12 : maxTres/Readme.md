# MaxTres 🔢

## 📋 Description

Escribe un método `public static int maxTres(int a, int b, int c)` que reciba tres números enteros y devuelva el mayor de los tres.

**Examples:**
- `maxTres(5, 9, 3) → 9`
- `maxTres(10, 10, 5) → 10`
- `maxTres(-1, -5, -2) → -1`

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

12-maxTres/  
MaxTres.java  
README.md

---

## 🧮 Code

```java
public class MaxTres {
    public static int maxTres(int a, int b, int c) {
        if (a >= b && a >= c) {
            return a;
        }
        if (b >= a && b >= c) {
            return b;
        }
        return c;
    }
}
```

## 📊 Examples

| a | b | c | Result |
|---|---|---|---|
| 5 | 9 | 3 | 9 |
| 10 | 10 | 5 | 10 |
| -1 | -5 | -2 | -1 |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
