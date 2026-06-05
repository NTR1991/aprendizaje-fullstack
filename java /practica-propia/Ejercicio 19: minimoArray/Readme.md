# MinimoArray 📉

## 📋 Description

Encuentra el valor mínimo dentro del array `{10, 20, 30, 40, 50}` y muéstralo.

**Expected output:** `Mínimo: 10`

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

19-minimoArray/  
MinimoArray.java  
README.md

---

## 🧮 Code

```java
public class MinimoArray {
    public static void main(String[] args) {
        int[] numeros = {10, 20, 30, 40, 50};
        int min = numeros[0];
        for (int i = 1; i < numeros.length; i++) {
            if (numeros[i] < min) {
                min = numeros[i];
            }
        }
        System.out.println("Mínimo: " + min);
    }
}
```

## 📊 Example Output

| Output |
|--------|
| Mínimo: 10 |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
