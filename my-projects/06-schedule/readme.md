# 📅 Horario Escolar - 4º ESO

Página web con un horario de clases semanal para 4º de la ESO, diseñado con una tabla HTML estilizada con colores por asignatura.

## 🎯 Objetivo del proyecto

Crear un horario escolar visualmente atractivo y fácil de leer, utilizando una tabla HTML con colores diferenciados por materia y diseño centrado con sombra.

## 📝 Contenido del proyecto

### Estructura HTML
- `<table class="horario">`: Tabla principal del horario
- `<caption>`: Título "Horario escolar - 4º ESO"
- `<thead>`: Cabecera con días de la semana
- `<tbody>`: Cuerpo de la tabla con:
  - Horas en la primera columna (`<th scope="row">`)
  - Asignaturas por día y hora
- Clases CSS por materia para colorear celdas

### Estilos CSS (styles.css)
- **Tabla** (`.horario`):
  - Centrada con `margin-left: auto; margin-right: auto`
  - Ancho máximo `50%`, responsiva
  - Sombra (`box-shadow: 10px 10px 15px rgba(0,0,0,0.603)`)
- **Celdas** (`th, td`):
  - Bordes negros (`border: 1px solid black`)
  - Padding interno de `6px`
- **Colores por asignatura** (más de 10 clases diferentes):
  | Clase | Color | Asignatura |
  | --- | --- | --- |
  | `.tecnologia` | 🔵 Azul agua | Tecnología |
  | `.lengua` | 🩷 Rosa | Lengua |
  | `.educacion-fisica` | ❤️ Rojo | Educación Física |
  | `.musica-economia` | 🩷 Rosa claro | Música / Física y Química / Economía |
  | `.geografia` | 💙 Azul | Geografía e Historia |
  | `.biologia-latin` | 💛 Amarillo | Biología / Ciencias Aplicadas / Latín |
  | `.recreo` | 🧡 Melón | Recreo |
  | `.filosofia` | 🟠 Naranja | Filosofía |
  | `.ingles` | 💜 Morado | Inglés |
  | `.tutoria` | 💚 Verde azulado | Tutoría |
  | `.valores` | 💚 Verde | Valores |
  | `.matematicas` | 💚 Verde claro | Matemáticas |
- **Caption**: Fuente `serif`, tamaño `2rem` y padding `8%`

## 🛠️ Tecnologías utilizadas

| Tecnología | Uso |
| --- | --- |
| **HTML5** | Tablas semánticas (`<table>`, `<thead>`, `<tbody>`, `<th>`, `<td>`, `<caption>`) |
| **CSS3** | Centrado con `margin: auto`, `box-shadow`, colores personalizados, diseño responsivo |

## 📂 Estructura de archivos

schedule/
│
├── index.html
└── css/
└── styles.css

## 🎨 Características destacadas

| Característica | Descripción |
| --- | --- |
| **Diseño centrado** | Tabla centrada horizontalmente con `margin: auto` |
| **Colores por materia** | Cada asignatura tiene un color distinto para fácil identificación |
| **Sombra exterior** | `box-shadow` en la tabla para efecto de profundidad |
| **Horario completo** | 7 horas diarias, de 9:00 a 14:25 |
| **Recreo incluido** | Fila especial de 11:30 a 11:55 |

## 📅 Estructura del horario

| Horario | Lunes | Martes | Miércoles | Jueves | Viernes |
| --- | --- | --- | --- | --- | --- |
| 9:00 - 9:50 | Educación Física | Tecnología | Lengua | Música/Física/Economía | Lengua |
| 9:50 - 10:40 | Tecnología | Educación Física | Geografía | Biología/Ciencias/Latín | Inglés |
| 10:40 - 11:30 | Matemáticas | Matemáticas | Tutoría | Matemáticas | Matemáticas |
| 11:30 - 11:55 | RECREO | RECREO | RECREO | RECREO | RECREO |
| 11:55 - 12:45 | Lengua | Música/Física/Economía | Tecnología | Valores | Música/Física/Economía |
| 12:45 - 13:35 | Inglés | Geografía | Inglés | Inglés | Biología/Ciencias/Latín |
| 13:35 - 14:25 | Geografía | Filosofía | Biología/Ciencias/Latín | Lengua | Filosofía |

## 👤 Autor

**NTR1991** - Estudiante de FP DAW

## 📅 Fecha

Mayo 2026