//Ejercicio1 

const precios = [15, 25, 10, 40, 30, 20];

const primerMayor = precios.find(precio => precio > 25);

console.log(primerMayor);


const colores = ["rojo", "verde", "azul", "amarillo"];

const existeAzul = colores.includes("azul");

console.log(existeAzul);



//Ejercicio2

const edades = [15, 22, 18, 30, 12];
const hayMayorDe25 = edades.some(edad => edad > 25);

console.log("¿Hay alguien mayor de 25?", hayMayorDe25);


const precios = [15, 25, 10, 40, 30, 20];
const todosMenoresDe50 = precios.every(precio => precio < 50);


console.log("¿Todos los precios son menores de 50?", todosMenoresDe50);



//Ejercicio3

const productos = [
    {nombre: "Laptop", precio: 1200},
    {nombre: "Mouse", precio: 25},
    {nombre: "Teclado", precio: 80},
    {nombre: "Monitor", precio: 300}
];

const indice = productos.findIndex(producto => producto.precio > 100);

console.log("Índice del producto a eliminar:", indice);

productos.splice(indice, 1);

console.log("Productos después de eliminar:", productos);