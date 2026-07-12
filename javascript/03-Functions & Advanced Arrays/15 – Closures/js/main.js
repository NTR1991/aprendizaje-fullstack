//Ejercicio1 

function crearSaludo(saludo) {
    return function(nombre) {
        return saludo + " " + nombre;
    };
}

const saludoHola = crearSaludo("Hola");
console.log(saludoHola("Carlos")); 



//Ejercicio2


function crearContador(inicio) {
    let contador = inicio;

    return function() {
        contador++;
        return contador;
    }
}

const contador = crearContador(5);
console.log(contador()); 
console.log(contador()); 




// Ejercicio 3
function crearBanco() {
    let saldo = 0;

    return {
        depositar: function(cantidad) {
            saldo += cantidad;
        },
        consultar: function() {
            return saldo;
        }
    };
}

const miBanco = crearBanco();
miBanco.depositar(100);
miBanco.depositar(50);

console.log(miBanco.consultar());
console.log(miBanco.saldo); 
