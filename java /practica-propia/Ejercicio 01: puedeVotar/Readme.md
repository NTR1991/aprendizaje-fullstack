# PuedeVotar 🗳️

## 📋 Description

Returns true if the person is 18 or older AND is a citizen.

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

01-puedeVotar/  
PuedeVotar.java  
README.md

---

## 🧮 Code

public class PuedeVotar {
    public static boolean puedeVotar(int edad, boolean esCiudadano) {
        return edad >= 18 && esCiudadano;
    }
}

---

## 📊 Examples

| edad | esCiudadano | Result |
|------|-------------|--------|
| 20 | true | true |
| 16 | true | false |
| 20 | false | false |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
