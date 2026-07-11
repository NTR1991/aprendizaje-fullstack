//Ejercicio1 

const nums = [1, 2, 3];
const copynum = [...nums, 4]; 
console.log(copynum);  



//Ejercicio2


const user = { name: "Luis", age: 30 };
const address = { city: "Barcelona", country: "Spain" };

const fullUser = { ...user, ...address };
console.log(fullUser);


//Ejercicio3


function sumarTodos(...numeros) {
    return numeros.reduce((total, num) => total + num, 0);
}

console.log(sumarTodos(5, 10, 15, 20));