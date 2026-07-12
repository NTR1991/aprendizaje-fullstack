//Ejercicio1 

const numeros = Array.of(10, 20, 30, 40, 50);

console.log(numeros);




//Ejercicio2

const conOf = Array.of(7);
const conConstructor = Array(7);

console.log("Array.of(7):", conOf);
console.log("Array(7):", conConstructor);


//Ejercicio3

const numeros = Array.of(2, 4, 6, 8, 10);
const multiplicados = numeros.map(num => num * 3);


console.log("Original:", numeros);
console.log("Multiplicados por 3:", multiplicados);