    //Ejercicio 1 

    let colores = ["rojo", "verde", "azul"]

    console.log(colores[1]);



    //Ejercicio 2

    let notas = [8, 7, 9, 6, 10];

    console.log(notas.length);


    //Ejercicio 3

    let letras = [];
    letras.push("a", "b", "c");

    console.log(letras)


    //Ejercicio 4

    let numeros = [100, 200, 300, 400];
    numeros.pop();
    console.log(numeros);



    //Ejercicio 5

    let frutas = ["manzana", "pera", "uva", "naranja"];
    console.log(frutas.indexOf("uva"));


    //Ejercicio 6

    let dias = ["miercoles", "jueves", "viernes"];
    dias.unshift("lunes","martes");

    console.log(dias);


    //Ejercicio 7

    let verduras = ["lechuga", "tomate", "cebolla", "pimiento"];
    verduras.shift();
    //shift elimina automaticamente y no necesita parametros
    console.log(verduras);


    //Ejercicio 8 .includes())

    let mascotas = ["perro", "gato", "pez"];
    console.log(mascotas.includes("gato"));


    // Ejercicio 9 .join()

    let palabras = ["JavaScript", "es", "divertido"];
    console.log(palabras.join(" "));




    //Ejercicio 10 intermedio – .map()

    let temperaturasC = [0, 10, 20, 30];


    let temperaturasF = temperaturasC.map(function(temp) {
            return (temp * 9/5) + 32;
    });
    

    console.log(temperaturasF);



    //Ejercicio 11 intermedio – .filter()

    let edades = [12, 25, 17, 30, 15, 22];

    let mayores = edades.filter(function(edad) {
            return edad >= 18;

    });
        
    console.log(mayores);




    //Ejercicio 11 con arrow

    let edadesx = [12, 25, 17, 30, 15, 22];

    let mayoresy = edadesx.filter(edad => edad >= 18);

    console.log(mayoresy); 



    //Ejercicio 12 intermedio – .reduce()

    let numerosb = [5, 10, 15, 20]
    let total = numerosb.reduce((acumulador, num) => acumulador + num, 0);

    console.log(total);




    //Ejercicio 13 intermedio – .slice()

    let letrasX = ["a", "b", "c", "d", "e", "f"];
    let copia = letrasX.slice(2,5);

    console.log(copia);



    //Ejercicio 14 (intermedio – .splice())


    let animales = ["perro", "gato", "ratón", "loro"];
    animales.splice(2,1, "conejo");

    console.log(animales);




    //Ejercicio 15 intermedio – .concat()

    let frutas1 = ["manzana", "pera"];
    let frutas2 = ["uva", "naranja"];

    let frutasX = frutas1.concat(frutas2);

    console.log(frutasX);
 



    //Ejercicio 16 difícil – encadenar filter + map

    let  productos = [10, 25, 5, 40, 15, 30];

    let resultado = productos
          .filter( producto => producto > 20)
          .map( producto => producto * 0.9);


    console.log(resultado);


    // Ejercicio 17 difícil – .reduce() para contar palabras


    let palabrasF = ["hola", "mundo", "hola", "javascript", "mundo", "hola"];

    let contador = palabrasF.reduce((acumulador, palabra) => {
       if (acumulador[palabra] ) {
           acumulador [palabra]++;

       }else {
        acumulador[palabra] = 1;
       }
       
       return acumulador;


    },{});
    console.log(contador);


    //extra 1 .reduce

    let nums = [8, 12, 5, 20];
    let totalN = nums.reduce((acumulador, num) => {
                return acumulador + num;
    }, 0);

    console.log(totalN);
        




    //Extra 2 – Multiplicar todos

    let valores = [3, 4, 5];

    let result = valores.reduce((acumulador, valor) => {
                 return acumulador * valor;
    },1);

    console.log(result);


    //Extra 3 – Encontrar el número más grande

    let numerosX = [10, 45, 23, 78, 12];

    let mayor = numerosX.reduce((acumulador, num) => {
        if (num > acumulador) {
                return num;
        } else {
                return acumulador;
        }

    })

    console.log(mayor);




    //extra 4

    let palabrasX = ["Aprendiendo", "JavaScript", "con", "reduce"];

let frase = palabrasX.reduce((acumulador, palabra, indice) => {
    if (indice === 0) {
        return palabra;  // la primera palabra se pone sin espacio
    } else {
        return acumulador + " " + palabra;  // las siguientes con espacio
    }
}, "");

console.log(frase);


//extra 5 

let numerosY = [2, 5, 8, 11, 14, 17, 20];

let conteo = numerosY.reduce((acumulador, num) => {
        if (num % 2 === 0) {
                return num + 2;
        } else {
                return num + 1;
        }

},1);

console.log(conteo);