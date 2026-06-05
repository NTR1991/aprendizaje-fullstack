# ArrayListBasico 📋

## 📋 Description

Crea un `ArrayList<String>` llamado `nombres`. Añade `"Ana"`, `"Luis"`, `"Elena"`. Recorre el `ArrayList` con un bucle for-each y muestra cada nombre.

**Expected output:**
```
Ana
Luis
Elena
```

---

## 🛠️ Technologies Used

- ☕ Java
- `java.util.ArrayList`

---

## 📁 Project Structure

22-arrayListBasico/  
ArrayListBasico.java  
README.md

---

## 🧮 Code

```java
import java.util.ArrayList;

public class ArrayListBasico {
    public static void main(String[] args) {
        ArrayList<String> nombres = new ArrayList<>();
        nombres.add("Ana");
        nombres.add("Luis");
        nombres.add("Elena");
        for (String n : nombres) {
            System.out.println(n);
        }
    }
}
```

## 📊 Example Output

| Output |
|--------|
| Ana |
| Luis |
| Elena |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
