# 🖼️ Image Carousel

## 📋 Description

An interactive image carousel (slider) that allows users to navigate through a gallery of images using previous (◀) and next (▶) buttons.

---

## 🎯 Project Objective

Build a functional image carousel that demonstrates key JavaScript concepts: DOM manipulation, event handling, and array management, all styled with CSS positioning.

---

## 🛠️ Technologies Used

- **HTML5** – Semantic structure
- **CSS3** – Positioning (absolute, relative), Flexbox, transitions
- **JavaScript** – DOM manipulation, event handlers, array management

---

## 📁 Folder Structure

```
12-js-carousel/
├── index.html
├── css/
│   └── styles.css
├── javascript/
│   └── carrusel.js
├── images/
│   ├── avion.webp
│   ├── bici.webp
│   ├── coche.webp
│   └── tren.webp
└── README.md
```

---

## 🎨 Features

| Feature | Description |
| :--- | :--- |
| **Image navigation** | Previous (◀) and Next (▶) buttons |
| **Responsive design** | Fixed size (600px × 400px) |
| **Image styling** | Rounded corners, shadow effect |
| **Button positioning** | Absolute positioning over the image |
| **Hover effects** | Buttons change opacity on hover |
| **Image cycling** | Loops back to start/end automatically |

---

## 🧮 How It Works

### JavaScript Logic

1. **Image array**: All image paths are stored in a JavaScript array.
2. **Position tracker**: A `position` variable keeps track of the current image index.
3. **Forward button**: Increases `position` by 1. If it reaches the end of the array, it loops back to `0`.
4. **Backward button**: Decreases `position` by 1. If it goes below `0`, it loops to the last image.
5. **Update display**: The `<img>` element's `src` attribute is updated to show the current image.

### CSS Positioning

- The carousel container uses `position: relative`.
- The navigation buttons use `position: absolute` to overlay them on top of the image.
- `transform: translateY(-50%)` centers the buttons vertically.

---

## 📊 Key JavaScript Functions

| Function | Description |
| :--- | :--- |
| `forward()` | Moves to the next image; loops to the first if at the end |
| `backward()` | Moves to the previous image; loops to the last if at the start |

---

## 💡 Example Usage

```javascript
let images = ["avion.webp", "bici.webp", "coche.webp", "tren.webp"];
let position = 0;

function forward() {
    position = (position + 1) % images.length;
    document.getElementById("imagen").src = images[position];
}

function backward() {
    position = (position - 1 + images.length) % images.length;
    document.getElementById("imagen").src = images[position];
}
```

---

## 📚 Learning Objectives

- ✅ Managing arrays in JavaScript
- ✅ DOM manipulation (`getElementById`, changing `src`)
- ✅ CSS positioning (absolute, relative, `transform`)
- ✅ Event handling (`onclick`)
- ✅ Conditional logic (boundary checking with modulo operator)

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

May 2026

---

