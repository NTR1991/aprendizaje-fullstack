# 🐱 Mr. Miau Blog

Blog personal responsive sobre las aventuras de Mr. Miau, un gato muy especial.

## 🎯 Objetivo del proyecto

Crear un blog personal completo con diseño moderno, utilizando **HTML5 semántico** y **CSS3 con Flexbox**. El blog incluye secciones de presentación, artículos estilo tarjetas y formulario de contacto.

## 📝 Contenido del proyecto

### Estructura HTML
- `<header>`: Título principal e imagen de perfil con `figure` y `figcaption`
- `<nav>`: Menú de navegación con enlaces ancla (`#about`, `#posts`, `#contact`)
- `<main>`: Contenido principal
  - `<section id="about">`: Presentación personal
  - `<section id="posts">`: Artículos del blog
    - 3 `<article>` con título y contenido
  - `<section id="contact">`: Información de contacto
- `<footer>`: Pie de página

### Estilos CSS (styles.css)
- **Diseño general**: Fondo amarillo claro (`rgb(255, 245, 187)`)
- **Encabezado**: Imagen de perfil con sombra (`box-shadow`) y bordes redondeados
- **Menú**: Flexbox centrado con `justify-content: space-evenly`, borde negro y fondo gris
- **Sección About**: Caja blanca con sombra tipo "desplazada" (`box-shadow: 10px 8px 0 0 rgba(0,0,0,0.267)`)
- **Sección Posts**: 
  - Contenedor Flex con `flex-wrap: wrap`
  - Tarjetas blancas con sombra, bordes redondeados y efecto `flex: 1` para igual altura
- **Sección Contact**: Caja blanca centrada con sombra y bordes redondeados
- **Efectos visuales**: Sombras tipo "desplazadas" para dar profundidad

## 🛠️ Tecnologías utilizadas

| Tecnología | Uso |
| --- | --- |
| **HTML5** | Estructura semántica (`<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`) |
| **CSS3** | Flexbox (`display: flex`, `justify-content`, `flex-wrap`), `box-shadow`, `border-radius`, `margin: 0 auto` |

## 📂 Estructura de archivos

mr-miau-blog/
│
├── index.html
├── css/
│ └── styles.css
└── images/
└── catwebp.webp

## 🎨 Características destacadas

| Característica | Descripción |
| --- | --- |
| **Diseño responsive** | Se adapta a diferentes tamaños de pantalla usando `max-width` y `flex-wrap` |
| **Menú centrado** | Flexbox con `justify-content: space-evenly` y `margin: 0 auto` |
| **Tarjetas de artículos** | Flexbox con `flex: 1` para que todas tengan la misma altura |
| **Sombra tipo "desplazada"** | `box-shadow: 10px 8px 0 0 rgba(0,0,0,0.267)` para efecto moderno |
| **Imagen de perfil** | Centrada con `margin: 0 auto`, sombra y bordes redondeados |
| **Enlaces ancla** | Navegación suave a secciones internas (`#about`, `#posts`, `#contact`) |

## 🎯 Secciones del blog

| Sección | Contenido |
| --- | --- |
| **About** | Presentación personal del autor y su gato Mr. Miau |
| **Posts** | Artículos: "Mr. Miau First Day Home", "Mr. Whiskers' First Bath", "Mr. Whiskers' First Birthday Party" |
| **Contact** | Teléfono (`tel:5555555555`) y email (`mailto:fake@email.com`) |

## 👤 Autor

**NTR1991** - Estudiante de FP DAW

## 📅 Fecha

Mayo 2026