# 🐱 Mr. Miau Blog

Personal responsive blog about the adventures of Mr. Miau, a very special cat.

---

## 🎯 Project Objective

Create a complete personal blog with a modern design, using **semantic HTML5** and **CSS3 with Flexbox**. The blog includes presentation sections, card-style articles, and a contact form.

---

## 📝 Project Content

### HTML Structure
- `<header>`: Main title and profile image with `figure` and `figcaption`
- `<nav>`: Navigation menu with anchor links (`#about`, `#posts`, `#contact`)
- `<main>`: Main content
  - `<section id="about">`: Personal introduction
  - `<section id="posts">`: Blog articles
    - 3 `<article>` with title and content
  - `<section id="contact">`: Contact information
- `<footer>`: Footer

### CSS Styles (styles.css)
- **General design**: Light yellow background (`rgb(255, 245, 187)`)
- **Header**: Profile image with shadow (`box-shadow`) and rounded borders
- **Menu**: Centered Flexbox with `justify-content: space-evenly`, black border, and gray background
- **About Section**: White box with "offset" shadow (`box-shadow: 10px 8px 0 0 rgba(0,0,0,0.267)`)
- **Posts Section**:
  - Flex container with `flex-wrap: wrap`
  - White cards with shadow, rounded borders, and `flex: 1` for equal height
- **Contact Section**: Centered white box with shadow and rounded borders
- **Visual effects**: "Offset" shadows for depth

---

## 🛠️ Technologies Used

| Technology | Usage |
| :--- | :--- |
| **HTML5** | Semantic structure (`<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`) |
| **CSS3** | Flexbox (`display: flex`, `justify-content`, `flex-wrap`), `box-shadow`, `border-radius`, `margin: 0 auto` |

---

## 📂 Folder Structure

```
mr-miau-blog/
│
├── index.html
├── css/
│   └── styles.css
└── images/
    └── catwebp.webp
```

---

## 🎨 Key Features

| Feature | Description |
| :--- | :--- |
| **Responsive design** | Adapts to different screen sizes using `max-width` and `flex-wrap` |
| **Centered menu** | Flexbox with `justify-content: space-evenly` and `margin: 0 auto` |
| **Article cards** | Flexbox with `flex: 1` for equal height cards |
| **"Offset" shadow** | `box-shadow: 10px 8px 0 0 rgba(0,0,0,0.267)` for a modern effect |
| **Profile image** | Centered with `margin: 0 auto`, shadow, and rounded borders |
| **Anchor links** | Smooth navigation to internal sections (`#about`, `#posts`, `#contact`) |

---

## 🎯 Blog Sections

| Section | Content |
| :--- | :--- |
| **About** | Personal introduction of the author and his cat Mr. Miau |
| **Posts** | Articles: "Mr. Miau First Day Home", "Mr. Whiskers' First Bath", "Mr. Whiskers' First Birthday Party" |
| **Contact** | Phone (`tel:5555555555`) and email (`mailto:fake@email.com`) |

---

## 👤 Author

*NTR1991 – Full Stack in training | FP DAW Student*

## 📅 Date

May 2026
