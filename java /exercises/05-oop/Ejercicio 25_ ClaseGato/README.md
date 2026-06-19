# 2️⃣5️⃣ ClaseGato

## 📋 Description

Creates a `Gato` class with private attributes `nombre` (String) and `color` (String). Includes a constructor that receives both values and a method `maullar()` that prints `"Miau miau"`.

---

## 🧠 Logic Breakdown

The problem asks us to:
1. Define a class with private attributes.
2. Implement a constructor to initialize the attributes.
3. Create a method that prints a fixed message.

**Translation to Java:**
1. `private String nombre;`
2. `private String color;`
3. `public Gato(String nombre, String color) { this.nombre = nombre; this.color = color; }`
4. `public void maullar() { System.out.println("Miau miau"); }`

---

## 📝 Code

```java
public class Gato {
    private String nombre;
    private String color;

    public Gato(String nombre, String color) {
        this.nombre = nombre;
        this.color = color;
    }

    public void maullar() {
        System.out.println("Miau miau");
    }
}
```

**Alternative with getters:**

```java
public class Gato {
    private String nombre;
    private String color;

    public Gato(String nombre, String color) {
        this.nombre = nombre;
        this.color = color;
    }

    public void maullar() {
        System.out.println("Miau miau");
    }

    public String getNombre() {
        return nombre;
    }

    public String getColor() {
        return color;
    }
}
```

---

## 📊 Example Usage

| Method Call | Output |
| :--- | :--- |
| `Gato gato = new Gato("Luna", "negro");` | (No output) |
| `gato.maullar();` | `Miau miau` |

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
- Not making attributes private – The problem asks for `private` (encapsulation).

---

## 🛠️ Technologies Used

- **Java** – OOP, classes, private fields, constructors, methods

---

## 📂 Folder Structure

```
25-ClaseGato/
├── Gato.java
└── README.md
```

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
