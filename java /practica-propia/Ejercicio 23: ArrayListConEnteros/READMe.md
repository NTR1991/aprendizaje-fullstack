# ArrayListConEnteros 🔢

## 📋 Description

Crea un `ArrayList<Integer>` con los números `10, 20, 30`. Elimina el elemento que está en la posición 1 (el 20). Luego muestra todos los elementos restantes con un bucle for-each.

**Expected output:**
```
10
30
```

---

## 🛠️ Technologies Used

- ☕ Java
- `java.util.ArrayList`

---

## 📁 Project Structure

23-arrayListConEnteros/  
ArrayListConEnteros.java  
README.md

---

## 🧮 Code

```java
import java.util.ArrayList;

public class ArrayListConEnteros {
    public static void main(String[] args) {
        ArrayList<Integer> numeros = new ArrayList<>();
        numeros.add(10);
        numeros.add(20);
        numeros.add(30);
        numeros.remove(1);
        for (int n : numeros) {
            System.out.println(n);
        }
    }
}
```

## 📊 Example Output

| Output |
|--------|
| 10 |
| 30 |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
