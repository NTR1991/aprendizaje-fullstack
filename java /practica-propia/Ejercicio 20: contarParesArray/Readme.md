# ContarParesArray 🔢

## 📋 Description

Dado el array `{10, 21, 32, 43, 54}`, cuenta cuántos números son pares (divisibles entre 2) y muestra el resultado.

**Expected output:** `Cantidad de pares: 3`

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

20-contarParesArray/  
ContarParesArray.java  
README.md

---

## 🧮 Code

```java
public class ContarParesArray {
    public static void main(String[] args) {
        int[] numeros = {10, 21, 32, 43, 54};
        int contador = 0;
        for (int i = 0; i < numeros.length; i++) {
            if (numeros[i] % 2 == 0) {
                contador++;
            }
        }
        System.out.println("Cantidad de pares: " + contador);
    }
}
```

## 📊 Example Output

| Output |
|--------|
| Cantidad de pares: 3 |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
