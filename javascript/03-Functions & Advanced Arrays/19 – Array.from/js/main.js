//Ejercicio1 

const texto = "JavaScript";
const letras = Array.from(texto);

console.log(letras);




//Ejercicio2

const numeros = Array.from({ length: 10 }, (_, i) => (i + 1) * 3);

console.log(numeros);




//Ejercicio3

const nodos = document.querySelectorAll('li');
const listaItems = Array.from(nodos);

listaItems.forEach(item => console.log(item.textContent));
