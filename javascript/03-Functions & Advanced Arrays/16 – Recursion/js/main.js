//Ejercicio1 

function factorial(n) {
    if (n === 0) {
        return 1 ;
    }
    return n* factorial(n-1);
}

console.log(factorial(5));



//Ejercicio2


function sumaArray(array) {
    if (array.length === 0) {
        return 0;
    }
    return array[0] + sumaArray(array.slice(1));
}

console.log(sumaArray([1, 2, 3, 4, 5,]));



//Ejercicio3


function fibonacci(n) {
    if (n === 0) {
        return 0;
    }
    if (n === 1) {
        return 1;
    }
    return fibonacci(n - 1) + fibonacci(n -2);

}

console.log(fibonacci(6));