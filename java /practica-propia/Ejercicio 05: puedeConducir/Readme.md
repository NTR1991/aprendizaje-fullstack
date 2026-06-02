# PuedeConducir 🚗

## 📋 Description

Returns true if:
- Practice driving and age >= 16, OR
- Age >= 65, OR
- Age >= 18 and has license

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

05-puedeConducir/  
PuedeConducir.java  
README.md

---

## 🧮 Code

public class PuedeConducir {
    public static boolean puedeConducir(int edad, boolean tieneLicencia, boolean esPractica) {
        if (esPractica && edad >= 16) {
            return true;
        }
        if (edad >= 65) {
            return true;
        }
        return edad >= 18 && tieneLicencia;
    }
}

---

## 📊 Examples

| edad | tieneLicencia | esPractica | Result |
|------|---------------|------------|--------|
| 17 | true | false | false |
| 16 | false | true | true |
| 65 | false | false | true |
| 18 | true | false | true |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
