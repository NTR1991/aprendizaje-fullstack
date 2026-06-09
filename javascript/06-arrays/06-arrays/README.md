# Topic 6: Arrays

---

## 📋 Description

Practice with arrays: creation, access, length, push, pop, unshift, shift, indexOf, includes, join, map, filter, reduce, slice, splice, concat, and method chaining.

---

## 📁 Folder Structure

````
06-arrays/
├── index.html
├── css/
│ └── style.css
├── js/
│ └── main.js
└── README.md

````

---

## 📊 Exercises & Results

**Exercise 1 (create and access)**  
Create an array `colores` with `"rojo"`, `"verde"`, `"azul"`. Show the second element (index 1) in console.

**Exercise 2 (length)**  
Create an array `notas` with `8, 7, 9, 6, 10`. Show how many elements it has using `.length`.

**Exercise 3 (push)**  
Create an empty array `letras`. Add `"a"`, `"b"`, `"c"` using `.push()`. Show the final array.

**Exercise 4 (pop)**  
Create an array `numeros` with `100, 200, 300, 400`. Remove the last element using `.pop()`. Show the updated array.

**Exercise 5 (indexOf)**  
Create an array `frutas` with `"manzana"`, `"pera"`, `"uva"`, `"naranja"`. Show the index of `"uva"` using `.indexOf()`.

**Exercise 6 (unshift)**  
Create an array `dias` with `"miercoles"`, `"jueves"`, `"viernes"`. Add `"lunes"` and `"martes"` at the beginning using `.unshift()`. Show the final array.

**Exercise 7 (shift)**  
Create an array `verduras` with `"lechuga"`, `"tomate"`, `"cebolla"`, `"pimiento"`. Remove the first element using `.shift()`. Show the updated array.

**Exercise 8 (includes)**  
Create an array `mascotas` with `"perro"`, `"gato"`, `"pez"`. Check if `"gato"` exists using `.includes()`. Show the result.

**Exercise 9 (join)**  
Create an array `palabras` with `"JavaScript"`, `"es"`, `"divertido"`. Convert the array into a text separated by spaces using `.join(" ")`. Show the result.

**Exercise 10 (map)**  
Create an array `temperaturasC` with `0, 10, 20, 30`. Use `.map()` to convert each temperature from Celsius to Fahrenheit using the formula `(celsius × 9/5) + 32`. Show the new array.

**Exercise 11 (filter)**  
Create an array `edades` with `12, 25, 17, 30, 15, 22`. Use `.filter()` to keep only ages greater than or equal to 18. Show the result.

**Exercise 12 (reduce – sum)**  
Create an array `numerosb` with `5, 10, 15, 20`. Use `.reduce()` to calculate the total sum. Show the result.

**Exercise 13 (slice)**  
Create an array `letrasX` with `"a"`, `"b"`, `"c"`, `"d"`, `"e"`, `"f"`. Use `.slice()` to extract a copy from index 2 to index 5 (without including 5). Show the copy.

**Exercise 14 (splice – replace)**  
Create an array `animales` with `"perro"`, `"gato"`, `"ratón"`, `"loro"`. Use `.splice()` to replace `"ratón"` with `"conejo"`. Show the updated array.

**Exercise 15 (concat)**  
Create two arrays: `frutas1 = ["manzana", "pera"]` and `frutas2 = ["uva", "naranja"]`. Use `.concat()` to join them into a new array called `todasLasFrutas`. Show the result.

**Exercise 16 (chain filter + map)**  
Create an array `productos` with `10, 25, 5, 40, 15, 30`. First filter products costing more than 20, then apply a 10% discount (multiply by 0.9). Show the final result.

**Exercise 17 (reduce – count words)**  
Create an array `palabrasF` with `"hola"`, `"mundo"`, `"hola"`, `"javascript"`, `"mundo"`, `"hola"`. Use `.reduce()` to count how many times each word appears. Show the resulting object.

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

## ✅ Test Answers

1. `0`
2. `.push()`
3. `.pop()`
4. `.filter()`
5. `.map()`

---

## 👨‍💻 Author

NTRJ1991 – Full Stack Development (in training)

---

## 📅 Date

June 2026