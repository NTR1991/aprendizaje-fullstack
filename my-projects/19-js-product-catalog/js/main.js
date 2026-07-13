// Esta función devuelve OTRA función. La función interna "recuerda" la variable id.
function crearGeneradorId() {
    let id = 1;   // Esta variable solo existe dentro de crearGeneradorId()
    return function() {   // Devuelve una función que despues
        return id++;      //devuelve el valor de id y luego lo aumenta en 1.
    };
}

// Creamos el generador de IDs. generarId es una función que da números 1, 2, 3...
const generarId = crearGeneradorId();




// 2. ARRAY DE PRODUCTOS

// Aquí se guardarán todos los productos que añadamos.
const productos = [];




// 3. CREAR PRODUCTO

// Esta función recibe datos y devuelve un objeto producto.
function crearProducto(nombre, precio, categoria, stock) {
    return {
        id: generarId(),      // Llama al generador para darle un número único.
        nombre: nombre,       // Guarda el nombre.
        precio: precio,       // Guarda el precio.
        categoria: categoria, // Guarda la categoría.
        stock: stock          // Guarda el stock.
    };
}




// 4. AÑADIR PRODUCTO

// Esta función crea un producto y lo mete en el array.
function anadirProducto(nombre, precio, categoria, stock) {
    // Crear el producto usando la función de arriba.
    const producto = crearProducto(nombre, precio, categoria, stock);
    
    // Meterlo en el array con .push()
    productos.push(producto);
    
    // Mostrar confirmación en consola.
    console.log("Producto añadido");
    console.log(producto);
    
    return producto; // Devuelve el producto por si lo necesitas.
}




// 5. LISTAR PRODUCTOS 

// Esta función muestra todos los productos en consola.
function listarProductos() {
    // Si no hay productos, avisa y sale.
    if (productos.length === 0) {
        console.log("No hay productos en el catálogo.");
        return; // Sale de la función.
    }
    
    console.log("LISTA DE PRODUCTOS:");
    
    // Recorre el array uno por uno.
    productos.forEach(producto => {
        // DESTRUCTURING: saca las propiedades del objeto en variables sueltas.
        const { id, nombre, precio, categoria, stock } = producto;
        
        // Template string: usa comillas invertidas ` ` para meter variables con ${}
        console.log(`${id} | ${nombre} | €${precio} | ${categoria} | Stock: ${stock}`);
    });
}






// 6. HIGHER ORDER FUNCTION PARA DESCUENTOS

// Esta función recibe un porcentaje y devuelve OTRA función que aplica ese descuento.
function crearAplicadorDescuento(porcentaje) {
    return function(precio) {
        return precio * (1 - porcentaje / 100);
    };
}



// 7. APLICAR DESCUENTO A UNA CATEGORÍA

function aplicarDescuento(categoria, porcentaje) {
    // Crear la función que aplica el descuento.
    const aplicar = crearAplicadorDescuento(porcentaje);
    
    // Filtrar productos de esa categoría.
    const productosCategoria = productos.filter(p => p.categoria === categoria);
    
    // Si no hay productos en esa categoría, avisa y sale.
    if (productosCategoria.length === 0) {
        console.log(`No hay productos en la categoría "${categoria}".`);
        return [];
    }
    
    // ARRAY CHAINING: encadena filter y map.
    const productosConDescuento = productosCategoria
        .filter(p => p.stock > 0)   
        .map(p => ({                
            ...p,                           
            precioOriginal: p.precio,       // Guarda el precio original.
            precioDescuento: aplicar(p.precio) // Guarda el precio con descuento.
        }));
    
    console.log(`Descuento del ${porcentaje}% aplicado a productos de "${categoria}":`);
    
    // Mostrar cada producto con su precio original y con descuento.
    productosConDescuento.forEach(p => {
        console.log(`${p.nombre}: €${p.precioOriginal} → €${p.precioDescuento.toFixed(2)}`);
    });
    
    return productosConDescuento;
}




// 8. ORDENAR POR PRECIO

function ordenarPorPrecio(ascendente = true) {
    // SPREAD: crea una copia del array original.
    const copia = [...productos];
    
    // .sort() ordena la copia.
    copia.sort((a, b) => {
        // Si ascendente es true, menor a mayor. Si no, mayor a menor.
        return ascendente ? a.precio - b.precio : b.precio - a.precio;
    });
    
    // Mostrar la lista ordenada.
    console.log(`Productos ordenados por precio (${ascendente ? 'ascendente' : 'descendente'}):`);
    copia.forEach(p => {
        console.log(`${p.nombre} - €${p.precio}`);
    });
    
    return copia; // Devuelve la copia ordenada.
}





// 9. BUSCAR PRODUCTO POR NOMBRE

function buscarProducto(nombre) {
    // .find() devuelve el primer producto que coincida (sin importar mayúsculas).
    const producto = productos.find(p => p.nombre.toLowerCase() === nombre.toLowerCase());
    
    if (producto) {
        console.log("Producto encontrado:");
        const { id, nombre: nom, precio, categoria, stock } = producto;
        console.log(`${id} | ${nom} | €${precio} | ${categoria} | Stock: ${stock}`);
        return producto;
    } else {
        console.log(`No se encontró el producto "${nombre}".`);
        return null;
    }
}