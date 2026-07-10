//Ejercicio 1 

const user = { name: "Carlos", email: "carlos@email.com", age: 30 };

const { name, email } = user;

console.log("Ejercicio 1 - Nombre:", name);



//Ejercicio2


const colors = ["red", "green"];

const [first, second, third = "blue"] = colors;

console.log("Ejercicio 2 - Colores:");
console.log("Primero:", first);
console.log("Segundo:", second);
console.log("Tercero (por defecto):", third);


//Ejercicio3


const product = {
    title: "Monitor",
    price: 300,
    specs: { size: "27 inch", resolution: "4K" }
};

const {
    title: nombre,
    price: precio,
    specs: { size: tamano, resolution: resolucion }
} = product;

console.log("Ejercicio 3 - Producto:");
console.log("Nombre:", nombre);
console.log("Precio:", precio);
console.log("Tamaño:", tamano);
console.log("Resolución:", resolucion);