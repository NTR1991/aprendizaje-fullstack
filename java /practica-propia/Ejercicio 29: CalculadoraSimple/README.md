# CalculadoraSimple 🧮

## 📋 Description

Crea una calculadora que pida dos números y una operación (+, -, *, /). Usa `switch` para realizar la operación y mostrar el resultado. Controla la división entre cero.

**Example input:**
```
Primer número: 10
Operación: *
Segundo número: 5
```

**Expected output:** `10.0 * 5.0 = 50.0`

---

## 🛠️ Technologies Used

- ☕ Java
- `java.util.Scanner`

---

## 📁 Project Structure

29-calculadoraSimple/  
CalculadoraSimple.java  
README.md

---

## 🧮 Code

```java
import java.util.Scanner;

public class CalculadoraSimple {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Primer número: ");
        double a = sc.nextDouble();
        System.out.print("Operación (+, -, *, /): ");
        char op = sc.next().charAt(0);
        System.out.print("Segundo número: ");
        double b = sc.nextDouble();
        double resultado = 0;
        switch (op) {
            case '+':
                resultado = a + b;
                break;
            case '-':
                resultado = a - b;
                break;
            case '*':
                resultado = a * b;
                break;
            case '/':
                if (b != 0) {
                    resultado = a / b;
                } else {
                    System.out.println("Error: División entre cero");
                    sc.close();
                    return;
                }
                break;
            default:
                System.out.println("Operación no válida");
                sc.close();
                return;
        }
        System.out.println(a + " " + op + " " + b + " = " + resultado);
        sc.close();
    }
}
```

## 📊 Example Output

| Input | Output |
|-------|--------|
| 10, *, 5 | 10.0 * 5.0 = 50.0 |

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
