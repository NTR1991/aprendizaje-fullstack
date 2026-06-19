# 2️⃣9️⃣ CalculadoraSimple

## 📋 Description

Creates a simple calculator that takes two numbers and an operation (+, -, *, /). Uses `switch` to perform the calculation and display the result. Handles division by zero.

**Example input:**
```
Primer número: 10
Operación: *
Segundo número: 5
```

**Expected output:** `10.0 * 5.0 = 50.0`

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Import `Scanner` for user input.
2. Prompt the user for two numbers and an operation.
3. Use a `switch` statement to perform the selected operation.
4. Handle division by zero.
5. Display the result.

**Translation to Java:**
1. `import java.util.Scanner;`
2. `Scanner sc = new Scanner(System.in);`
3. `double a = sc.nextDouble();`
4. `char op = sc.next().charAt(0);`
5. `double b = sc.nextDouble();`
6. `switch (op) { case '+': resultado = a + b; break; ... }`
7. `System.out.println(a + " " + op + " " + b + " = " + resultado);`
8. `sc.close();`

---

## 📝 Code

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

---

## 📊 Examples

| Input | Output |
| :--- | :--- |
| `10, *, 5` | `10.0 * 5.0 = 50.0` |
| `20, /, 4` | `20.0 / 4.0 = 5.0` |
| `7, +, 3` | `7.0 + 3.0 = 10.0` |
| `15, -, 8` | `15.0 - 8.0 = 7.0` |
| `10, /, 0` | `Error: División entre cero` |
| `5, %, 2` | `Operación no válida` |

---

## 🎯 Learning Objectives

- Using `Scanner` for user input
- Using `switch` for control flow
- Handling division by zero
- Working with `char` for operation selection
- Using `double` for decimal numbers
- Closing `Scanner` resources
- Using `return` to exit the program

---

## ⚠️ Common Mistakes

- Not handling division by zero – The program would throw an `ArithmeticException`.
- Not closing the `Scanner` – Could cause resource leaks.
- Using `int` instead of `double` – Would truncate decimal results.
- Forgetting the `break` statement in `switch` – Would cause fall-through.
- Using `String` instead of `char` for the operation – Would require different handling.

---

## 🛠️ Technologies Used

- **Java** – `Scanner`, `switch`, `double` arithmetic, error handling, `main` method

---

## 📂 Folder Structure

```
29-CalculadoraSimple/
├── CalculadoraSimple.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
