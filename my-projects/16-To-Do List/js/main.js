let opcion;

let tareas = [];

do {
    opcion = Number(prompt("--- TO-DO LIST ---\n1. Añadir tarea\n2. Ver todas las tareas\n3. Marcar tarea como completada \n4. Eliminar tarea \n5. Contar tareas pendientes\n6 Salir"));
    
    switch (opcion) {
        case 1:            
            let texto = prompt("Escribe la tarea");
            // Elimina espacios al inicio y final con .trim()
            // Evita guardar tareas vacías o con solo espacios
            if (texto && texto.trim() !=="") {
                 tareas.push({ texto: texto, completada: false});
                 // Muestra check Unicode ✓ como confirmación
                 console.log("[\u2713]  Tarea añadida");
            } else {
                console.log("[x] No escribiste ninguna tarea");
            }
            break;


        case 2:
            if (tareas.length === 0) {
                console.log("No hay tareas. Añade alguna con la opción 1");
            } else {
                for (let i = 0; i < tareas.length; i++) {
                    let estado = tareas[i].completada ? "[\u2713]" : "[ ]";
                    console.log((i + 1) + ". " + estado + " " + tareas[i].texto);
                }
            }
            break;



        case 3:
            if (tareas.length ===0) {
                console.log("No hay tareas para completar");
            } else {
                //mostrar lineas de tarea
                for (let i = 0; i < tareas.length; i++) {
                    let estado = tareas[i].completada ? "[\u2713]" : "[ ]" ;
                    console.log((i + 1) + ". " + estado + " " + tareas[i].texto);
                }

                let numero = Number(prompt("Número de tarea a completar:"));
                let indice = numero -1;

                if (numero >= 1 && numero <= tareas.length) {
                    tareas[indice].completada = true;
                    console.log("[\u2713] Tarea marcada como completada");
                } else {
                    console.log("[\u2717] Número no valido");
                }
            }
            break;


        case 4:
            if (tareas.length === 0) {
                console.log("No hay tareas para eliminar");
            } else {
                //paso 1: mostrar lista de tareas (para que usuario vea las tareas)
                for ( let i = 0; i < tareas.length; i++){
                    let estado = tareas[i].completada ? "[\u2713]" : "[ ]";
                    console.log((i + 1) + ". " + estado + " " + tareas[i].texto);
                }

                //pedir el numero al usuario
                let numero = Number(prompt("Número de tarea a eliminar"));
                let indice = numero - 1;

                //Validar que el numero sea correcto
                if (numero >= 1 && numero <= tareas.length) {
                        tareas.splice(indice, 1);
                        console.log("Tarea Eliminada");
                } else {
                    console.log("[\u2717] Número no valido")
                    
                }

                
            }
            break;



        case 5:
            if (tareas.length === 0) {
                console.log("No hay tareas");
            } else {
                let contador =  0;
                for (let i = 0; i < tareas.length; i++) {
                    if (tareas[i].completada === false) {
                        contador++;
                    }
                }
                console.log("Tienes " + contador + " tareas pendientes");
            }
            
            break;

        case 6:
            console.log("¡Hasta luego!");
            break;

        default:
            console.log("Opción no válida");
    }
} while (opcion !== 6);



