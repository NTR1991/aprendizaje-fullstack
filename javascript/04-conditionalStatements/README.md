# Topic 4: Conditional Statements in JavaScript

---

## 📋 Description

Practice with conditional statements: if, if/else, else if, switch, if anidados, and logical operators.

---

## 📁 Folder Structure

````
04-conditional-statements/
├── index.html
├── css/
│ └── style.css
├── js/
│ └── main.js
└── README.md
````
## 📊 Exercises & Results

**Ejercicios if (5 ejercicios)**

**Ejercicio 1:** Si temperatura > 25, muestra "Hace calor"
````javascript
let temperatura = 30;
if (temperatura > 25) {
    console.log("Hace calor");
}
Output: "Hace calor"

Ejercicio 2: Si totalCompra >= 100, muestra "Tienes descuento"

javascript
let totalCompra = 120;
if (totalCompra >= 100) {
    console.log("Tienes descuento");
}
Output: "Tienes descuento"

Ejercicio 3: Si número es par (módulo 2 === 0), muestra "Es par"

javascript
let numero = 8;
if (numero % 2 === 0) {
    console.log("Es par");
}
Output: "Es par"

Ejercicio 4: Si usuario está logueado, muestra "Bienvenido"

javascript
let logueado = true;
if (logueado === true) {
    console.log("Bienvenido");
}
Output: "Bienvenido"

Ejercicio 5: Si stock es 0, muestra "Producto agotado"

javascript
let stock = 0;
if (stock === 0) {
    console.log("Producto agotado");
}
Output: "Producto agotado"

Ejercicios if/else (5 ejercicios)

Ejercicio 1: Si edad >= 18 → "Eres mayor de edad", sino → "Eres menor de edad"

javascript
let edad = 16;
if (edad >= 18) {
    console.log("Eres mayor de edad");
} else {
    console.log("Eres menor de edad");
}
Output: "Eres menor de edad"

Ejercicio 2: Si nota >= 60 → "Aprobado", sino → "Suspenso"

javascript
let nota = 65;
if (nota >= 60) {
    console.log("Aprobado");
} else {
    console.log("Suspenso");
}
Output: "Aprobado"

Ejercicio 3: Si número >= 0 → "Positivo a cero", sino → "Negativo"

javascript
let numerox = -5;
if (numerox >= 0) {
    console.log("Positivo a cero");
} else {
    console.log("Negativo");
}
Output: "Negativo"

Ejercicio 4: Si dinero >= 12 → "Puedes entrar al cine", sino → "No tienes suficiente dinero"

javascript
let dinero = 15;
if (dinero >= 12) {
    console.log("Puedes entrar al cine");
} else {
    console.log("No tienes suficiente dinero");
}
Output: "Puedes entrar al cine"

Ejercicio 5: Si temp > 20 → "Hace calor", sino → "Hace frío o templado"

javascript
let temp = 15;
if (temp > 20) {
    console.log("Hace calor");
} else {
    console.log("Hace frio o templado");
}
Output: "Hace frio o templado"

Ejercicios else if (5 ejercicios)

Ejercicio 1 (Rango de edad): edad < 13 → "Niño", < 20 → "Adolescente", < 65 → "Adulto", sino → "Adulto mayor"

javascript
let edad = 25;
if (edad < 13) {
    console.log("Niño");
} else if (edad < 20) {
    console.log("Adolescente");
} else if (edad < 65) {
    console.log("Adulto");
} else {
    console.log("Adulto mayor");
}
Output: "Adulto"

Ejercicio 2 (Calificación con letras): puntaje >= 90 → "A", >= 80 → "B", >= 70 → "C", >= 60 → "D", sino → "F"

javascript
let puntaje = 85;
if (puntaje >= 90) {
    console.log("A");
} else if (puntaje >= 80) {
    console.log("B");
} else if (puntaje >= 70) {
    console.log("C");
} else if (puntaje >= 60) {
    console.log("D");
} else {
    console.log("F");
}
Output: "B"

Ejercicio 3 (IMC): imc < 18.5 → "Bajo peso", < 25 → "Normal", < 30 → "Sobrepeso", sino → "Obesidad"

javascript
let imc = 26;
if (imc < 18.5) {
    console.log("Bajo peso");
} else if (imc < 25) {
    console.log("Normal");
} else if (imc < 30) {
    console.log("Sobrepeso");
} else {
    console.log("Obesidad");
}
Output: "Sobrepeso"

Ejercicio 4 (Rango de precio): precio < 50 → "Económico", < 100 → "Normal", < 200 → "Caro", sino → "Muy caro"

javascript
let precio = 75;
if (precio < 50) {
    console.log("Economico");
} else if (precio < 100) {
    console.log("Normal");
} else if (precio < 200) {
    console.log("Caro");
} else {
    console.log("Muy caro");
}
Output: "Normal"

Ejercicio 5 (Número negativo, cero o positivo): num < 0 → "Negativo", === 0 → "Cero", > 0 → "Positivo"

javascript
let num = 0;
if (num < 0) {
    console.log("Negativo");
} else if (num === 0) {
    console.log("Cero");
} else if (num > 0) {
    console.log("Positivo");
} else {
    console.log("Error");
}
Output: "Cero"

Ejercicios switch (5 ejercicios)

Ejercicio 1 (Días de la semana): lunes → "Inicio de semana", martes/miércoles → "Mitad de semana", viernes → "Fin de semana laboral", sábado/domingo → "Fin de semana"

javascript
let dia = "miercoles";
switch (dia) {
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
    default:
        console.log("Dia no valido");
}
Output: "Mitad de semana"

Ejercicio 2 (Meses del año): trimestres según el mes

javascript
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
    default:
        console.log("Mes no valido");
}
Output: "Trimestre 2"

Ejercicio 3 (Nivel de acceso): admin → "Acceso total", editor → "Puede editar", visitante → "Solo lectura"

javascript
let rol = "admin";
switch (rol) {
    case "admin":
        console.log("Acceso total");
        break;
    case "editor":
        console.log("Puede editar");
        break;
    case "visitante":
        console.log("Solo lectura");
        break;
    default:
        console.log("Acceso denegado");
}
Output: "Acceso total"

Ejercicio 4 (Talla de camisa): XS → "Extra pequeño", S → "Pequeño", M → "Mediano", L → "Grande", XL → "Extra grande"

javascript
let talla = "M";
switch (talla) {
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
    default:
        console.log("Talla no valida");
}
Output: "Mediano"

Ejercicio 5 (Calculadora básica): suma, resta, multiplicación, división

javascript
let operacion = "suma";
let a = 10;
let b = 5;
switch (operacion) {
    case "suma":
        console.log(a + b);
        break;
    case "resta":
        console.log(a - b);
        break;
    case "multiplicacion":
        console.log(a * b);
        break;
    case "division":
        console.log(a / b);
        break;
    default:
        console.log("Operacion no valida");
}
Output: 15

Ejercicios adicionales (5 ejercicios)

Ejercicio 6 (if + operadores lógicos): conducir según edad y carnet

javascript
let edadn = 25;
let tieneCarnet = true;
if (edadn >= 18 && tieneCarnet === true) {
    console.log("Puede conducir");
} else if (edadn >= 18 && tieneCarnet === false) {
    console.log("Necesita carnet");
} else if (edadn < 18) {
    console.log("Muy joven para conducir");
}
Output: "Puede conducir"

Ejercicio 7 (if anidado): acceso según registro, email y pago

javascript
let usuarioRegistrado = true;
let emailVerificado = false;
let tienePago = true;
if (usuarioRegistrado === true) {
    if (emailVerificado === true && tienePago === true) {
        console.log("Acceso completo");
    } else if (emailVerificado === true && tienePago === false) {
        console.log("Acceso limitado (falta pago)");
    } else if (emailVerificado === false) {
        console.log("Verifica tu email");
    }
} else {
    console.log("Registrate primero");
}
Output: "Verifica tu email"

Ejercicio 8 (rangos complejos): puntaje con validación de límites


let puntajex = 105;
if (puntajex > 100) {
    console.log("Puntaje invalido (maximo 100)");
} else if (puntajex >= 90) {
    console.log("Excelente");
} else if (puntajex >= 70) {
    console.log("Bueno");
} else if (puntajex >= 50) {
    console.log("Suficiente");
} else if (puntajex >= 0) {
    console.log("Insuficiente");
} else {
    console.log("Puntaje invalido (negativo)");
}
Output: "Puntaje invalido (maximo 100)"


Ejercicio 9 (switch códigos HTTP): códigos de estado HTTP

let codigo = 403;
switch (codigo) {
    case 200:
        console.log("OK");
        break;
    case 201:
        console.log("Creado");
        break;
    case 400:
        console.log("Solicitud incorrecta");
        break;
    case 401:
        console.log("No autorizado");
        break;
    case 403:
        console.log("Prohibido");
        break;
    case 404:
        console.log("No encontrado");
        break;
    case 500:
        console.log("Error interno del servidor");
        break;
    default:
        console.log("Codigo desconocido");
}
Output: "Prohibido"

Ejercicio 10 (múltiples condiciones lógicas): planes según temperatura, lluvia y festivo


let temp = 28;
let lloviendo = true;
let diaFestivo = false;
if (temp > 25 && lloviendo === false) {
    console.log("Piscina");
} else if (temp > 25 && lloviendo === true) {
    console.log("Cine");
} else if (temp <= 25 && lloviendo === false && diaFestivo === true) {
    console.log("Parque");
} else if (temp <= 25 && !lloviendo && diaFestivo === false) {
    console.log("Trabajo/estudio");
} else if (temp <= 25 && lloviendo === true) {
    console.log("Casa");
}
Output: "Cine"



