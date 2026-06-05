let a = 15;
let b = 4;

console.log("suma " + (a+b));
console.log("resta " + (a-b));
console.log("multiplicacion " + (a*b));
console.log("division " + (a/b));
console.log("resto " + (a%b));

let p = 20 ;
let q = "20";

console.log(p == q); //true
console.log(p === q); //false
console.log(p != q); //false
console.log(p !== q); //true
console.log(p > q);  //false
console.log(p < q);  //false
console.log(p >= q); //true
console.log(p <= q); //true


let verdadero = true;
let falso = false;


console.log(verdadero && verdadero);
//true

console.log(verdadero && falso);
//false

console.log(verdadero || falso);
//true

console.log(falso || falso);
//false

console.log(!verdadero);
//false

console.log(!falso);
//true