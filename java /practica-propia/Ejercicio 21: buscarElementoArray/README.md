# BuscarElementoArray 🔍

## 📋 Description

En el array `{5, 10, 15, 20, 25}`, busca el número 15. Si existe, muestra `"Encontrado"`; si no, `"No encontrado"`.

**Expected output:** `Encontrado`

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

21-buscarElementoArray/  
BuscarElementoArray.java  
README.md

---

## 🧮 Code

```java
public class BuscarElementoArray {
    public static void main(String[] args) {
        int[] numeros = {5, 10, 15, 20, 25};
        int buscar = 15;
        boolean encontrado = false;
        for (int i = 0; i < numeros.length; i++) {
            if (numeros[i] == buscar) {
                encontrado = true;
                break;
            }
        }
        if (encontrado) {
            System.out.println("Encontrado");
        } else {
            System.out.println("No encontrado");
        }
    }
}
```

## 📊 Example Output

| Output |
|--------|
| Encontrado |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
