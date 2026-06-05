# ClaseGato 🐱

## 📋 Description

Crea una clase `Gato` con los atributos `nombre` (String) y `color` (String). Constructor que reciba ambos y un método `maullar()` que imprima `"Miau miau"`.

---

## 🛠️ Technologies Used

- ☕ Java (OOP)

---

## 📁 Project Structure

25-claseGato/  
Gato.java  
README.md

---

## 🧮 Code

```java
public class Gato {
    String nombre;
    String color;

    public Gato(String nombre, String color) {
        this.nombre = nombre;
        this.color = color;
    }

    public void maullar() {
        System.out.println("Miau miau");
    }
}
```

## 📊 Example Usage

```java
Gato gato = new Gato("Luna", "negro");
gato.maullar();  // Output: Miau miau
```

## 👨‍💻 Author

NTR1991 - Fullstack Development Student

## 📅 Date

June 2026
