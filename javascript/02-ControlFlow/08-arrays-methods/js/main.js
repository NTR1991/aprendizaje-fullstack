//Ejercicio 1 

const  user = {
        name : "Maria",
        email : "maria5890@gmail.com",
        age : 28
}

console.log("welcome ," +  user.name);


//Ejercicio 2

const product = {
        name : 'licuadora',
        price : 85.00,
        stock : 150
}
const totalValue = product.price * product.stock
console.log("El resultado es: " + totalValue);




//Ejercicio 3


const cart = {
        items : [],
        addItem: function(name, price) {
                this.items.push({ name: name, price: price});
        },

        removeItem: function(name) {
                const index = this.items.findIndex(item => item.name === name);
                if (index !== -1) {
                        this.items.splice(index, 1);
                }

        }, 

        total: function() {
                return this.items.reduce((sum, item) => sum + item.price, 0);
        }
};

//prueba 
cart.addItem("pelota", 18);
cart.addItem("poleras", 35);
cart.addItem("zapatillas", 115);

cart.remoceItem("camiseta");

console.log("Total: " + cart.total());
