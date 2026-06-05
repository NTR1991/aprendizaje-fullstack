# MedioTres 🎯

## 📋 Description

Escribe un método `public static int medioTres(int a, int b, int c)` que devuelva el número del medio (el que no es ni el mayor ni el menor).

**Examples:**
- `medioTres(5, 9, 3) → 5`
- `medioTres(10, 10, 5) → 10`
- `medioTres(7, 2, 9) → 7`

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

14-medioTres/  
MedioTres.java  
README.md

---

## 🧮 Code

```java
public class MedioTres {
    public static int medioTres(int a, int b, int c) {
        int min = a;
        if (b < min) min = b;
        if (c < min) min = c;

        int max = a;
        if (b > max) max = b;
        if (c > max) max = c;

        return a + b + c - min - max;
    }
}
```

## 📊 Examples

| a | b | c | Result |
|---|---|---|---|
| 5 | 9 | 3 | 5 |
| 10 | 10 | 5 | 10 |
| 7 | 2 | 9 | 7 |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
