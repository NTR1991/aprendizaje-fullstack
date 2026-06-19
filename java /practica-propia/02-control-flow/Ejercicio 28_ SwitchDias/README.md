# 2️⃣8️⃣ SwitchDias

## 📋 Description

Declares an `int dia = 3`. Uses a `switch` statement to display the corresponding day name (1=Monday, 2=Tuesday, 3=Wednesday, etc.). For any other value, displays `"Invalid"`.

**Expected output:** `Miércoles`

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Declare an integer variable `dia` with a value of `3`.
2. Use a `switch` statement to check the value of `dia`.
3. For each case (1-5), print the corresponding day name.
4. For any other value (default), print `"Invalid"`.

**Translation to Java:**
1. `int dia = 3;`
2. `switch (dia) {`
3. `case 1: System.out.println("Lunes"); break;`
4. `case 2: System.out.println("Martes"); break;`
5. `case 3: System.out.println("Miércoles"); break;`
6. `case 4: System.out.println("Jueves"); break;`
7. `case 5: System.out.println("Viernes"); break;`
8. `case 6: System.out.println("Sábado"); break;`
9. `case 7: System.out.println("Domingo"); break;`
10. `default: System.out.println("No válido");`

---

## 📝 Code

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
            case 4:
                System.out.println("Jueves");
                break;
            case 5:
                System.out.println("Viernes");
                break;
            case 6:
                System.out.println("Sábado");
                break;
            case 7:
                System.out.println("Domingo");
                break;
            default:
                System.out.println("No válido");
        }
    }
}
```

**Alternative (with String input):**

```java
public static void main(String[] args) {
    int dia = 3;
    String nombreDia = "";
    switch (dia) {
        case 1:
            nombreDia = "Lunes";
            break;
        case 2:
            nombreDia = "Martes";
            break;
        case 3:
            nombreDia = "Miércoles";
            break;
        case 4:
            nombreDia = "Jueves";
            break;
        case 5:
            nombreDia = "Viernes";
            break;
        case 6:
            nombreDia = "Sábado";
            break;
        case 7:
            nombreDia = "Domingo";
            break;
        default:
            nombreDia = "No válido";
    }
    System.out.println(nombreDia);
}
```

---

## 📊 Examples

| `dia` Value | Output |
| :--- | :--- |
| `1` | `Lunes` |
| `2` | `Martes` |
| `3` | `Miércoles` |
| `4` | `Jueves` |
| `5` | `Viernes` |
| `6` | `Sábado` |
| `7` | `Domingo` |
| `8` | `No válido` |

---

## 🎯 Learning Objectives

- Using the `switch` statement in Java
- Using `case` labels for different values
- Using the `break` statement to prevent fall-through
- Using `default` for values not matched
- Understanding control flow in `switch` statements

---

## ⚠️ Common Mistakes

- Forgetting the `break` statement – Would cause fall-through to the next case.
- Using the wrong variable type – `switch` works with `int`, `char`, `String`, and `enum`.
- Using the wrong case value – `case 1` for Monday, `case 2` for Tuesday, etc.
- Forgetting the `default` case – Would not handle invalid inputs.
- Using `System.out.print` instead of `println` – Would not properly format the output.

---

## 🛠️ Technologies Used

- **Java** – `switch` statement, `main` method, console output

---

## 📂 Folder Structure

```
28-SwitchDias/
├── SwitchDias.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
