//Ejercicio 1 

const product = { 
        name: "Keyboard", 
        price: 45, 
        inStock: true   
};
//convierto a texto JSON para poder enviarlo     
const productJSON = JSON.stringify(product);
console.log("Enviando al servidor", productJSON
);


//Ejercicio2


// Texto JSON que recibes del servidor (simulado)
const respuestaDelServidor = '{"estado":"OK","mensaje":"Pedido confirmado","numeroPedido":12345}';

// Convertimos el texto a objeto JavaScript para usarlo
const respuesta = JSON.parse(respuestaDelServidor);
console.log("Estado:", respuesta.estado); // "OK"
console.log("Mensaje:", respuesta.mensaje); // "Pedido confirmado"
console.log("Nº Pedido:", respuesta.numeroPedido); // 12345

const userJSON = '{"name":"Maria","email":"maria@email.com","age":28}';

//convierto el texto a objeto
const respuesta = JSON.parse(userJSON);
console.log("Name: ", respuesta.name);
console.log("Email: ", respuesta.email);
console.log("Age: ", respuesta.age);


//Ejercicio3

const productsJSON = '[{"name":"Mouse","price":25},{"name":"Keyboard","price":80},{"name":"Monitor","price":300}]';

const products = JSON.parse(productsJSON);
const filtrados = products.filter(product => product.price < 100);

const filtradosJSON = JSON.stringify(filtrados);
console.log(filtradosJSON)
