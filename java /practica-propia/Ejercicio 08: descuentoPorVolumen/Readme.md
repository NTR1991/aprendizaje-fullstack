# DescuentoPorVolumen 📦

## 📋 Description

Returns true if quantity is 10 or more OR is a frequent customer. If quantity is 0, returns false.

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

08-descuentoPorVolumen/  
DescuentoPorVolumen.java  
README.md

---

## 🧮 Code

public class DescuentoPorVolumen {
    public static boolean descuentoPorVolumen(int cantidad, boolean esClienteFrecuente) {
        if (cantidad == 0) {
            return false;
        }
        return cantidad >= 10 || esClienteFrecuente;
    }
}

---

## 📊 Examples

| cantidad | esClienteFrecuente | Result |
|----------|-------------------|--------|
| 15 | false | true |
| 5 | true | true |
| 5 | false | false |
| 0 | true | false |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
