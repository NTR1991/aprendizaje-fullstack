# 🍽️ Lomo Saltado Recipe Page

Página web de receta casera del tradicional plato peruano **Lomo Saltado**.

## 🎯 Objetivo del proyecto

Crear una página web de receta de cocina con diseño limpio y centrado, mostrando una imagen del plato, lista de ingredientes e instrucciones de preparación.

## 📝 Contenido del proyecto

### Estructura HTML
- `<header>`: Título principal "HOME-COOKED RECIPES"
- `<section>`: Imagen del plato (`lomo.jpg`)
- `<article class="recipe-card">`: Tarjeta contenedora de la receta
  - `<section>`: Título "Lomo Saltado"
  - `<section class="section-ingredients">`: Lista de ingredientes
  - `<section class="section-instructions">`: Lista de instrucciones ordenadas

### Estilos CSS (styles.css)
- **Fondo general**: Gris claro (`rgb(214, 214, 214)`)
- **Tarjeta de receta** (`.recipe-card`):
  - Fondo blanco, centrada con `margin: auto`
  - Sombra (`box-shadow: 5px 5px 5px 0 rgba(0,0,0,0.418)`)
  - Bordes redondeados (`border-radius: 10px`)
  - Ancho máximo `400px`, responsivo
- **Imagen** (`.photo`):
  - Centrada con `margin: auto`
  - Tamaño máximo `500px x 300px`
  - Sombra y bordes redondeados
  - Responsiva (`width: 100%; height: auto`)
- **Tipografía**:
  - `h1` con estilo `oblique`
  - `h2` y `.ingredients` con fuente `Franklin Gothic Medium`

## 🛠️ Tecnologías utilizadas

| Tecnología | Uso |
| --- | --- |
| **HTML5** | Estructura semántica (`<header>`, `<section>`, `<article>`, listas `<ul>`, `<ol>`) |
| **CSS3** | Centrado con `margin: auto`, `box-shadow`, `border-radius`, diseño responsivo |

## 📂 Estructura de archivos

recipe-lomo-saltado/
│
├── index.html
├── css/
│ └── styles.css
└── images/
└── lomo.jpg

## 🎨 Características destacadas

| Característica | Descripción |
| --- | --- |
| **Diseño centrado** | Todo el contenido centrado con `margin: auto` |
| **Tarjeta de receta** | Contenedor blanco con sombra y bordes redondeados |
| **Imagen responsiva** | `width: 100%; height: auto` para adaptarse a cualquier pantalla |
| **Listas organizadas** | Ingredientes (`<ul>`) e instrucciones (`<ol>`) |

## 🍲 Contenido de la receta

### Ingredientes
- papa (potato)
- cebolla (onion)
- tomate (tomato)
- carne (meat)
- cilantro (cilantro)
- ajo (garlic)
- salsa de soya (soy sauce)
- sal, pimienta, MSG

### Instrucciones
1. Sellar la carne (sear the meat)
2. Sazonar con sal, pimienta y añadir ajo
3. Añadir y saltear tomate con cebolla
4. Añadir salsa de soya, ajustar sazón y añadir cilantro

## 👤 Autor

**NTR1991** - Estudiante de FP DAW

## 📅 Fecha

Mayo 2026
