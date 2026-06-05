# SumarArray ➕

## 📋 Description

Suma todos los elementos del array `{10, 20, 30, 40, 50}` y muestra el resultado.

**Expected output:** `Suma: 150`

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

17-sumarArray/  
SumarArray.java  
README.md

---

## 🧮 Code

```java
public class SumarArray {
    public static void main(String[] args) {
        int[] numeros = {10, 20, 30, 40, 50};
        int suma = 0;
        for (int i = 0; i < numeros.length; i++) {
            suma += numeros[i];
        }
        System.out.println("Suma: " + suma);
    }
}
```

## 📊 Example Output

| Output |
|--------|
| Suma: 150 |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
