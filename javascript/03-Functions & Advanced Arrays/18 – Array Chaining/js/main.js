//Ejercicio1 

const precios = [15, 25, 10, 40, 30, 20];
const preciosConDescuento = precios
    .filter(precio => precio > 20)
    .map(precio => precio * 0.9);


console.log(preciosConDescuento);





//Ejercicio2

const precios = [15, 25, 10, 40, 30, 20];
const total = precios
    .filter(precio => precio > 20)
    .map(precio => precio * 0.9)
    .reduce((sum, precio) => sum + precio, 0);

console.log(total);





//Ejercicio3


const productos = [
    { nombre: "Laptop", precio: 1200 },
    { nombre: "Mouse", precio: 25 },
    { nombre: "Teclado", precio: 80 },
    { nombre: "Monitor", precio: 300 }
];

const productosConDescuento = productos
    .filter(producto => producto.precio > 50)
    .map(producto =>  ({
        ...producto,
        precioDescuento: producto.precio * 0.85
    }))

    .sort((a,b) => a.precioDescuento - b.precioDescuento);

console.log(productosConDescuento);

