//Ejercicio1 

function saludar(nombre, callback) {
    // 1. Mostrar saludo
    console.log("Hola, " + nombre);
    // 2. Ejecutar el callback
    callback();
}

saludar("Carlos", function() {
    console.log("¡Bienvenido!");
});



//Ejercicio2

function procesarArray(array, callback) {
    array.forEach(function(elemento) {
        callback(elemento);
    });
}

procesarArray([1, 2, 3, 4], function(num) {
    console.log(num * 2);
});



//Ejercicio3


function operacionSegura(a, b, callback) {
    if (b === 0) {
        callback("No se puede dividir por cero", null);
    } else {
        callback(null, a / b);
    }
}

operacionSegura(10, 2, function(error, resultado) {
    if (error) {
        console.log("Error:", error);
    } else {
        console.log("Resultado:", resultado);
    }
});