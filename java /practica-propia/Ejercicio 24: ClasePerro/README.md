# ClasePerro 🐕

## 📋 Description

Crea una clase `Perro` con los atributos privados `nombre` (String) y `edad` (int). Incluye un constructor que reciba ambos valores y un método `ladrar()` que imprima `"Guau guau"`.

---

## 🛠️ Technologies Used

- ☕ Java (OOP)

---

## 📁 Project Structure

24-clasePerro/  
Perro.java  
README.md

---

## 🧮 Code

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

## 📊 Example Usage

```java
Perro perro = new Perro("Rex", 3);
perro.ladrar();  // Output: Guau guau
```

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
