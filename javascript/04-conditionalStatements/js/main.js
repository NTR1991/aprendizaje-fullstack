
//ejercicios if

//ejercicio 01
let temperatura = 30;

if (temperatura > 25) {
console.log("Hace calor");
}


//ejercicio 02
let totalCompra = 120;

if (totalCompra >= 100) {
console.log("Tienes descuento");
}


//ejercicio 03
let numero = 8 ;

if (numero % 2 === 0) {
console.log("Es par");
}


//ejercicio 04
let logueado = true;

if (logueado === true) {
console.log("Bienvenido");
}



//ejercicio 05
let stock = 0;

if (stock === 0){
console.log("Producto agotado");
}



//ejercicios if-else


//ejercicio 01
let edad = 16;

if(edad >= 18){
    console.log("Eres mayor de edad");
} else{
    console.log("Eres menor de edad");
}



//ejercicio 02
let nota = 65;

if( nota >= 60){
    console.log("Aprobado");
} else{
    console.log("Suspenso");
}



//ejercicio 03

let numerox = -5;

if( numero >= 0){
    console.log("Positivo a cero");
} else {
    console.log("Negativo");
}


//ejercicio 04


let dinero = 15;

if (dinero >= 12) {
    console.log("Puedes entrar al cine");
} else {
    console.log("No tienes suficiente dinero");
}

//ejercicio 05

let temp = 15;

if( temp > 20 ){
    console.log("Hace calor");
} else {
    console.log("Hace mucho frio o templado");
}

//Ejercicio 1 (else if) – Rango de edad

let edad1 = 25;

if(edad < 13){
    console.log("ninho");
} else if(edad < 20){
    console.log("Adolescente");
} else if(edad < 65){
    console.log("Adulto");
}else{
    console.log("Adulto mayor");
}


//Ejercicio 2 (else if) – Calificación con letras

let puntaje = 85;

if(puntaje >= 90){
    console.log("A");
} else if(puntaje >= 80){
    console.log("B");
}else if (puntaje >= 70){
    console.log("C"); 
}else if(puntaje >= 60){
    console.log("D");
} else {
    console.log("F");
}


//Ejercicio 3 (else if) – IMC

let imc = 26;

if( imc < 18.5){
    console.log("Bajo peso");
} else if(imc < 25){
    console.log("Normal");
} else if(imc < 30){
    console.log("Sobrepeso");
} else{
    console.log("Obesidad");
}


//Ejercicio 4 (else if) – Rango de precio

let precio = 75;

if(precio < 50){
    console.log("Economico");
}else if(precio < 100){
    console.log("Normal");
}else if(precio < 200){
    console.log("Caro")
} else{
    console.log("Muy caro");
}



// Ejercicio 5 (else if) – Número negativo, cero o positivo


let num = 0;

if(num < 0){
    console.log("Negativo");
} else if(num === 0) {
    console.log("Cero");
} else if(num > 0){
    console.log("Positivo");
} else{
    console.log("Error");
}



//Ejercicio 1 (switch) – Días de la semana

let dia = "miercoles";

switch(dia){

    case "lunes":
        console.log("Inicio de semana");
        break;

    case "martes":

    case "miercoles":
        console.log("Mitad de semana");
        break;

    case "viernes":
        console.log("Fin de semana laboral");
        break;

    case "sabado":

    case "domingo":
        console.log("Fin de semana");
        break;

    default :
        console.log("Dia no valido")
}



//Ejercicio 2 (switch) – Meses del año

let mes = "abril";

switch (mes) {
    case "enero":
    case "febrero":
    case "marzo":
        console.log("Trimestre 1");
        break;

    case "abril":
    case "mayo":
    case "junio":
        console.log("Trimestre 2");
        break;

    case "julio":
    case "agosto":
    case "septiembre":
        console.log("Trimestre 3");
        break;

    case "octubre":
    case "noviembre":
    case "diciembre":
        console.log("Trimestre 4");
        break;

    default :
    console.log("Mes no valido");
}





//Ejercicio 3 (switch) – Nivel de acceso

let rol = "admin";

switch(rol){
    case "admin":
        console.log("Acceso total");
        break;

    case "editor":
        console.log("Puede editar");
        break;

    case "visitante":
        console.log("Solo lectura");
        break;

    default :
        console.log("Acceso denegado");     
}




//Ejercicio 4 (switch) – Talla de camisa

let talla = "M";

switch(talla){
    case "XS":
        console.log("Extra pequeno");
        break;

    case "S":
        console.log("Pequeno");
        break;

    case "M":
        console.log("Mediano");
        break;

    case "L":
        console.log("Grande");
        break;

    case "XL":
        console.log("Extra grande");
        break;

    default :
    console.log("Talla no valida");
}



//Ejercicio 5 (switch) – Calculadora básica

let operacion = "suma";
let a = 10;
let b = 5;

switch(operacion){
    case "suma":
        console.log(a+b);
        break;

    case "resta":
        console.log(a-b);
        break;

    case "multiplicacion":
        console.log(a*b);
        break;
        
    case "division":
        console.log(a/b);
        break;

    default :
        console.log("Operacion, no valida");
}



//Ejercicio 6 (combinado: if + operadores lógicos)

let edadn = 25;
let tieneCarnet = true;


    if (edadn >= 18 && tieneCarnet === true){
        console.log("Puede conducir");
   }else if (edadn >= 18 && tieneCarnet === false){
        console.log("Necesita carnet");
   } else if(edadn < 18){
        console.log("Muy joven para conducir");
   }



//Ejercicio 7 (if anidado – múltiples niveles)

let usuarioRegistrado = true;
let emailVerificado = false;
let tienePago = true;

if (usuarioRegistrado === true){
    
    if(emailVerificado === true && tienePago === true){
    console.log("Aceso completo");
    }else if(emailVerificado === true && tienePago === false){
    console.log("Acceso limitado (falta pago)");
    }else if(emailVerificado === false){
    console.log("Verifica tu email");
    }
}else{
    console.log("Registrate primero");
}


//extra

let productoDisponible = true;
let cantidad = 3;

if (productoDisponible === true){
        if(cantidad > 0){
            console.log("Producto anadido al carrito");
        }else {
            console.log("Cantadidad no valida");
        }
}else if(productoDisponible === false) {    
    console.log("Producto agotado")
}

//Ejercicio 8 (else if con rangos complejos)

let puntajex = 105;

if(puntajex > 100){
    console.log("Puntaje invalido (mximo 100)");
}else if(puntajex >= 90){
    console.log("Excelente");
}else if(puntajex >= 70){
    console.log("Bueno");
}else if(puntajex >= 50){
    console.log("Suficiente");
}else if(puntajex >= 0){
    console.log("Insuficiente");
} else{
    console.log("puntaje invalido(negativo)")
}


//Ejercicio 9 (switch con valores combinados)

let codigo = 403;

switch(codigo){
    case (200):
        console.log("OK");
        break;

    case (201):
        console.log("Creado");
        break;

    case (400):
        console.log("Solicitud incorrecta");
        break;

    case (201):
        console.log("Creado");
        break;


}


