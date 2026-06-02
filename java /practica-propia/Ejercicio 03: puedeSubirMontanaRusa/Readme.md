# PuedeSubirMontañaRusa 🎢

## 📋 Description

Returns true if height is at least 120cm AND (has a companion OR height is at least 140cm).

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

03-puedeSubirMontanaRusa/  
PuedeSubirMontanaRusa.java  
README.md

---

## 🧮 Code

public class PuedeSubirMontanaRusa {
    public static boolean puedeSubirMontanaRusa(int altura, boolean tieneAcompanante) {
        return altura >= 120 && (tieneAcompanante || altura >= 140);
    }
}

---

## 📊 Examples

| altura | tieneAcompanante | Result |
|--------|-----------------|--------|
| 150 | false | true |
| 130 | true | true |
| 130 | false | false |
| 110 | true | false |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
