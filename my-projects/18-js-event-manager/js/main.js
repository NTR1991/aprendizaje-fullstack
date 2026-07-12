// 1. Array de eventos
let eventos = [];
let siguienteId = 1;

// 2. Crear evento (Objeto)
function crearEvento(nombre, fecha, lugar, precio, estado) {
    return {
        id: siguienteId++,
        nombre: nombre,
        fecha: new Date(fecha + 'T00:00:00'),
        lugar: lugar,
        precio: precio,
        estado: estado
    };
}

// 3. Añadir evento (Arrays Methods – push)
function anadirEvento(nombre, fecha, lugar, precio, estado) {
    const evento = crearEvento(nombre, fecha, lugar, precio, estado);
    eventos.push(evento);
    console.log('✅ Evento añadido:');
    console.log(evento);
}

// 4. Listar eventos (forEach + Destructuring)
function listarEventos() {
    if (eventos.length === 0) {
        console.log('📭 No hay eventos.');
        return;
    }
    console.log('📋 LISTA DE EVENTOS:');
    eventos.forEach(evento => {
        const { id, nombre, lugar, precio, estado } = evento;
        console.log(`${id} | ${nombre} | ${lugar} | €${precio} | ${estado}`);
    });
}

// 5. Filtrar por estado (Arrays Methods – filter)
function filtrarPorEstado(estado) {
    const filtrados = eventos.filter(evento => evento.estado === estado);
    console.log(`🔍 Eventos con estado "${estado}":`);
    filtrados.forEach(evento => console.log(`  ${evento.id} - ${evento.nombre}`));
    return filtrados;
}

// 6. Ordenar por fecha (Arrays Methods – sort + Spread)
function ordenarPorFecha(ascendente = true) {
    const copia = [...eventos];
    copia.sort((a, b) => {
        const diff = a.fecha.getTime() - b.fecha.getTime();
        return ascendente ? diff : -diff;
    });
    console.log('📅 Eventos ordenados por fecha:');
    copia.forEach(evento => console.log(`  ${evento.nombre} - ${evento.fecha.toLocaleDateString()}`));
    return copia;
}

// 7. Ordenar por precio (Arrays Methods – sort + Spread)
function ordenarPorPrecio(ascendente = true) {
    const copia = [...eventos];
    copia.sort((a, b) => {
        const diff = a.precio - b.precio;
        return ascendente ? diff : -diff;
    });
    console.log('💰 Eventos ordenados por precio:');
    copia.forEach(evento => console.log(`  ${evento.nombre} - €${evento.precio}`));
    return copia;
}

// 8. Calcular días restantes (Dates)
function calcularDiasRestantes(evento) {
    const hoy = new Date();
    const diff = evento.fecha.getTime() - hoy.getTime();
    const dias = Math.ceil(diff / (1000 * 60 * 60 * 24));
    return dias;
}

function mostrarDiasRestantes() {
    console.log('⏳ DÍAS RESTANTES:');
    eventos.forEach(evento => {
        const dias = calcularDiasRestantes(evento);
        let mensaje;
        if (dias > 0) {
            mensaje = `Faltan ${dias} días`;
        } else if (dias === 0) {
            mensaje = '🎉 ¡Hoy!';
        } else {
            mensaje = '📅 Ya pasó';
        }
        console.log(`  ${evento.nombre} → ${mensaje}`);
    });
}

// 9. Eliminar evento (Arrays Methods – filter)
function eliminarEvento(id) {
    const antes = eventos.length;
    eventos = eventos.filter(evento => evento.id !== id);
    if (eventos.length < antes) {
        console.log(`🗑️ Evento con ID ${id} eliminado.`);
    } else {
        console.log(`❌ No se encontró evento con ID ${id}.`);
    }
}

// 10. Resumen (Arrays Methods – filter + length)
function resumen() {
    const total = eventos.length;
    const pendientes = eventos.filter(e => e.estado === 'pendiente').length;
    const enCurso = eventos.filter(e => e.estado === 'en curso').length;
    const finalizados = eventos.filter(e => e.estado === 'finalizado').length;
    console.log('📊 RESUMEN:');
    console.log(`  Total: ${total}`);
    console.log(`  Pendientes: ${pendientes}`);
    console.log(`  En curso: ${enCurso}`);
    console.log(`  Finalizados: ${finalizados}`);
}