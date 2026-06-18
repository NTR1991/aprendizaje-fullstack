# 5️⃣ Functions in JavaScript

## 📋 Description

Practice with functions: declaration, parameters, return, conditional logic inside functions, and string transformation.

---

## 📂 Folder Structure

```
05-functions/
├── index.html
├── css/
│   └── style.css
├── js/
│   └── main.js
└── README.md
```

---

## 📊 Exercises & Results

| Exercise | Description | Code | Output |
| :--- | :--- | :--- | :--- |
| 1 | Function without parameters | `function mostrarMensaje() { console.log("Bienvenido al tema 5"); }`<br>`mostrarMensaje();` | `Bienvenido al tema 5` |
| 2 | Function with one parameter | `function saludar(nombre) { return "Hola " + nombre; }`<br>`console.log(saludar("Pepe"));` | `Hola Pepe` |
| 3 | Function with return | `function doble(numero) { return numero * 2; }`<br>`console.log(doble(8));` | `16` |
| 4 | Function with two parameters and return | `function multiplicar(a, b) { return a * b; }`<br>`console.log(multiplicar(6, 7));` | `42` |
| 5 | Function with conditional | `function esMayor(edad) { return edad >= 18 ? "Mayor de edad" : "Menor de edad"; }`<br>`console.log(esMayor(20));` | `Mayor de edad` |
| 6 | Function with multiple conditionals | `function calificarNota(nota) {`<br>`if (nota >= 90) return "Excelente";`<br>`if (nota >= 70) return "Notable";`<br>`if (nota >= 50) return "Aprobado";`<br>`return "Suspenso"; }`<br>`console.log(calificarNota(85));` | `Notable` |
| 7 | Function with modulus operator | `function esPar(numero) { return numero % 2 === 0; }`<br>`console.log(esPar(7));` | `false` |
| 8 | Function with logical conditions | `function puedeConducir(edad, tieneCarnet) {`<br>`return edad >= 18 && tieneCarnet ? "Puede conducir" : "No puede conducir"; }`<br>`console.log(puedeConducir(20, true));` | `Puede conducir` |
| 9 | Function with multiple operations | `function calcular(operacion, a, b) {`<br>`switch(operacion) {`<br>`case "suma": return a + b;`<br>`case "resta": return a - b;`<br>`case "multiplicacion": return a * b;`<br>`case "division": return a / b;`<br>`default: return "Operacion no valida"; } }`<br>`console.log(calcular("multiplicacion", 5, 3));` | `15` |
| 10 | Function with string transformation | `function formatearNombre(nombre, apellido) {`<br>`return nombre.charAt(0).toUpperCase() + nombre.slice(1).toLowerCase() + " " +`<br>`apellido.charAt(0).toUpperCase() + apellido.slice(1).toLowerCase(); }`<br>`console.log(formatearNombre("ElvIRA", "REyES"));` | `Elvira Reyes` |

---

## 🧪 Key Learnings

- `function` declares a function.
- Parameters are variables the function receives inside `()`.
- `return` sends a value out of the function and stops its execution.
- Without `return`, the function returns `undefined`.
- A function is called by its name followed by `()`.

---

## ✅ Self-Assessment Test (Answers)

| Question | Answer |
| :--- | :--- |
| 1. What keyword is used to declare a function? | `function` |
| 2. What are parameters? | Parameters are variables that the function receives (e.g., `function sumar(a, b)`). |
| 3. What does `return` do? | `return` sends a value out of the function and stops its execution. |
| 4. What does a function return if there is no `return` statement? | The function returns `undefined`. |
| 5. How do you call a function named `sumar` with arguments `5` and `3`? | By its name followed by `()`: `sumar(5, 3)`. |

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
