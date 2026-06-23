# 6️⃣ Arrays in JavaScript

## 📋 Description

Practice with arrays: creation, access, length, push, pop, unshift, shift, indexOf, includes, join, map, filter, reduce, slice, splice, concat, and method chaining.

---

## 📂 Folder Structure

```
06-arrays/
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
| 1 | Create and access array element | `let colores = ["rojo", "verde", "azul"];`<br>`console.log(colores[1]);` | `verde` |
| 2 | Get array length | `let notas = [8, 7, 9, 6, 10];`<br>`console.log(notas.length);` | `5` |
| 3 | Add elements with `push` | `let letras = [];`<br>`letras.push("a", "b", "c");`<br>`console.log(letras);` | `["a", "b", "c"]` |
| 4 | Remove last element with `pop` | `let numeros = [100, 200, 300, 400];`<br>`numeros.pop();`<br>`console.log(numeros);` | `[100, 200, 300]` |
| 5 | Find index with `indexOf` | `let frutas = ["manzana", "pera", "uva", "naranja"];`<br>`console.log(frutas.indexOf("uva"));` | `2` |
| 6 | Add elements to beginning with `unshift` | `let dias = ["miercoles", "jueves", "viernes"];`<br>`dias.unshift("lunes", "martes");`<br>`console.log(dias);` | `["lunes", "martes", "miercoles", "jueves", "viernes"]` |
| 7 | Remove first element with `shift` | `let verduras = ["lechuga", "tomate", "cebolla", "pimiento"];`<br>`verduras.shift();`<br>`console.log(verduras);` | `["tomate", "cebolla", "pimiento"]` |
| 8 | Check existence with `includes` | `let mascotas = ["perro", "gato", "pez"];`<br>`console.log(mascotas.includes("gato"));` | `true` |
| 9 | Convert array to string with `join` | `let palabras = ["JavaScript", "es", "divertido"];`<br>`console.log(palabras.join(" "));` | `JavaScript es divertido` |
| 10 | Transform with `map` (Celsius → Fahrenheit) | `let temperaturasC = [0, 10, 20, 30];`<br>`let f = temperaturasC.map(c => (c * 9/5) + 32);`<br>`console.log(f);` | `[32, 50, 68, 86]` |
| 11 | Filter elements with `filter` | `let edades = [12, 25, 17, 30, 15, 22];`<br>`let mayores = edades.filter(e => e >= 18);`<br>`console.log(mayores);` | `[25, 30, 22]` |
| 12 | Sum with `reduce` | `let numerosb = [5, 10, 15, 20];`<br>`let total = numerosb.reduce((acc, n) => acc + n, 0);`<br>`console.log(total);` | `50` |
| 13 | Extract copy with `slice` | `let letrasX = ["a", "b", "c", "d", "e", "f"];`<br>`let copy = letrasX.slice(2, 5);`<br>`console.log(copy);` | `["c", "d", "e"]` |
| 14 | Replace elements with `splice` | `let animales = ["perro", "gato", "raton", "loro"];`<br>`animales.splice(2, 1, "conejo");`<br>`console.log(animales);` | `["perro", "gato", "conejo", "loro"]` |
| 15 | Join arrays with `concat` | `let frutas1 = ["manzana", "pera"];`<br>`let frutas2 = ["uva", "naranja"];`<br>`let todas = frutas1.concat(frutas2);`<br>`console.log(todas);` | `["manzana", "pera", "uva", "naranja"]` |
| 16 | Chain `filter` + `map` | `let productos = [10, 25, 5, 40, 15, 30];`<br>`let result = productos.filter(p => p > 20).map(p => p * 0.9);`<br>`console.log(result);` | `[22.5, 36, 27]` |
| 17 | Count words with `reduce` | `let palabrasF = ["hola", "mundo", "hola", "javascript", "mundo", "hola"];`<br>`let conteo = palabrasF.reduce((acc, p) => { acc[p] = (acc[p] || 0) + 1; return acc; }, {});`<br>`console.log(conteo);` | `{ hola: 3, mundo: 2, javascript: 1 }` |

---

## 🧪 Key Learnings

- Arrays start at index `0`.
- `.length` returns the number of elements.
- `.push()` adds to the end; `.pop()` removes the last.
- `.unshift()` adds to the beginning; `.shift()` removes the first.
- `.indexOf()` returns the position; `.includes()` checks existence.
- `.join()` converts array to string.
- `.map()` transforms all elements.
- `.filter()` keeps elements that pass a condition.
- `.reduce()` accumulates values into a single result.
- `.slice()` extracts a copy without modifying the original.
- `.splice()` modifies the original (remove, add, replace).
- `.concat()` joins arrays without modifying originals.

---

## ✅ Self-Assessment Test (Answers)

| Question | Answer |
| :--- | :--- |
| 1. What is the index of the first element of an array? | `0` |
| 2. Which method adds an element to the end of an array? | `.push()` |
| 3. Which method removes the last element of an array? | `.pop()` |
| 4. Which method creates a new array with only elements that pass a condition? | `.filter()` |
| 5. Which method creates a new array by applying a function to each element? | `.map()` |

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

June 2026
