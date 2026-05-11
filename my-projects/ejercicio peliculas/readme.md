# 🎬 Cartelera de Películas

Proyecto personal: página web con una tabla interactiva de películas, enlaces a detalles y diseño centrado.

## 🎯 Objetivo del proyecto

Crear una cartelera de películas usando tablas HTML, con enlaces a páginas individuales de cada película y estilos CSS para una presentación atractiva.

## 📝 Contenido del proyecto

### Estructura HTML
- `<h1>` Título "Peliculas"
- `<table>` Tabla de cartelera con:
  - `<caption>` Título "Cartelera"
  - Celdas con enlaces a: 8 Mile, Avatar, Agente 007, Superman, John Wick, Karate Kid
  - Celda `rowspan="3"` con imagen `popcorn.webp` (palomitas)
- Enlaces a páginas individuales (`8m.html`, `avatar.html`, `agente.html`, `super.html`, `jw.html`, `karate.html`)

### Estilos CSS (styles.css)
- Tabla centrada con `margin: 0 auto`
- Bordes colapsados (`border-collapse: collapse`)
- Celdas rojas, tamaño `200px` de alto
- Imagen de palomitas con `object-fit: cover` para ajuste perfecto
- Enlaces con colores y efectos `:hover`
- Estilos para `:link`, `:visited`, `:hover`

## 🛠️ Tecnologías utilizadas

- ✅ HTML5 (tablas, enlaces, `rowspan`)
- ✅ CSS3 (tablas centradas, `object-fit`, pseudo-clases `:link`, `:visited`, `:hover`)

## 📂 Estructura de archivos

ejercicio películas/
│
├── index.html
├── css/
│ └── styles.css
├── images/
│ ├── 007.webp
│ ├── 8m.webp
│ ├── avatar.webp
│ ├── jwj.jpg
│ ├── karate.webp
│ ├── madagascar.webp
│ ├── popcorn.webp
│ └── super.webp
├── 8m.html
├── agente.html
├── avatar.html
├── jw.html
├── karate.html
└── super.html

## 🎨 Características destacadas

- Tabla centrada con `max-width: 50%`
- Celda combinada con `rowspan="3"` para imagen destacada
- Imagen con `object-fit: cover` para evitar deformaciones
- Enlaces personalizados con efectos `:hover`
- Paleta de colores roja y negra

## 🎯 Películas incluidas

| Película | Enlace |
| --- | --- |
| 8 Mile | `8m.html` |
| Avatar | `avatar.html` |
| Agente 007 | `agente.html` |
| Superman | `super.html` |
| John Wick | `jw.html` |
| Karate Kid | `karate.html` |

## 👤 Autor

**NTR1991** - Estudiante de FP DAW

## 📅 Fecha

Mayo 2026