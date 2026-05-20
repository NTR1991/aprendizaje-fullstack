# Image Carousel

## 📋 Description

An interactive image carousel (slider) that allows users to navigate through a gallery of images using previous (◀) and next (▶) buttons.

## 🛠️ Technologies Used

- **HTML5** (semantic structure)
- **CSS3** (positioning, absolute, relative, flexbox)
- **JavaScript** (DOM manipulation, event handlers, array management)

## 📁 Project Structure

12-js-carousel/
├── index.html
├── css/
│ └── styles.css
├── javascript/
│ └── carrusel.js
├── images/
│ ├── avion.webp
│ ├── bici.webp
│ ├── coche.webp
│ └── tren.webp
└── README.md

## 🎨 Features

| Feature | Description |
|---------|-------------|
| Image navigation | Previous (◀) and Next (▶) buttons |
| Responsive design | 600px x 400px fixed size |
| Image styling | Rounded corners, shadow effect |
| Button positioning | Absolute positioning over the image |
| Hover effects | Buttons change opacity on hover |
| Image cycling | Loops back to start/end automatically |

## 🧮 How It Works

1. Images are stored in a JavaScript array
2. A `position` variable tracks the current image index
3. **Forward button:** Increases position, loops to 0 at the end
4. **Backward button:** Decreases position, loops to the last image at the beginning
5. The `src` attribute of the `<img>` tag updates to show the current image

## 📊 JavaScript Functions

```javascript
forward()   // Moves to next image (loops to first)
backward()  // Moves to previous image (loops to last)
📚 Learning Objectives
✅ Array management in JavaScript

✅ DOM manipulation (getElementById, changing src)

✅ CSS positioning (absolute, relative, transform)

✅ Event handling (onclick)

✅ Conditional logic (if statements for boundaries)

👨‍💻 Author
NTR1991 - Fullstack Development Student

📅 Date
May 2026

Image carousel created as a JavaScript practice exercise