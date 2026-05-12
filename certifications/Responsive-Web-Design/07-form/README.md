# Hotel Feedback Form

## 📋 Descripción

Formulario de retroalimentación para un hotel. Permite a los huéspedes enviar su opinión sobre la estancia, calificar servicios y seleccionar motivos de su elección.

## 🛠️ Tecnologías utilizadas

- **HTML5 semántico** (`<header>`, `<main>`, `<fieldset>`, `<legend>`)
- **Formularios HTML** con validación nativa (`required`, `min`, `max`)
- **Método POST** para envío de datos

## 📁 Estructura del proyecto

hotel-feedback-form/
├── index.html # Formulario principal
└── README.md # Documentación

## ✨ Características

### 📝 Información personal
- **Nombre** (requerido)
- **Email** (requerido, validación de email)
- **Edad** (opcional, rango de 3 a 100 años)

### 🏨 Experiencia del huésped
- **Primera vez en el hotel** (botones radio: Sí/No)

### ✅ Motivos de selección del hotel (múltiples opciones)
- Social Media Ads
- Personal Recommendation
- Location
- Reputation (seleccionado por defecto)
- Price

### ⭐ Calificaciones
- **Servicio** (desplegable: Poor, Satisfactory, Good, Very Good, Excellent)
- **Comida** (desplegable: Poor, Satisfactory, Good, Very Good, Excellent)

### 💬 Comentarios adicionales
- Área de texto para comentarios libres

### 🚀 Envío
- Botón de envío (método POST a la API de freeCodeCamp)

## 📚 Aprendizajes aplicados

- ✅ Estructura semántica con HTML5
- ✅ Uso de `<fieldset>` y `<legend>` para agrupar campos
- ✅ Diferentes tipos de `input`: `text`, `email`, `number`, `radio`, `checkbox`
- ✅ Elemento `<select>` con opciones desplegables
- ✅ `<textarea>` para comentarios largos
- ✅ Atributos de validación: `required`, `min`, `max`
- ✅ Atributo `checked` para opción preseleccionada
- ✅ Atributo `selected` para opción por defecto en selects

## 👨‍💻 Autor

**NTR1991** - Estudiante de Desarrollo Fullstack

## 📅 Fecha

Mayo 2026

---

*Formulario creado como parte de ejercicios de freeCodeCamp*
