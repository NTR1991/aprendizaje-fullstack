// Ejercicio 1 – map()
const celsius = [0, 10, 20, 30];
const fahrenheit = celsius.map(temp => (temp * 9/5) + 32);
console.log("Ejercicio 1 - Fahrenheit:");
console.log(fahrenheit);






// Ejercicio 2 – filter() + map()
const precios = [15, 25, 10, 40, 30, 20];
const preciosFiltrados = precios.filter(precio => precio > 20);
const preciosConDescuento = preciosFiltrados.map(precio => precio * 0.9);
console.log("Ejercicio 2 - Precios con descuento:");
console.log(preciosConDescuento);






// Ejercicio 3 – filter() + map() + sort() + reduce()
const products = [
    { name: "Laptop", price: 1200 },
    { name: "Mouse", price: 25 },
    { name: "Keyboard", price: 80 },
    { name: "Monitor", price: 300 }
];

const productosBaratos = products.filter(product => product.price < 100);
const productosConDescuento2 = productosBaratos.map(product => ({
    ...product,
    discountPrice: product.price * 0.85
}));
const productosOrdenados = productosConDescuento2.sort((a, b) => a.discountPrice - b.discountPrice);
const totalDescuento = productosOrdenados.reduce((sum, product) => sum + product.discountPrice, 0);

console.log("Ejercicio 3 - Productos con descuento:");
console.log(productosOrdenados);
console.log("Total con descuento: " + totalDescuento);
