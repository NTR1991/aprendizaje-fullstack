//Ejercicio 1 (función sin parámetros)
function mostrarMensaje(){
    console.log("Bienvenido al tema 5");
}
mostrarMensaje();



//Ejercicio 2 (función con un parámetro)
function saludar(nombre){
    return "Hola" + nombre;
}

let resultado = saludar("Pepe");
console.log(resultado);


//Ejercicio 3 (función con return)
function doble(numero){
    return numero * 2
}

let result= doble(25);
console.log(result);



//Ejercicio 4 (función con dos parámetros y return)

function multiplicar(a,b){
    return  a * b;
}

let total = multiplicar(6,7);
console.log(total);


//Ejercicio 5 (función que usa condicional)
function esMayor(edad){
    if(edad >= 18){
        return "Mayor de edad";
    } else {
        return"Menor de edad";
    }
}

let mensaje = esMayor(35);
console.log(mensaje);


//Ejercicio 6 (función con múltiples condicionales)
function calificarNota(nota){
    if(nota >= 90){
        return "excelente";
    } else if(nota >= 70){
        return "Notable";
    } else if(nota >= 50){
        return "Aprobado";
    } else if(nota < 50){
        return "Suspenso";
    }
} 

let totalNota = calificarNota(95);
console.log(totalNota);


//Ejercicio 7 (función con operador módulo)
function esPar(numero){
    if(numero %2 ===0){
        return true ;
    } else {
        return false;
    }
}

let num = esPar(10);
console.log(num);

// Ejercicio 8 (función que combina condiciones lógicas)
function puedeConducir(edad, tieneCarnet){
    if (edad >= 18 && tieneCarnet === true){
        return "Puede conducir"
    } else {
        return "No puede conducir";
    }
}

let respuesta = puedeConducir(25, false);  
        console.log(respuesta);



//Ejercicio 9 (función con múltiples parámetros y operaciones)
function calcular(operacion, a, b){
    if(operacion === "suma"){
        return a + b; 
    } else if(operacion === "resta"){
        return a - b;
    } else if(operacion === "multiplicacion"){
        return a * b;
    } else if(operacion === "division"){
        return a / b;
    } else {
        return "Operacion no valida"
    }
}

let final = calcular("division", 15, 3);
console.log(final);


//Ejercicio 10 (función con return y transformación de texto)
function formatearNombre(nombre, apellido){
    //Transformar NOmbre
        let primeraLetraNombre = nombre.charAt(0).toUpperCase();
        let restoNombre = nombre.slice(1).toLowerCase();
        let nombreFormateado = primeraLetraNombre + restoNombre;

     //Transformar Apellido
        let primeraLetraApellido = apellido.charAt(0).toUpperCase();
        let restoApellido = apellido.slice(1).toLowerCase();
        let apellidoFormateado = primeraLetraApellido + restoApellido;    

        return nombreFormateado + " " + apellidoFormateado;
}

let verNombre = formatearNombre("ElvIRA", "REyES");
console.log(verNombre);