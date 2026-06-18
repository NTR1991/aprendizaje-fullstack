# 2️⃣4️⃣ ClasePerro

## 📋 Description

Creates a `Perro` class with private attributes `nombre` (String) and `edad` (int). Includes a constructor that receives both values and a method `ladrar()` that prints `"Guau guau"`.

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Define a class with private attributes.
2. Implement a constructor to initialize the attributes.
3. Create a method that prints a fixed message.

**Translation to Java:**
1. `private String nombre;`
2. `private int edad;`
3. `public Perro(String nombre, int edad) { this.nombre = nombre; this.edad = edad; }`
4. `public void ladrar() { System.out.println("Guau guau"); }`

---

## 📝 Code

```java
public class Perro {
    private String nombre;
    private int edad;

    public Perro(String nombre, int edad) {
        this.nombre = nombre;
        this.edad = edad;
    }

    public void ladrar() {
        System.out.println("Guau guau");
    }
}
```

**Alternative with getters:**

```java
public class Perro {
    private String nombre;
    private int edad;

    public Perro(String nombre, int edad) {
        this.nombre = nombre;
        this.edad = edad;
    }

    public void ladrar() {
        System.out.println("Guau guau");
    }

    public String getNombre() {
        return nombre;
    }

    public int getEdad() {
        return edad;
    }
}
```

---

## 📊 Example Usage

| Method Call | Output |
| :--- | :--- |
| `Perro perro = new Perro("Rex", 3);` | (No output) |
| `perro.ladrar();` | `Guau guau` |

---

## 🎯 Learning Objectives

- Defining classes in Java
- Using private attributes (encapsulation)
- Using the `this` keyword
- Creating constructors
- Defining methods
- Using `System.out.println()` for output

---

## ⚠️ Common Mistakes

- Forgetting the `this` keyword – Would cause shadowing issues.
- Using `public` instead of `private` for attributes – Encapsulation would be broken.
- Forgetting the return type in the constructor – Constructors have no return type.
- Using `void` in the constructor – Constructors have no return type.
- Not importing anything – This class doesn't require any imports.

---

## 🛠️ Technologies Used

- **Java** – OOP, classes, private fields, constructors, methods

---

## 📂 Folder Structure

```
24-ClasePerro/
├── Perro.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
