# EsNumeroEspecial 🔢

## 📋 Description

Returns true if the number is between 5 and 10 inclusive, except the number 7.

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

04-esNumeroEspecial/  
EsNumeroEspecial.java  
README.md

---

## 🧮 Code

public class EsNumeroEspecial {
    public static boolean esNumeroEspecial(int numero) {
        if (numero == 7) {
            return false;
        }
        return numero >= 5 && numero <= 10;
    }
}

---

## 📊 Examples

| numero | Result |
|--------|--------|
| 5 | true |
| 7 | false |
| 8 | true |
| 11 | false |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
