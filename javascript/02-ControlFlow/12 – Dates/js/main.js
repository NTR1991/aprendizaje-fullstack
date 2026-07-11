//Ejercicio1 

const date = new Date();
console.log(date.getDate());
console.log(date.getMonth() + 1);
console.log(date.getFullYear());





//Ejercicio2

const date = new Date();
const cumple = new Date(1991, 0, 15);

let edad = date.getFullYear() - cumple.getFullYear();

// Ajuste: si aún no ha cumplido años este año, restar 1
if (date.getMonth() < cumple.getMonth() || 
    (date.getMonth() === cumple.getMonth() && date.getDate() < cumple.getDate())) {
    edad--;
}

console.log(edad);




//Ejercicio3

// 1. Fecha de nacimiento (15 de enero de 1991)
const cumple = new Date(1991, 0, 15);

// 2. Fecha actual
const hoy = new Date();

// 3. Crear la fecha del próximo cumpleaños (este año)
let proximoCumple = new Date(hoy.getFullYear(), cumple.getMonth(), cumple.getDate());

// 4. Si el próximo cumpleaños ya pasó este año, sumamos 1 año
if (proximoCumple < hoy) {
    proximoCumple.setFullYear(proximoCumple.getFullYear() + 1);
}

// 5. Calcular la diferencia en milisegundos y convertirlo a días
const diferencia = proximoCumple - hoy;
const dias = Math.ceil(diferencia / (1000 * 60 * 60 * 24));


console.log("Faltan " + dias + " días para tu próximo cumpleaños.");
