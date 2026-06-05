# SwitchDias 📅

## 📋 Description

Declara una variable `int dia = 3`. Usa una estructura `switch` para que muestre el nombre del día correspondiente (1=Lunes, 2=Martes, 3=Miércoles, etc.). Para cualquier otro valor, muestra `"No válido"`.

**Expected output:** `Miércoles`

---

## 🛠️ Technologies Used

- ☕ Java

---

## 📁 Project Structure

28-switchDias/  
SwitchDias.java  
README.md

---

## 🧮 Code

```java
public class SwitchDias {
    public static void main(String[] args) {
        int dia = 3;
        switch (dia) {
            case 1:
                System.out.println("Lunes");
                break;
            case 2:
                System.out.println("Martes");
                break;
            case 3:
                System.out.println("Miércoles");
                break;
            default:
                System.out.println("No válido");
        }
    }
}
```

## 📊 Example Output

| Output |
|--------|
| Miércoles |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
