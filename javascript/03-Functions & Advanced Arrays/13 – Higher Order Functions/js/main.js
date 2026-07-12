//Ejercicio1 


function miMap(array, callback) {
    
  const resultado = [];
    for (let i = 0; i < array.length; i++) {
        resultado.push(callback(array[i]));
    }
    return resultado;
}

// Prueba
const numeros = [2, 4, 6];
const dobles = miMap(numeros, function(num) {
    return num * 2;
});
console.log(dobles); 


//Ejrecicio2


function miFilter(array, callback) {
    const resultado = [];
    for (let i = 0; i < array.length; i++) {
        if (callback(array[i])) {
            resultado.push(array[i]);
        }
    }
    return resultado;
}

// Llamada con arrow function
const edades = [15, 22, 18, 30, 12];
const mayores = miFilter(edades, edad => edad >= 18);
console.log(mayores); 



//Ejercicio3

// 1. Función que recibe un multiplicador y devuelve otra función
function crearMultiplicador(multiplicador) {
    // Devuelve una NUEVA función que recibe un número
    return function(numero) {
        // Esta nueva función multiplica el número por el multiplicador
        return numero * multiplicador;
    };
}

// 2. Crear dos funciones específicas usando crearMultiplicador
const duplicar = crearMultiplicador(2);   
const triplicar = crearMultiplicador(3);  

// 3. Usar las funciones creadas
console.log(duplicar(10));   // 10 * 2 = 20
console.log(triplicar(10));  // 10 * 3 = 30
