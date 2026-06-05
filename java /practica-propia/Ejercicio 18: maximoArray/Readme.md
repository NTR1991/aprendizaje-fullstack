# MaximoArray 📈

## 📋 Description

Encuentra el valor máximo dentro del array `{10, 20, 30, 40, 50}` y muéstralo.

**Expected output:** `Máximo: 50`

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

18-maximoArray/  
MaximoArray.java  
README.md

---

## 🧮 Code

```java
public class MaximoArray {
    public static void main(String[] args) {
        int[] numeros = {10, 20, 30, 40, 50};
        int max = numeros[0];
        for (int i = 1; i < numeros.length; i++) {
            if (numeros[i] > max) {
                max = numeros[i];
            }
        }
        System.out.println("Máximo: " + max);
    }
}
```

## 📊 Example Output

| Output |
|--------|
| Máximo: 50 |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
